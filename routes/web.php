<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');

    //$img = Image::make('foo.jpg');
    $img = Image::make('uploads/shawna.jpg');
    //$img = Image::make('uploads/test.png');
    //return $img->response('jpg');
    //$img->resize(500, 500, function ($constraint) {
    //    $constraint->aspectRatio();
    //});

    $img->fit(800, 800, function ($constraint) {
        $constraint->upsize();
    });
    $img->resize(800,800);
    $img->insert('images/overlay.png', 'bottom', 100);

    return $img->response('jpg');
    //return response()->download('foo.jpg', 'sgfing_profile_image.jpg', ['Content-Type: image/jpeg']);
});


Route::post('sgfing-image', function(Request $request){
    $validator = Validator::make($request->all(), [
        'photo' => 'required|image'
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withErrors($validator)
            ->withInput();
    }



    $file = $request->file('photo');
    $img = Image::make($file)
        ->fit(800,800)
        ->resize(800,800)
        ->orientate()
        ->insert('images/overlay.png', 'bottom', 100)->save();
    //$img->fit(800, 800, function ($constraint) {
    //    $constraint->upsize();
    //});

    $stored = $request->photo->store('uploads');
    $path = storage_path($stored);
    $newPath = str_replace('storage/', 'storage/app/', $path);

    return response()->download($newPath, 'sgfing_profile_image.jpeg', ['Content-Type: image/jpeg']);
});