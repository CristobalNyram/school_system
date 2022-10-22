<?php

namespace App\Http\Controllers;

use App\Models\Relrolmenu;
use Database\Seeders\RelPaymentPackagesStudents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelrolmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function requiredPaymetPackageStudent($package_id)
    {

        $payment_package= new Relpaymentpackagesstudent();
        $payment_package->user_student_id= Auth::id();
        $payment_package->package_id= $package_id;
        $payment_package->status=1;

        if($payment_package->save())
        {
            // return
        }
        else
        {
            // return

        }




    }
    public function aprovePaymetPackageStudent($relpaymentpackagesstudents_id)
    {

        $payment_package=RelPaymentPackagesStudents::findOrFail($relpaymentpackagesstudents_id);
        $payment_package->status=2;
        $payment_package->user_approved_id=Auth::id();


        if($payment_package->update())
        {
            // return
        }
        else
        {
            // return

        }




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Relrolmenu  $relrolmenu
     * @return \Illuminate\Http\Response
     */
    public function show(Relrolmenu $relrolmenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Relrolmenu  $relrolmenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Relrolmenu $relrolmenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Relrolmenu  $relrolmenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relrolmenu $relrolmenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Relrolmenu  $relrolmenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relrolmenu $relrolmenu)
    {
        //
    }
}
