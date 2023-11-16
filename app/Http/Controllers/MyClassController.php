<?php

namespace App\Http\Controllers;

use App\Models\MyClass;
use App\Http\Requests\StoreMyClassRequest;
use App\Http\Requests\UpdateMyClassRequest;

class MyClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MyClass::get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMyClassRequest $request)
    {
        $seged = new MyClass();
        $seged->classname = $request->classname;
        $seged->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(MyClass $myclass)
    {
        return $myclass;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMyClassRequest $request, MyClass $myclass)
    {
        $myclass->classname = $request->classname;
        $myclass->save();
        return $myclass;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyClass $myclass)
    {
        $myclass->delete();
    }
}
