<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layout.app');
    }

    public function indexhoror()
    {
        return view('masterdata.horor');
    }
    public function index2()
    {
        return view('masterdata.next');
    }
    public function index3()
    {
        return view('masterdata.dashboard');
    }
    public function indexaction()
    {
        return view('masterdata.action');
    }
    public function indexData()
    {
        return view('masterdata.detail');
    }
    public function indexlogin()
    {
        return view('login.login');
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
