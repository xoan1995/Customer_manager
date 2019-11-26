<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new Group();
        $group->name = 'Quản trị hệ thống';
        $group->save();

        $group = new Group();
        $group->name = 'Quản lý nhân sự';
        $group->save();

        $group = new Group();
        $group->name = 'Lễ tân';
        $group->save();

        $group = new Group();
        $group->name = 'Quản lý phòng';
        $group->save();

        $group= new Group();
        $group->name='Quản lý dịch vụ';
        $group->save();

    }
}
