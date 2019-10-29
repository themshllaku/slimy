@extends('layouts.app.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">My Profile</li>
    <li class="breadcrumb-item">{{$user->name}}</li>
</ol>

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row container mx-auto">
            @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
            @endif

            @if(session()->has('success'))
            <div class="col-12">
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            </div>
            @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('app.users.update-profile', ['id' => auth()->user()->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="name">Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" value="{{$user->name}}" name="name">
                                    </div>
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-at"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control" value="{{$user->email}}" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="country">Country</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-flag"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" value="{{$user->country}}" name="country">
                                    </div>
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label for="city">City</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-building"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" value="{{$user->city}}" name="city">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="phone">Phone</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" value="{{$user->phone}}" name="phone">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection