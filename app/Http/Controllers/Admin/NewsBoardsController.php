<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsBoards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsBoardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // index method to show the all news lists

    public function index()
    {
        $newsboards = NewsBoards::all();
        return view('admin.newsBoard.index', compact('newsboards'));
    }

    public function create()
    {
        return view('admin.newsBoard.create');
    }

    public function show(NewsBoards $newsBoards, $id)
    {
        $newsBoards = NewsBoards::find($id);
        return view('admin.newsBoard.show', compact('newsBoards'));
    }

    public function store(Request $request)
    {
        $newsboard = NewsBoards::create([
            'news' => request('news'),
            'created_by' => Auth::user()->id,
        ]);
        return redirect()->route('newsBoard.index')->with('message', 'News For News Board created Successfully !!');
    }

    public function edit($id)
    {
        $newsboards = NewsBoards::find($id);
        return view('admin.newsBoard.edit', compact('newsboards'));
    }

    public function update(NewsBoards $newsBoards, Request $request)
    {
        $newsBoards->update([
            'news' => request('news'),
            'created_by' => Auth::user()->id,
        ]);
        return redirect()->route('newsBoard.index')->with('message', 'News Board Updated Successfully !!');
    }

    public function destroy($id)
    {
        $newsboards = NewsBoards::find($id);
        $newsboards->delete();
        return redirect()->route('newsBoard.index');
    }
}
