<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Language;
use App\Models\CourseChapter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    public function __construct(Course $course,Instructor $instructor,Language $langauge)
    {
        $this->Course = new Repository($course);
        $this->Instructor = new Repository($instructor);
        $this->Language = new Repository($langauge);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            $Coursedata = Course::all();
            return DataTables::of($Coursedata)
                ->addColumn('course_title', function($Coursedata){
                    return "<a>".$Coursedata->course_title."</a>";
                })
                ->addIndexColumn()->addColumn('action', function ($Coursedata) {
                    $token = csrf_token();
                    return "
                        <form method='POST' action='".route('course.destroy', $Coursedata->id)."'>
                        <input name='_token' type='hidden' value='$token'>
                        <button type='submit' class='btn btn-xs btn-danger content'>Destroy <i class='fas fa-trash-alt'></i></button>
                    </form>";
                })
                ->setRowId('id')
                ->rawColumns(['course_title','action'])
                ->make(true);
        }
        return view('course.index');
    }

    /*public function detail()
    {
        $course = Course::all();
        return view('course.detail',compact('course'));
    }*/

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     *
     */
    public function pricing()
    {
        return view('course.view');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function video($id)
    {
        //  $courses = CourseChapter::with( ['course'])->where('id','=',$id)->get();
        $courses = Course::where('id',$id)->get();
        //dd($courses); die();
        $coursechapters = CourseChapter::where('id',$id)->get();
        return view('course.video',compact('courses','coursechapters'));
    }

    public function detail($id)
    {
      //  $courses = CourseChapter::with( ['course'])->where('id','=',$id)->get();
        $courses = Course::where('id',$id)->get();
        $coursechapters = CourseChapter::where('id',$id)->get();
        return view('course.detail',compact('courses','coursechapters'));
    }

    public function courselist()
    {
        $courselist = Course::all()->take(3);
        return view('dashboard',compact('courselist'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\ResponseUS
     */
    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        $id = Auth::id();
        $this->validate($request, [
            'course_title' => 'required|string|unique:course,course_title|max:255',
            'course_brief' => 'required|string',
            'course_about' => 'required',
            'course_fee' => 'required',
            'language_id' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'course_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'video' => 'required|file|mimetypes:video/mp4,video/x-flv,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv',
        ]);

        if (!empty($request->video)) {
            $fileName = $request->video->getClientOriginalName();
        }
        $filePath = 'videos/' . $fileName;

        $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->video));

        // File URL to access the video in frontend
        $url = Storage::disk('public')->url($filePath);
        $image_path = $request->file('course_image')->store('image', 'public');
        if ($isFileUploaded) {
            $course = new course();
            $course->course_title = $request->course_title;
            $course->course_subtitle = $request->course_subtitle;
            $course->course_brief = $request->course_brief;
            $course->course_about = $request->course_about;
            $course->language_id = $request->language_id;
            $course->category_id = $request->category_id;
            $course->subcategory_id = $request->subcategory_id;
            $course->course_fee = $request->course_fee;
            $course->course_image = $image_path;
            $course->video = $filePath;
            //$course->video = $filePath;
            $course->save();

            return back()
                ->with('success','Video has been successfully uploaded.');
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
        $Course = Course::find($id);
        $Course->delete();
        return redirect()->route('course.index')->with('alert', 'COurse has been deleted successfully');
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Course::query()
            ->where('course_title', 'LIKE', "%{$search}%")
            ->orWhere('course_subtitle', 'LIKE', "%{$search}%")
            ->orWhere('course_about', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('courselist', compact('posts'));
    }
}
