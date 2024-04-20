<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create() {
        return view('users.register');
    }

    public function store(Request $request) {

        $formFields = $request->validate([
            'username' => ['required', 'min:3', Rule::unique('users', 'username')],
            'firstname' => ['required', 'min:3', Rule::unique('users', 'firstname')],
            'lastname' => ['required', 'min:3', Rule::unique('users', 'lastname')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ],
        [
            'username.required'=> 'A mező kitöltése kötelező!',
            'username.min'=> 'Minimum karakterszám: 3!',
            'username.unique'=> 'Már van ilyen nevű felhasználó!',
            
            'firstname.required'=> 'A mező kitöltése kötelező!',
            'firstname.min'=> 'Minimum karakterszám: 3!',
            'firstname.unique'=> 'Már van ilyen nevű felhasználó!',
            
            'lastname.required'=> 'A mező kitöltése kötelező!',
            'lastname.min'=> 'Minimum karakterszám: 3!',
            'lastname.unique'=> 'Már van ilyen nevű felhasználó!',
            
            'email.required'=> 'A mező kitöltése kötelező!',
            'email.email'=> 'Hibás email formátum!',
            'email.unique'=> 'Már van ilyen email címmel rendelkező felhasználó!',
            
            'password.required'=> 'A mező kitöltése kötelező!',
            'password.confirmed'=> 'A két jelszó nem egyezik!',
            'password.min'=> 'A jelszónak legalább 6 karakterből kell állnia!',
        ]);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/');
    }
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],
        [
            'username.required'=> 'A mező kitöltése kötelező!',
            
            'password.required'=> 'A mező kitöltése kötelező!',
        ]);
        if(auth()->attempt($formFields)){

            return redirect('/');
        }
        return back()->withErrors(['username' => 'Nem megfelelő hitelesítő adatok!'])->onlyInput('username');

    }
    public function manage() {
        return view('users.manage');
    }
    public function edit(User $user) {
        return view('users.edit', ['user' => $user]);
    }
    public function editeduser(User $user, Request $request) {
        $formFields = $request->validate([
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'type' => 'required',
            'email' => 'required'
        ],
        [
            'username.required'=> 'A mező kitöltése kötelező!',
            'firstname.required'=> 'A mező kitöltése kötelező!',
            'lastname.required'=> 'A mező kitöltése kötelező!',
            'type.required'=> 'A mező kitöltése kötelező!',
            'email.required'=> 'A mező kitöltése kötelező!',
        ]);

        $user->update($formFields);

        return redirect('/manage');
    }
    public function deleteuser(User $user) {
        $user->delete();
        return redirect('/manage');
    }
    public function userprogress() {
        return view('users.userprogress');
    }
}
