@extends('layout.main')
@section('content')
@if(isset($_SESSION['errors']) && isset($_GET['msg']))
    <ul>
        @foreach($_SESSION['errors'] as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
@if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span>{{$_SESSION['success']}}</span>
@endif
<h2>Thêm khoá học</h2>
    <form action="{{route('post-course')}}" method="post">
        <label for="">Tên khoá học</label>
        <input type="text" name="name" id=""><br><br>
        <label for="">Giá khoá học</label>
        <input type="text" name="price" id=""><br><br>
        <label for="">Giảng viên dạy</label>
        <input type="text" name="teacher" id=""><br><br>
        <label for="">Description</label>
        <input type="text" name="description" id=""><br><br>
        <input type="submit" value="Thêm khoá học" name="btn-submit">
    </form>
@endsection
