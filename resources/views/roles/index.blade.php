@extends('layouts.app')

@section('styles')  
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            Roles
                            @can('role-create')
                                <a href="{{ route('roles.create') }}" class="btn btn-sm btn-outline-primary btn-rounded"> <i class="fa fa-plus"></i> Role</a>
                            @endcan
                        </h1>
                        
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Roles</li>
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
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $key => $role)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-outline-info btn-rounded" href="{{ route('roles.show', $role->id) }}"><i class="fa fa-eye"></i></a>
                                                @if(Auth::user()->can('role-edit'))
                                                <a class="btn btn-sm btn-outline-primary btn-rounded" href="{{ route('roles.edit', $role->id) }}"><i class="fa fa-edit"></i></a>
                                                @endif
                                                @if((Auth::user()->can('role-delete')) && ($role->id != 1))
                                                    @if($role->deleted_at)
                                                        <a class="btn btn-sm btn-outline-success btn-rounded" href="{{ url('roles/restore/' . $role->id) }}"><i class="fa fa-check"></i></a>
                                                    @else
                                                        <a class="btn btn-sm btn-outline-danger btn-rounded" href="javascript:void(0)" onclick="destroy('{{ route('roles.destroy', $role->id) }}')"><i class="fa fa-trash"></i></a>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
<script>
    function destroy(link){
        if (confirm("Do you really want to remove the role")) {
            event.preventDefault();
            var deleteForm = '<form method="POST" action="' + link + '"> {{ csrf_field() }} {{ method_field("DELETE") }}</form>';
            $(deleteForm).appendTo('body').submit().remove();
        }
    }    
</script>
@endsection