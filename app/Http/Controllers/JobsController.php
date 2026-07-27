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
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id)
    {
        $job = Job::with('employer')->find($id);
        if (!$job) {
            abort(404);
        }
        return view('jobs.show', compact('job'));
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
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit(int $id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the job in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required|numeric',
        ]);

        $job = Job::findOrFail($id);
        $job->update([
            'title' => $request->title,
            'salary' => $request->salary,
        ]);
        return redirect()->route('jobs.show', $id);
    }

    /**
     * Delete the job from the database.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->route('jobs.index');
    }
}
