@extends('layout.main')
@section('content')

@isset($_SESSION['errors'])
    <ul>
        @foreach ($_SESSION['errors'] as $errors)
            <li style="color: red">{{ $errors }}</li>
        @endforeach
    </ul>
@endisset

@isset($_SESSION['success'])
    <span style="color: green">{{$_SESSION['success']}}</span>
@endisset
    
<form action="{{BASE_URL.'add-product-post'}}" method="post">
    Tên sản phẩm <input type="text" name="ten_sp" id=""> <br>
    Đơn giá <input type="text" name="don_gia" id=""> <br>
    <input type="submit" name="them" id="" value="Thêm">
</form>
@endsection