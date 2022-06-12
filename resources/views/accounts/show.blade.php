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
                        <h1> Account </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('accounts.index') }}">Accounts</a></li>
                            <li class="breadcrumb-item active">Account</li>
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
                                        <div class="col-sm-10">{{ $account->id }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Full Name: </div>
                                        <div class="col-sm-10">{{ $account->full_name }}</div>
                                    </div>                                    
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">CNIC: </div>
                                        <div class="col-sm-10">{{ $account->cnic }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">RDA Account Number: </div>
                                        <div class="col-sm-10">{{ $account->phone_number }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Email : </div>
                                        <div class="col-sm-10">{{ $account->email }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">CNIC : </div>
                                        <div class="col-sm-10"><img src="{{ asset('storage/'.$account->cnic)  }}" width="100"></div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">B Form : </div>
                                        <div class="col-sm-10"><img src="{{ asset('storage/'.$account->b_form)  }}" width="100"></div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Family Registration Certificate : </div>
                                        <div class="col-sm-10"><img src="{{ asset('storage/'.$account->family_registration_certificate)  }}" width="100"></div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Bank: </div>
                                        <div class="col-sm-10">{{ get_column('insurance_types', ['id' => $account->insurance_type_id])->name }}</div>
                                    </div>                                    
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Insurance: </div>
                                        <div class="col-sm-10">{{ get_column('insurances', ['id' => $account->insurance_id])->name }}</div>
                                    </div>                                    
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Plan: </div>
                                        <div class="col-sm-10">{{ get_column('plans', ['id' => $account->plan_id])->name }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Created At: </div>
                                        <div class="col-sm-10">{{ $account->created_at }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Updated At: </div>
                                        <div class="col-sm-10">{{ $account->updated_at }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <div class="col-sm-2">Deleted At: </div>
                                        <div class="col-sm-10">{{ $account->deleted_at }}</div>
                                    </div>
                                    <div class="row font-weight-bold py-2">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>DOB</th>
                                                    <th>Relation</th>
                                                    <th>CNIC</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(get_list('beneficiaries', null, null, ['account_id' => $account->id]) as $key => $beneficiary)
                                                <tr>
                                                    <td>{{ $beneficiary->full_name }}</td>
                                                    <td>{{ $beneficiary->dob }}</td>
                                                    <td>{{ $beneficiary->relation }}</td>
                                                    <td>{{ $beneficiary->cnic }}</td>
                                                    <td>{{ $beneficiary->phone }}</td>
                                                    <td>{{ $beneficiary->email }}</td>
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