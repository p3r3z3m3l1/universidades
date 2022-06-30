@extends('layaouts.template')
@section('content')
<h2>Listado de Universidad</h2>
    <table>
        <thead>
            <th>ID</th>
            <th>Universidad</th>
            <th>Direccion</th>
            <th>Carreras</th>
            <th>Municipio</th>
            <th>Facultad</th>
        </thead>
        <tbody>
            <?php
                while($registro = mysqli_fetch_array($universidad)){
                    echo "<tr>";
                        echo "<td>" .$registro['id_universidad']. "</td>". 
                             "<td>" .$registro['nombre_universidad']. "</td>". 
                             "<td>" .$registro['direccion']. "</td>".
                             "<td>" .$registro['id_carreras']. "</td>".
                             "<td>" .$registro['id_municipio']. "</td>".
                             "<td>" .$registro['id_facultad']. "</td>".
                             "<td><a class='btn red' href=borrar.php/?idpersona=".$registro['id_universidad']."><i class='material-icons'>delete</i></a><a class='btn green darken-4'href=formupdate.php/?idpersona=".$registro['id_universidad']." ><i class='material-icons'>edit</i></a></i>";
                    "</tr>";
                }
            ?>
        </tbody>
    </table>

@endsection <div class="container">
    
    