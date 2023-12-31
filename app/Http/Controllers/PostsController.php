<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PostsController extends Controller
{
    public function index()
    {

        return view('posts.index', [
            'posts' => $this->getPosts()
        ]);
    }
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
    protected function getPosts()
    {
        return Post::latest()->filter(request(['search', 'category', 'author']))
            ->Paginate(6)->withQueryString();

    }

    public function create()
    {
        return view('posts.create', [
        ]);
    }
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
        $attributes['user_id'] = auth()->id();
        Post::create($attributes);
        return redirect('/');
    }
}
