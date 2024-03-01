<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'min:6|max:20'
        ]);

        $credentials =  $request->only('email', 'password');
       
        if(!Auth::validate($credentials)):
            return redirect(route('login'))
                    ->withErrors(trans('auth.password'))
                    ->withInput();
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return redirect()->intended(route('task.index'))->withSuccess('Sign in');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
