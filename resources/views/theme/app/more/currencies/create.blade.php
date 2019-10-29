@extends('layouts.app.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">More</li>
    <li class="breadcrumb-item">New Currency</li>
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
                    <form method="POST" action="{{ route('app.more.currencies.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="name">Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-address-card-o"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label for="code">Code</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-code"></i>
                                            </span>
                                        </div>
                                        <select name="code" class="form-control">
                                            <option value="all">ALL</option>
                                            <option value="eur">EUR</option>
                                            <option value="gbp">GBP</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="rate">Rate</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-money"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="rate">
                                    </div>
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label for="code">Enabled</label>
                                    <div class="input-group">
                                        <label class="switch switch-3d switch-primary">
                                            <input class="switch-input" type="checkbox" name="enabled" value="1">
                                            <span class="switch-slider"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection