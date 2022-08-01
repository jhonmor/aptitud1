@extends('app')

@section('content')
<div class="container-fluid">


    @if (count($preguntass) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>
 
            <div class="panel-body">
                <table class="table table-striped task-table">
 
                    <!-- Table Headings -->
                    <thead>
                        <th>Preguntasaaaaaa</th>
                        <th>&nbsp;</th>
                    </thead>
 
                    <!-- Table Body -->
                    <tbody>
                        @foreach ($preguntass as $pregg)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $pregg->pregunta }}</div>
                                </td>
 
                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
 </div>
@endsection