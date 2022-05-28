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
                            Users
                            @can('user-create')
                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-outline-primary btn-rounded"> <i class="fa fa-plus"></i> User</a>
                            @endcan
                        </h1>
                        
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
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
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if(!empty($user->getRoleNames()))
                                                    @foreach($user->getRoleNames() as $v)
                                                        <label class="badge badge-success">{{ $v }}</label>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-outline-info btn-rounded" href="{{ route('users.show', $user->id) }}"><i class="fa fa-eye"></i></a>
                                                @if(Auth::user()->can('user-edit'))
                                                <a class="btn btn-sm btn-outline-primary btn-rounded" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-edit"></i></a>
                                                @endif
                                                @if((Auth::user()->can('user-delete')) && ($user->id != 1))
                                                    @if($user->deleted_at)
                                                        <a class="btn btn-sm btn-outline-success btn-rounded" href="{{ url('users/restore/' . $user->id) }}"><i class="fa fa-check"></i></a>
                                                    @else
                                                        <a class="btn btn-sm btn-outline-danger btn-rounded" href="javascript:void(0)" onclick="destroy('{{ route('users.destroy', $user->id) }}')"><i class="fa fa-trash"></i></a>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $data->render() !!}
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
        if (confirm("Do you really want to remove the user")) {
            event.preventDefault();
            var deleteForm = '<form method="POST" action="' + link + '"> {{ csrf_field() }} {{ method_field("DELETE") }}</form>';
            $(deleteForm).appendTo('body').submit().remove();
        }
    }    
</script>
@endsection