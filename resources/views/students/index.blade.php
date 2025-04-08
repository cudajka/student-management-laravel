@extends('layouts.app')
@section('title', 'Danh sách sinh viên')
@section('content')
    <main>
        <div class="container-fluid">
            <a href="{{route('students.create')}}" class="btn btn-success fw-bold mt-1 mb-1"><i class="fa fa-plus"></i> Thêm sinh viên</a>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Họ và tên</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Quê quán</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Mã sinh viên</th>
                            <th>Sở thích</th>
                            <th>Tiểu sử</th>
                            <th>Ảnh đại diện</th>
{{--                            <th>Ngày tạo</th>--}}
{{--                            <th>Cập nhật vào</th>--}}
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->name}}</td>
                            <?php
                                $fmt = datefmt_create('vi_VN', pattern: "d LLLL, YYYY");
                                $birthday_input = date_create($value->birthday);
                                $birthday_output = datefmt_format($fmt, $birthday_input);
                            ?>
                            <td>{{$birthday_output}}</td>
                            <td>{{$value->gender}}</td>
                            <td>{{$value->country}}</td>
                            <td>{{$value->phone_number}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->student_code}}</td>
                            <td>

                                @php
                                    $hobbies = json_decode($value->hobbies);
                                @endphp
                                @if(isset($hobbies))
                                    @foreach($hobbies as $hobby)
                                        {{$hobby}},
                                    @endforeach
                                @else
                                    <i class="fa fa-ban text-danger"></i>
                                @endif

                            </td>
                            <td>{{$value->bio}}</td>
                            <td>
                                <img src="{{url('storage/img/avatar/'.$value->avatar)}}" class="img-thumbnail rounded-circle" width="100px" alt="">
                            </td>
{{--                            <td>{{$value->created_at}}</td>--}}
{{--                            <td>{{$value->updated_at}}</td>--}}
                            <td>
                                <a href=""><i class="fa fa-eye text-success"></i></a>
                                <a href="{{route('students.edit', ['id'=>$value->id])}}"><i class="fa fa-edit"></i></a>
                                <a href="{{route('students.delete', ['id'=>$value->id])}}" class="delete_btn text-danger" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
