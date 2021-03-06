<?php

namespace App\Http\Controllers;

use App\Gateway;
use App\General;
use App\Ico;
use App\Lib\GoogleAuthenticator;
use App\Sell;
use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as input;
use Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'ckstatus']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $gates = Gateway::where('status', 1)->get();
        // $ico = Ico::where('status', 1)->first();


        $all = file_get_contents("https://api.coinmarketcap.com/v1/ticker/");
        $res = json_decode($all);

        $btc_coin = $res[0]->price_usd;
        $etch_coin = $res[1]->price_usd;

        $nexts = Ico::where('status', '!=', 2)->where('status', '!=', 3)->get();

        return view('user.home', compact('nexts','gates', 'ico','btc_coin','etch_coin'));
    }

    public function myCoin()
    {
        $coins = Sell::where('user_id', Auth::id())->where('status', 1)->get();
        return view('user.mycoin', compact('coins'));
    }

    public function buyIco(Request $request)
    {
        $gates = Gateway::where('status', 1)->get();
        $ico = Ico::where('status', 1)->first();

        $amounts = $request->amount;

        Session::put('amounts',$amounts);

        $ses_amount = Session::get('amounts');

        $all = file_get_contents("https://api.coinmarketcap.com/v1/ticker/");
        $res = json_decode($all);

        $btc_coin = $res[0]->price_usd;
        $etch_coin = $res[1]->price_usd;

        return view('user.buy', compact('gates', 'ico','ses_amount','btc_coin','etch_coin'));
    }

    public function buySend(Request $request){
        $amounts = $request->amount;

        $gate_id = $request->gateway;

        echo ("Amount:".$amounts."</br>"."Gate_id:".$gate_id);
    }

    public function buyPreview(Request $request)
    {
        $this->validate($request,
            [
                'amount' => 'required',
                'gateway' => 'required',
            ]);
        $ico = Ico::where('status', 1)->first();
        $total = $request->amount + $ico->sold;
        if ($request->amount <= 0 || $total > $ico->quant) {
            return back()->with('alert', 'Invalid Amount');
        } else {
            $gate = Gateway::findOrFail($request->gateway);
            if (is_null($gate)) {
                return back()->with('alert', 'Please Select a Payment Gateway');
            } else {
                $ico = Ico::where('status', 1)->first();

                if ($gate->id == 3 || $gate->id == 6 || $gate->id == 7 || $gate->id == 8) {
                    $all = file_get_contents("https://blockchain.info/ticker");
                    $res = json_decode($all);
                    $btcrate = $res->USD->last;

                    $amount = intval($request->amount);
                    $usd = $ico->price * $amount;
                    $btcamount = $usd / $btcrate;
                    $btc = round($btcamount, 8);

                    $sell['user_id'] = Auth::id();
                    $sell['ico_id'] = $ico->id;
                    $sell['gateway_id'] = $gate->id;
                    $sell['amount'] = $amount;
                    $sell['bcam'] = $btc;
                    $sell['status'] = 0;
                    $sell['trx'] = str_random(16);
                    Sell::create($sell);
                    Session::put('Track', $sell['trx']);

                    return view('user.preview', compact('btc', 'gate', 'ico', 'amount'));
                } else {
                    $amount = intval($request->amount);
                    $usd = $ico->price * $amount;

                    $sell['user_id'] = Auth::id();
                    $sell['ico_id'] = $ico->id;
                    $sell['gateway_id'] = $gate->id;
                    $sell['amount'] = $amount;
                    $sell['status'] = 0;
                    $sell['trx'] = str_random(16);
                    Sell::create($sell);
                    Session::put('Track', $sell['trx']);

                    return view('user.preview', compact('usd', 'gate', 'ico', 'amount'));
                }
            }
        }
    }

    public function referal()
    {
        $refers = User::where('refer', Auth::id())->paginate(10);
        return view('user.refer', compact('refers'));
    }

    //Change password
    public function changepass()
    {
        $user = User::find(Auth::id());
        return view('auth.passwords.change', compact('user'));
    }

    public function chnpass()
    {
        $user = User::find(Auth::id());

        if (Hash::check(Input::get('passwordold'), $user['password']) && Input::get('password') == Input::get('password_confirmation')) {
            $user->password = bcrypt(Input::get('password'));
            $user->save();

            $msg = 'Password Changed Successfully';
            send_email($user->email, $user->username, 'Password Changed', $msg);
            $sms = 'Password Changed Successfully';
            send_sms($user->mobile, $sms);

            return back()->with('success', 'Password Changed');
        } else {
            return back()->with('alert', 'Password Not Changed');
        }
    }


    public function google2fa()
    {
        $gnl = General::first();
        $ga = new GoogleAuthenticator();
        $secret = $ga->createSecret();
        $qrCodeUrl = $ga->getQRCodeGoogleUrl(Auth::user()->username . '@' . $gnl->title, $secret);

        $prevcode = Auth::user()->secretcode;
        $prevqr = $ga->getQRCodeGoogleUrl(Auth::user()->username . '@' . $gnl->title, $prevcode);

        return view('user.goauth.create', compact('secret', 'qrCodeUrl', 'prevcode', 'prevqr'));
    }

    public function create2fa(Request $request)
    {
        $user = User::find(Auth::id());

        $this->validate($request,
            [
                'key' => 'required',
                'code' => 'required',
            ]);

        $ga = new GoogleAuthenticator();

        $secret = $request->key;
        $oneCode = $ga->getCode($secret);
        $userCode = $request->code;
        if ($oneCode == $userCode) {
            $user['secretcode'] = $request->key;
            $user['tauth'] = 1;
            $user['tfver'] = 1;
            $user->save();

            $msg = 'Google Two Factor Authentication Enabled Successfully';
            send_email($user->email, $user->username, 'Google 2FA', $msg);
            $sms = 'Google Two Factor Authentication Enabled Successfully';
            send_sms($user->mobile, $sms);

            return back()->with('success', 'Google Authenticator Enabeled Successfully');
        } else {
            return back()->with('alert', 'Wrong Verification Code');
        }

    }

    public function disable2fa(Request $request)
    {
        $this->validate($request,
            [
                'code' => 'required',
            ]);

        $user = User::find(Auth::id());
        $ga = new GoogleAuthenticator();

        $secret = $user->secretcode;
        $oneCode = $ga->getCode($secret);
        $userCode = $request->code;

        if ($oneCode == $userCode) {
            $user = User::find(Auth::id());
            $user['tauth'] = 0;
            $user['tfver'] = 1;
            $user['secretcode'] = '0';
            $user->save();

            $msg = 'Google Two Factor Authentication Disabled Successfully';
            send_email($user->email, $user->username, 'Google 2FA', $msg);
            $sms = 'Google Two Factor Authentication Disabled Successfully';
            send_sms($user->mobile, $sms);

            return back()->with('success', 'Two Factor Authenticator Disable Successfully');
        } else {
            return back()->with('alert', 'Wrong Verification Code');
        }

    }
}
