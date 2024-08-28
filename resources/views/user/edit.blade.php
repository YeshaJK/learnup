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
        </head>
        <body>
        {{--<div cuclass="container">--}}
        <div class="row-12">
            <div class="col-12">
                <div class="card    ">
                    <div class="card-header bg-success">
                        <h3 class="text-white">Edit User</h3>
                    </div>
                    <div class="card-body">

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif

                        <form role="form" method="POST"  action="{{ route('users.update',$user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <strong>Name</strong>
                                <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                            </div>

                            <div class="form-group">
                                <strong>Email:</strong>
                                <input class="form-control" type="text" name="email" value="{{ $user->email   }}">
                            </div>
                            <div class="mt-4">
                                <label>
                                    <input id="male" type="radio" name="gender" value="0"  {{ $user->gender == "0" ? 'checked' : '' }} >
                                    Male
                                </label>
                                <label>
                                    <input id="female" type="radio" name="gender" value="1"  {{ $user->gender == "1" ? 'checked' : '' }} >
                                    Female
                                </label>
                            </div>
                            <div class="form-group">
                                <strong>Qualification:</strong>
                                <input class="form-control" type="text" name="qualification" value="{{ $user->qualification }}">
                            </div>
                            <div class="form-group">
                                <strong>Age:</strong>
                                <input class="form-control" type="text" name="age" value="{{ $user->age }}">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i><span>Update</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div>--}}
        </body>
        </html>
        {{--<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Instructor Form</div>

                        <div class="card-body">
                            <form role="form" method="POST" action="{{route('instructor.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="type">Name</label>
                                        <input type="text" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Email</label>
                                        <input type="text" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Birth Date</label>
                                        <input class="block mt-1 w-full" type="date" name="date" required autofocus >
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Qualification</label>
                                        <input type="file" name="qualification">
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Experience</label>
                                        <input type="text" name="experience">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i><span>Create</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    </x-slot>
</x-app-layout>
