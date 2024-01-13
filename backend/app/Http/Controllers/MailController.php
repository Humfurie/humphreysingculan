<?php

namespace App\Http\Controllers;

use App\Notifications\SendMail;
use Domain\Users\Models\User;
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
