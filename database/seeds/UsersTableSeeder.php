<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	public function run(){
		$data = array(
			array(
				'name'=>'xuanzi',
				'email'=>'568650567@qq.com',
				// 'password'=>Hash::make('xuanzi'),
				'password'=>md5('xuanzi'),
				'sex'=>'w',
				'uface'=>'',
				'tel'=>'',
				'addr'=>''
			)
		);
		DB::table('users')->insert($data);
	}
	
	//工厂模式
	// public function run()
	// {
		// factory(App\User::class, 50)->create()->each(function($u) {
			// $u->posts()->save(factory(App\Post::class)->make());
			// $user = factory(App\User::class)->make();
			// $user = factory(App\User::class)->make();
		// });
	// }
	
}