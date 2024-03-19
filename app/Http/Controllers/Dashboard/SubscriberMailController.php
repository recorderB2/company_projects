<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriberMailRequest;
use App\Jobs\SubscriberMailJob;
use App\Mail\SubscriberMail;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;

class SubscriberMailController extends Controller
{
    public function create()
    {
        $subscribers = Subscriber::all();
        return view('dashboard.subscribersMail.create', compact('subscribers'));
    }
    public function send(SubscriberMailRequest $request)
    {
        if ($request->recipient == "all") {
            Subscriber::chunk(25, function ($subscribers) use ($request) {
                dispatch(new SubscriberMailJob($subscribers, $request->all()));
            });
        } else {
            Mail::to($request->recipient)->send(new SubscriberMail($request->all()));
        }
        return back()->with('success', 'The Mail (' . $request->subject . ') Is Sending On Background');
    }
}
