<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee= new Employee();
        $employee->fullName='Nguyễn Vũ Tiến';
        $employee->code='1';
        $employee->dob='1988/07/19';
        $employee->sex='Nam';
        $employee->phone='01254544267';
        $employee->numberId='031269710';
        $employee->address='131 Lò Đúc, Phan Đình Hồ, Hai Bà Trưng, Hà Nội';
        $employee->email='tien@gmail.com';
        $employee->group_id=1;
        $employee->save();

        $employee= new Employee();
        $employee->fullName='Nguyễn Phương Anh';
        $employee->code='2';
        $employee->dob='1994/09/29';
        $employee->sex='Nữ';
        $employee->phone='01266644267';
        $employee->numberId='033339710';
        $employee->address='1 Lò Đúc, Phan Đình Hồ, Hai Bà Trưng, Hà Nội';
        $employee->email='phuonganh@gmail.com';
        $employee->group_id=2;
        $employee->save();

        $employee= new Employee();
        $employee->fullName='Lê Văn Định';
        $employee->code='3';
        $employee->dob='1994/09/16';
        $employee->sex='Nam';
        $employee->phone='01294544267';
        $employee->numberId='031269412';
        $employee->address='16 Lò Đúc, Phan Đình Hồ, Hai Bà Trưng, Hà Nội';
        $employee->email='dinh@gmail.com';
        $employee->group_id=3;
        $employee->save();

        $employee= new Employee();
        $employee->fullName='Bùi Thị Nhung';
        $employee->code='4';
        $employee->dob='1994/11/09';
        $employee->sex='Nữ';
        $employee->phone='01222244267';
        $employee->numberId='031245612';
        $employee->address='50 Lò Đúc, Phan Đình Hồ, Hai Bà Trưng, Hà Nội';
        $employee->email='nhung@gmail.com';
        $employee->group_id=4;
        $employee->save();

        $employee= new Employee();
        $employee->fullName='Nguyễn Đức Anh';
        $employee->code='5';
        $employee->dob='1994/08/09';
        $employee->sex='Nam';
        $employee->phone='01294544267';
        $employee->numberId='031269412';
        $employee->address='100 Lò Đúc, Phan Đình Hồ, Hai Bà Trưng, Hà Nội';
        $employee->email='ducAnh@gmail.com';
        $employee->group_id=5;
        $employee->save();
    }
}
