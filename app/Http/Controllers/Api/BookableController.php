<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookableShowResource;
use App\Http\Resources\BookableIndexResource;
use App\Bookable;

class BookableController extends Controller
{
    public function index()
    {
        return BookableIndexResource::collection(
            Bookable::all()
        );
    }

    public function show($id)
    {
        return new BookableShowResource(Bookable::findOrFail($id));
    }
}
