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
            <th>Số lượng</th> 
            <th>Đơn giá</th>
            <th>Tổng giá</th>
            <th>Phương thức thanh toán</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$invoices->id}}</td>
            <td>{{$invoices->customer_name}}</td>
            <td>{{$invoices->customer_phone_number}}</td>
            <td>{{$invoices->customer_email}}</td>
            <td>{{$invoices->customer_address}}</td>
            <td>{{$invoices->getProductName()}}</td>
            <td>{{$invoices->quantity}}</td>
            <td>{{$invoices->unit_price}}</td>
            <td>{{$invoices->total_price}}</td>
            <td>{{$invoices->phuongTTT()}}</td>

        </tr>
        </tbody>
    </table>
@endsection
    