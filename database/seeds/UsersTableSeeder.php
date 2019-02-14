<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(App\User::class, 1)->create()->each(function ($user, $index) {
            $user->email = 'root@wsrchoko.com';
            $user->role = 'root';
            $user->status = 'active';
            $user->save();
            $account = factory(App\UserAccount::class)->make();
            $user->account()->save($account);
        });
    }
}
