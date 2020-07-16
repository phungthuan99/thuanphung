@extends('layouts.main')
@section('title', 'FPT Poly - Trang chủ')
@section('content')
    <form action=""method="get" class="form-inline mb-2">
        <div class="form-group">
            <label for=""> Tìm kiếm Từ Khóa</label>
            <input type="text" name="keyword" class="form-control">

        </div>

        <button type="submit" class="btn btn-primary btn-sm">Tìm kiếm</button>

    </form>
    <table class="table table-dark">
        <thead>
        <tr>
           
            <th>Mã SP</th>   
            <th>Tên SP</th>  
            <th>Danh Mục</th> 
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Xóa - Sửa</th>
            
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
            <td>{{$pro->price}}</td>
            <td>
                <a href="{{getClientUrl('delete-product',['id'=>$pro->id])}}"class="btn btn-sm btn-danger">Xóa</a>
                <a href="{{getClientUrl('edit-product',['id'=>$pro->id])}}"class="btn btn-sm btn-danger">Sửa</a>
           </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection