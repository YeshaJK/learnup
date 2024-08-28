<?php

namespace App\Http\Controllers;
use App\Models\Language;
use App\Models\Subcategory;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubcategoryController extends Controller
{

    public function __construct(subcategory $subcategory)
    {
        $this->subcategory = new Repository($subcategory);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            //$result = Subcategory::with('category')->get();

            $subCategorydata = Subcategory::all();
            return DataTables::of($subCategorydata)
                ->addColumn('category_id', function($subCategorydata){
                    return "<a>".$subCategorydata->category->title."</a>";
                })
                ->addColumn('title', function($subCategorydata){
                    return "<a>".$subCategorydata->title."</a>";
                })
                ->addIndexColumn()->addColumn('action', function ($subCategorydata) {
                    $token = csrf_token();
                    return "
                        <form method='POST' action='".route('subcategory.destroy', $subCategorydata->id)."'>
                        <input name='_method' type='hidden' value='DELETE'><input name='_token' type='hidden' value='$token'>
                        <button type='submit' class='btn btn-xs btn-danger'>Delete <i class='fas fa-trash-alt'></i></button>
                        </form>";
                })
                ->setRowId('id')
                ->rawColumns(['title','action','category_id'])
                ->make(true);
        }
        return view('subcategory.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //print_r($request->all()); die();
      //print_r($request->all()); die();

        $this->validate($request, [
            'title' => 'required|string|unique:subcategory,title|max:255',
        ]);

        $subcategory = new Subcategory();

        $subcategory->category_id= $request->category_id;
        $subcategory->title= $request->title;
        $subcategory->save();
        return redirect()->route('subcategory.index')->with('success','SubCategory has been successfully inserted.');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SubCategory = SubCategory::find($id);
        $SubCategory->delete();
        return redirect()->route('category.index')->with('alert', 'Category has been deleted successfully');
    }
}
