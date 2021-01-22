<!doctype html>
<html lang="en">
    <head>
    <style>
        .lista {
        list-style:none;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Detalle pelicula</title>
    </head>
    <body class="py-4">
        <main>
            <div class="container">
                <h1>Detalle</h1>
                <p class="lead">Detalle</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Informacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class = flex>
                            <td id = "titulo">Titulo</td>
                            <td id = "original_language">Lenguaje</td>
                            <td id = "adulto">Adulto</td>
                            <td id = "vote_count">Voto</td>
                            <td id = "vote_average">Avg</td>
                            <td id = "estado">estado</td>

                            <td ><a href="index.php">Volver</a></td>

                        </tr>
                        
                    </tbody>
                </table> 
            </div>
        </main>
    <script language='javascript'>

    
    function submitDetalleStorage() {
        var pelicula = sessionStorage.getItem("pelicula");
        var token = '?api_key=2599a98628cbf552614bfb7036c9e71f';
        var url = 'https://api.themoviedb.org/3/movie/'+pelicula+token;
    
        $.ajax({
        type: 'GET',
        url: url,
        success: function (data) {
            console.log(data);
         var titulos = data.title;
         var leng = data.original_language;
         var adulto = data.adult;
         var voto = data.vote_count;
         var voto_avg = data.vote_average;
         var estado = data.status;
         var frase = data.tagline;
         var salida1 = '';
         var salida2 = '';
         var salida3 = '';
         var salida4 = '';
         var salida5 = '';
         var salida6 = '';
  
      //   salida += '<li>' +'<button type="button" class="btn btn-link" onclick="submitDetalleStorage(this.value)" href="detalle.php" value="'+ titulos[i].id + '"><a class = flex href="detalle.php">'+titulos[i].title+' </a></button>' + '<td>   </td>' + '</li>' ;
        salida1 += '<li class="lista"> Titulo: ' + titulos  +'</li>';
   
         document.getElementById('titulo')
         .innerHTML = salida1;

         salida2 += '<li class="lista">Idioma: ' + leng  +'</li>';
   
        document.getElementById('original_language')
        .innerHTML = salida2;    

        salida3 += '<li class="lista"> Adulto:' + adulto  +'</li>';
   
        document.getElementById('adulto')
        .innerHTML = salida3;

        salida4 += '<li class="lista"> Conteo Votos: ' + voto  +'</li>';

        document.getElementById('vote_count')
        .innerHTML = salida4;    

        salida5 += '<li class="lista"> Votos Promedio: ' + voto_avg  +'</li>';

        document.getElementById('vote_average')
        .innerHTML = salida5;    
            
        salida6 += '<li class="lista"> Estado: ' + estado  +'</li>';

        document.getElementById('estado')
        .innerHTML = salida6;   


        }
         
    });

    }
    submitDetalleStorage();


</script>
 
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
