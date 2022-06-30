@extends('layaouts.template')
@section('content')
<form action="">
    <div class="row">
        <div class="input_field col s12">
            <input type="text" name="materia" placeholder="nombre de materia">
            <label for="materia">Registrar materia</label>
            </div> 
            <div class="input_field col s12">
                <select name="estado" id="estado">
                    <option value="" disabled selected>estado</option>
                    <option value="0">Ihnabilitado</option>
                    <option value="1">Habilitado</option>

                </select>
                </div> 
    </div>
</form>
    
@endsection