<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class WebController extends Controller {
    /**
     * Display the home page view.
     *
     * @return Response
     */
    public function index(): Response {
        return Inertia::render('Index');
    }

    /**
     * Display the user contact view.
     *
     * @return Response
     */
    public function contact(): Response {
        return Inertia::render('Contact');
    }

    /**
     * Display the user dashboard view.
     *
     * @return Response
     */
    public function dashboard(): Response {
        return Inertia::render('Dashboard');
    }

    /**
     * Display the user settings view.
     *
     * @return Response
     */
    public function settings(): Response {
        return Inertia::render('Settings');
    }
}
