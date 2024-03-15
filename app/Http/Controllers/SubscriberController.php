<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriberRequest;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function store(SubscriberRequest $request)
    {
        Subscriber::create(['email' => $request->email]);
        return back()->with('success', __('main.subscribe.new', ['name' => $request->email,]));
    }
}
