@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <p>@sayHello("sajeeva")</p>
                    <p>Your age is @age(["1992", "7", "6"])</p>
                    <p>Your age is {{ Carbon\Carbon::createFromDate(1992, 8, 6)->age }}</p>
                    <p>{{ $married }}</p>
                    <p>{{ $test }}</p>
                    <p>{{ $age }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection