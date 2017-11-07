@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Welcome to IEEE Sri Lanka Section Career Fair 2017!
                        <br>

                        @if(auth()->user()->type == 1)
                            @if(count($employees))
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>CV</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date of Birth</th>
                                </thead>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>
                                            {{ $employee->user->id }}
                                        </td>
                                        <td>
                                            {{ $employee->user->first_name }}
                                        </td>
                                        <td>
                                            {{ $employee->user->middle_name }}
                                        </td>
                                        <td>
                                            {{ $employee->user->last_name }}
                                        </td>
                                        <td>
                                            <a target="_blank" href="/storage/{{ substr($employee->cv, 7) }}">
                                                Download
                                            </a>
                                        </td>
                                        <td>
                                            {{ $employee->user->email }}
                                        </td>
                                        <td>
                                            {{ $employee->user->phone }}
                                        </td>
                                        <td>
                                            {{ $employee->user->dob }}
                                        </td>
                                    </tr>

                                @endforeach
                            </table>
                            @endif

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
