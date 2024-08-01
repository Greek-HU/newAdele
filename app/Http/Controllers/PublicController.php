<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\NailOpportunities;
use App\Models\NailSize;
use App\Models\NailType;
use App\Models\Pictures;
use App\Models\Size;
use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function public()
    {
        $nailTypes = NailType::with('opps', 'sizes')->get();
        $nailOpps = NailOpportunities::with('types', 'sizes')->get();
        $nailType = NailType::all();
        

        $comments = Comment::all();

        return view('partials.main', 
        [
            'nailTypes' => $nailTypes,
            'nailType' => $nailType,

            'nailOpps'   => $nailOpps,
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function nails()
    {
        $nailTypes = NailType::all();
        $nailSizes = NailSize::with('prices')->get();
        $nailPrices = Price::all();
        return view('public.nails', 
        [
            'nailTypes' => $nailTypes,
            'nailSizes' => $nailSizes,
            'nailPrices' => $nailPrices,
        ]);
    }

    public function eyelashes()
    {
        return view('public.eyelashes');
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
