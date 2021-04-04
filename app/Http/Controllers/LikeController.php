<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Redirect;

class LikeController extends Controller
{
    //

    public function liked_post($post_id){

        $like = new Like([
            'post_id' => $post_id,
            // 'post_id' => 1,
            'user_id' => auth()->user()->id
            
        ]);

        $like->save();
        return Redirect::back();
    }

    public function unliked_post($post_id){
        $data = Like::wherePostId($post_id);
        $data->delete();
        return Redirect::back();
    }
}
