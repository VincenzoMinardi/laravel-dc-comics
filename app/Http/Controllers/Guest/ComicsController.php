<?php

namespace App\Http\Controllers\Guest;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicsController extends Controller
{
    public function index()
    {
        $comics = Comic::paginate(5);

        return view('comics.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'           => 'required|string|max:200',
            'price'           => 'required|string|max:100',
            'series'          => 'required|string|max:100',
            'sale_date'       => 'required|date',
            'type'            => 'required|string|max:100',
            'description'     => 'required|string|max:1000',
            'thumb'           => 'required|string|max:1000',
        ]);



        $data = $request->all();

        $newComics = new Comic();
        $newComics->title = $data['title'];
        $newComics->price = $data['price'];
        $newComics->series = $data['series'];
        $newComics->sale_date = $data['sale_date'];
        $newComics->type = $data['type'];
        $newComics->description = $data['description'];
        $newComics->thumb = $data['thumb'];
        $newComics->save();

        return redirect()->route('comics.show', ['comic' => $newComics->id]);
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }
}
