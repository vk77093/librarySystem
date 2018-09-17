<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Student;
use App\StudentName;
use App\Rack;
use App\Publisher;
use App\IssueBook;


class BookIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $issueBooks=IssueBook::all();
        return view('issueBooks.indexView',compact('issueBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  $bookName=Books::pluck('title','id')->all();
      $studentName=StudentName::pluck('stu_name','id')->all();
      $rackName=Rack::pluck('rack_name','id')->all();
      $publisherName=Publisher::pluck('publisher_name','id')->all();
      $studentRollNum=StudentName::pluck('roll_number','id')->all();
      $studentId=Student::pluck('students_name_id','id')->all();

        return view('issueBooks.issue',compact('bookName','studentName','rackName','publisherName','studentRollNum','studentId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        IssueBook::create($request->all());
        return redirect('BookIssue');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
