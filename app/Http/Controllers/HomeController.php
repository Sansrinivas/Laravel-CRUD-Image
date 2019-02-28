<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageUpload;
use App\Setting;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // return view('home');
        return view('dashboard');
    }

    public function setting()
    {
        $settings = Setting::all();

        return view('setting', compact('settings'));
    }

    public function update_setting(Request $request)
    {
       // dd($request->all());

      $update = Setting::findorFail($request->input('id'));
      $update->restaurants = $request->input('restaurants');
      $update->coming_soon = $request->input('coming_soon');
      $update->save();

      return redirect('/setting');
    }

    public function slider(Request $request)
    {
      return view('slider');
    }

    public function postImage(Request $request) {

       // dd($request->all());

       $this->validate($request, [
           'image_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
       ]);
       $image  = new ImageUpload ;
       $image->title = $request->input('title');
       $image->description = $request->input('description');
       $image->link = $request->input('link');
       $imageName = time().'.'.$request->image_file->getClientOriginalExtension();
       $request->image_file->move(public_path('\adminpanel\images'), $imageName);
       $image->image = $imageName;
       $image->save();

       return redirect('/image_view');
    }

    public function image_view(Request $request) {

      $fetches = ImageUpload::all();

      return view('image_view',['fetches'=>$fetches]);
    }

    public function edit($id) {
      // dd($id);

      $task = ImageUpload::findOrFail($id);

      return view('image_view_edit')->with('task', $task);
    }

    public function update(Request $request, $id) {

       // dd($request->all());

       if($request->image != null){
         $imageName = time().'.'.$request->image->extension();
         $request->image->move(public_path('\adminpanel\images'), $imageName);
       }

       $image  = ImageUpload::findOrFail($request->id);
       if($request->title != null){
         $image->title = $request->input('title');
       }
       if($request->description != null){
         $image->description = $request->input('description');
       }
       if($request->link != null){
         $image->link = $request->input('link');
       }
       if($request->image != null){
         $image->image = $imageName;
       }
       // $image->image = $imageName;
       $image->save();

       return redirect('/image_view');
    }

    public function image_delete($id) {

      // dd($id);
      $user = ImageUpload::findOrFail($id);
      unlink(public_path('/adminpanel/images/') . $user->image);

      $user->delete();

      // Session::flash('deleted_user','The user has been deleted');

      return back();
    }

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/login');
    }
}
