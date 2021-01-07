<?php
/**
 * Created by PhpStorm.
 * User: BANBEIS-AP
 * Date: 1/7/2021
 * Time: 2:53 PM
 */
use Illuminate\Database\Seeder;
use App\Users;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        Users::create(array(
            'name'     => 'Chris Sevilleja',
            'username' => 'suzon',
            'email'    => 'suozn@gmail.com',
            'password' => Hash::make('islm'),
        ));
    }

}