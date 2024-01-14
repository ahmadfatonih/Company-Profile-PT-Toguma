<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Part;
use App\Models\PartCategory;
use App\Models\PartGallery;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Part\Multipart\RelatedPart;

class PartController extends Controller
{
    public function index($slug)
    {
        $partCategories = PartCategory::where('slug', $slug)->firstOrFail();
        $parts = Part::with('partGallery')
            ->where('part_category_id', $partCategories->id)
            ->where('status', 'active')->get();
        $title = $partCategories->name . " | Toguma";
        $description = 'Berbagai Macam Produk Plastik Part dari PT Toguma Plastic Cikarang';
        $keywords = 'produk plastik part, plastic part';
        $contact = Contact::first();

        return view('pages.plastic-part.item', compact(
            'partCategories',
            'parts',
            'title',
            'description',
            'keywords',
            'contact',
            // 'partGallery'
        ));
    }

    public function show($slug)
    {
        $part = Part::where('slug', $slug)->first();
        $partGalleries = PartGallery::where('part_id', $part->id)->where('status', 'active')->get();
        $contact = Contact::first();
        $title = $part->name . " | Toguma";
        $description = $part->meta_description;
        $keywords = $part->meta_keyword;
        $relatePartCategory = PartCategory::where('id', $part->part_category_id)->firstOrFail();;
        $relatePart = Part::with('partGallery')->where('part_category_id', $relatePartCategory->id)->inRandomOrder()->limit(4)->get();

        return view('pages.plastic-part.detail', compact(
            'part',
            'title',
            'description',
            'keywords',
            'contact',
            'partGalleries',
            'relatePart'
        ));
    }

    public function showCategories()
    {
        $partCategories = PartCategory::where('status', 'active')->get();
        $contact = Contact::first();
        $title = 'Part Category | Toguma';
        $description = 'Berbagai Macam Kategori Produk Plastik Part dari PT Toguma Plastic Cikarang';
        $keywords = 'kategori produk plastik part, plastic part';
        return view('pages.plastic-part.category', compact(
            'partCategories',
            'contact',
            'title',
            'description',
            'keywords'
        ));
    }
}
