<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentName;

class StudentNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $stuName=StudentName::all();

        return view('studentManagement.Name.nameAdd',compact('stuName'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        StudentName::create($request->all());
        return redirect('studentName');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stuName=StudentName::findOrFail($id);
        return view('studentManagement.Name.edit',compact('stuName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $stuName=StudentName::findOrFail($id);
      $stuName->update($request->all());
      return redirect('studentName');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stuName=StudentName::findOrFail($id);
        $stuName->delete();
        return redirect('studentName');
    }
}
