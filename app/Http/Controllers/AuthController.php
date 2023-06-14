<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('auth.login');
        } else {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended('/user/welcome/home-page');
            }

            return redirect()->back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function register(Request $request)
    {
        // dd($request);
        if ($request->method() == 'GET') {
            return view('auth.register');
        } else {
            $request->validate([
                'first_name' =>  'required|regex:/^[a-zA-Z]+$/u|string',
                'last_name' =>  'required|regex:/^[a-zA-Z]+$/u|string',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]);

            $user = Users::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // login the user after registration
            auth()->login($user);

            return redirect('/home');
        }
    }



    public function registerTrainer(Request $request)
    {

        $location = explode(',', $request->latitude);
        // dd($location);
        if ($request->method() == 'GET') {
            // return to your blade file
            return view('user.auth.register');
        } else {
            $validator = Validator::make($request->all(), [
                // 'first_name' => 'required|regex:/^[a-zA-Z]+$/u|string',
                // 'last_name' => 'required|regex:/^[a-zA-Z]+$/u|string',
                'phone_number' => 'required|min:11',
                'trainer_role' => 'required',
                'user_name' => 'required|unique:users',
                'five_digits' => 'required|min:5',
                'seven_digits' => 'required|min:7',
                'one_digits' => 'required|min:1',
            ]);

            if (!$validator->passes()) {

                return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
            } else {
                $user = auth()->user();
                $user->update([

                    // 'first_name' => $request->first_name,
                    // 'last_name' => $request->last_name,
                    'user_name' => $request->user_name,
                    'phone_number' => $request->phone_number,
                    'shop_number' => $request->shop_number,
                    'location' => $request->location,
                    'id_card' =>  $request['five_digits'] . "-" . $request['seven_digits'] . "-" . $request['one_digits'],
                    'city' => $request->city,
                    'trainer_role' => $request->trainer_role,
                    'role' => 'trainer',
                ]);
                $user = auth()->user()->id;
                // dd($user);

                if (isset($request->image)  && ($request->image->extension() != '')) {
                    $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
                    $request->image->move(public_path('uploads/user'), $imageName);
                    Users::whereId($user)->update([
                        'image' => $imageName,
                    ]);
                }



                $location = Location::create([
                    'trainer_id' => auth()->user()->id,
                    'latitude' => $location[0],
                    'longitude' => $location[1],

                ]);

                $user = auth()->user();
                // return rediract or return to your blade file
                // return redirect('/user/welcome/home-page');
                // return response()->json(['message' => 'Trainer registered successfully!']);

            }
            return response()->json(['status' => 1, 'message' => "Trainer Has Been Successfully Register"]);
        }
    }



    public function registerTrainee(Request $request)
    {

        if ($request->method() == 'GET') {
            // return to your blade file form
            // return view('auth.register');
        } else {

            $checkCategory = Users::where('role', 'trainer')->where('trainer_role', $request->category)->get();

            if ($checkCategory) {
                $validator = Validator::make($request->all(), [
                    // 'first_name' => 'required|regex:/^[a-zA-Z]+$/u|string',
                    // 'last_name' => 'required|regex:/^[a-zA-Z]+$/u|string',
                    'phone_number' => 'required|min:11',
                    'user_name' => 'required|unique:users',
                    'five_digits' => 'required|min:5',
                    'seven_digits' => 'required|min:7',
                    'one_digits' => 'required|min:1',
                ]);


                if (!$validator->passes()) {

                    return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
                } else {

                    $user = auth()->user();
                    $user->update([
                        // 'first_name' => $request->first_name,
                        // 'last_name' => $request->last_name,
                        'user_name' => $request->user_name,
                        'phone_number' => $request->phone_number,
                        'location' => $request->location,
                        'id_card' =>  $request['five_digits'] . "-" . $request['seven_digits'] . "-" . $request['one_digits'],
                        'city' => $request->city,
                        'category' => $request->category . '' . $request->category_other,
                        // 'category' => $request->category,

                        'role' => 'trainee',

                    ]);
                    $user = auth()->user()->id;


                    if (isset($request->image)  && ($request->image->extension() != '')) {
                        $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
                        $request->image->move(public_path('uploads/user'), $imageName);
                        Users::whereId($user)->update([
                            'image' => $imageName,
                        ]);
                    }

                    $user = auth()->user();
                }
                return response()->json(['status' => 1, 'message' => "Trainee Has Been Successfully Register"]);
            } else {
                return response()->json(['status' => 2, 'message' => "Sorry we dont offer selected course !Please select another course "]);
            }
        }


        // return rediract or return to your blade file
        // return response()->json(['message' => 'Trainee registered successfully!']);
    }




    public function user_register(Request $request)
    {

        $request->validate([
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u|string',
            'last_name' =>  'required|regex:/^[a-zA-Z]+$/u|string',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',

        ]);

        $user = Users::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        // login the user after registration
        // auth()->login($user);

        return redirect('/user/login-page');
    }

    public function user_login(Request $request)
    {
        // dd($request);
        $validate = $request->validate([
            'email' => 'required|string|email|max:255|exists:users,email',
            'password' => 'required|string|min:8',
        ]);

        if ($validate) {
            if ($request->method() == 'GET') {

                return view('auth.login');
            } else {
                $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials)) {
                    // Authentication passed...
                    return redirect()->intended('/user/welcome/home-page');
                }

                return redirect()->back()->withErrors([
                    'password' => 'The provided credentials do not match our records.',
                    // 'password' => 'Incorrect password.',
                ]);
            }
        }
    }

    public function login_page_new(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('auth.loginNew');
        } else {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended('/user/welcome/home-page');
            }

            return redirect()->back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
                'password' => 'Incorrect password.',
            ]);
        }
    }

    // Forgot password
    public function user_forgot_password(Request $request)
    {
        $request->validate([

            'email' => 'required|email|exists:users',
            'new_password' => 'required|string|min:8|unique:users,password',
            // 'new_confirm_password' => ['same:new_password'],
        ]);

        $forgotPassword = Users::where('email', $request->email)->update(['password' => Hash::make($request->new_password)]);

        // if ($forgotPassword) {
        //     $toasterValue = 1;
        //     session()->put('toasterValue', $toasterValue);
        //     return redirect(route('login.page'));
        // } else {
        //     $toasterValue = 2;
        //     session()->put('toasterValue', $toasterValue);

        //     return redirect(route('login.page'));
        // }
        return redirect(route('login.page'))->with('message', 'Password reset succesfully');

        // return redirect('/user/login-page');
    }
}
