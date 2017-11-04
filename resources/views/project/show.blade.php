@extends('layouts.app')

@section('content')


@include('project.partials.alert')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Project {{ $project->name }}</div>



                <div class="panel-body">


                    <p>
                        {{ $project->description }}
                    </p>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
