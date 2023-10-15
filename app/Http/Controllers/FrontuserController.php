<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Models\Comment;
use Auth;

class FrontuserController extends Controller
{
    // user dashboard page
    public function index()
    {
        $Post= Post::where('publish',1)->paginate(10);
        return view('front.dashboard',['posts'=>$Post]);
    }

    // raed post
    public function post($id) 
    {
        $Post   = Post::with(['getComments','getComments.getUser'])->find($id);
        return view('front.read-post',['post'=>$Post]);
    }

    public function post_commnet(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment'           => 'required|min:5',     
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = $request->all();
        $data['user_id'] =  Auth::guard('front')->user()->id;
        $comment = Comment::create($data);
        return redirect()->back()->withSuccess('Commnet posted !!!');
    }
}
