<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    public function showRegistrationForm()
    {
        return view('tryregister');
    }
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'namaPengguna' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'jenisKelamin' => ['required'],
            'alamat' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'namaPengguna.required' => 'Kolom nama pengguna wajib diisi.',
            'username.required' => 'Kolom username wajib diisi.',
            'username.unique' => 'Username sudah digunakan.',
            'jenisKelamin.required' => 'Kolom jenis kelamin wajib dipilih.',
            'alamat.required' => 'Kolom alamat wajib diisi.',
            'password.required' => 'Kolom password wajib diisi.',
            'password.min' => 'Password minimal harus terdiri dari 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'namaPengguna' => $data['namaPengguna'],
            'username' => $data['username'],
            'jenisKelamin' => $data['jenisKelamin'],
            'alamat' => $data['alamat'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
