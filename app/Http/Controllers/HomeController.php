<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News;
use App\Models\Services;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.home');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function service()
    {
        $services = Services::all();
        return view('home.services', compact('services'));
    }

    public function serviceDetails($slug)
    {
        $services = Services::all();
        $service = Services::where('title_slug', $slug)->firstOrFail();
        return view('home.serviceDetails', compact('service', 'services'));
    }

    public function project()
    {
        return view('home.projectDetails');
    }

    public function projectDetails()
    {
        return view('home.project');
    }

    public function news()
    {
        $news = News::paginate(15);
        return view('home.news', compact('news'));
    }

    public function newsDetails($slug)
    {
        $newses = News::all();
        $news = News::where('title_slug', $slug)->firstOrFail();
        return view('home.newsDetails', compact('newses', 'news'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:11',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return back()->with('message', 'Thank you for you message !! we will contact you in 24 hours !!');
    }
}
