<!-- index.blade.php -->
@extends('layouts.app')
@section('title')
    All order
@endsection
@section('body')
    <section class="vbox">
        <section class="scrollable padder">
            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                {{--<li class="active">Workset</li>--}}
            </ul>
            <div class="m-b-md">
                <h3 class="m-b-none">Item Data</h3>
            </div>
        <section class="scrollable padder">
            <section class="panel panel-default">
                <header class="panel-heading">
                    All order Item Data
                    <button onClick ="$('#table').tableExport({type:'pdf',escape:'false',pdfFontSize:12,separator: ','});" class="btn btn-default btn-xs pull-right">PDF</i></button>
                    <button onClick ="$('#table').tableExport({type:'csv',escape:'false'});" class="btn btn-default btn-xs pull-right">CSV</button>
                    <button onClick ="$('#table').tableExport({type:'excel',escape:'false'});" class="btn btn-default btn-xs pull-right">Excel</i></button>
                    <button onClick ="$('#table').tableExport({type:'sql',escape:'false',tableName:'orders'});" class="btn btn-default btn-xs pull-right">SQL</i></button>
                    <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
                </header>
                <div class="table-responsive">
                    <table class="table table-striped m-b-none" data-ride="datatables" id="table" style=" margin: 20px">
            <thead>
            <tr>
                <th width="20">ID</th>
                <th class="text-center">payment_id</th>
                 {{--<th class="text-center">Price</th>--}}
                <th class="text-center">customer_id</th>
                <th class="text-center">delivery_date</th>
                <th class="text-center">quantity</th>
                <th width="150px">Buttons</th>
            </tr>
            </thead>
           <tbody>
           @foreach($order as $post)
                <tr>
                    <td class="text-center">{{$post['order_id']}}</td>
                    <td class="text-center">{{$post['payment_id']}}</td>
                    <td class="text-center">{{$post['customer_id']}}</td>
                    <td class="text-center">{{$post['delivery_date']}}</td>
                    <td class="text-center">{{$post['quantity']}}</td>
                    <td>
                        <form action="{{action('OrdersController@destroy', $post['order_id'])}}"  method="post" style="display: inline-block">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <a href="{{action('OrdersController@edit', $post['order_id'])}}" class="btn btn-sm btn-icon btn-warning" style="inline_block"><i class="fa fa-edit"></i></a>
                            <button type="submit"class="btn btn-sm btn-icon btn-danger" onclick="return confirm('Are you sure you want to delete this?')" ><i class="fa fa-trash-o"></i> </button>
                        </form>
                    </td>

                </tr>
            @endforeach
         </tbody>
        </table>
                </div>
            </section>
        </section>
        </section>
    </section>

@endsection