<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Carter One', cursive !important;
        }
        #contenedor{
            
            display:flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height:89vh;
            
        }
        .form-mat{
            width:75%;
            height:75%;
            background:#F63737;
            border-radius: 30px;

        }
        .txt-input{
            background: #fff !important;
            width:100% !important;
            height: 50px !important;
            border-bottom: none !important;
           
            font-family: 'Carter One', cursive !important;

        }
        .doli{
            width: 95% !important;
            padding-left: 30px !important;
        }
        .select-wrapper input.select-dropdown{
            font-family: 'Carter One',cursive !important;
            padding-left: 30px !important;
            border-bottom:none !important;
        }
        .txt-input::placeholder{
            color:#000000 !important;
            font-family: 'Carter One', cursive !important;
        }
        .botones{
            width: 100%;
            height: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contenedor-btn{
            width: 50%;
            height: 20%;
            display: flex;
            justify-content: space-between;
            align-items: center
        }
        .btn-large{
            border-radius:30px !important;
            font-family:  'Carter One', cursive !important;
            height: 64px !important;
        }
        
    </style>
</head>
<body>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href={{ route ('uma.index') }}>Informacion</a></li>
        <li><a href={{ route ('uma.create') }}>Registrar materia</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper">
            <ul>
           <li><a class="dropdown-trigger" data-target="dropdown1">UMA</a></li>
               
            </ul> 
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <script>
         $(document).ready(function(){
       $('select').formSelect();
       $(".dropdown-trigger").dropdown();
      });
   </script>
   
    
</body>
</html>