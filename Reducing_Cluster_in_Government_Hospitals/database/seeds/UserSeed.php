<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $items = [

            ['id' => 1555666952, 'name' => 'tanzim jarif', 'email' => 'tanzim.jarif63@gmail.com', 'password' => '$2y$10$oXxnvxnmWmW/y85uhYsoT.oVoOnTO2WNSIn9YJO9/S41b7562ZCiy', 'role_id' => 1,'is_active' => 0, 'remember_token' => '',],
            ['id' => 1555666952, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$er5358zLagPnjJlmxstLYuWBd.jJzTwE6sVzeXNSm96RQAgqLXoi2', 'role_id' => 1,'is_active' => 0, 'remember_token' => '',],
            ['id' => 1555666952, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$er5358zLagPnjJlmxstLYuWBd.jJzTwE6sVzeXNSm96RQAgqLXoi2', 'role_id' => 1,'is_active' => 0, 'remember_token' => '',],
            ['id' => 1555666952, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$er5358zLagPnjJlmxstLYuWBd.jJzTwE6sVzeXNSm96RQAgqLXoi2', 'role_id' => 1,'is_active' => 0, 'remember_token' => '',],
            ['id' => 1555666952, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$er5358zLagPnjJlmxstLYuWBd.jJzTwE6sVzeXNSm96RQAgqLXoi2', 'role_id' => 1,'is_active' => 0, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
