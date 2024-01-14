<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\MaterialCategory;
use App\Models\PartCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Toguma';
        $description = 'PT Toguma Plastic Cikarang';
        $keywords = 'pt toguma plastic cikarang, plastic part, plastic material, artikel plastic';
        $contact = Contact::first();
        $blogs = Blog::where('status', 'active')->inRandomOrder()->limit(4)->get();
        $about = About::first();
        $partCategories = PartCategory::where('status', 'active')->limit(8)->get();
        $materialCategories = MaterialCategory::where('status', 'active')->limit(8)->get();

        return view('pages.main', compact(
            'title',
            'description',
            'keywords',
            'contact',
            'blogs',
            'about',
            'partCategories',
            'materialCategories'
        ));
    }
}
