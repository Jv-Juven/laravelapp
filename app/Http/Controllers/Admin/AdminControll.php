<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminUser;

class AdminControll extends Controller
{
    public function register() {
        try {
            $admin_user = new AdminUser;
            $admin_user->create([
                "name" => "xiaoming",
                "password" => "123456",
                "grade" => "1"
            ]);

            return "插入成功";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
