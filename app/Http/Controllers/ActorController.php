<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasFetchAllRenderCapabilities;
use App\Models\Actor;
use App\Http\Requests\ActorRequest;
use App\Http\Resources\ActorResource;
use App\Http\Resources\MovieResource;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    
     use HasFetchAllRenderCapabilities;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->setGetAllBuilder(Actor::query());
        $this->setGetAllOrdering('name', 'asc');
        $this->parseRequestConditions($request);
        return new ResourceCollection($this->getAll()->paginate());
       
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActorRequest $request)
    {
        
        $actor = new Actor($request->validated());
        $actor->save();

        return new ActorResource($actor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        return new ActorResource($actor);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(ActorRequest $request, Actor $actor)
    {
        $actor->fill($request->validated());
        $actor->save();

        return new ActorResource($actor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
         $actor->delete();
        
         return response()->noContent();
    }

    public function movies(Actor $actor)
    {
    
       $movies = $actor->movies()->orderByReleaseDate()->get()->unique();
       
       return MovieResource::collection($movies);
       
    }

    public function genre(Actor $actor)
    {
        
    }
    
}
