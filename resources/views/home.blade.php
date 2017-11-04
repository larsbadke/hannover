@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>



                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                        <table class="uk-table uk-table-striped uk-table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Beschreibung</th>
                                <th>Stunden</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($projects as $index => $project)

                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ str_limit($project->description, 100) }}</td>
                                    <td>{{ $project->times->sum('work') }}</td>
                                    <td>
                                        <a href="{{ route('project.show', ['project' => $project->id]) }}">
                                            <div class="uk-button uk-button-primary">Ansehen</div>

                                        </a>


                                    </td>
                                </tr>


                            @endforeach


                            </tbody>
                        </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
