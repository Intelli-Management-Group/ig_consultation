<?php
use \App\Models\BlogCategories;
use \App\Models\BlogPostCategory;
use App\Models\BlogPostSeo;


function getCategory()
{
    $cats = BlogCategories::all();
    return $cats;

}

function postCat($id){

    $categories_array = array();
    $post_category = BlogPostCategory::selectRaw("catID")->where("postID",$id)->get();
    if(count($post_category) > 0){
        foreach ($post_category as $b){
            $cat = BlogCategories::where('catID',$b->catID)->first();
            $categories_array[$cat->catID] = $cat->catTitle;
        }
    }
    return $categories_array;

}


function latestNews(){
    $latest = BlogPostSeo::orderByDesc('postDate')->limit(3)->get();
    return $latest;
}
//}
//    foreach($data as $d){
//        $categories_array = array();
//        $post_category = BlogPostCategory::selectRaw("catID")->where("postID",$d->postId)->get();
//        foreach (count($post_category) > 0 ? $post_category : array() as $b) {
//
//            $cat = BlogCategories::select("catID", "catTitle")->where('catID',$b->catID)->first();
//            $d->categories_array[$cat->catID] = $cat->catTitle;
//        }
//    }
?>