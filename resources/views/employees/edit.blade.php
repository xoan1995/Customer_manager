@extends('layouts.app')
@section('title','Edit employee')
@section('content')
    <body class="bg-light">
    <div class="container">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Chỉnh sửa nhân viên</h4>
            <form class="needs-validation" action="{{route('employees.update', $employee->id)}}" method="post" novalidate="">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Mã nhân viên</label>
                        <input type="text" class="form-control" id="" name="code" placeholder="" value="{{$employee->code}}" required="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Số điện thoại</label>
                        <input type="text" class="form-control" id="" name="phone" placeholder="" value="{{$employee->phone}}" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Chọn nhóm nhân viên</label>
                        <select class="custom-select d-block w-100" name="group_id" required="">
                            @foreach($groups as $group)
                                @if($employee->group->id)
                                <option
                                    @if($employee->group->id==$group->id)
                                    selected
                                    @endif
                                    value="{{$group->id}}">
                                    {{$group->name}}
                                </option>
                                @endif
                            @endforeach
                        </select></div>
                    <div class="col-md-6 mb-3">
                        <label for="">Số CMTND</label>
                        <input type="text" class="form-control"  id="" name="numberId" placeholder="" value="{{$employee->numberId}}"
                               required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Họ tên</label>
                        <input type="text" class="form-control" id="" name="fullName" placeholder="" value="{{$employee->fullName}}"
                               required="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="" name="email" placeholder="trang@gmail.com"
                               value="{{$employee->email}}" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Ngày sinh</label>
                        <input type="date" class="form-control" id="" name="dob" placeholder="04/02/1994" value="{{$employee->dob}}"
                               required="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Địa chỉ</label>
                        <input type="text" class="form-control" id="" name="address"
                               placeholder="31 Tràng Tiền, Hoàn Kiếm" value="{{$employee->address}}" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Giới tính</label>
                        <input type="text" class="form-control" id="" name="sex"
                               placeholder="Nam" value="{{$employee->sex}}" required="">
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
    </body>
@endsection
