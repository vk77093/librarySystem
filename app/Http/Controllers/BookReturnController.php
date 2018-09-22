<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ReturnBook;
use App\Student;
use App\StudentName;
use App\Publisher;
use App\Books;
use App\IssueBook;

class BookReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $returnBook=ReturnBook::all();
        return view('returnBooks/indexView',compact('returnBook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

$bookNames=DB::table('booksdata')->pluck('title','book_id')->all();

      $studenID=IssueBook::pluck('student_id','id')->all();
      //$stuName=IssueBook::pluck('stu_name','id')->all();
      $stuName=DB::table('studentdata')->pluck('stu_name','student_id')->all();
      //$stuRoll=IssueBook::pluck('roll_number','id')->all();
      $stuRoll=DB::table('studentrolldata2')->pluck('roll_number','roll_id')->all();
      //$pubName=IssueBook::pluck('publisher_id','id')->all();
      $pubName=DB::table('publishersdata')->pluck('publisher_name','publisher_id')->all();
      $returnDate=IssueBook::pluck('return_date','id')->all();

        return view('returnBooks/return',compact('bookNames','studenID','stuName','stuRoll','pubName','bk','returnDate','returnBook'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      ReturnBook::create($request->all());
      return redirect('/BookReturn');

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
