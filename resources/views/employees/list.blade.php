@extends('layouts.app')
@section('title', 'List Employee')
@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-6">

                    <form method="get" class="naval-form naval-left" action="{{route('employees.search')}}">

                        @csrf

                        <div class="row">

                            <div class="col-8">

                                <div class="form-group">

                                    <input type="text" id="search-customers" class="form-control" value=""
                                           placeholder="Search" name="keyword">

                                </div>

                            </div>

                            <div class="col-4">

                                <button type="submit" class="btn btn-default">Tìm kiếm</button>

                            </div>

                        </div>

                    </form>

                </div>

                <div class="col-12">
                    <a class="btn btn-primary" href="{{route('employees.create')}}">Thêm mới</a>
                    <h1>Danh sách nhân viên </h1>
                </div>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Mã nhân viên</th>
                        <th scope="col">Nhóm nhân viên</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                    </thead>
                    @if(count($employees)==0)
                        <tr>
                            <td colspan="4">No data</td>
                        </tr>
                    @else
                        <tbody id="list-employees">
                        @foreach($employees as$employee)
                            <tr class="employee-{{$employee->id}}}">
                                <th scope="row">{{$employee->code}}</th>
                                <td>{{$employee->group->name}}</td>
                                <td>{{$employee->fullName}}</td>
                                <td>{{$employee->sex}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('employees.edit',$employee->id)}}">Edit</a>
                                    <a class="btn btn-danger delete-employee" data-id="{{$employee->id}}" href="{{route('employees.delete', $employee->id)}}"
                                    >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    @endif
                </table>
            </div>
            <a href="{{route('homeIndex')}}" class="btn btn-primary" style=" background-color: white;
  color: black;
  border: 2px solid #4CAF50;">Back</a>
        </div>
    </div>
@endsection
