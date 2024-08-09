<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\NailOpportunities;
use App\Models\NailSize;
use App\Models\NailType;
use App\Models\Pictures;
use App\Models\Sizes;
use App\Models\Prices;
use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function public()
    {
        
        $nailTypes = NailType::with('opps', 'sizes', 'prices')->get();
        $Opps = NailOpportunities::with('prices')->get();
        $Sizes = Sizes::with('types', 'prices')->get();
        $Prices = Prices::with('types')->get(); 
        $comments = Comment::all();

        return view('partials.main', 
        [
            'nailTypes' => $nailTypes,
            'Opps' => $Opps,
            'Sizes' => $Sizes,
            'Prices' => $Prices,
            'comments' => $comments
        ]);
    }
    
    public function contact()
    {
        $users = User::all();

        return view('public.contact', ['users' => $users]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function gallery()
    {
        $pictures = Pictures::all();

        return view('public.gallery', ['pictures' => $pictures]);
    }

    /**
     * Display the specified resource.
     */
    public function createComment(Request $request)
    {
        

        $data = $request->all();
        
        $data = Comment::create([
            'name' => $data['user_name'],
            'email' => $data['user_email'],
            'comment' => $data['user_comment']
        ]);

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function destroyComment($id)
    {
        $comments = Comment::find($id);
        $comments->delete();

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
