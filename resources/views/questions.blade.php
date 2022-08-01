@extends('app')

@section('content')
<div class="container-fluid">

<form action="{{url('pregunta')}}" method="GET">

    @if (count($preguntass) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>
 
            <div class="panel-body">
                <table class="table table-striped task-table">
 
                    <!-- Table Headings -->
                    <thead>
                        <th>PREGUNTAS</th>
                        <th>ELEGIR</th>
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
                                    <input type="radio" name="{{ $pregg->id_pregunta }}" required>SI
                                    <input type="radio" name="{{ $pregg->id_pregunta }}" required>NO
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
 
 <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> ENVIAR PRUEBA
                    </button>
                </div>
            </div>

 </form>
 </div>
@endsection