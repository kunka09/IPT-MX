<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPosts() {
        $posts = Post::all();
        return view('dashboard', compact('posts'));
    }

    public function showPostFromCategory(Category $category) {
        $posts = Post::where('category_id', $category->id)->get();
        return view('post-category', compact('posts', 'category'));
    }

    public function showAuthors() {
        $users = User::all();
        return view('authors', compact('users'));
    }

    public function authorPostFromCategory($id) {
        $user = User::find($id);
        $posts = Post::where('user_id', $user->id)->get();
        return view('post-author', compact('posts', 'user'));
    }

    public function newPost() {
        return view('post');
    }

    public function storePost(Request $request) {
        $this->validate($request, [
            'user_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'post' => 'required',
        ]);

        Post::create([
            'user_id'   => $request->user_id,
            'category_id' => $request->category_id,
            'post'      => $request->post
        ]);

        return redirect('/dashboard');
    }
}
