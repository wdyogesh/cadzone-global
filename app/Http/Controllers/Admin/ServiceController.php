<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // index method to show the all services lists

    public function index()
    {
        $services = Services::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function show(Services $service)
    {
        return view('admin.services.show', compact('service'));
    }

    public function store(Request $request)
    {
        $image_1 = $request->file('image_1');
        $new_name_1 = rand() . '.' . $image_1->getClientOriginalExtension();
        $image_1->move(public_path('service_images'), $new_name_1);

        $image_2 = $request->file('image_2');
        $new_name_2 = rand() . '.' . $image_2->getClientOriginalExtension();
        $image_2->move(public_path('service_images'), $new_name_2);

        $image_3 = $request->file('image_3');
        $new_name_3 = rand() . '.' . $image_3->getClientOriginalExtension();
        $image_3->move(public_path('service_images'), $new_name_3);
        $fontArry = ['fa-campground', 'fa-industry', 'fa-warehouse', 'fa-warehouse-alt', 'fa-house-damage', 'fa-tools', 'fa-tools', 'fa-house-damage'];
        $fontValue = $fontArry[array_rand($fontArry, 1)];
        $service = Services::create([
            'title' => request('title'),
            'title_slug' => Str::slug(request('title'), '-'),
            'description' => request('description'),
            'image_1' => $new_name_1,
            'image_2' => $new_name_2,
            'image_3' => $new_name_3,
            'font_code' => $fontValue,
        ]);
        return redirect()->route('services.index')->with('message', 'Service created Successfully !!');
    }

    public function edit($id)
    {
        $service = Services::find($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Services $service, Request $request)
    {
        if ($request->hasFile('image_1')) {
            $image_1 = $request->file('image_1');
            $new_name_1 = rand() . '.' . $image_1->getClientOriginalExtension();
            $image_1->move(public_path('service_images'), $new_name_1);

            $service->update([
                'title' => request('title'),
                'title_slug' => Str::slug(request('title'), '-'),
                'description' => request('description'),
                'image_1' => $new_name_1,
            ]);
        } elseif ($request->hasFile('image_2')) {
            $image_2 = $request->file('image_2');
            $new_name_2 = rand() . '.' . $image_2->getClientOriginalExtension();
            $image_2->move(public_path('service_images'), $new_name_2);
            $service->update([
                'title' => request('title'),
                'title_slug' => Str::slug(request('title'), '-'),
                'description' => request('description'),
                'image_2' => $new_name_2,
            ]);
        } elseif ($request->hasFile('image_3')) {
            $image_3 = $request->file('image_3');
            $new_name_3 = rand() . '.' . $image_3->getClientOriginalExtension();
            $image_3->move(public_path('service_images'), $new_name_3);
            $service->update([
                'title' => request('title'),
                'title_slug' => Str::slug(request('title'), '-'),
                'description' => request('description'),
                'image_3' => $new_name_3,
            ]);

        } else {
            $service->update([
                'title' => request('title'),
                'title_slug' => Str::slug(request('title'), '-'),
                'description' => request('description'),
            ]);
        }
        return redirect()->route('services.index')->with('message', 'Service Details Updated Successfully !!');
    }

    public function destroy(Services $service)
    {
        $service->delete();
        return redirect()->route('services.index');
    }

}
