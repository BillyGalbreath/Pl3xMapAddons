<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class UsersController extends Controller {
    /**
     * Display the users list view.
     *
     * @return Response
     */
    public function index() {
        return Inertia::render('Users/Index', [
            'users' => User::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn($user) => [
                    'id' => $user->id,
                    'name' => $user->name
                ]),
            'filters' => Request::only(['search'])
        ]);
    }

    /**
     * Display the create user view.
     *
     * @return Response
     */
    public function create() {
        return Inertia::render('Users/Create');
    }

    /**
     * Post a new user to the database then redirect to users list.
     *
     * @return RedirectResponse
     */
    public function post() {
        $attributes = Request::validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        User::create($attributes);
        return redirect('/users');
    }
}
