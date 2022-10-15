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
    public function index() {
        return Inertia::render('Welcome');
    }

    /**
     * Display the user dashboard view.
     *
     * @return Response
     */
    public function dashboard() {
        return Inertia::render('Dashboard');
    }

    /**
     * Display the user settings view.
     *
     * @return Response
     */
    public function settings() {
        return Inertia::render('Settings');
    }
}
