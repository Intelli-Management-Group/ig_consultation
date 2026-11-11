<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\News;
use Yajra\DataTables\DataTables;


use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = Upload::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('url', function ($row){
                    $url = url('/').'/uploads/news_description/'.$row->link;
                    return $url;
                })
                ->addColumn('image', function ($row){
                    $image = ' <img src="uploads/news_description/'.$row->link.'" width="50" height="50"/>';
                    return $image;
                })
                ->addColumn('action', function($row){

                    $btn = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action','image'])
                ->make(true);
        }

        return view('admin.upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            if($request->file('file') != null){
                $upload = new Upload();
                $file = $request->file('file');
                $image_name = $file->getClientOriginalName();
                $destinationPath = public_path('/uploads/news_description');
                $file->move($destinationPath,$image_name);
                $upload->link = $image_name;
                $upload->save();
                return response()->json(['success'=>'Image Uploaded.']);
            }else{
                return response()->json(['success'=>'Image not found.']);
            }
        }catch ( Exception $e){
            return $e->getMessage();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $upload = Upload::find($id);

        unlink('uploads/news_description/'.$upload->link);
        $upload->delete();


        return response()->json(['success'=>'Image deleted successfully.']);
    }
}
