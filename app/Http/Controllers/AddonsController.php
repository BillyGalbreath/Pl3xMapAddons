<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class AddonsController extends Controller {
    /**
     * Display the users list view.
     *
     * @return Response
     */
    public function list(): Response {
        return Inertia::render('Addons');
    }

    /**
     * Display the users list view.
     *
     * @return Response
     */
    public function single(): Response {
        return Inertia::render('Addon');
    }
}
