<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Subscriber;
use App\Models\User;

class MainController extends Controller
{
    public function dashboard()
    {
        $users = User::where('admin', 0)->get();
        $projects = Project::all();
        $subscribers = Subscriber::all();
        return view('dashboard', compact('users', 'projects', 'subscribers'));
    }
}
