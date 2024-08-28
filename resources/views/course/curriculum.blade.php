{{--
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
        </head>
        <body>
        @include('sidebar')
        --}}
{{--<div class="container">--}}{{--

        <div class="content">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="text-white">Curriculum</h3>
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
                        <div class="card">
                            <div class="card-body">
                            <div class="form-group">
                                <p> Here's where you add course content---like lectures,course sections,assignments, and more. Click a + icon on the left to get started.</p>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <p>Start putting together your course by creating sections,lectures and practice(quizzes,coding excerises and assignments). </p>
                        <p> If you intend to offer your course for free,the total length of video content must be less than 2 hours.</p>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    Section 1: Introduction
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm">
                                                Lecture 1: Introduction
                                            </div>
                                            <div class="col-sm">
                                                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-plus">content</i></button>
                                            </div>
                                        </div>
                                        <div class="form-group data">
                                            <div class="form-group">
                                                <strong>Video</strong>
                                                <input type="file" name="qualification" required>
                                            </div>
                                            <div class="form-group">
                                                <strong>Description</strong>
                                                <input type="text" class="form-control" name="course_subtitle" id="course_subtitle" placeholder="Enter Course Subtitle">
                                            </div>
                                            <div class="form-group">
                                                <strong>Course Subtitle</strong>
                                                <input type="text" class="form-control" name="course_subtitle" id="course_subtitle" placeholder="Enter Course Subtitle">
                                            </div>

                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i><span>Save</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script type="text/javascript">
            $('.data').hide();
            jQuery('button').on('click',function(){
                jQuery('.data').toggle();
            });

        </script>
        --}}
{{-- </div>--}}{{--

        </body>
        </html>
    </x-slot>
</x-app-layout>
--}}
