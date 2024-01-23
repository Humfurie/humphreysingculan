<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
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
