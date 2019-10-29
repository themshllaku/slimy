@extends('layouts.app.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Users</li>
</ol>

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row container mx-auto">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Users
                        <a href="#" class="float-right">New User</a>
                    </div>
                    <div class="card-body p-0 m-0">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->country}}</td>
                                    <td>{{$user->city}}</td>
                                    <td>
                                        <span class="d-flex justify-content-center">
                                            <a href="#" class="text-primary mx-1"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger mx-1"><i class="fa fa-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection