@extends('layouts.user')

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="main-page-panel">
               <div class="step-half first-step-info">
                    <h2 class="info-header">Welocme  to your account!</h2>
                    <p class="info-text">Here you will be able to deposit funds and purchase Smart Valley Tokens</p>
                    <div class="flex-info">
                        <a class="info-item" href="#">How to buy tokens?</a>
                        <a class="info-item" href="#">Как купить токены?</a>
                    </div>
                </div>
        <form method="POST" action="{{route('buy.ico')}}">
            {{csrf_field()}}
               <div class="step-half second-step-info">
               <p class="step-number">STEP 1</p>
               <h2 class="info-header">Plan your Smart Valley tokens purchase</h2>
               <p class="info-text">You can buy Smart Valley tokens using BTC or ETH.</p>
               <p class="info-text">The calculator is provided for your convenience.
                   You can enter a number of Smart Valley tokens you want to buy and calculate the amount
                   you would need to have in your account wallets.</p>
               <p class="info-text">Please note that the price of the tokens will be calculated at the time
                   of the actual token purchase and not at the time of the funds deposit.</p>
               <div class="flex-buy">
                   <div class="buy-item">
                   	<input type="number" name="amount" id="text" placeholder="10" class="form-control input-buy" id="amount" required>

<!--                    	{{$gnl->cur}} -->
                       <p class="under-input" >Smart Valley</p>

                        <script>
                            $(document).ready(function(){
                                function myFunc(){
                                    var input = $("#text").val();

                                    var token_price = 1;

                                    var amount_convert =  input * token_price / 7562.23*100;

                                    $("#preview").html(input);

                                    $("#amount_convert").val(amount_convert);
                                }       
                                myFunc();

                                $('#text').keyup(function(){
                                    myFunc();
                                });
                            });
                        </script>

                       <div class="buy-foot">
                           <p class="foot-text">0% BONUS:</p>
                           <p class="foot-text">0</p>
                       </div>
                   </div>

                   <div class="buy-line">
                       <span class="glyphicon glyphicon-arrow-right"></span>
                   </div>
                   
                   <div class="buy-item">
                       <input type="text" name="amount-convert" id="amount_convert" placeholder="1.00" value="" class="input-buy">
                       {{--<img src="../../../../assets/images/icons/" alt="">--}}
                       <div class="select-body">
                           <select name="" id="">
                           	   <option value="">Ethereum</option>
                           	   <option value="">Bitcoin</option>
                               <option value="">USD (PayPal)</option>
                           </select>
                       </div>

                       <div class="buy-foot">
                           <p class="foot-text">TOTAL:</p>
                           <p class="foot-text">10</p>
                       </div>
                   </div>
               </div>
           </div>

               <div class="step-half three-step-info">
                   <p class="step-number">STEP 2</p>
                   <h2 class="info-header">Make a deposit</h2>
                   <p class="info-text">Please enter ETH wallet in your profile. After SVT tokens will be released,
                       they will be sent to this wallet. It is not necessary to deposit ETH from this address.
                       You can send ETH directly from stock exchange wallet to the address indicated below.</p>
                   <p class="info-text">You need to follow the KYC to receive tokens after the end of sales.
                       Please enter your First Name and Last Name and press ‘Submit’ button to start the KYC process.
                       Note, that all fields must be filled in English.
                   </p>

                    <div class="deposit-foot">
                       <input class="deposit-input"  type="text" placeholder="Firstname">
                       <input class="deposit-input" type="text" placeholder="Lastname">
                       <input class="deposit-submit" value="Submit" type="submit">
                    </div>
               </div>

               <div class="step-half four-step-info">
                   <p class="step-number">STEP 3</p>
                   <h2 class="info-header">Buy SVT tokens</h2>
                   <div class="flex-amount">
                       <p class="info-title">Amount:</p>
                       <p class="coin-amount" id="preview"></p>
                   </div>

                   <div class="checkbox">
                       <label>
                           <input type="checkbox" value="" required="">
                           I hereby confirm that I have completely read, fully understood and accepted this Token <a
                                   href="">Sale Agreement</a>.
                       </label>
                   </div>

                   <div class="checkbox">
                       <label>
                           <input type="checkbox" value="" required="">
                           I understand that for the purpose of securing of my funds, the payment for SVT tokens will be sent via the independent agent.
                       </label>
                   </div>
               </div>

               <div class="step-half footer-steps">
                   <input class="deposit-submit" value="BUY NOW" type="submit">
               </div>
        </form>
        </div>
    </div>
</div>
@endsection
