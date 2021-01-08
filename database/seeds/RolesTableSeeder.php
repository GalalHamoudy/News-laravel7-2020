<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ###################################################################
        $admin = \App\Role::create([
            'name'=>'admin',
            'display_name'=>'admin',
            'description'=>'admin can add or remove all',
        ]);

        $supervisor = \App\Role::create([
            'name'=>'supervisor',
            'display_name'=>'supervisor',
            'description'=>'supervisor can accept or reject posts',
        ]);

        $writer = \App\Role::create([
            'name'=>'writer',
            'display_name'=>'writer',
            'description'=>'writer can write posts',
        ]);

        $user = \App\Role::create([
            'name'=>'user',
            'display_name'=>'user',
            'description'=>'user can write comments',
        ]);
        // ###################################################################
        $THEadmin = \App\Permission::create([
            'name'=>'THEadmin',
            'display_name'=>'THEadmin',
            'description'=>'admin can add or remove all',
        ]);

        $THEsupervisor = \App\Permission::create([
            'name'=>'THEsupervisor',
            'display_name'=>'THEsupervisor',
            'description'=>'THEsupervisor can accept or reject posts',
        ]);

        $THEwriter = \App\Permission::create([
            'name'=>'THEwriter',
            'display_name'=>'THEwriter',
            'description'=>'writer can write posts',
        ]);

        $THEuser = \App\Permission::create([
            'name'=>'THEuser',
            'display_name'=>'THEuser',
            'description'=>'user can write comments',
        ]);
        // ###################################################################



        $admin->attachPermissions([$THEadmin, $THEsupervisor,$THEwriter, $THEuser]);
        $supervisor->attachPermissions([$THEsupervisor, $THEwriter, $THEuser]);
        $writer->attachPermissions([$THEwriter, $THEuser]);
        $user->attachPermissions([$THEuser]);







    }
}
