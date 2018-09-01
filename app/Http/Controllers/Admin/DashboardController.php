<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Admin;

class DashboardController extends Controller
{
    public function index() {
        $userTypesData = [
            [
                "label" => "Users",
                "data"  => User::count(),
                "color" => "#d066e2"
            ],
            [
                "label" => "Admins",
                "data"  => Admin::count(),
                "color" => "#32c787"
            ]
        ];

        return view("admin.dashboard", compact("userTypesData"));
    }
}
