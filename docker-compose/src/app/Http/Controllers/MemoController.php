<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemoController extends Controller
{
    public function showHome()
    {
        $memos =  DB::table('memo')->get();
        return view("home", ['memos' => $memos]);
    }

    public function showSubmit()
    {
        return view("submit");
    }
}
