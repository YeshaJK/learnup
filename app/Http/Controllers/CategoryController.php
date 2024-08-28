<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{

    public function __construct(Category $category)
    {
        $this->Category = new Repository($category);
      //  $this->subcategory = new Repository($subcategory);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            $Categorydata = Category::all();
            return DataTables::of($Categorydata)
                ->addColumn('title', function($Categorydata){
                    return "<a>".$Categorydata->title."</a>";
                })
                ->addIndexColumn()->addColumn('action', function ($Categorydata) {
                    $token = csrf_token();
                    return "
                        <form method='POST' action='".route('category.destroy', $Categorydata->id)."'>
                        <input name='_method' type='hidden' value='DELETE'><input name='_token' type='hidden' value='$token'>
                        <button type='submit' class='btn btn-xs btn-danger'>Delete <i class='fas fa-trash-alt'></i></button>
                        </form>";
                })
                ->setRowId('id')
                ->rawColumns(['title','action'])
                ->make(true);
        }
        return view('category.view');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|string|unique:category,title|max:255',
        ]);

        $course = new Category();
        $course->title = $request->title;
        $course->save();
        return redirect()->route('category.index')->with('success','Category has been successfully inserted.');

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

        $Category = Category::find($id);
        $Category->delete();
        return redirect()->route('category.index')->with('alert', 'Category has been deleted successfully');
    }
}
