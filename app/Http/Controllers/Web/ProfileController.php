<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\EditProfileRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends WebController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(User::find(Auth::id()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProfileRequest $request, $id)
    {
        if (User::where('id', $id)->update($request->all()))
        {
            return response()->json(array( 'msg' => "Success" ));
        }

        return response()->json(array( 'msg' => "Error" ));
    }
}
