<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobListing;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::with('employer')->latest()->simplePaginate();
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job = JobListing::create([
            'title' => $data['title'],
            'salary' => $data['salary'],
            'employer_id' => '1',
        ]);

        return redirect('/jobs/')->with('success', '');
    }

    public function show($id)
    {
        $job = JobListing::findOrFail($id);
        return view('jobs.show', ['job' => $job]);
    }

    public function edit($id)
    {
        $job = JobListing::find($id);
        if ($job) {
            return view('jobs.edit', ['job' => $job]);
        }
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job = JobListing::find($id);
        if ($job) {
            $job->update($data);
            return redirect('/jobs/' . $id)->with('success', '');
        }
    }
    public function destroy($id)
    {
        $job = JobListing::find($id);
        if ($job) {
            $job->delete();
            return redirect('/jobs')->with('success', '');
        }
    }
    public function create()
    {
        return view('jobs.create');
    }
}
