<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    //

    use SendsPasswordResetEmails;

    public function adminLinkRequestForm()
    {
        return view('admin.auth.forgot');
    }
    public function broker()
    {
        return Password::broker('admins');
    }
}
