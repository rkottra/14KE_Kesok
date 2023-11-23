<?php

namespace App\Http\Controllers;

use App\Models\MyStudent;
use App\Http\Requests\StoreMyStudentRequest;
use App\Http\Requests\UpdateMyStudentRequest;

class MyStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MyStudent::with("myclass")->with("mysubjects")->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMyStudentRequest $request)
    {
        $seged              = new MyStudent();
        $seged->name        = $request->name;
        $seged->my_class_id = $request->my_class_id;
        $seged->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(MyStudent $mystudent)
    {
        return MyStudent::where("id", $mystudent->id)
                        ->with("myclass")
                        ->get();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMyStudentRequest $request, MyStudent $mystudent)
    {
        $mystudent->name        = $request->name;
        $mystudent->my_class_id = $request->my_class_id;
        $mystudent->save();
        
        return $mystudent;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyStudent $mystudent)
    {
        $mystudent->delete();
    }
}
