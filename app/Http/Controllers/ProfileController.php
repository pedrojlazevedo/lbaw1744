<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\User;

class ProfileController extends Controller
{
    /**
     * Shows the card for a given id.
     *
     * @param  int  $user_id
     * @return Response
     */

    public function show($user_id)
    {
       $user = User::find($user_id);

      return view('pages.profile', ['user' => $user]);
    }

    public function showRegisted()
    {
      return view('pages.profileRegisted');
    }

    public function showEdit($user_id)
    {
        $user = User::find($user_id);
      return view('pages.edit_profile', ['user' => $user]);
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->username = $request->input('username');
        $user->fullname = $request->input('fullname');
        if($request->input('password') != "")
            $user->password = $request->input('password');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->save();
        return view('pages.profileRegisted');
    }
}

