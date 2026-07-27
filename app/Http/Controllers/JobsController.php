<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    /**
     * Display the job listings.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $jobs = Job::with('employer')->simplePaginate(15);
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Display the job creation form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Display the job details.
     *
     * @param \App\Models\Job $job
     * @return \Illuminate\View\View
     */
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    /**
     * Store the job in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required|numeric',
        ]);

        Job::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'employer_id' => 1,
        ]);

        return redirect()->route('jobs.index');
    }

    /**
     * Display the job edit form.
     *
     * @param \App\Models\Job $job
     * @return \Illuminate\View\View
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the job in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @param Job $job
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required|numeric',
        ]);

        $job->title = $request->title;
        $job->salary = $request->salary;
        $job->update();

        return redirect()->route('jobs.show', $job);
    }

    /**
     * Delete the job from the database.
     *
     * @param Job $job
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index');
    }
}
