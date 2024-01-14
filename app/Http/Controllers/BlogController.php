<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $title = 'Article | Toguma';
        $description = 'Berbagai macam artikel dan blog dari PT Toguma Plastic Cikarang';
        $keywords = 'blog toguma plastic cikarang, blog plastic, artikel plastic part, artikel plastic material, artikel plastik';
        $blogs = Blog::where('status', 'active')->get();
        $contact = Contact::first();

        return view('pages.blog.plastic-blog', compact(
            'title',
            'description',
            'keywords',
            'blogs',
            'contact'
        ));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $relateBlog = Blog::where('status', 'active')->inRandomOrder()->limit(4)->get();
        $contact = Contact::first();
        $title = 'Article | Toguma';
        $description = $blog->meta_description;
        $keywords = $blog->meta_keyword;
        return view('pages.blog.plastic-blog-detail', compact(
            'blog',
            'contact',
            'title',
            'description',
            'keywords',
            'relateBlog'
        ));
    }
}
