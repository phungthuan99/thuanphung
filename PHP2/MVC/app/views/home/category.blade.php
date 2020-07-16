@extends('layouts.main')
@section('title', 'FPT Poly - Danh Mục')
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
                <a href="{{getClientUrl('edit-category',['id'=>$cate->id])}}"class="btn btn-sm btn-danger">Sửa</a>
           </th>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection