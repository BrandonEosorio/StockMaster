<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Storage;

class RegisterController extends Controller
{
 

    use RegistersUsers;

    /**
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['required'],
        ]);
    }

    /**
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $avatar = $data['avatar']->store('/avatar');

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'avatar' => $avatar,
            'password' => bcrypt($data['password']),
            
        ]);
    
        $user->roles()->attach(Role::where('Nombre', 'user')->first());
    
        return $user;
    }
}    