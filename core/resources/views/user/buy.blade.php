@extends('layouts.user')

@section('content')
<div class="row">
<div class="col-md-12">
  <div class="panel main-page-panel">
    <div class="panel-heading">
      <h4 class="panel-title">Select Payment Gateways</h4>
    </div>
    <div class="panel-body table-responsive">
        @foreach($gates as $gate)
        <div class="col-md-6">
            <div class="panel panel-gatway panel-primary">
                <div class="panel-body text-center">
                    <img src="{{asset('assets/images/gateway')}}/{{$gate->gateimg}}" style="width:100%">
                </div>
                <div class="right-part-gateway">
                    <div class="panel-heading">
                      <h4 class="panel-title">{{$gate->name}}</h4>
                    </div>

                    <div class="panel-footer">
                    	<form method="POST" action="{{route('buy.preview')}}">
                    		{{csrf_field()}}
                    		<input type="hidden" name="gateway" value="{{$gate->id}}">
                    		<input type="hidden" name="amount" value="{{$ses_amount}}">
                        	<button type="submit" class="btn btn-success btn-block">Pay  </button>
                    	</form>
                    </div>
                </div>

            </div>   
        </div>
            <!--Buy Modal -->
<div id="buyModal{{$gate->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Buy ICO via <strong>{{$gate->name}}</strong></h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('buy.preview')}}">
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6">
                    <input type="hidden" name="gateway" value="{{$gate->id}}">
                    <h5 style="color: #182140;    font-size: 20px; ">1 {{$gnl->cur}} = {{$ico->price}} USD</h5>
                    <h5 style="color: #182140;     font-size: 18px;">{{$ico->quant-$ico->sold}} {{$gnl->cur}} Available</h5>

                </div>


                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="amount" class="form-control" id="amount" required>
                            <span class="input-group-addon">
                    {{$gnl->cur}}
                  </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="preview-btn btn btn-primary btn-block">
                            Preview
                        </button>
                    </div>
                </div>
            </div>

            <hr/>


        </form>
      </div>
    </div>

  </div>
</div>
@endforeach
   </div>
 </div>
</div> 
</div>
@endsection
