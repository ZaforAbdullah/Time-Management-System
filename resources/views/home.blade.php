@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Home page</div>

                <div class="panel-body">
                    You are <strong>{{ Auth::user()->name }} </strong>!
                </div>
            </div>
        </div>
    </div>
@endsection
