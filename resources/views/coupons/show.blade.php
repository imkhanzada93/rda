@extends('layouts.app')

@section('styles')  

@endsection

@section('content')    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> Coupon </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('coupons.index') }}">Coupons</a></li>
                            <li class="breadcrumb-item active">Coupon</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="grid-striped">
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Id: </div>
                                        <div class="col-sm-10">{{ $coupon->id }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Name: </div>
                                        <div class="col-sm-10">{{ $coupon->name }}</div>
                                    </div>                                    
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Coupon Code: </div>
                                        <div class="col-sm-10">{{ $coupon->code }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Is Expiry: </div>
                                        <div class="col-sm-10">{{ ($coupon->is_expiry == 1) ? 'Yes' : 'No' }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Expiry Date: </div>
                                        <div class="col-sm-10">{{ $coupon->expiry_date }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Multi Use: </div>
                                        <div class="col-sm-10">{{ ($coupon->multi_use == 1) ? 'Yes' : 'No' }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Coupon Discount Type: </div>
                                        <div class="col-sm-10">{{ $coupon->discount_type }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Coupon Discount Amount: </div>
                                        <div class="col-sm-10">{{ $coupon->discount_amount }}</div>
                                    </div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Active: </div>
                                        <div class="col-sm-10">{{ ($coupon->multi_use == 1) ? 'Active' : 'In Active' }}</div>
                                    </div>
                                    
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Created At: </div>
                                        <div class="col-sm-10">{{ $coupon->created_at }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Updated At: </div>
                                        <div class="col-sm-10">{{ $coupon->updated_at }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Deleted At: </div>
                                        <div class="col-sm-10">{{ $coupon->deleted_at }}</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


@section('scripts')

@endsection