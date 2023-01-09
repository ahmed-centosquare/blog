<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {


    }


    /**
     * Listing Pagination Data.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxPagination(Request $request)
    {
        $items = Item::paginate(5);
        if ($request->ajax()) {
            return view('data', compact('items'));
        }
        return view('items',compact('items'));
    }
}
