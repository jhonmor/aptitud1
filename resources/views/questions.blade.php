@extends('app')

@section('content')
<div class="container-fluid">
<script type="text/javascript" src="{{asset('js/chaside.js')}}"></script>

<form action="{{url('enviarresultado')}}" method="POST">

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
 



<p>Select your size:</p>
    <div>
        <input type="radio" name="size" value="XS" id="xs">
        <label for="xs">XS</label>
    </div>
    <div>
        <input type="radio" name="size" value="S" id="s">
        <label for="s">S</label>
    </div>
    <div>
        <input type="radio" name="size" value="M" id="m">
        <label for="m">M</label>
    </div>
    <div>
        <input type="radio" name="size" value="L" id="l">
        <label for="l">L</label>
    </div>
    <div>
        <input type="radio" name="size" value="XL" id="xl">
        <label for="xl">XL</label>
    </div>
    <div>
        <input type="radio" name="size" value="XXL" id="xxl">
        <label for="xxl">XXL</label>
    </div>
    <p>
        <button id="btn">Show Selected Value</button>
    </p>

    <p id="output"></p>




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