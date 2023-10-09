<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;

class CalculationController extends Controller
{
    //

    public function index(Request $request) {
        // $items = DB::select('SELECT * from Problem where STATUS = 0');
        $items = [];
        
        return view('index', compact('items'));
    }

    public function update(Request $request) {
        // DB::insert('insert into Problem (REQUEST) values (?)', [$request['Request']]);

        // $items = DB::select('SELECT * from Problem where STATUS = 0');
        $items = [];
        
        return view('index', compact('items'));
    }
}
