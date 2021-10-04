<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesPermissions extends Model
{

    protected $table = 'roles_permissions';
    protected $fillable = [
        'role_id',
        'menu_title',
        'permission',
        'create',
        'read',
        'update',
        'delete',
        'created_by',
    ];

    use HasFactory;
}
