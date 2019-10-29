@extends('layouts.app.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
</ol>

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="container mx-auto">
            <div class="row">
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
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a href="#general" role="tab" class="nav-link active" aria-controls="general" data-toggle="tab">General</a>
                        </li>
                        <li class="nav-item">
                            <a href="#localization" role="tab" class="nav-link" aria-controls="localization" data-toggle="tab">Localization</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tax" role="tab" class="nav-link">Default</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="general">
                            <form method="POST" action="{{ route('app.settings.update-general') }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-address-card-o"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="name" value="{{ auth()->user()->organisation->name }}">
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-md-6">
                                        <label for="phone">Phone Number</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="phone" value="{{ auth()->user()->organisation->phone }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="tax">Tax Number</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-percent"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="tax" value="{{ auth()->user()->organisation->tax_number }}">
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
                                            <input type="email" class="form-control" name="email" value="{{ auth()->user()->organisation->email }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="address">Address</label>
                                        <textarea name="address" class="form-control">{{ auth()->user()->organisation->address }}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane" role="tabpanel" id="localization">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection