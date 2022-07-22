@extends('layaouts.template')
@section('content')
    <div id="contenedor">
        <div class="form-mat">
            <form action="">
                <h2 class="center white-text">Registrar una Materia</h2>
                <div class="row">
                    <div class="input_field col s12">
                        <input type="text" class="txt-input" name="materia" placeholder="Nombre de materia">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="input_field col s12">
                        <div class="txt-input">
                            <select class=""name="estado" id="estado">
                                <option value="" disabled selected>Estado</option>
                                <option value="0">Ihnabilitada</option>
                                <option value="1">Habilitada</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 botones">
                        <div class="contenedor-btn">
                            <button type="submit" name="enviar"
                            class="btn-large grey ligthen-2 black-text">Guardar</button>
                            <button type="reset" class="btn-large grey ligthen-2 black-text">Cancelar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
