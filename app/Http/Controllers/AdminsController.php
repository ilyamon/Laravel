<?php

namespace App\Http\Controllers;

use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;
use App;

class AdminsController extends Controller
{
    public function dashboard()
    {
        return view('admins.admin_dashboard');
    }


    public function admin()
    {
        return view('admins.admin_template');
    }

    public function articles()
    {
        $admin_models = App\AdminModel::all();
        return view('admins.admin_articles', compact('admin_models'));
    }

    public function add()
    {
        return view('admins.admin_add_article');
    }

    public function users()
    {
        return view('admins.admin_users');
    }
}
