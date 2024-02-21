<?php

namespace App\Http\Controllers\frontend\Mail;

use App\Domain\Users\Models\User;
use App\Http\Controllers\Controller;
use App\Notifications\SendMail;
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
