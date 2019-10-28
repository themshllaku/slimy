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
                <div class="col-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a href="#general" role="tab" class="nav-link active">General</a>
                        </li>
                        <li class="nav-item">
                            <a href="#localization" role="tab" class="nav-link">Localization</a>
                        </li>
                        <li class="nav-item">
                            <a href="#defaults" role="tab" class="nav-link">Defaults</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="general">
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="name">Name <span class="text-danger">*</span></label>
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
                                    <label for="phone">Phone Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="phone">
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
                                        <input type="text" class="form-control" name="tax">
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
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="address">Address</label>
                                    <textarea name="address" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection