@extends('layouts.main')
@section('title', 'FPT Poly - Trang chủ')
@section('content')

    </form>
    <table class="table ">
        <thead>
        <tr>
            <th>ID</th>  
            <th>Tên Sản Phẩm</th> 
            <th>Danh mục</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Mô tả ngắn</th>  
            <th>Chi tiết</th> 
            <th>Số sao</th>
            <th>Lượt xem</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->getCateName()}}</td>
            <td>
                <img src="{{getClientUrl($product->image)}}" width="100">
            </td>
            <td>{{$product->price}}</td>
            <td>{{$product->short_desc}}</td>
            <td>{{$product->detail}}</td>
            <td>{{$product->star}}</td>
            <td>{{$product->views}}</td>
            
        </tr>
        </tbody>
    </table>
@endsection
    