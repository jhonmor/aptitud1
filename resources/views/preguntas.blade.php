@extends('layouts.app')
 
@section('content')
 
 <div class="col-sm-offset-3 col-sm-6">
    <h1>Preguntas</h1>
     
 </div>
    <!-- Bootstrap Boilerplate... -->
 
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
 
        <!-- New Task Form -->
        <form action="{{url('pregunta')}}" method="GET">
         
 
            <!-- Task Name -->
            </div>

                        <div class="form-group">
                <label for="id_pregunta" class="col-sm-3 control-label">ID Pregunta</label>
 
                    <input type="text" name="id_pregunta" id="id_pregunta" class="form-control">
            </div>

            <div class="form-group">
                <label for="pregunta" class="col-sm-3 control-label">Pregunta</label>
 
                    <input type="text" name="pregunta" id="pregunta" class="form-control">
            </div>

            <div class="form-group">
                <label for="tipo" class="col-sm-3 control-label">Tipo</label>
 
                    <input type="text" name="tipo" id="tipo" class="form-control">
            </div>

                        <div class="form-group">
                <label for="int_apt" class="col-sm-3 control-label">Interes-Aptitud</label>
 
                    <input type="text" name="int_apt" id="int_apt" class="form-control">
            </div>
 
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Añadir Pregunta
                    </button>
                </div>
            </div>
        </form>
    </div>
 
    <!-- TODO: Current Tasks -->
@endsection