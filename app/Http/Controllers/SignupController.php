<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
     */
    public function byEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'email',
        ]);

        $email = $request->input('email');

        $signup = Signup::create(['email' => $email]);

        return view('thankyou', ['email' => $email]);
    }
}