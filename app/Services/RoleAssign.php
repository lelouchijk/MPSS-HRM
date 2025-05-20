<?php 

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleAssign {
    public function roleAssign(){
        $user = User::find(1)->assignRole('admin');
        
    }
}