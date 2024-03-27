<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function showPagesHome(){
        $pages = Pages::all();
        return view('Page.home',compact('pages'));
    }

    public function pageCreateForm(){
        return view('Page.createForm');
    }

    public function pageCreate(Request $request){
        $input=$request->all();
        $imageName = time().'.'.$request->banner->extension();
        $request->banner->move(public_path('uploads'), $imageName);

        $page = Pages::create([
            'name' => $input['name'],
            'key' => $input['key'],
            'title' => $input['title'],
            'description' => $input['description'],
            'banner' => $imageName,
            'user_id' => Auth::id()
        ]);

        if($page){
            return redirect()->route('page.home');
        }
        else{
            return view('general.error');
        }

    }

    public function showPage($key){
        $page = Pages::where('key',$key)->first();

        return view('Page.show',compact('page'));

    }
}
