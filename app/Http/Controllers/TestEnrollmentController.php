<?php

namespace App\Http\Controllers;

use App\Notifications\TestEnrollment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Events\NotificationSent;

class TestEnrollmentController extends Controller
{
    public function sentTestNotification(){

        $user = User::first();;
        $enrollmentData = [
            'body' =>'You have receive new test notification',
            'enrollmentText' =>'Wait for Approval',
            'url' => url('/'),
            'thankyou' => 'Thanks for your Application'
        ];

        // $user->notify(new TestEnrollment($enrollmentData));
        // Notification::send($user, new TestEnrollment($enrollmentData));
    }
}
