@extends('layouts.dashboard')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Teams</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Team {{ $team->name }} Details
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="well">
                            <h4>{{ $team->name }} Information</h4>


                            <br>

                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Details of <strong>{{ $team->name }}</strong> <em>team</em>
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example-members">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Website</th>
                                                    <th>Social</th>
                                                    <th>leader_id</th>
                                                    <th>leader</th>
                                                    <th>idea</th>
                                                    <th>description</th>
                                                    <th>innovativeness</th>
                                                    <th>technologies</th>
                                                    <th>resources</th>
                                                    <th>ip</th>
                                                    <th>selected</th>
                                                    <th>welcome_email</th>
                                                    <th>selected_email</th>
                                                    <th>created_at</th>
                                                    <th>updated_at</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="odd gradeX">
                                                    <td>{{ $team->id }}</td>
                                                    <td>{{ $team->name }}</td>
                                                    <td>{{ $team->email }}</td>
                                                    <td>{{ $team->website }}</td>
                                                    <td>{{ $team->social }}</td>
                                                    <td>{{ $team->leader_id }}</td>
                                                    <td>{{ $team->leader()->first_name." ".$team->leader()->last_name }}</td>
                                                    <td>{{ $team->idea }}</td>
                                                    <td>{{ $team->description }}</td>
                                                    <td>{{ $team->innovativeness }}</td>
                                                    <td>{{ $team->technologies }}</td>
                                                    <td>{{ $team->resources }}</td>
                                                    <td>{{ $team->ip }}</td>
                                                    <td>{{ $team->selected }}</td>
                                                    <td>{{ $team->welcome_email }}</td>
                                                    <td>{{ $team->selected_email }}</td>
                                                    <td>{{ $team->created_at }}</td>
                                                    <td>{{ $team->updated_at }}</td>

                                                </tr>

                                                </tbody>
                                            </table>
                                            <!-- /.table-responsive -->
                                            {{--<div class="well">
                                                <h4>DataTables Usage Information</h4>
                                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                                            </div>--}}
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>

                            <br>

                        </div>

                        <div class="well">
                            <h3>Members</h3>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Member Details
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>first name</th>
                                                    <th>last name</th>
                                                    <th>Email</th>
                                                    <th>phone</th>
                                                    <th>nic</th>
                                                    <th>university</th>
                                                    <th>isVeg</th>
                                                    <th>t_size</th>
                                                    <th>linkedin</th>
                                                    <th>github</th>
                                                    <th>twitter</th>
                                                    <th>facebook</th>
                                                    <th>team ID</th>
                                                    <th>team</th>
                                                    <th>created_at</th>
                                                    <th>updated_at</th>
                                                    {{--<th>More</th>--}}
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($team->members as $member)
                                                    <tr class="odd gradeX">
                                                        <td>{{ $member->id }}</td>
                                                        <td>{{ $member->first_name }}</td>
                                                        <td>{{ $member->last_name }}</td>
                                                        <td>{{ $member->email }}</td>
                                                        <td>{{ $member->phone }}</td>
                                                        <td>{{ $member->nic }}</td>
                                                        <td>{{ $member->university }}</td>
                                                        <td>{{ $member->isVeg == 1?'Veg':'Non-Veg' }}</td>
                                                        <td>{{ $member->t_size }}</td>
                                                        <td>{{ $member->linkedin }}</td>
                                                        <td>{{ $member->github }}</td>
                                                        <td>{{ $member->twitter }}</td>
                                                        <td>{{ $member->facebook }}</td>
                                                        <td>{{ $member->team_id }}</td>
                                                        <td>{{ $member->team->name }}</td>
                                                        <td>{{ $member->created_at }}</td>
                                                        <td>{{ $member->updated_at }}</td>

                                                        {{--<td>
                                                            <a class="btn btn-outline-primary btn-primary" href="/admin/teams/{{ $member->id }}">
                                                                View More
                                                            </a>
                                                        </td>--}}
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                            <!-- /.table-responsive -->
                                            {{--<div class="well">
                                                <h4>DataTables Usage Information</h4>
                                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                                            </div>--}}
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <!-- /#page-wrapper -->

@endsection