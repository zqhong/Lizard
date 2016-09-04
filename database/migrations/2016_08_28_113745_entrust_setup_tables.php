<?php

use Lizard\Models\Permission;
use Lizard\Models\Role;
use Lizard\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class EntrustSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::create('role_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'role_id']);
        });

        // Create table for storing permissions
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('permission_id')->references('id')->on('permissions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);
        });
        $this->addBaseRoleAndPermission();
    }

    public function addBaseRoleAndPermission()
    {
        // Create User
        $user = new User([
            'username' => 'admin',
            'nickname' => 'admin',
            'avatar_url' => '/images/avatar.png',
            'email' => 'admin@lizard.app',
            'password' => bcrypt('admin'),
        ]);
        $user->save();

        // Create Roles
        $founder = Role::addRole('Founder', 'Founder');
        $maintainer = Role::addRole('Maintainer', 'Maintainer');

        // Create Permissions
        $visit_admin = Permission::addPermission('visit_admin', 'Visit Admin');
        $manage_users = Permission::addPermission('manage_users', 'Manage Users');
        $manage_topics = Permission::addPermission('manage_topics', 'Manage Topics');
        $compose_announcement = Permission::addPermission('compose_announcement', 'Composing Announcement');

        // Add permissions to those roles
        $founder->attachPermissions([
            $visit_admin,
            $manage_users,
            $manage_topics,
            $compose_announcement,
        ]);

        $maintainer->attachPermissions([
            $visit_admin,
            $manage_topics,
            $compose_announcement,
        ]);


        // Add role for user
        if (! $user->hasRole($founder->name)) {
            $user->attachRole($founder);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('permission_role');
        Schema::drop('permissions');
        Schema::drop('role_user');
        Schema::drop('roles');
    }
}
