<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		// CREATE TABLE `users` (
		  // `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
		  // `name` char(20) NOT NULL COMMENT '用户名',
		  // `email` varchar(30) DEFAULT NULL COMMENT '邮箱',
		  // `password` char(60) NOT NULL COMMENT '密码',
		  // `sex` enum('w','m','x') DEFAULT 'm' COMMENT '性别',
		  // `uface` varchar(50) DEFAULT NULL COMMENT '头像',
		  // `birth` int(10) unsigned DEFAULT '0' COMMENT '生日',
		  // `tel` varchar(15) DEFAULT NULL COMMENT '电话',
		  // `addr` varchar(100) DEFAULT NULL COMMENT '地址',
		  // `auth` int(10) unsigned DEFAULT '1' COMMENT '权限,1为普通 用户2为超级管理员',
		  // `regtime` int(10) unsigned DEFAULT NULL COMMENT '注册时间',
		  // PRIMARY KEY (`uid`)
		// ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='用户表';

        Schema::create('users', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			
            $table->increments('uid')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('password',60);
            $table->string('sex',1)->default('m');
            $table->string('uface',20)->nullable();
            // $table->integer('birth',10);
            $table->string('tel',15)->nullable();
            $table->string('addr',100)->nullable();
            // $table->integer('auth',1)->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}