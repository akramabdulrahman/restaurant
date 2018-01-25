@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-capitalize">Register > Complete Profile </div>

                    <div class="panel-body">
                        @include('flash::message')

                        <form class="form-horizontal" method="POST" action="{{ route('home.complete.employee') }}">
                            {{ csrf_field() }}

                           <div class="form-group{{ $errors->has('check_in') ? ' has-error' : '' }}">
                                    <label for="check_in" class="col-md-4 control-label text-capitalize">Check In</label>

                                    <div class="col-md-6">
                                    <input id="check_in" type="time" class="form-control" name="check_in"
                                           value="{{ old('check_in') }}" required autofocus>

                                    @if ($errors->has('check_in'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('check_in') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('checkout') ? ' has-error' : '' }}">
                                <label for="checkout" class="col-md-4 control-label text-capitalize">check out</label>

                                <div class="col-md-6">
                                    <input id="checkout" type="time" class="form-control" name="checkout"
                                           value="{{ old('checkout') }}" required >

                                    @if ($errors->has('checkout'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('checkout') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                                <label for="salary" class="col-md-4 control-label text-capitalize">salary</label>

                                <div class="col-md-2">
                                    <input id="salary" type="number" class="form-control" name="salary"
                                           value="{{ old('salary') }}" required >

                                    @if ($errors->has('salary'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-4">

                                    {{Form::select('unit', config('currencies'), old('unit'), ['placeholder' => 'Pick a unit...','class'=>'form-control','required'])}}
                                    @if ($errors->has('unit'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
