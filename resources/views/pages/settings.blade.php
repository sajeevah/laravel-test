@extends('layouts.master')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Settings</div>

                <div class="panel-body">
                    <p>{{ $married }}</p>
                    <p>{{ $test }}</p>
                    <p>{{ $age }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection