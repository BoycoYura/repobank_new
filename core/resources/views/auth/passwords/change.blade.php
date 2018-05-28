@extends('layouts.user')
@section('content')
     <div class="col-md-12">
      <div class="panel panel-primary change-pass-body text-center">
        <div class="panel-heading">
          <h4 class="panel-title">Change Password</h4>
        </div>
        <div class="panel-body">
          <form method="POST" action="{{ route('changep') }}">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-12 change-pass-field">
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <input type="password" class="login-field dark-bottom form-control input-sz" placeholder="Old Password" name="passwordold" id="passwordold" required />
                  @if ($errors->has('passwordold'))
                  <span class="help-block">
                    <strong>{{ $errors->first('passwordold') }}</strong>
                  </span>
                  @endif
            </div>

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <input type="password" class="login-field dark-bottom form-control input-sz" placeholder="New Password" name="password" id="password" required />
                  @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
            </div>
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="password-confirm" type="password" class="login-field dark-bottom form-control input-sz" placeholder="Confirm Password" name="password_confirmation" required>
                     @if ($errors->has('password'))
                     <span class="help-block">
                       <strong>{{ $errors->first('password') }}</strong>
                   </span>
                   @endif
           </div>
              <div class="form-group ">
                <button type="submit" class="btn btn-lg btn-block btn-success change-pass-btn">Change Password</button>
              </div>
          </div>

        </div>
      </form>
        </div>
      </div>
      
     </div>
     {{--<div class="col-md-4">--}}
        {{--<div class="panel">--}}
        {{--<div class="panel-heading">--}}
          {{--<h4 class="panel-title">{{Auth::user()->name}}</h4>--}}
        {{--</div>--}}
        {{--<div class="panel-body">--}}
          {{--<h4>Email: <strong>{{Auth::user()->email}}</strong></h4>--}}
          {{--<h4>Mobile No: <strong>{{Auth::user()->mobile}}</strong></h4>--}}
          {{--<h4>Balance: <strong>{{Auth::user()->balance}} {{$gnl->cur}}</strong></h4>--}}
        {{--</div>--}}
        {{--</div>--}}
     {{--</div>--}}
@endsection
