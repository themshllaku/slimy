@extends('layouts.app.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
</ol>

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value">19.53 $</div>
                            <div>Incomes</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">From products selling.</small>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value">10.32 $</div>
                            <div>Expenses</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">From vendor exchange.</small>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value">24</div>
                            <div>Products</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">Total number of products.</small>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value">32</div>
                            <div>Customers</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">Total number of customers.</small>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection