<?php

namespace BlogIt\Http\Controllers\Admin;

use BlogIt\Role;
use BlogIt\User;
use Illuminate\Http\Request;

use BlogIt\Http\Requests;
use BlogIt\Http\Controllers\Controller;

/**
 * Administrative methods for working with users
 *
 * Class UserController
 * @package BlogIt\Http\Controllers\Admin
 */
class UserController extends Controller
{
    /**
     * Show main user control interface
     */
    public function getIndex()
    {
        return \View::make('admin/users/index')->with([
            'pageName' => 'User Maintenance',
        ]);
    }

    /**
     * Show form to add a user
     */
    public function getAdd()
    {
        return \View::make('admin/users/add')->with([
            'pageName' => 'Add User'
        ]);
    }

    /**
     * Handle add user form
     */
    public function postAdd(Request $request)
    {
        // prepare validation
        $validator = \Validator::make($request->all(), [
            'first_name'    => 'required|max:50',
            'last_name'     => 'required|max:50',
            'display_name'  => 'required|max:25|alpha_dash|unique:users',
            'email'         => 'required|max:255|unique:users',
            'password'      => 'required|max:255|confirmed',
            'password_confirmation' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            // flash input and errors to session, then return to form
            $messages = $validator->errors();
            \Input::flash('except', ['password']);
            return \View::make('admin.users.add')->with('messages', $messages);
        } else {
            $input = \Input::all();
            $user = User::create([
                "first_name"    => $input['first_name'],
                "last_name"     => $input['last_name'],
                "display_name"  => $input['display_name'],
                "email"         => $input['email'],
                "password"      => \Hash::make($input['password']),
            ]);
            Role::create([
                "user_id"       => $user->id,
                "role_name"     => $input['role']
            ]);
        }

    }

    /**
     * Show form to modify a user
     * @param User $user
     * @return $this
     */
    public function getEdit(User $user)
    {
        return \View::make('admin/users/edit')->with([
            'pageName' => 'Modify User',
            'user'     => $user
        ]);
    }

    /**
     * Handle modify user form
     */
    protected function postEdit()
    {

    }
}
