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
<table border="1">
    <br><a href="{{route('add-course')}}"><button>Thêm khoá học</button></a>
    <thead>
        <th>ID</th>
        <th>Course Name</th>
        <th>Price</th>
        <th>Teacher Name</th>
        <th>Description</th>
        <th>Action</th>

    </thead>
    <tbody>
         @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->course_name }}</td>
                <td>{{ $course->price }}</td>
                <td>{{ $course->teacher_name }}</td>
                <td>{{ $course->description }}</td>
                <th>
                    <a href="{{route('detail-course/'.$course->id)}}"><button>Sửa</button></a>
                    <button onclick="confirmDelete('{{route('delete-course/'.$course->id)}}')">Xoá</button>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
