<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('admin.profile');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
