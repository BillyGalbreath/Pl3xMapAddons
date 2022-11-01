<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AddonsController extends Controller {
    /**
     * Display the users list view.
     *
     * @param Request $request
     * @return LengthAwarePaginator|Response
     */
    public function list(Request $request) {
        if ($request->wantsJson()) {
            return Addon::with('user')
                ->orderByDesc('updated_at')
                ->orderByDesc('created_at')
                ->orderBy('title')
                ->paginate(5);
        }
        return Inertia::render('Addons/Index');
    }

    /**
     * Display the users list view.
     *
     * @return Response
     */
    public function single(): Response {
        return Inertia::render('Addons/Addon');
    }
}
