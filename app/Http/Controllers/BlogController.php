<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPostSeo;
use App\Models\BlogCategories;
use App\Models\BlogPostCategory;
class BlogController extends Controller
{
    public function blogList(){
        try{
            $data = BlogPostSeo::orderByDesc('postDate')->get();

            $latest = BlogPostSeo::orderByDesc('postDate')->limit(3)->get();
            $blog_category = BlogCategories::select("catID", "catTitle")->get();
            return view("blog",compact('data','latest','blog_category'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    
    public function Blog(Request $request , $id){
        try{
            
            $data = BlogPostSeo:: where('postId',$id)->first();
            $data->image = ("uploads/". $data->postBanner);
            $categoryId = BlogPostCategory::where("postID",$data->postID)->first();
            $category = $categoryId->category;
            $data->categoryName = $category->catTitle;
            $latest = BlogPostSeo::orderByDesc('postDate')->limit(3)->get();
            foreach($latest as $l){
                $banners = explode(",", $l->postBanner);
                $image = ("uploads/". $banners[0]);
                $l->image = $image;
            }
            return view("blog-detail",compact('data','latest'));
            
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function BlogCategory($id){
        try{

            $cat = BlogPostCategory::select('postID')->where('catID',$id)->get()->toArray();
            $data = BlogPostSeo::whereIn('postID',$cat)->orderByDesc('postDate')->get();
            $latest = BlogPostSeo::orderByDesc('postDate')->limit(3)->get();
            $blog_category = BlogCategories::select("catID", "catTitle")->get();

            return view("blog",compact('data','latest','blog_category'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }


    public function getBody()
    {
        $id = request("id");
        if($id == 'all'){
            $data = BlogPostSeo::all();
            foreach($data as $d){
                $d->blog = $d;
                $banner_images=array();
                $files = explode(",", $d->postBanner);
                foreach ($files as $key => $f) {
                    $image = ("uploads/". $f);
                    array_push($banner_images, $image);
                }
                $d->image = $banner_images;
                $categoryId = BlogPostCategory::where("postID",$d->postID)->first();
                $category = $categoryId->category;
                $d->categoryName = $category->catTitle;
            }
        }else{
            $data = BlogPostCategory::where("catID",$id)->get();
            
            foreach($data as $d){
                $blog  = $d->blog;
                $banner_images=array();
                $files = explode(",", $d->postBanner);
                foreach ($files as $key => $f) {
                    $image = ("uploads/". $f);
                    array_push($banner_images, $image);
                }
                $d->image = $banner_images;
                $categoryId = BlogPostCategory::where("postID",$d->postID)->first();
                $category = $categoryId->category;
                $d->categoryName = $category->catTitle;
                $d->blog = $blog;
            }
        }
        $view = view("blogajax", compact('data'))->render();

        return response()->json(['html' => $view]);
    }

}
