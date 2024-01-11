<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendMail;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;

class MailController extends Controller
{
    use Notifiable;

    public function store()
    {

        Notification::send(User::query()->first(), new SendMail('maot'));
        return redirect('/');
    }
}
