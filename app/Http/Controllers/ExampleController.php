<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage() {
        // imagine we loaded data from database
        $ourName = 'Herman';
        $animals = ['cat', 'dog', 'fish'];


        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Meowsalot']);
    }

    public function aboutPage() {
        return view('single-post');
    }
}
