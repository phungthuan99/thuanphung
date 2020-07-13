@extends('layouts.main')
@section('title', 'FPT Poly - 'Product-Galleries')
@section('content')

    <table class="table ">
        <thead>
        <tr>
           
            <th>ID</th>   
            <th>Tên SP</th>  
            <th>Ảnh</th>
            <th>Chi tiết</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach($product_galleries as $proG)
        <tr>
            <td>{{$proG->id}}</td>
            <td>{{$proG->getProductId()}}</td>
            
            <td>
                <img src="{{getClientUrl($proG->img_url)}}" width="100">
            </td>
            <td>
                <a href="{{getClientUrl('chi-tiet',['id'=>$proG->id])}}"class="btn btn-sm btn-danger btn-remove">Chi tiết</a>
           </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
    @endsection
   