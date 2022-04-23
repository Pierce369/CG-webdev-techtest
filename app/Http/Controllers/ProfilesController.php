<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Album;



class ProfilesController extends Controller
{
     /** @var profile */
     protected $profile;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    //returns all profiles
    public function index() {
        $profiles = $this->profile->all();

        return $profiles;
    }

    //returns a specific profile
    public function show($id) {
        $profile = $this->profile->find($id);

        if (empty($profile)) {
               return "No data found.";
        }

        $album = DB::table("albums")
                ->where("profileID", "=", $id)
                ->get();
        
        $out = json_decode($profile);
        $out->album = json_decode($album);
        return json_encode($out);
    }
    
    //create a new profile
    public function store(Request $request) {
        // Validate if the input for each field is correct 
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'bio' => 'required|string',
            'profile_picture' => 'required|string',
           ]);

        // Create the profile
        $profile = $this->profile->create([
            'name' => $request->input('name'),
            'phone' =>  $request->input('phone'),
            'email' =>  $request->input('email'),
            'bio' =>  $request->input('bio'),
            'profile_picture' =>  $request->input('profile_picture'),
        ]);

        return $profile;
    }

    //Update info for a specific profile
    public function update(Request $request, $id) {
       // Validate if the input for each field is correct 
       $this->validate($request, [
        'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'bio' => 'required|string',
            'profile_picture' => 'required|string',
           ]);

    // Find the profile you want to update
    $profile = $this->profile->find($id);

    // Return error if not found
    if (empty($profile)) {
        return "No data found.";
    }

    // Update the profile
    $profile->update([
        'name' => $request->input('name'),
            'phone' =>  $request->input('phone'),
            'email' =>  $request->input('email'),
            'bio' =>  $request->input('bio'),
            'profile_picture' =>  $request->input('profile_picture'),
        ]);

    return $profile;
    }

    //Delete a specific profile
    public function destroy($id) {
        $profile = $this->profile->find($id);

        if (empty($profile)) {
            return "No data found.";
        }

        $profile->delete();

        return;
    }

    //
}
