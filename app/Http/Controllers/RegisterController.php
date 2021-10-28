<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// use App\User;
use App\Models\Member;

class RegisterController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function store(Request $request)
    {
        $member = new Member;
        $member->nama = $request->nama;
        $member->email = $request->email;
        $member->password = Hash::make($request->password);
        $member->save();

        return $this->responseHasil(200, true, "Register Berhasil");

    }
}