@extends('layouts.app.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">More</li>
    <li class="breadcrumb-item">Currencies</li>
</ol>

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row container mx-auto">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">All Currencies <a href="{{ route('app.more.currencies.create') }}" class="float-right">New Currency</a></div>
                    <div class="card-body m-0 p-0">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($currencies as $c)
                                <tr>
                                    <td>{{$c->name}}</td>
                                    <td>{{$c->code}}</td>
                                    <td>{{$c->rate}}</td>
                                    <td>
                                        @if($c->enabled) <span class="badge badge-success">Active</span> @else <span class="badge badge-danger">Disabled</span> @endif
                                    </td>
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