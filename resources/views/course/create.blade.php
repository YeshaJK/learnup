<x-app-layout>
    <x-slot name="header">
        <!DOCTYPE html>
        <html>
        <head>
            <title>Laravel 8 Form Validation Example - NiceSnippets.com</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        </head>
        <body>
{{--
        @include('sidebar')
--}}
        {{--<div class="container">--}}
        <div class="content">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="text-white">Add Course</h3>
                </div>
                <div class="card-body">
                    @if(Session::has('errors'))
                        <div class = "alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif
                    <form role="form" method="POST" action="{{route('course.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <strong>Course Title</strong>
                            <input type="text" class="form-control" name="course_title" id="course_title" placeholder="Enter Course Title">
                        </div>
                        <div class="form-group">
                            <strong>Course Subtitle</strong>
                            <input type="text" class="form-control" name="course_subtitle" id="course_subtitle" placeholder="Enter Course Subtitle">
                        </div>
                        <div class="form-group">
                            <strong>Course Description:</strong>
                            <textarea type="textarea" id="summernote" name="course_brief" class="form-control" required></textarea>
                        </div>
                        @php $languages = \App\Models\Language::all(); @endphp
                        @php $Categories = \App\Models\Category::all(); @endphp
                        @php $subcategories = \App\Models\SubCategory::all(); @endphp
                        <div class="form-group">
                            <strong>Basic Info</strong>
                            <div class="row">
                                <div class="col">
                            <select name="language_id" id="language_id" class="form-control ">
                                <option selected>Select Language</option>
                                @foreach ($languages as $language)
                                    <option value="{{$language->id}}" name="language_id">{{$language->language_name}}</option>
                                @endforeach
                            </select>
                            </div>
                                <div class="col">
                                    <select name="category_id" id="category_id" class="form-control ">
                                <option selected>Select Category</option>
                                @foreach ($Categories as $Category)
                                    <option value="{{$Category->id}}" name="category_id">{{$Category->title}}</option>
                                @endforeach
                            </select>
                                </div>
                                <div class="col">
                                <select name="subcategory_id" id="subcategory_id" class="form-control ">
                                <option>Select Subcategory</option>
                                @foreach ($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}" name="subcategory_id">{{$subcategory->title}}</option>
                                @endforeach
                            </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>What is primarily taught in your course?</strong>
                            <input type="text" name="course_about" class="form-control" placeholder="e.g.Landscape Photography" required>
                        </div>
                        {{--<div class="form-group">
                            <strong>Number of Chapters:</strong>
                            <input type="text" name="num_of_chapters" class="form-control" required>
                        </div>--}}
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="course_image" />
                        </div>
                        <div class="form-group">
                            <strong>Promotional Video:</strong>
                            <input type="file" name="video" />
                        </div>
                        <div class="form-group">
                            <p> Please select the price tier for your course below and click 'Save'.</p>
                            <p> If you intend to offer your course for free,the total length of video content must be less than 2 hours.</p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h1>Rs</h1>
                            </div>
                            <div class="col">
                                <select name="course_fee" id="course_fee" class="form-control">
                                        <option value="Free" selected>Free</option>
                                        <option value="499">499</option>
                                        <option value="699">699</option>
                                        <option value="1,200">1,200</option>
                                        <option value="2,200">2,200</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="hidden" value="id" name="id">
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-seal-exclamation"></i><span>Save</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#summernote').summernote({
                    toolbar: [
                        ['style', ['bold', 'italic']], //Specific toolbar display
                        ['para', ['ul', 'ol']],
                    ],
                });
            });

        </script>
        {{-- </div>--}}
        </body>
        </html>
    </x-slot>
</x-app-layout>
