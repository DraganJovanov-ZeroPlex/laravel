<?php

namespace App\Http\Controllers\Subscribers;

use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index() {
        $subscribers = Subscriber::$subscriberRepository;

        return view('subscribers', compact('subscribers'));
    }
}
