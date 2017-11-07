@extends('layouts.app')

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

                    @if(auth()->user()->type == 2)

                        @if(isset($msg))
                            <strong>{{ $msg }}</strong>

                        @endif

                        @if(isset($employee))
                            @if(!empty($employee->cv))
                                    <a target="_blank" href="/storage/{{ substr($employee->cv, 7) }}">
                                        {{ $employee->user->first_name }} {{ $employee->user->middle_name }} {{ $employee->user->last_name }}
                                    </a>
                            @endif
                        @endif


                            <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                                <h3>Upload CV</h3>



                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-6">
                                        <div class="form-group">
                                            <input type="file" accept=".pdf, .docx, .doc" name="cv" placeholder="Upload your cv here">
                                        </div>
                                        <input type="submit" name="submit">
                                    </div>
                                </div>
                            </form>

                    @elseif(auth()->user()->type == 1)
                        @if(count($employees))
                            @foreach($employees as $employee)
                                    <a target="_blank" href="/storage/{{ substr($employee->cv, 7) }}">
                                        {{ $employee->user->first_name }} {{ $employee->user->middle_name }} {{ $employee->user->last_name }}
                                    </a>
                            @endforeach
                        @endif

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
