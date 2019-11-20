<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * @param Request   $request
     * @return mixed
     */
    public function signup(Request $request) {

        return view('users.create');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request) {
        $users = User::all();
        return view('users.index')->withUsers($users);
    }

    /**
     * @param StoreUserRequest   $request
     * 
     * @throws \Throwab le
     * @return mixed
     */
    public function store(StoreUserRequest $request) {

        $user = User::create($request->all());
        if($user) 
            return redirect()->route('user.index')->withFlashSuccess('User created successfully');
        return redirect()->route('user.index')->withFlashSuccess('User not created successfully');
    }
}
