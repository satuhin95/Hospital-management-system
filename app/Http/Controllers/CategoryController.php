<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if (!session('ses_id')) {
         return Redirect()->route('login');
      }
       $data = Category::all();
        return view('admin.category.view_category',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.category.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
         'name' => 'required|unique:categories'

      ]);
		$data = array(
			'name'=>$request->name
		);
			DB::table('categories')->insert($data);
			$notification =array(
				'messege'=>'Data Insert Successfully',
				'alert-type'=>'success'
         );
         UserActivity("Category: Insert");
			return Redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $data = Category::find($id);
      return view('admin.category.edit_category',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $data = array(
			'name'=>$request->name
		);
			DB::table('categories')->where('id',$id)->update($data);
			$notification =array(
				'messege'=>'Data Update Successfully',
				'alert-type'=>'success'
         );
         UserActivity("Category: Update");
			return Redirect()->back()->with($notification);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $category=Category::find($id);
      $category->delete();
      $notification =array(
         'messege'=>'Data Delete Successfully',
         'alert-type'=>'success'
      );
      UserActivity("Category: Delete");
      return Redirect()->back()->with($notification);
    }
}
