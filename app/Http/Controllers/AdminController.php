<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Student;
use App\IssueBook;
use App\ReturnBook;

class AdminController extends Controller
{
  public function index()
  {
$booksCount=Books::count();
$studentCount=Student::count();
$issueBooksCount=IssueBook::count();
$returnBookCount=ReturnBook::count();
return view('DashBord/index',compact('booksCount','studentCount','issueBooksCount','returnBookCount'));
  }
}
