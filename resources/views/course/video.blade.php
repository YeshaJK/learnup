<x-app-layout>
    <x-slot name="header">
        <!DOCTYPE html>
        <html>
        <head>
            <title>Laravel 8 Form Validation Example - NiceSnippets.com</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css') }}" rel="stylesheet">
            <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css')}}" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
        </head>
        <body>
        @foreach($courses as $course)

        {{--<div class="container">--}}
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <div class="video" style="max-width:100%;height:auto;">
                        <div class="row">
                            <div class="col">
                                <div class="video_container_outer">
                                    <div class="video_container">
                                        <!-- Video poster image artist: https://unsplash.com/@annademy -->
                                        <video width="80%" height="70%" controls>
{{--
                                            <source src="{{url('videos/Sample-MP4-Video-File-for-Testing.mp4')}}" type="video/mpeg">
--}}
                                            <source src="{{$course->video}}" type="video/mp4">

                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    @foreach($coursechapters as $coursechapter)
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse">
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
        {{-- </div>--}}
        </body>
        </html>
    </x-slot>
</x-app-layout>
