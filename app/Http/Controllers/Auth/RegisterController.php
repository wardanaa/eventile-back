<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Mail\WelcomeEmail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Auth\RegisterRequest;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->all());
        Mail::to($user->email)->queue(new WelcomeEmail($user->name));
        return response('created', Response::HTTP_CREATED);
    }
}
