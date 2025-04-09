@extends('layouts.app')
@section('title', 'Sửa sinh viên')
@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 align-items-center justify-content-center">
                <div class="card mt-1">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Thêm sinh viên</h2>
                        </div>
                    </div>
                    <form method="post" action="{{route('students.update')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="student_id" value="{{$edit_student->id}}">
                        <div class="card-body">
                            <div class="form-group row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Tên sinh viên</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="name" name="name" value="{{$edit_student->name}}" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="birthday" class="col-sm-2 col-form-label">Ngày sinh</label>
                                <div class="col">
                                    <input type="date" class="form-control" id="birthday" name="birthday" value="{{$edit_student->birthday}}" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-2 col-form-label">Giới tính</label>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="Nam" id="male_gender" {{$edit_student->gender == 'Nam' ? 'checked' : ''}}>
                                        <label class="form-check-label" for="male_gender">Nam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="Nữ" id="female_gender" {{$edit_student->gender == 'Nữ' ? 'checked' : ''}}>
                                        <label class="form-check-label" for="female_gender">Nữ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="country" class="col-sm-2 col-form-label">Quê quán</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="country" name="country" value="{{$edit_student->country}}" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="phone_number" class="col-sm-2 col-form-label">SĐT</label>
                                <div class="col">
                                    <input type="number" class="form-control" id="phone_number" name="phone_number" value="{{$edit_student->phone_number}}" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col">
                                    <input type="email" class="form-control" id="email" name="email" value="{{$edit_student->email}}" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="student_code" class="col-sm-2 col-form-label">Mã sinh viên</label>
                                <div class="col">
                                    <input type="number" step="1" class="form-control" id="student_code" name="student_code" maxlength="5" value="{{$edit_student->student_code}}" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-2 col-form-label">Sở thích</label>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="hobby[]" value="Bóng đá">
                                        <label class="form-check-label" for="">Bóng đá</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="hobby[]" value="Nghe nhạc">
                                        <label class="form-check-label" for="">Nghe nhạc</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="hobby[]" value="Du lịch">
                                        <label class="form-check-label" for="">Du lịch</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="avatar" class="col-sm-2 col-form-label">Ảnh đại diện</label>
                                <div class="col">
                                    <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="avatar" class="col-sm-2 col-form-label">Ảnh đại diện</label>
                                <div class="col">
                                    <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="bio" class="col-sm-2 col-form-label">Bio</label>
                                <div class="col">
                                    <textarea class="form-control" id="bio" name="bio" rows="5">{{$edit_student->bio}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
