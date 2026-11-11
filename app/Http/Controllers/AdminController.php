<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\BlogMembers;
use App\Models\BlogPostSeo;
use App\Models\BlogCategories;
use App\Models\BlogPostCategory;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    // Login methods

    public function Login(Request $request){
        try{
            $element_array = array(
                'uname' => 'required',
                'password' => 'required'
            );
            $validator = Validator::make($request->all(), $element_array, [
                'uname.required' => 'Please enter user name ',
                'password.required' => "Please enter password"
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            $username = $request->input("uname");
            $password = $request->input("password");
            print_r(md5($password));
            $data = User::where("username", $username)->where("password",  md5($password))->first();
            if (!$data) {
                return redirect()->back()->withErrors(['User not found']);
            }
            else{
                Auth::loginUsingId($data->id);
                return redirect()->route('admin-blog-list');
            }
        }catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    // Blog's methods

    public function blogList(Request $request){
        try{
            if ($request->ajax()) {
                $data = BlogPostSeo::all();
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $publish_button = "";
                        $delete_onclick = 'javascript:deleteBlog(' . $row->postID . ');';
                        $btn = '<span class="editicn"><a href="' . url("/edit-blog/$row->postID ") . '"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span>
                                <span class="deleteicn"><a onclick="' . $delete_onclick . '"><i class="fa fa-trash" aria-hidden="true"></i></a></span>' . $publish_button;

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }

            return view("admin.list");

            // dd(Auth::user());
//            $data = BlogPostSeo::all();
//            foreach($data as $d){
//                $publish_button = "";
//                $delete_onclick = 'javascript:deleteBlog(' . $d->postID . ');';
//                $d->action = '<span class="editicn"><a href="' . url("/edit-blog/$d->postID ") . '"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span>
//                <span class="deleteicn"><a onclick="' . $delete_onclick . '"><i class="fa fa-trash" aria-hidden="true"></i></a></span>' . $publish_button;
//            }
//            return view("admin.list",compact('data'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function loadAddblog()
    {
        try {
            $blog_category_array = array();
            $blog_category_data = BlogCategories::selectRaw("catID ,catTitle")->get();
            foreach (count($blog_category_data) > 0 ? $blog_category_data : array() as $b) {
                $blog_category_array[$b->catID] = $b->catTitle;
            }
            return view("admin/insert", compact("blog_category_array"));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function insertblog(Request $request)
    {
        try{

                $element_array = array(
                    'title' => 'required',
                    'categoryId' => 'required'
                );
                $validator = Validator::make($request->all(), $element_array, [
                    'title.required' => 'Please enter blog title ',
                    'categoryId.required' => 'Please select category'
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator->errors())->withInput();
                }
                $blog = new BlogPostSeo();
                $blog->postTitle =$request->input("title");
                $title= strtolower($request->input("title"));
                $postSlug = str_replace(' ', '_', $title);
                $blog->postSlug = $postSlug;
                $blog->postBanner = "";
                if($request->file("banner") != null)
                {
                    $file=$request->file("banner");

                    $image_name = $file->getClientOriginalName();
                    $destinationPath = public_path('/uploads');
                    $imagePath = $destinationPath. "/".  $image_name;
                    $file->move($destinationPath, $image_name);

                    $blog->postBanner = $image_name;


                    // multiple file code
//                    $files=$request->file("banner");

//                    $banner_images=array();
//                foreach ($files as $key => $f) {
//                    $image_name = $f->getClientOriginalName();
//                    $destinationPath = public_path('/uploads');
//                    $imagePath = $destinationPath. "/".  $image_name;
//                    $f->move($destinationPath, $image_name);
//                    array_push($banner_images, $image_name);
//                }
//                $blog->postBanner = implode(',',$banner_images);
                }

                $blog->postDesc =$request->input("description");
                $blog->postCont =$request->input("summary");
                $blog->postSource =$request->input("source");
                $blog->postDate =$request->input("date");


                $blog->save();


                $categories = $request->input("categoryId");
                foreach ($categories as $cat){
                    $blog_cat = new BlogPostCategory();
                    $blog_cat->postID = $blog->postID;
                    $blog_cat->catID = $cat;
                    $blog_cat->save();
                }
                return redirect()->route("admin-blog-list");
        }catch(\Exception $e){
            return $e->getMessage();
        }    
    }

    public function editBlog($id)
    {
        // if ($id == "") {
        //     return view("errors.403");
        // }
        $data = BlogPostSeo:: where('postID',$id)->first();
        $categories_array = array();
        $post_category = BlogPostCategory::selectRaw("catID")->where("postID",$id)->get();
        foreach (count($post_category) > 0 ? $post_category : array() as $b) {
            $categories_array[] = $b->catID;
        }
//        $category = $categoryId->category;
//        $data->categoryId = $category->catID;
//        $data->categoryName = $category->catTitle;
        // if (!$data) {
        //     return view("errors.404");
        // }
        $blog_category_array = array();
        $blog_category_data = BlogCategories::selectRaw("catID ,catTitle")->get();
        foreach (count($blog_category_data) > 0 ? $blog_category_data : array() as $b) {
            $blog_category_array[$b->catID] = $b->catTitle;
        }
        return view('admin/edit', compact('data','blog_category_array','categories_array'));
    }

    public function updateBlog(Request $request,$id)
    {
        try{
            $element_array = array(
                'postTitle' => 'required'
            );
            $validator = Validator::make($request->all(), $element_array, [
                'postTitle.required' => 'Please enter blog title '
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            $data = BlogPostSeo::where("postID", "$id")->first();
           
            $data->postTitle =$request->input("postTitle");
//            $data->postBanner = "";


            $file=$request->file("postBanner");
            if($file != ''){

//                throwException($file);
                if ($data->postBanner != null) {
                    if (file_exists(public_path("uploads/" . $data->postBanner))) {
                        unlink(public_path("uploads/" . $data->postBanner));
                    }
                }



                    if ($data->postBanner != null) {
                    $old_banners = explode(",", $data->postBanner);
                    foreach (count($old_banners) > 0 ? $old_banners : array() as $b) {
                        if (file_exists(public_path("uploads/" . $b))) {
                            unlink(public_path("uploads/" . $b));
                        }
                    }
                }
                $image_name = $file->getClientOriginalName();
                $destinationPath = public_path('/uploads');
                $imagePath = $destinationPath. "/".  $image_name;
                $file->move($destinationPath, $image_name);

                $data->postBanner = $image_name;
            }


//            $files=$request->file("postBanner");
//            if($files != null){
//                if ($data->postBanner != null) {
//                    $old_banners = explode(",", $data->postBanner);
//                    foreach (count($old_banners) > 0 ? $old_banners : array() as $b) {
//                        if (file_exists(public_path("uploads/" . $b))) {
//                            unlink(public_path("uploads/" . $b));
//                        }
//                    }
//                }
//                $banner_images=array();
//                foreach ($files as $key => $f) {
//                    $image_name = $f->getClientOriginalName();
//                    $destinationPath = public_path('/uploads');
//                    $imagePath = $destinationPath. "/".  $image_name;
//                    $f->move($destinationPath, $image_name);
//                    array_push($banner_images, $image_name);
//                }
//                $data->postBanner = implode(',',$banner_images);
//            }
            $data->postDesc =$request->input("postDesc");
            $data->postCont =$request->input("postCont");
            $data->postSource =$request->input("postSource");
            $data->postDate =$request->input("postDate");
            $data->save();

            $delete_cat = BlogPostCategory::where('postId',$id)->delete();
            $categories = $request->input("categoryId");
            foreach ($categories as $cat){
                $blog_cat = new BlogPostCategory();
                $blog_cat->postID = $data->postID;
                $blog_cat->catID = $cat;
                $blog_cat->save();
            }

            return redirect()->route("admin-blog-list");
        }catch(\Exception $e){
            return $e->getMessage();
        }  
    }

    public function deleteBlog($id)
    {
        try {
            // if ($id == "") {
            //     return view("errors.403");
            // }
            $data = BlogPostSeo:: where('postId',$id)->first();
            // if (!$data) {
            //     return view("errors.404");
            // }
            if ($data->postBanner != null) {
                $old_banners = explode(",", $data->postBanner);
                foreach (count($old_banners) > 0 ? $old_banners : array() as $b) {
                    if (file_exists(public_path("uploads/" . $b))) {
                        unlink(public_path("uploads/" . $b));
                    }
                }
            }
            $data->delete();
            return redirect()->route("admin-blog-list")->with("success", "Blog deleted successfully");
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    // Category's methods

    public function categoryList()
    {
        try{
            $data = BlogCategories::all();
            foreach($data as $d){
                $publish_button = "";
                $delete_onclick = 'javascript:deleteCategory(' . $d->catID . ');';
                $d->action = '<span class="editicn"><a href="' . url("/edit-category/$d->catID ") . '"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span>
                <span class="deleteicn"><a onclick="' . $delete_onclick . '"><i class="fa fa-trash" aria-hidden="true"></i></a></span>' . $publish_button;
            }
            return view("admin.categories",compact('data'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function loadAddcategory()
    {
        try {
            return view("admin/category-add");
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function insertCategory(Request $request)
    {
        try{
            $element_array = array(
                'title' => 'required'
            );
            $validator = Validator::make($request->all(), $element_array, [
                'title.required' => 'Please enter category title '
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            $category = new BlogCategories();
            $category->catTitle =$request->input("title");
            $category->save(); 
            return redirect()->route("admin-category-list");
    }catch(\Exception $e){
        return $e->getMessage();
    }    
    }

    public function editCategory($id)
    {
        // if ($id == "") {
        //     return view("errors.403");
        // }
        $data = BlogCategories:: where('catID',$id)->first();
        // if (!$data) {
        //     return view("errors.404");
        // }
        return view('admin/category-edit', compact('data'));
    }

    public function updateCategory(Request $request,$id)
    {
        try{
            $element_array = array(
                'catTitle' => 'required'
            );
            $validator = Validator::make($request->all(), $element_array, [
                'catTitle.required' => 'Please enter category title '
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            $data = BlogCategories::where("catID", "$id")->first();
           
            $data->catTitle =$request->input("catTitle");
            $data->save();
            return redirect()->route("admin-category-list");
        }catch(\Exception $e){
            return $e->getMessage();
        }  
    }

    public function deleteCategory($id)
    {
        try {
            // if ($id == "") {
            //     return view("errors.403");
            // }
            $data = BlogCategories:: where('catId',$id)->first();
            // dd($data);
            // if (!$data) {
            //     return view("errors.404");
            // }
            $data->delete();
            return redirect()->route("admin-category-list")->with("success", "Blog deleted successfully");
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    // User's methods

    public function userList()
    {
        try{
            $data = BlogMembers::all();
           
            return view("admin.users",compact('data'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }


}
