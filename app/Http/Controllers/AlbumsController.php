<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;



class AlbumsController extends Controller
{
     /** @var album */
     protected $album;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(album $album)
    {
        $this->album = $album;
    }

    //returns a specific album
    public function show($id) {
        $album = $this->album->find($id);

        if (empty($album)) {
               return "No data found.";
        }
       
        return $album;
    }
    
    //create a new album
    public function store(Request $request) {
        // Validate if the input for each field is correct 
        $this->validate($request, [
            'profileID' => 'required|integer',
            'title' => 'required|string',
            'description' => 'required|string',
            'img' => 'required|string',
            'date' => 'required|date',
            'featured' => 'required|boolean',
           ]);

        // Create the album
        $album = $this->album->create([
            'profileID' => $request->input('profileID'),
            'title' => $request->input('title'),
            'description' =>  $request->input('description'),
            'img' =>  $request->input('img'),
            'date' =>  $request->input('date'),
            'featured' =>  $request->input('featured'),
        ]);

        return $album;
    }

    //Update info for a specific album
    public function update(Request $request, $id) {
       // Validate if the input for each field is correct 
       $this->validate($request, [
            'profileID' => 'required|integer',
            'title' => 'required|string',
            'description' => 'required|string',
            'img' => 'required|string',
            'date' => 'required|date',
            'featured' => 'required|boolean',
        ]);

    // Find the album you want to update
    $album = $this->album->find($id);

    // Return error if not found
    if (empty($album)) {
        return "No data found.";
    }

    // Update the album
    $album->update([
        'profileID' => $request->input('profileID'),
        'title' => $request->input('title'),
        'description' =>  $request->input('description'),
        'img' =>  $request->input('img'),
        'date' =>  $request->input('date'),
        'featured' =>  $request->input('featured'),
    ]);

    return $album;
    }

    //Delete a specific album
    public function destroy($id) {
        $album = $this->album->find($id);

        if (empty($album)) {
            return "No data found.";
        }

        $album->delete();

        return;
    }

}
