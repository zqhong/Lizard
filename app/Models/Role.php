<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable = ['name', 'display_name', 'description'];

    public static function addRole($name, $display_name = null, $description = null)
    {
        $role = self::query()->where('name', $name)->first();
        if (empty($role)) {
            $role = new self(['name' => $name]);
        }
        $role->display_name = $display_name;
        $role->description = $description;
        $role->save();

        return $role;
    }
}
