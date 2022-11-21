<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;

class ControllerV1 extends Controller
{
    public function index()
    {
        // grąžinam welcome.blade.php puslapi. Čia Galime daryti front-end'ą

        // return view('welcome');

        // https://www.studentstutorial.com/laravel/hello-world
        // return layouts('web');
        // pati pradžia kaip delioti puslapį
        // https://www.youtube.com/watch?v=rDbsaA7bPMU&ab_channel=TechToolIndia
        // https://www.youtube.com/watch?v=YTRT_Cwt9Ts&ab_channel=Cairocoders
    
        // return view('products.index');

        $photos = Photo::all();
        return view('products.index', ['photos' => $photos]);
        
          
        // https://www.youtube.com/watch?v=3s1-qeq-cUY&list=PLaHcKKi-mMjmnhaAcImn8BcWtlkOnD-EK&index=6&ab_channel=WebStack
    }
    public function create()
    {
        return view('products.create');
    }

    public function edit()
    {
        return view('products.edit');
    }

    public function show()
    {
        return view('products.show');
    }    
}
