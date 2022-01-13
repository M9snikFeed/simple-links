<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLinkRequest;
use App\Http\Resources\LinkResource;
use App\Models\Link;
use Illuminate\Support\Str;

class LinksController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateLinkRequest $request
     * @return LinkResource
     */
    public function store(CreateLinkRequest $request): LinkResource
    {
        $data = $request->validated();
        $data['simple_url'] = mt_rand(1, 3) . Str::random(6) . mt_rand(1, 3);

        if(Link::where('simple_url', $data['simple_url'])->count() > 0){
            $data['simple_url'] = mt_rand(1, 3) . Str::random(6) . mt_rand(1, 3);
        }

        $link = new Link();
        $link->fill($data);
        $link->save();
        return new LinkResource($link);
    }
}
