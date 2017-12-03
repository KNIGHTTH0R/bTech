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

        $authUser = auth()->user();

        if($id == $authUser->id){
            $user = $authUser;
        } else {
            $user = User::select()->where('id', '=', $id)->firstOrFail();
        }

        if(!isset($user)) {
            abort('404');
        }

        return view('pages.profile', compact('user', 'authUser'));

    }

}
