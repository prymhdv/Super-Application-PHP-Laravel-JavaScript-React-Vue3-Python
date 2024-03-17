<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\IgnoreFunctionForCodeCoverage;

class AdminController extends Controller
{
    //


    public function __construct(){

        $this->middleware('IsAdmin');


    }

    public function index(){

        return "you are an administrator because you are seeing this page";
    }

}