<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function showCreateForm() {
        return view('create-post');
    }

    public function storeNewPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        $newPost = Post::create($incomingFields);
        return redirect("/post/{$newPost->id}")->with('success', 'You have successfully created a new post!');
    }


    public function delete(Post $post)
    {
        if (auth()->user()->cannot('delete', $post)) {
            return 'You do not have permission to delete this post!';
        }
        $post->delete();
        return redirect('/profile/' . auth()->user()->id)->with('success', 'Post successfully deleted');
    }
    public function viewSinglePost(Post $post) {
        $post['body'] = Str::markdown($post->body);
        return view('single-post', ['post' => $post]);
    }


}
