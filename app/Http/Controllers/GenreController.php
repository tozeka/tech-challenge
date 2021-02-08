<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasFetchAllRenderCapabilities;
use App\Http\Requests\GenreRequest;
use App\Models\Actor;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GenreController extends Controller
{

    use HasFetchAllRenderCapabilities;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return ResourceCollection
     */
    public function index(Request $request)
    {
        $this->setGetAllBuilder(Genre::query());
        $this->setGetAllOrdering('name', 'asc');
        $this->parseRequestConditions($request);
        return new ResourceCollection($this->getAll()->paginate());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param GenreRequest $request
     * @return \App\Http\Resources\Genre
     */
    public function store(GenreRequest $request)
    {
        $genre = new Genre($request->validated());
        $genre->save();

        return new \App\Http\Resources\Genre($genre);
    }

    /**
     * Show the resource
     *
     * @param Genre $genre
     * @return \App\Http\Resources\Genre
     */
    public function show(Genre $genre)
    {
        return new \App\Http\Resources\Genre($genre);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Genre $genre
     * @param GenreRequest $request
     * @return \App\Http\Resources\Genre
     */
    public function update(Genre $genre, GenreRequest $request)
    {
        $genre->fill($request->validated());
        $genre->save();

        return new \App\Http\Resources\Genre($genre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Genre $genre
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return response()->noContent();
    }

    public function actors(Genre $genre)
    {
     
        
        $actors =  Actor::withCount(['roles' => function($query) use($genre){
                $query->whereHas('movie.genres', function($query) use($genre){
                    $query->where('id',$genre->id);   
                });
        
        }])->orderBy('roles_count','desc')->get();

      
        return $actors;
      
    }
}
