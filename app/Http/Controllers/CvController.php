<?php

namespace App\Http\Controllers;

use App\Models\cv_info;
use Image;
use File;

use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cv = new cv_info;
        if ($request->image) {
            $image = $request->file('image');
            $customName = rand() . "." . $image->getClientOriginalExtension();
            $location = public_path("assets/" . $customName);
            Image::make($image)->resize(500, 500)->save($location);
        }
        $cv->name = $request->name;
        $cv->address = $request->address;
        $cv->phone = $request->phone;
        $cv->email = $request->email;
        $cv->github = $request->github;
        $cv->linkedin = $request->linkedin;
        $cv->carrer = $request->carrer;
        $cv->skill_1 = $request->skill_1;
        $cv->skill_2 = $request->skill_2;
        $cv->skill_3 = $request->skill_3;
        $cv->skill_4 = $request->skill_4;
        $cv->skill_5 = $request->skill_5;
        $cv->project_1 = $request->project_1;
        $cv->project_2 = $request->project_2;
        $cv->project_3 = $request->project_3;
        $cv->bsc = $request->bsc;
        $cv->bsc_res = $request->bsc_res;
        $cv->hsc = $request->hsc;
        $cv->hsc_res = $request->hsc_res;
        $cv->ssc = $request->ssc;
        $cv->ssc_res = $request->ssc_res;

        $cv->image = $customName;
        $cv->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cvs = cv_info::all();
        return view("manage", compact("cvs"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function view($id)
    {
        $cv = cv_info::find($id);
        return view('view', compact("cv"));

    }
}