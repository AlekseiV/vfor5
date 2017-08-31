<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
  {
    $message = "Here you can see all of our threds.";
    return $message;
  }

    public function create()
  {
    $message = "Here you´re able to create thread.";
    return $message;
  }

    public function show($id)
  {
    $message = "Þú ert á síðu " .$id;
    return $message;
  }
}
