<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSendRequest;
use App\Http\Requests\UpdateSendRequest;
use App\Models\Send;
use App\Models\Subject;

class SendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $s = new Subject;
        return $s::all();
        $sendList = DB::table('imports')
            ->where('use', 'John')
            ->where('age', '>', 18)
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSendRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Send $send)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Send $send)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSendRequest $request, Send $send)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Send $send)
    {
        //
    }
}
