<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Material;
use App\Models\MaterialCategory;
use App\Models\MaterialGallery;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index($slug)
    {
        $materialCategories = MaterialCategory::where('slug', $slug)->firstOrFail();
        $materials = Material::with('materialGallery')
            ->where('material_category_id', $materialCategories->id)
            ->where('status', 'active')->get();
        $title = $materialCategories->name . " | Toguma";
        $description = 'Berbagai Macam Produk Plastik Material dari PT Toguma Plastic Cikarang';
        $keywords = 'produk plastik material, plastic material';
        $contact = Contact::first();

        return view('pages.plastic-material.item', compact(
            'materialCategories',
            'materials',
            'title',
            'description',
            'keywords',
            'contact',
            // 'materialGallery'
        ));
    }

    public function show($slug)
    {
        $material = Material::where('slug', $slug)->first();
        $materialGalleries = MaterialGallery::where('material_id', $material->id)->where('status', 'active')->get();
        $contact = Contact::first();
        $title = $material->name . " | Toguma";
        $description = $material->meta_description;
        $keywords = $material->meta_keyword;
        $relateMaterialCategory = MaterialCategory::where('id', $material->material_category_id)->firstOrFail();;
        $relateMaterial = Material::with('materialGallery')->where('material_category_id', $relateMaterialCategory->id)->inRandomOrder()->limit(4)->get();

        return view('pages.plastic-material.detail', compact(
            'material',
            'title',
            'description',
            'keywords',
            'contact',
            'materialGalleries',
            'relateMaterial'
        ));
    }

    public function showCategories()
    {
        $materialCategories = MaterialCategory::where('status', 'active')->get();
        $contact = Contact::first();
        $title = 'Material Category | Toguma';
        $description = 'Berbagai Macam Kategori Produk Plastik Material dari PT Toguma Plastic Cikarang';
        $keywords = 'kategori produk plastik material, plastic material';
        return view('pages.plastic-material.category', compact(
            'materialCategories',
            'contact',
            'title',
            'description',
            'keywords'
        ));
    }
}
