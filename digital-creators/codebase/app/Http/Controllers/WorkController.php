<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Contracts\View\View;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Foundation\Application;

/**
 * @class WorkController
 */
class WorkController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $works = auth()->user()->work;

        return view('project.index', compact('works'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * @param ProjectRequest $request
     * @return RedirectResponse
     */
    public function store(ProjectRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $user = auth()->user();

        $work = new Work;
        $work->fill($data);

        if ($request->has('photo')) {
            $photo = Storage::disk('public')->putFile('Images', $request->file('photo'));
            $work->photo = str_replace('Images/', '', $photo);
        }

        $work->createdBy()->associate($user);
        $work->updatedBy()->associate($user);
        $work->save();

        return redirect()->back()->with('success', 'Thank you! The form was submitted successfully.');
    }

    /**
     * @param Work $work
     * @return Application|Factory|View
     */
    public function edit(Work $work)
    {
        return view('project.edit', compact('work'));
    }

    /**
     * @param ProjectRequest $request
     * @param Work $work
     * @return RedirectResponse
     */
    public function update(ProjectRequest $request, Work $work): RedirectResponse
    {
        $data = $request->validated();

        $work->fill($data);

        if ($request->has('photo')) {
            $photo = Storage::disk('public')->putFile('Images', $request->file('photo'));
            $work->photo = str_replace('Images/', '', $photo);
        }

        $work->save();

        return redirect()->route('work.update', ['work' => $work->slug])->with('success', 'Thank you! The form was submitted successfully.');
    }

    /**
     * @param Work $work
     * @return RedirectResponse
     */
    public function destroy(Work $work): RedirectResponse
    {
        $work->delete();

        return redirect()->back()->with('success', 'Project was deleted successfully');
    }
}
