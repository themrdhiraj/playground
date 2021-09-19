<?php

namespace App\Http\Controllers\Tractor;

use App\Models\User;
use App\Models\Tractor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TractorController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->id);
        return view('tractor.index');
    }

    // For Admin

    public function tractorDetails()
    {
        return view('tractor.admin.tractor_details');
    }

    public function tractorEarnings()
    {
        return view('tractor.admin.tractor_earnings');
    }

    public function tractorSpendings()
    {
        return view('tractor.admin.tractor_spendings');
    }

    public function receivePayments()
    {
        return view('tractor.admin.receive_payments');
    }

    public function providePayments()
    {
        return view('tractor.admin.provide_payments');
    }

    public function settings()
    {
        return view('tractor.admin.settings');
    }

    public function manageAccounts()
    {
        return view('tractor.admin.manage_accounts');
    }

    public function editAccount()
    {
        return view('tractor.admin.edit_account');
    }

    public function createAccounts()
    {
        return view('tractor.admin.create_accounts');
    }

    public function requestedPayments()
    {
        return view('tractor.admin.requested_payments');
    }

    public function assignDriver()
    {
        $drivers = User::select('id','name')->where('id','>','1')->get();

        return view('tractor.admin.assign_driver')->with('drivers', $drivers);
    }

    public function addTractor()
    {
        $tractors = Tractor::orderBy('id', 'desc')->get();
        return view('tractor.admin.add_tractor')->with('tractors', $tractors);
    }

    public function addTractorValidation(Request $request)
    {
        $this->validate($request,[
            'trac_no' => 'required|max:25',
            'trac_model' => 'required|max:255',
            'trac_dist' => 'required',
            'trac_fuel' => 'required',

        ]);

        $add = Tractor::create([
            'trac_no' => $request->trac_no,
            'trac_model' => $request->trac_model,
            'trac_dist' => $request->trac_dist,
            'trac_fuel' => $request->trac_fuel,
        ]);

        if ($add) {            
            return redirect()->back()->with('success', 'Tractor Added Successfully.');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    // For Driver
    public function updateTractorDetails()
    {
        return view('tractor.driver.update_tractor_details');
    }   

    public function addWork()
    {
        return view('tractor.driver.add_work');
    }

    public function requestPayments()
    {
        return view('tractor.driver.request_payment');
    }

    public function allRequests()
    {
        return view('tractor.driver.all_requests');
    }

    public function spendMoney()
    {
        return view('tractor.driver.spend_money');
    }


    // For both

    public function singleBill()
    {
        return view('tractor.single_bill');
    }

    public function profile()
    {
        return view('tractor.admin.profile');
    }

    public function phone()
    {
        return view('tractor.phoneno');
    }
}
