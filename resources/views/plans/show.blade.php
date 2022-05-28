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
                        <h1> Plan </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Plans</a></li>
                            <li class="breadcrumb-item active">Plan</li>
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
                                        <div class="col-sm-10">{{ $plan->id }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Name: </div>
                                        <div class="col-sm-10">{{ $plan->name }}</div>
                                    </div>                                    
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Plan Category: </div>
                                        <div class="col-sm-10">{{ get_column('plan_categories', ['id' => $plan->plan_category_id])->name }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Coverage Type: </div>
                                        <div class="col-sm-10">{{ $plan->coverage_type }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Coverage Criteria: </div>
                                        <div class="col-sm-10">{{ $plan->coverage_criteria }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Eligibility Dependent Includes: </div>
                                        <div class="col-sm-10">{{ $plan->eligibility_dependent_includes }}</div>
                                    </div>
                                    
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Created At: </div>
                                        <div class="col-sm-10">{{ $plan->created_at }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Updated At: </div>
                                        <div class="col-sm-10">{{ $plan->updated_at }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Deleted At: </div>
                                        <div class="col-sm-10">{{ $plan->deleted_at }}</div>
                                    </div>
                                    
                                    <div class="row font-weight-bold py-2">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Benefits</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(get_list('plan_benefits', 'benefits', ['plan_benefits.benefit_id' => 'benefits.id'], ['plan_id' => $plan->id]) as $key => $plan_benefit)
                                                <tr>
                                                    <td>{{ $plan_benefit->name }}</td>
                                                    <td>{{ $plan_benefit->amount }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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