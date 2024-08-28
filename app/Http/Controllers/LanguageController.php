<?php

namespace App\Http\Controllers;
use App\Models\Language;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LanguageController extends Controller
{
    public function __construct(Language $langauge)
    {

        //  $this->subcategory = new Repository($subcategory);
        $this->Language = new Repository($langauge);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            $Languagedata = Language::all();
            return DataTables::of($Languagedata)
                ->addColumn('language_name', function($Languagedata){
                    return "<a>".$Languagedata->language_name."</a>";
                })
                ->addIndexColumn()->addColumn('action', function ($Languagedata) {
                    $token = csrf_token();
                    return "<form method='POST' action='".route('language.destroy', $Languagedata->id)."'>
                        <a data-accept-id='$Languagedata->id' type='submit' class='btn btn-xs btn-success' onclick='accept(this)'>Accept</a>
                        <button type='submit' class='btn btn-xs btn-danger'>Delete <i class='fas fa-trash-alt'></i></button>
                    </form>";
                })
                ->rawColumns(['language_name','action'])
                ->make(true);
        }
        return view('language.view');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('language.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $language = new Language();
        $language->language_name= $request->language_name;
        $language->save();
//        return redirect()->route('language.view')->with('success','Language has been successfully inserted.');

        return back()
            ->with('success','Language has been successfully inserted.');

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
        $Language = Language::find($id);
        $Language->delete();
        return redirect()->route('language.index')->with('alert', 'Category has been deleted successfully');
    }
}
