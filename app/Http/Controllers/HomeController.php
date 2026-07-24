<?php

namespace App\Http\Controllers;

use App\Models\Job;

class HomeController extends Controller
{
    /**
     * Display the home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display the jobs page
     *
     * @return \Illuminate\View\View
     */
    public function jobs()
    {
        $jobs = Job::with('employer')->simplePaginate(15);
        return view('jobs', compact('jobs'));
    }

    /**
     * Display the job page
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function job(int $id)
    {
        $job = Job::find($id, ['id', 'title', 'salary']);
        if (!$job) {
            abort(404);
        }
        return view('job', compact('job'));
    }

    /**
     * Display the contact page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }
}
