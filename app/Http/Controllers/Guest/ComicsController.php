<?php

namespace App\Http\Controllers\Guest;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comic;


class ComicsController extends Controller
{
    public function index()
    {
        $comics = Comic::paginate(5); // SELECT * FROM `pastas`

        // dd($pastas);

        return view('comics.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function show(Comic  $comic)
    {
        return view('comics.show', compact('comic'));
    }
}
