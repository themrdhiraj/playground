<?php

namespace App\Http\Controllers\Tractor;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        return view('tractor.login');
    }

    public function register()
    {
        return view('tractor.admin.create_accounts');
    }

    public function registerValidation(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'phone' => 'required|max:10',
            'address' => 'required|max:255',
            'bank' => 'required|max:255',
            'acc_no' => 'required|max:255',
            'trac_no' => 'required',
            'prof_img' => 'required',

        ]);

        $register = User::create([
            'name' => $request->name,
            'username' => $request->name,
            'password' => Hash::make('password'),
            'phone' => $request->phone,
            'address' => $request->address,
            'bank' => $request->bank,
            'acc_no' => $request->acc_no,
            'trac_no' => $request->trac_no,
            'prof_img' => $request->prof_img,
        ]);

        if ($register) {            
            return redirect()->back();
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }

        // username auto
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required',

        ]);
        
        if (!auth()->attempt($request->only('username', 'password'))) {
            return back()->with('error', 'Invalid Login Details');
        }

        return redirect()->route('tractor');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login.index');
    }
}
