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
    public function list() {
        return Inertia::render('Addons');
    }

    /**
     * Display the users list view.
     *
     * @return Response
     */
    public function single() {
        return Inertia::render('Addon');
    }
}
