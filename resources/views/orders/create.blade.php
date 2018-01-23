@extends('layouts.app')
@section('title')
    Add order
@endsection
@section('body')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    <section class="vbox">
        <section class="scrollable padder">
            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href=""><i class="fa fa-home"></i> Home</a></li>
                {{--<li class="active">Workset</li>--}}
            </ul>
            <div class="m-b-md">
                <h3 class="m-b-none">Add Menu</h3>
            </div>
            <section class="panel panel-default">
                <header class="panel-heading">
                    Add Menu
                    <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
                </header>

                <div class="panel-body">

                    <form method="post"  action="{{url('orders')}}">

                        <div class="form-group row">
                            {{csrf_field()}}
                            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">payment_id</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput"  name="item_id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">custmer_id</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput"  name="customer_id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">quantity</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput"  name="quantity">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">order_status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput"  name="order_status">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-3"></div>
                            <input type="submit" class="btn btn-primary" value="Add">
                        </div>
                    </form>
                </div>

                </div>

            </section>
        </section>
    </section>
@endsection