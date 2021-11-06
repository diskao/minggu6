@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $student->nim }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            </div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            </div>
                        @endif
                        <img width="200px" src="{{asset('storage/'. $student->photo)}}"><br><br>
                            Name : {{ $student->name }} <br>
                            Class : {{ $student->kelas->class_name }} <br>
                            Department : {{ $student->department }} <br>
                            Phone Number : {{ $student->phone_number }} <br>
                            Created at : {{ $student->created_at }} <br>
                            Updated at : {{ $student->updated_at }} <br>
                        </div>
                    </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-responsive">
                        <tr>
                            <tr><th>NIM</th><th>:</th><td>{{ $student->nim }}</td></tr>
                            <tr><th>Name</th><th>:</th><td>{{ $student->name }}</td></tr>
                            <tr><th>Class</th><th>:</th><td>{{ $student->kelas->class_name }}</td></tr>
                            <tr><th>Department</th><th>:</th><td>{{ $student->department }}</td></tr>
                            <tr><th>Phone_number</th><th>:</th><td>{{ $student->phone_number }}</td></tr>
                            <tr><th>Created At</th><th>:</th><td>{{ $student->created_at }}</td></tr>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection