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
    <form action="{{route('post-teacher')}}" method="post">
        <label>Tên giảng viên</label>
        <input type="text" name="name"><br><br>
        <label>email</label>
        <input type="text" name="email"><br><br>
        <label>Salary</label>
        <input type="number" name="salary"><br><br>
        <label>School</label>
        <input type="text" name="school"><br><br>
        <input type="submit" name="btn-submit" value="Gửi">
    </form>
@endsection