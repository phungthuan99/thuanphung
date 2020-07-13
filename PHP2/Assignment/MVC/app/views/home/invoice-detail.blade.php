@extends('layouts.main')
@section('title', 'FPT Poly - Trang chủ')
@section('content')

    </form>
    <table class="table ">
        <thead>
        <tr>
            <th>ID</th>  
            <th>Khách hàng</th> 
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Tên SP</th>  
            <th>Ảnh</th>
            <th>Số lượng</th> 
            <th>Đơn giá</th>
            <th>Tổng giá</th>
            <th>Chi tiết</th>
        </tr>
        </thead>
        <tbody>
        @foreach($invoice_detail as $ind)
        <tr>
            <td>{{$ind->invoice_id}}</td>
            <td>{{$ind->getInvoiceName()}}</td>
            <td>{{$ind->getInvoicePhone()}}</td>
            <td>{{$ind->getInvoiceEmail()}}</td>
            <td>{{$ind->getInvoiceAddress()}}</td>
            <td>{{$ind->getProductName()}}</td>
            <td>{{$ind->quantity}}</td>
            <td>{{$ind->unit_price}}</td>
            <td>{{$ind->getInvoiceUP()}}</td>
            <td>
                <a href="{{getClientUrl('product-detail',['id'=>$ind->id])}}"class="btn btn-sm btn-danger btn-remove">Chi tiết</a>
           </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
    