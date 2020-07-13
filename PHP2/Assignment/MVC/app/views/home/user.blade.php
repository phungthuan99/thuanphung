@extends('layouts.main')
@section('title', 'FPT Poly - User')
@section('content')

    <table class="table ">
        <thead>
        <tr>
           
            <th>ID</th>   
            <th>Name</th>  
            <th>Avatar</th> 
            <th>Role</th>
            <th>Phân Quyền</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach($users as $us)
        <tr>
            <td>{{$us->id}}</td>
            <td>{{$us->name}}</td>
            
            <td>
                <img src="{{getClientUrl($us->avatar)}}" width="100">
            </td>
            <td>{{$us->role}}</td>
            <td>
                <a href="{{getClientUrl('role',['id'=>$us->id])}}"class="btn btn-success">Phân Quyền</a>
           </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
    @endsection
    @section('js')
    <script>
        $(document).ready(function(){
            $('.btn-remove').on('click', function(){
                Swal.fire({
                    title: 'Cảnh báo!',
                    text: "Bạn chắc chắn muốn xóa sản phẩm này?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Đồng ý!'
                }).then((result) => {
                    if (result.value) {
                        var url = $(this).attr('href');
                        window.location.href = url;
                    }
                })
                return false;
            });
        });
    </script>
@endsection