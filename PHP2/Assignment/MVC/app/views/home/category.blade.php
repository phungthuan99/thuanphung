@extends('layouts.main')
@section('title', 'FPT Poly - Danh Mục')
@section('content')

    <table class="table ">
        <thead>
        <tr>
            <th>Cate_ID</th>
            <th>Tên Danh Mục</th>
            <th>Xóa</th>
            <th>Sửa</th>
              
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $cate)
        <tr>
            <th>{{$cate->id}}</th>
            <th>{{$cate->cate_name}}</th>
            <th>
                <a href="{{getClientUrl('delete-category',['id'=>$cate->id])}}"class="btn btn-sm btn-danger">Xóa</a>
            </th>
            <th>
                <a href="{{getClientUrl('edit-category',['id'=>$cate->id])}}"class="btn btn-sm btn-warning">Sửa</a>
           </th>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection