@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row col-md-12 custyle">
            <table class="table table-striped custab" style="margin-top:20%">
            <thead>
                <a href="{{route('user.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b>Add New</a>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
@endsection
