<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Repositories\Repository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\CourseChapter;
use Yajra\DataTables\Facades\DataTables;

class CoursechapterController extends Controller
{

    public function __construct(CourseChapter $coursechapter)
    {
        $this->CourseChapter = new Repository($coursechapter);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            $Coursechapterdata = CourseChapter::all();
            return DataTables::of($Coursechapterdata)
                ->addIndexColumn()->addColumn('action', function ($Coursechapterdata) {
                    $token = csrf_token();
                    return "
                        <form method='POST' action='".route('coursechapter.destroy', $Coursechapterdata->id)."'>
                        <input name='_token' type='hidden' value='$token'>
                        <button type='submit' class='btn btn-xs btn-danger content'>delete <i class='fas fa-trash-alt'></i></button>
                    </form>";
                })
                ->setRowId('id')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('coursechapter.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coursechapter.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'chapter_title' => 'required|string|unique:course,course_title|max:255',
            'chapter_video' => 'required|file|mimetypes:video/mp4,video/x-flv,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv',
            //'num_of_video' => 'required|string',
            //'num_of_assignment' => 'required',
            'course_id' => 'required',
        ]);
        //print_r($request->all()); die();
        if (!empty($request->chapter_video)) {
            $fileName = $request->chapter_video->getClientOriginalName();
        }
        $filePath = 'videos/' . $fileName;

        $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->chapter_video));

        // File URL to access the video in frontend
        $url = Storage::disk('public')->url($filePath);
        if ($isFileUploaded) {
            $course = new coursechapter();
            $course->course_id = $request->course_id;
            $course->chapter_title = $request->chapter_title;
            //$course->num_of_video = $request->num_of_video;
            //$course->num_of_assignment = $request->num_of_assignment;
            $course->chapter_video = $filePath;
            //$course->video = $filePath;
            $course->save();

            return back()
                ->with('success','Course chapter Video has been successfully uploaded.');
        }else{
            return back()
                ->with('errors','Unexpected error occured');
        }
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

        $Course = CourseChapter::find($id);
        $Course->delete();
        return redirect()->route('coursechapter.index')->with('alert', 'Course has been deleted successfully');
    }
}
