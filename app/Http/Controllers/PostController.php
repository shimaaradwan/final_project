<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;



class PostController extends Controller
{
    public function index()
    {
        $posts = Post:: get();
        return view("admin.pages.post.index", compact("posts"));

    }
    public function create()
    {
        return view("admin.pages.post.create");

    }
   public function store(Request $request)
    {
        $data = $request->all();
        Validator::make($data, [
            'title' => ['required', 'string', 'min:5', 'max:20'],
            'content' => ['required', 'string', 'min:20', 'max:50'],
             'published' => ['required'],
            'image' => ['required', 'image']
        ])->validate();
        $path = $request->file('image')->store('public');
        $path = str_replace('public', 'storage', $path);
        $data['image'] = $path;
        Post::create($data);
        return redirect()->route('posts.create');
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts');
    }
    public function show(Post $post)
    {
        return view('admin.pages.post.show', compact('post'));
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.pages.post.update', ['post' => $post]);
      }
      public function update(Request $request, string $id)
      {
          $post = Post::find($id);
          $post->update($request->all());
          return redirect()->route('posts.index');
      }

}
