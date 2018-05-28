@extends('admin.layout.master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-red-sunglo">
					<i class="icon-settings font-red-sunglo"></i>
					<span class="caption-subject bold uppercase">General Settings</span>
				</div>
			</div>
			<div class="portlet-body form">
				<form role="form" method="POST" action="{{route('general.update')}}">
					{{ csrf_field() }}
					<div class="row general-settings-row">
						<div class="col-md-6">
							<input type="text" class="login-field form-control input-lg" value="{{$general->title}}" name="title" placeholder="Website Title">
						</div>
						<div class="col-md-6">
							<input type="text" class="login-field form-control input-lg" value="{{$general->cursym}}" name="cursym" placeholder="BASE CURRENCY SYMBOL">
						</div>
						<div class="col-md-6">
							<input type="text" class="login-field form-control input-lg" value="{{$general->subtitle}}" name="subtitle" placeholder="Website Sub-Title">
						</div>




						<div class="col-md-6">
							<input type="text" class="login-field form-control input-lg" value="{{$general->cur}}" name="cur" placeholder="BASE CURRENCY CODE">
						</div>

						<div class="col-md-6">
							<div class="input-group">
								<input type="text" class="login-field date-field form-control form-control-inline input-medium date-picker" readonly name="startdate" data-date-format="yyyy-mm-dd" placeholder="Start Date" value="{{$general->startdate}}">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							</div>

						</div>
						<div class="col-md-6">
							<input type="color" class="login-field form-control input-lg"  value="#{{$general->color}}" name="color"  placeholder="BASE COLOR CODE">
						</div>

					</div>
					<div class="row general-settings-row">
						<hr/>
						<div class="col-md-4">
							<h4>Registration</h4>
							<input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" type="checkbox" value="1" name="reg" {{ $general->reg == "1" ? 'checked' : '' }}>
						</div>

						<div class="col-md-4">
							<h4>EMAIL VERIFICATION</h4>
							<input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" type="checkbox" value="1" name="emailver" {{ $general->emailver == "0" ? 'checked' : '' }}>
						</div>
						<div class="col-md-4">
							<h4>SMS VERIFICATION</h4>
							<input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" type="checkbox" value="1" name="smsver"  {{ $general->smsver == "0" ? 'checked' : '' }}>
						</div>
					</div>
					<div class="row last-row-settings">
						<hr/>
						<div class="col-md-3">
							<h4>DECIMAL AFTER POINT</h4>
							<input type="number" value="{{$general->decimal}}" name="decimal" class="form-control input-lg" >
						</div>
						<div class="col-md-3">
							<h4>Referal Commision</h4>
							<div class="input-group">
							<input type="text" value="{{$general->refcom}}" name="refcom" class="form-control input-lg" >
								<span class="input-group-addon">%</span>
							</div>
						</div>

						<div class="col-md-3">
							<h4>EMAIL NOTIFICATION</h4>
							<input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" type="checkbox" value="1" name="emailnotf"  {{ $general->emailnotf == "1" ? 'checked' : '' }}>
						</div>
						<div class="col-md-3">
							<h4>SMS NOTIFICATION</h4>
							<input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" type="checkbox" value="1" name="smsnotf" {{ $general->smsnotf == "1" ? 'checked' : '' }}>
						</div>
                </div>
					<div class="row">
						<hr/>
						<div class="col-md-6 col-md-offset-3">
							<button class="btn blue btn-block btn-lg update-btn">Update</button>
						</div>
					</div>
			</form>
		</div>
	</div>
</div>
</div>
@endsection
