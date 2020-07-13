@extends('layouts.main')
@section('title', 'FPT Poly - Trang chủ')
@section('content')

    <table class="table ">
        <thead>
        <tr>
           
            <th>Mã SP</th>   
            <th>Tên SP</th>  
            <th>Danh Mục</th> 
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Chi tiết</th>
            <th>Xóa</th>
            <th>Sửa</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach($products as $pro)
        <tr>
            <td>{{$pro->id}}</td>
            <td>{{$pro->name}}</td>
            <td>{{$pro->getCateName()}}</td>
            
            <td>
                <img src="{{getClientUrl($pro->image)}}" width="100">
            </td>
            <td>{{number_format($pro->price ,0,'.','.')."VND"}}</td>
            <td>
                <a href="{{getClientUrl('chi-tiet-product',['id'=>$pro->id])}}" class = "btn btn-sm btn-danger">Chi tiết</a>
            </td>
            <td>
                <a href="{{getClientUrl('delete-product',['id'=>$pro->id])}}"class="btn btn-sm btn-danger" onclick ="return confirm('Bạn có muốn xóa sản phẩm??')" >Xóa</a>
           </td>
           <td>
                <a href="{{getClientUrl('edit-product',['id'=>$pro->id])}}"class="btn btn-sm btn-warning">Sửa</a>
           </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
@endsection