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

                    You are logged in!
                        <br>

                    @if(auth()->user()->type == 2)
                            <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
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
                        @if(isset($employees))
                            @foreach($employees as $employee)
                                    <a target="_blank" href="/storage/{{ substr($employee->cv, 7) }}">{{ $employee->name }}</a>
                            @endforeach
                        @endif

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
