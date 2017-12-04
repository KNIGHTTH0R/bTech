<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ProfileController extends Controller
{
    /**
     * Get user profile page
     *
     * @param $id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index($id)
    {
        $user = auth()->user()->id == $id
            ? auth()->user()
            : User::where('id', $id)->firstOrFail();
        
        return view('pages.profile', compact('user'));
    }

}
