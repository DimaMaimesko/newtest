<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
   public function index(){
       $albums = Album::with('Photos')->get();
       return view('albums.index')->with('albums',$albums);
   }

   public function create(){

       return view('albums.create');
   }

   public function store(Request $request){
       $filenameWithExt = $request->image->getClientOriginalName();
       $filenameExt = pathinfo($filenameWithExt, PATHINFO_EXTENSION);
       $filenameBase = pathinfo($filenameWithExt, PATHINFO_FILENAME);
       $uniqueFilename = $filenameBase.'_'.time().'.'.$filenameExt;
       $path = $request->image->storeAs('public/album_covers',$uniqueFilename);

       $coverImage = new Album();
       $coverImage->name = $request->input('name');
       $coverImage->description = $request->input('description');
       $coverImage->cover_image =  $uniqueFilename;

       if ($coverImage->save()){
           return redirect()->route('albums.index')->with('success','Album created');
       }
       return redirect()->route('albums.index')->with('error','Error occurred');
   }

   public function show($id){

       $album = Album::find($id)->with('Photos')->get();
       return route
   }
}
