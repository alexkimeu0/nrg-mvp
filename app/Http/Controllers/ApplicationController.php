<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'image|max:1999|required',
            'video' => 'required',
            'link' => 'required',
        ]);

        $application = new Application;
        $application->full_name = $request->input('full_name');
        $application->email = $request->input('email');
        $application->phone = $request->input('phone');
        $application->link = $request->input('link');

        
        if($request->hasFile('image') && $request->hasFile('video')){

            $filenameWithExt = $request->file('image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $ext = $request->file('image')->getClientOriginalExtension();

            $filenameToStore = $filename . '_' . time() . '.' . $ext;
            
            $path = $request->file('image')->storeAs('public/profile_images', $filenameToStore);

            $application->image = $filenameToStore;

            $vidWithExt = $request->file('video')->getClientOriginalName();

            $vid = pathinfo($vidWithExt, PATHINFO_FILENAME);

            $vidExt = $request->file('video')->getClientOriginalExtension();

            $vidToStore = $vid . '_' . time() . '.' . $vidExt;
            
            $vidPath = $request->file('video')->storeAs('public/videos', $vidToStore);

            $application->video = $vidToStore;

            $application->save();

            return redirect('/application')->with('success', 'Application sent!');
        }else{
            return redirect('/application');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
