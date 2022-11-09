<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $nrp = "201014012";
    private $name = "Alfath Aznan Radiandi";
    private $course = " ";
    private $task = " ";
    private $quiz = " ";
    private $mid_term = " ";
    private $final = " ";
    private $grade = " ";

    public function index() {
      return view('Person.index');
  }
  public function SendData() {
      $nrp = $this->nrp;
      $name = $this->name;
      $course = $this->couse;
      $task = $this->task;
      $quiz = $this->quiz;
      $mid_term = $this->mid_term;
      $final = $this->final;
      $grade = $this->grade;
      return view("person.send-data", compact ("nrp", "name"));
  }
  public function create() {
    return view('person.create');
  }
}
