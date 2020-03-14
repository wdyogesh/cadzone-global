<?php

namespace App\Http\Controllers;

use App\Models\Application;
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

    public function career()
    {
        $educations = ['Post Graduate', 'Graduate', '12th', '10th', '8th'];
        return view('home.career', compact('educations'));
    }

    public function careerStore(Request $request)
    {
        //return public_path('images');
        $data = request()->validate([
            'apply_for' => 'required',
            'name' => 'required|min:3',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'father_husband_name' => 'required',
            'mother_name' => 'required',
            'date' => 'required',
            'month' => 'required',
            'year' => 'required',
            'marital_status' => 'required',
            'education' => 'required',
            'present_address' => 'required',
            'present_post' => 'required',
            'present_dist' => 'required',
            'present_ps' => 'required',
            'present_pin' => 'required',
            'present_phone' => 'required',
            'perma_address' => 'required',
            'perma_post' => 'required',
            'perma_dist' => 'required',
            'perma_ps' => 'required',
            'perma_pin' => 'required',
            'perma_phone' => 'required',
            'declaration' => 'accepted',
            'clear_data' => 'accepted',
            'email' => 'unique:users,email',
        ]);

        // save in user table
        if ($request->hasFile('images')) {
            // Upload image  in this page
            $image = $request->file('images');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = base_path('public/images');
            $image->move($destinationPath, $imageName);

            // save into application page
            $application = new Application();
            $application->name = $request->name;
            $application->email = $request->email;
            $application->present_phone = $request->present_phone;
            $application->perma_number = $request->perma_phone;
            $application->apply_for = implode(",", $request->get('apply_for'));
            $application->image = $imageName;
            $application->father_husband_name = $request->father_husband_name;
            $application->mother_name = $request->mother_name;
            $application->marital_status = $request->marital_status;
            $application->education = $request->education;
            $application->present_address = $request->present_address;
            $application->present_post = $request->present_post;
            $application->present_dist = $request->present_dist;
            $application->present_ps = $request->present_ps;
            $application->present_pin = $request->present_pin;
            $application->present_phone = $request->present_phone;
            $application->perma_address = $request->perma_address;
            $application->perma_post = $request->perma_post;
            $application->perma_dist = $request->perma_dist;
            $application->perma_ps = $request->perma_ps;
            $application->perma_pin = $request->perma_pin;
            $application->perma_phone = $request->perma_phone;
            $application->dob = $request->year . '-' . $request->month . '-' . $request->date;
            $today = date("Y");
            $application->age = $today - $request->year;
            $application->application_id = 'SM-' . rand(9999, 1000);
            $application->save();
        }
        // save in Application table

        return back()->with('message', 'Thank you for you Details , Your application is number ID is :  ' . $application->application_id);
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
