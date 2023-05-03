<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Field;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Contracts\View\View;
use App\Http\Services\FilterService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Foundation\Application;

/**
 * @class UserController
 */
class UserController extends Controller
{
    /**
     * @param Request $request
     * @param FilterService $filterService
     * @return Application|Factory|View
     */
    public function index(Request $request, FilterService $filterService)
    {
        $filters = $request->all();

        $query = User::query()->with('field');
        $query = $filterService->filter($filters, $query);

        $users = $query->get();

        $positions = Field::pluck('name', 'id');

        return view('welcome', compact('users', 'positions', 'filters'));
    }

    /**
     * @param User $user
     * @return Application|Factory|View
     */
    public function show(User $user)
    {
        $user->load('field', 'work');

        return view('user.profile', compact('user'));
    }

    /**
     * @return Application|Factory|View
     */
    public function edit()
    {
        $user = auth()->user();

        $positions = Field::pluck('name', 'id');

        return view('user.edit', compact('user', 'positions'));
    }

    /**
     * @param UserRequest $request
     * @return RedirectResponse
     */
    public function update(UserRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $user = auth()->user();
        $user->fill($data);

        if ($request->has('photo')) {
            $photo = Storage::disk('public')->putFile('Images', $request->file('photo'));
            $user->photo = str_replace('Images/', '', $photo);
        }

        if ($request->has('cover')) {
            $cover = Storage::disk('public')->putFile('Images', $request->file('cover'));
            $user->cover = str_replace('Images/', '', $cover);
        }

        $field = Field::find($request->get('field_id'));
        $user->field()->associate($field);

        $user->save();

        return redirect()->back()->with('success', 'Thank you! The form was submitted successfully.');
    }
}
