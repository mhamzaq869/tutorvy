<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
<<<<<<< HEAD
=======


    public function showLinkRequestForm()
    {
       return view('auth.resetpass');
    }


>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
}
