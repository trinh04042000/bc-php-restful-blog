<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return Blog::all();
    }
    public function show($id)
    {
        return Blog::find($id);
    }
    public function store(Request $request)
    {
        $blog = Blog::create($request->all());
        return response()->json($blog, 201);
    }
    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->all());
        return response()->json($blog, 200);
    }
    public function delete(Blog $blog)
    {
        $blog->delete();
        return response()->json($blog, 204);
    }

}
