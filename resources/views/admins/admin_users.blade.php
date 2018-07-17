@extends('admins.admin_template')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin/main">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Articles</li>
            </ol>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Add user</a>
                </li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Articles list
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Sub title</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Sub title</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="">Edit</a><br>
                                        <a href="">Delete</a>
                                    </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
        </div>
        <!-- /.container-fluid-->
@endsection