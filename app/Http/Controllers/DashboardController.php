<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $applications = Application::all();
        return view('admin.index', compact('applications'));
    }

    public function show($id){
        $application = Application::findOrFail($id);
        return view('admin.show', compact('application'));
    }

    public function destroy($id){
        $application = Application::findOrFail($id);

        Storage::delete('public/profile_images/' . $application->image);
        Storage::delete('public/videos/' . $application->video);

        $application->delete();
        return redirect('/dashboard')->with('success', 'Application Deleted!');
    }
}
