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
                @include('sidebar'c)
        --}}
        {{--<div class="container">--}}
        <div class="content">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="text-white">Add Role</h3>
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
                        @php $users = \App\Models\User::all(); @endphp
                    <form role="form" method="POST" action="{{route('user.createrole') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <strong>User Name</strong>
                            <select name="name" id="name" class="form-control ">
                                <option selected>Select user</option>
                                @foreach ($users as $user)
                                    <option value="{{$user->name}}" name="language">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Role</strong>
                            <select name="roles" id="roles" class="form-control ">
                                <option selected>Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                                <option value="instructor">Instructor</option>
                            </select>
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
        {{-- </div>--}}
        </body>
        </html>
    </x-slot>
</x-app-layout>

