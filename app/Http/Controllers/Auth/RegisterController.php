<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/sekolah';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showregisterForm(){
        return view('auth.register');
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
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'alamat' => ['required', 'string', 'max:255'],
            'asal_sekolah' => ['required','string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'photo' => ['required','string'],
            'latitude' => ['required', 'string'],
            'longitude' => ['required', 'string'],
            'b_indo' => ['required', 'numeric'],
            'b_ing' => ['required', 'numeric'],
            'mtk' => ['required', 'numeric'],
            'ipa' => ['required','numeric']
            
        ]);
    }
    
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
   
   
     protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'asal_sekolah' => $data['asal_sekolah'],
            'alamat' => $data['alamat'],
            'password' => Hash::make($data['password']),
            'photo' => $data['photo'],
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
            'b_indo' => $data['b_indo'],
            'b_ing' => $data['b_ing'],
            'mtk' => $data['mtk'],
            'ipa' => $data['ipa']
            
        ]);
    
    }
    // public function regis(Request $request){
    //     $this->validate($request, array(
    //     'name' => 'required',
    //     'username' => 'required',
    //     'password' => 'required',
    //     'asal_sekolah'=>'required',
    //     'email' => 'required|unique:users',
    //     'alamat' => 'required',
    //     'photo' => 'image',
    //     'b_indo' => 'required',
    //     'b_ing' => 'required',
    //     'mtk' => 'required',
    //     'ipa' => 'required',
    //     ));
    // }
    //     $user=new User;
    //     $user->name=$request->name;
    //     $user->username=$request->username;
    //     $user->email=$request->email;
    //     $user->password=Hash::make($request->password);

    //         if ($request->hasFile('photo')){
    //             $image = $request->file('photo');
    //             $filename = time() . '.' . $image->getClientOriginalExtension();
    //             $location = 'storage\upload\a'. $filename;
    //             dd($image);
    //             Image::make($image)->resize(800, 700)->save($location);

    //             $user->photo = $filename;

    //         }
        
    //     $user->asal_sekolah=$request->asal_sekolah;
    //     $user->alamat=$request->alamat;
    //     $user->b_indo=$request->b_indo;
    //     $user->b_ing=$request->b_ing;
    //     $user->mtk=$request->mtk;
    //     $user->ipa=$request->ipa;
    //     $user->save();
    //     dd($user);
    //     return redirect()->route('login');
    // }
}
