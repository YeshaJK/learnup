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
                    <h3 class="text-white">Pricing</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{route('course.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <p> Please select the price tier for your course below and click 'Save'.</p>
                            <p> If you intend to offer your course for free,the total length of video content must be less than 2 hours.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <h1>Rs</h1>
                            </div>
                            <div class="col-sm">
                                <select name="language" id="language" class="form-control ">
                                    <option selected>Interpreneurship</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-seal-exclamation"></i><span>Save</span></button>
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
            $(document).ready(function () {
                $('#summernote').summernote({
                    toolbar: [
                        ['style', ['bold', 'italic']], //Specific toolbar display
                        ['para', ['ul', 'ol']],
                    ],
                });
            });
        </script>
        --}}
{{-- </div>--}}{{--

        </body>
        </html>
    </x-slot>
</x-app-layout>
--}}
