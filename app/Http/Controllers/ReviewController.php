<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function ReviewPost(Request $request){
        $reviews = new Review();
        $reviews->userName = Auth::user()->name;
        $reviews->themeMessage = $request->input('themeMessage');
        $reviews->textMessage = $request->input('textMessage');

        $reviews->save();

        return redirect()->route('list-review');
    }

    public function reviews(){
        return view('list-review', ['listReview' => Review::all()]);

    }
}
