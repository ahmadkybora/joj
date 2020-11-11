<?php

namespace App\Http\Controllers\Front\Account;

use App\Http\Controllers\Controller;
use App\Http\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ProfileShow()
    {
        return view('front.account.profile-show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ProfileEdit()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function ProfileUpdate(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function cartShow(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function cartEdit()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function cartUpdate()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function cartDelete()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function orderShow(Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function orderdelete(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Account $account
     * @return \Illuminate\Http\Response
     */

    public function orderHistory(Request $request, Account $account)
    {
        //
    }

}
