<?php

class LayananTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'username' => 'root',
            'password' => Hash::make('admin')
        ));
    }
}
?>