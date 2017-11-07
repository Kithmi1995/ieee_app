@extends('layouts.dashboard')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Members</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
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

                                <th>team</th>
                                <th>first name</th>
                                <th>last name</th>
                                <th>Email</th>
                                <th>phone</th>

                                <th>university</th>
                                <th>isVeg</th>
                                <th>t_size</th>


                                <th>linkedin</th>
                                <th>github</th>
                                <th>twitter</th>
                                <th>facebook</th>

                                <th>ID</th>

                                <th>team ID</th>
                                <th>nic</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                {{--<th>More</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                @foreach($team->members as $member)
                                    <tr class="odd gradeX">

                                        <td>{{ $member->team->name }}</td>

                                        <td>{{ $member->first_name }}</td>
                                        <td>{{ $member->last_name }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td>{{ $member->phone }}</td>

                                        <td>{{ $member->university }}</td>
                                        <td>{{ $member->isVeg == 1?'Veg':'Non-Veg' }}</td>
                                        <td>{{ $member->t_size }}</td>
                                        <td>{{ $member->linkedin }}</td>
                                        <td>{{ $member->github }}</td>
                                        <td>{{ $member->twitter }}</td>
                                        <td>{{ $member->facebook }}</td>
                                        <td>{{ $member->id }}</td>
                                        <td>{{ $member->team_id }}</td>
                                        <td>{{ $member->nic }}</td>
                                        <td>{{ $member->created_at }}</td>
                                        <td>{{ $member->updated_at }}</td>

                                        {{--<td>
                                            <a class="btn btn-outline-primary btn-primary" href="/admin/teams/{{ $member->id }}">
                                                View More
                                            </a>
                                        </td>--}}
                                    </tr>
                                @endforeach
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
    <!-- /#page-wrapper -->

@endsection