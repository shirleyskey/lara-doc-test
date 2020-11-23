<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bookable;
use App\Http\Resources\BookResourceIndex;
use App\Http\Resources\BookResourceShow;

class BookController extends Controller
{
    //
    public function index()
    {
        return new BookResourceIndex(Bookable::all());
    }
    public function show($id)
    {
        return new BookResourceShow(Bookable::findOrFail($id));
    }
}
