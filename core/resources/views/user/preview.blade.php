@extends('layouts.user')

@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">Preview of Buying ICO</h4>
    </div>
    <div class="panel-body table-responsive text-center">
       <ul class="list-group">
       		<li class="list-group-item"><span class="fixer">{{$gnl->cur}} Amount:</span> <strong class="fixer-three">{{$amount}}</strong> <span class="fixer-two">{{$gnl->cursym}}</span></li>
       		<li class="list-group-item"><span class="fixer">{{$gnl->cur}} Price:</span> <strong class="fixer-three">{{$ico->price}}</strong><span class="fixer-two"> USD</span></li>
       		@if ($gate->id == 3 || $gate->id == 6 || $gate->id == 7 || $gate->id == 8) 
               <li class="list-group-item"><span class="fixer">Total Payable: </span><strong class="fixer-three">{{$btc}}</strong><span class="fixer-two"> BTC</span></li>
       		<li class="list-group-item"><span class="fixer">Payment Gateway:</span> <strong class="fixer-three">{{$gate->name}}</strong></li>
           @else
               <li class="list-group-item"><span class="fixer">Total Payable:</span> <strong class="fixer-three">{{$usd}}</strong><span class="fixer-two"> USD</span></li>
       		<li class="list-group-item"><span class="fixer">Payment Gateway:</span> <strong class="fixer-three gateway">{{$gate->name}}</strong></li>
       		@endif
       </ul>
   </div>
   <div class="panel-footer">
   	<a class="btn btn-success btn-lg btn-block pay-btn" href="{{route('buy.confirm')}}">
   		Pay Now
   	</a>
   </div>
 </div>
</div> 
</div>
@endsection
