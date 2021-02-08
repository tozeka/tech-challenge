<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasFetchAllRenderCapabilities;
use App\Http\Requests\MovieRequest;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MovieController extends Controller
{

    use HasFetchAllRenderCapabilities;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->setGetAllBuilder(Movie::query());
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
    public function store(MovieRequest $request)
    {
        $movie = new Movie($request->validated());
        $movie->save();

        return new MovieResource($movie);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return new MovieResource($movie);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        $movie->fill($request->validated());
        $movie->save();

        return new MovieResource($movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
         $movie->delete();
         return response()->noContent();
    }
}
