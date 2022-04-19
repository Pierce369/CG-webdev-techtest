<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getProfileJSON() {
        $strJsonFileContents  = file_get_contents("..\database\landscapes.json", true);
        $msg = json_decode($strJsonFileContents , true);
        return response()->json(array('profile'=> $msg), 200);
     }
    //
}
