<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    

    public function index() {
        $notifications = Notification::orderBy('created_at', 'DESC')->get();
        return view('notifikasi.index', compact('notifications'));
    }


}
