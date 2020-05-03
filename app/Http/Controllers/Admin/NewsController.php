<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // index method to show the all news lists

    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('news_images'), $new_name);

        $fontArry = ['fa-campground', 'fa-industry', 'fa-warehouse', 'fa-warehouse-alt', 'fa-house-damage', 'fa-tools', 'fa-tools', 'fa-house-damage'];
        $fontValue = $fontArry[array_rand($fontArry, 1)];
        $service = News::create([
            'title' => request('title'),
            'title_slug' => Str::slug(request('title'), '-'),
            'description' => request('description'),
            'image' => $new_name,
            'font_code' => $fontValue,
        ]);
        return redirect()->route('news.index')->with('message', 'News created Successfully !!');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(News $news, Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('service_images'), $new_name);

            $news->update([
                'title' => request('title'),
                'title_slug' => Str::slug(request('title'), '-'),
                'description' => request('description'),
                'image' => $new_name,
            ]);
        } else {
            $news->update([
                'title' => request('title'),
                'title_slug' => Str::slug(request('title'), '-'),
                'description' => request('description'),
            ]);
        }
        return redirect()->route('news.index')->with('message', 'News details Updated Successfully !!');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index');
    }
}