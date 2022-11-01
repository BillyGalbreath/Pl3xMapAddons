<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddonRequest;
use App\Http\Requests\UpdateAddonRequest;
use App\Http\Resources\AddonResource;
use App\Models\Addon;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class AddonsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index() {
        return AddonResource::collection(Addon::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAddonRequest $request
     * @return AddonResource
     */
    public function store(StoreAddonRequest $request) {
        $user = auth()->user();

        $addon = Addon::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'icon' => $request->icon,
            'slug' => $request->slug,
            'summary' => $request->summary,
            'description' => $request->description,
        ]);

        return new AddonResource($addon);
    }

    /**
     * Display the specified resource.
     *
     * @param Addon $id
     * @return AddonResource
     */
    public function show(Addon $id) {
        return new AddonResource($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAddonRequest $request
     * @param Addon $id
     * @return Response
     */
    public function update(UpdateAddonRequest $request, Addon $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Addon $id
     * @return Response
     */
    public function destroy(Addon $id) {
        //
    }
}
