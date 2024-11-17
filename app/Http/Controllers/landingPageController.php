<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;

class landingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('landingpage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'username'=>'required|max:100',
            'password'=>'required|max:100'
        ]);
        user::create($request->all());
        return redirect()->route('user.store')->with('Success', 'berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(LandingPage $landingPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LandingPage $landingPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LandingPage $landingPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LandingPage $landingPage)
    {
        //
    }
}
