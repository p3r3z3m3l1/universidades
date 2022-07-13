@extends('layaouts.template');
@section('content');
<form action="">
    <div class="row">
        <div class="input_field col s12">
            <input type="text" name="carrera" placeholder="nombre carrera">
            <label for="carrera">Registrar Carrera</label>
        </div>
        <div class="input_field col s12">
            <input type="text" name="duracion_carrera" placeholder="duracion de la carrera">
            <label for="duracion_carrera">Registrar duracion de la Carrera</label>
       </div>
        <div class="input_field col s12">
            <input type="text" name="costo" placeholder="costo de carrera">
            <label for="costo">Registrar el costo</label>
       </div>
       <div class="input_field col s12">
        <input type="text" name="id_ciclo">
        <select name="ciclo" id="carrera">
            
        </select>

       </div>



    </div>
</form>