@extends('layouts.app')
@section('body')
    <section class="vbox">
        <section class="scrollable padder">
            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="{{url('/')}}" ><i class="fa fa-home"></i> Home</a></li>
                {{--<li class="active">Workset</li>--}}
            </ul>
            <div class="m-b-md">
                <h3 class="m-b-none">Edit order </h3>
            </div>
            <section class="panel panel-default">
                <header class="panel-heading">
                    Edit order
                    <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
                </header>
                <div class="panel-body">
                <form method="post" action="{{action('OrdersController@update',$order->order_id)}}">
            <div class="form-group row">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">payment_id</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput"  name="payment_id" value="{{$order->payment_id}}">
                </div>
            </div>

            <div class="form-group row">
                 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">customer_id</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control form-control-lg" id="lgFormGroupInput"  name="customer_id" value="{{$order->customer_id}}">
                     </div>
             </div>
             <div class="form-group row">
                   <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">delivery_date</label>
                       <div class="col-sm-10">
                            <input type="datetime-local" class="form-control form-control-lg" id="lgFormGroupInput"  name="delivery_date" value="{{$order->delivery_date}}">
                        </div>
             </div>
             <div class="form-group row">
                   <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">quantity</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control form-control-lg" id="lgFormGroupInput"  name="quantity" value="{{$order->quantity}}">
                        </div>
             </div>
             <div class="form-group row">
                     <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">order_status</label>
                          <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput"  name="order_status" value="{{$order->order_status}}">
                          </div>
             </div>


            <div class="form-group row">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    </section>
        </section>

@endsection


