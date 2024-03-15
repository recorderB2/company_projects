<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriberMailRequest;
use App\Jobs\SubscriberMailJob;
use App\Models\Subscriber;

class SubscriberMailController extends Controller
{
    public function create()
    {
        return view('dashboard.subscribersMail.create');
    }
    public function send(SubscriberMailRequest $request)
    {
        Subscriber::chunk(25, function ($subscribers) use ($request) {
            dispatch(new SubscriberMailJob($subscribers, $request->all()));
        });
        return back()->with('success', 'The Mail (' . $request->subject . ') Is Sending On Background');
    }
}
