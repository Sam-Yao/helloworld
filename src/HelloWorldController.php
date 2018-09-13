<?php

namespace SamYao\HelloWorld;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = 'Hello SamYao';
        return view('HelloWorld::welcome', compact('message'));
    }
}
