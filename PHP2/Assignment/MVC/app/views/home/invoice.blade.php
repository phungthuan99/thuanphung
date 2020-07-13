@extends('layouts.main')
@section('title', 'FPT Poly - Trang chủ')
@section('content')
    <table class="table ">
        <thead>
        <tr>
            <th>ID</th>   
            <th>Số điện thoại</th> 
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Giá</th>
            <th>Phương thức Thanh toán</th>
            <th>Chi tiết</th>
        </tr>
        </thead>
        <tbody>
        @foreach($invoices as $in)
        <tr>
            <td>{{$in->id}}</td>
            <td>{{$in->customer_phone_number}}</td>
            <td>{{$in->customer_email}}</td>
            <td>{{$in->customer_address}}</td>
            <td>{{$in->total_price}}</td>
            <td>{{$in->phuongTTT()}}</td>
            <td>
                <a href="{{getClientUrl('chi-tiet-hoa-don',['id'=>$in->id])}}"class="btn btn-sm btn-danger btn-remove">Chi tiết</a>
           </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
    