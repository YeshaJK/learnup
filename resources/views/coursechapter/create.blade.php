<x-app-layout>
    <x-slot name="header">
        <!DOCTYPE html>
        <html>
        <head>
            <title>Laravel 8 Form Validation Example - NiceSnippets.com</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
        </head>
        <body>
        {{--
                @include('sidebar')
        --}}
        {{--<div class="container">--}}
        <div class="content">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="text-white">Add CourseChapter</h3>
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
                    @php $courses = \App\Models\Course::all(); @endphp
                    <form role="form" method="POST" action="{{route('coursechapter.store') }}" enctype="multipart/form-data">
                        @csrf
                        <select name="course_id" id="course_id" class="form-control">
                            <option>Select Subcategory</option>
                            @foreach ($courses as $course)
                                <option value="{{$course->id}}" name="course_id">{{$course->course_title}}</option>
                            @endforeach
                        </select><br>
                        <div class="form-group">
                            <strong>Chapter Title</strong>
                            <input type="text" class="form-control" name="chapter_title" id="chapter_title" placeholder="Enter Chapter Title">
                        </div>
                        {{--<div class="form-group">
                            <strong>Number of Chapters:</strong>
                            <input type="text" name="num_of_chapters" class="form-control" required>
                        </div>--}}
                        <div class="form-group">
                            <strong>Video:</strong>
                            <input type="file" name="chapter_video" />
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
