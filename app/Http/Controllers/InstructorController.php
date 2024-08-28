<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Mail;
use App\Mail\AcceptMail;
use App\Notifications\SendEmailNotification;
use App\Models\User;

class InstructorController extends Controller
{
    public function __construct(Instructor $instructor)
    {
         $this->Instructor = new Repository($instructor);
    }

    public function index(Request $request)
    {
        if ($request->ajax()){
            $Instructordata = Instructor::all();
            return DataTables::of($Instructordata)
                ->addColumn('qualification', function($Instructordata){
                    return "<a href='".url('/download',$Instructordata->qualification)."'>".$Instructordata->qualification."</a>";
                })
                ->addIndexColumn()->addColumn('action', function ($Instructordata) {
                    $token = csrf_token();
                    return "
                        <a data-accept-id='$Instructordata->id' type='submit'  data-approved-id='$Instructordata->is_approved' class='btn btn-xs btn-success' onclick='accept(this)'>Accept</a>
                        <form method='POST' action='".route('instructor.destroy', $Instructordata->id)."'>
                        <input name='_method' type='hidden' value='DELETE'><input name='_token' type='hidden' value='$token'>

                        <button type='submit' class='btn btn-xs btn-danger'>Delete <i class='fas fa-trash-alt'></i></button>
                    </form>";
                })
                ->setRowId('id')
                ->rawColumns(['action','qualification'])
                ->make(true);
        }
        return view('instructor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $instructor = new Instructor;
        $instructor->name = $request->name;
        $instructor->email = $request->email;
        $instructor->date = $request->date;
        $instructor->country = $request->country;
        $instructor->phone_number = $request->phone_number;

        $instructor->qualification = $request->qualification;
        $filename=time().'.'.$instructor->qualification->getClientOriginalExtension();
        $request->qualification->move('assets',$filename);
        $instructor->qualification=$filename;
        $instructor->save();
        return Redirect::back()->with('success','Instructor submitted successfully.');
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
    public function download(Request $request,$file)
    {
        return response()->download(public_path('assets/'.$file));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $instructor = $this->Instructor->find($id);
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
        $instructor = Instructor::find($id);
        $instructor->delete();
        return redirect()->route('instructor.index')->with('alert', 'Instructor has been deleted successfully');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function accept(Request $request)
    {
        $approved = Instructor::where(['id' => $request->id])->update(['is_approved' => 1]);

        if ($approved){
            return redirect()->route('instructor.index')->with('alert', 'Instructor has been approved successfully');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function valid(){
        $id = Auth::id();
        $getData = Instructor::where(['is_approved'=>1])->get();
        return view('layouts.navigation', compact('getData'));
    }
}
