<?php 

$id = $datos[0]['id'];
$name = $datos[0]['name'];
$author = $datos[0]['author'];
$genre_id = $datos[0]['genre_id'];

?>

<style>
    .formularioAlbumes2{
      display: grid;
      grid-template-columns: 1fr 3fr;
      gap: 50px;
      align-items: center;
    }

    .cabeza{
      background-color: black;
      color: white;
      padding: 20px;
    }

    footer{
      background-color: black;
      color: white;
      margin: 10px;
    }

    body{
      background-color: aliceblue;
    }

    .genero{
      display: flex;
    }

    .seccion-generos{
      display: flex;
      justify-content: space-around;
      align-items: center;
    }


  </style>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Actualizar</title>
  </head>
  <body>

  <center>
        <div class="cabeza">
        <h1 class="center">CRUD de Música con CodeIgniter 4</h1>
        </div>
        </center>
  
  <center>
  
        <br>
        <h1>Editar Álbum</h1>
  </center>
  <div class="container">
    <div class="formularioAlbumes2">
    <img src="https://static.wikia.nocookie.net/d4dj/images/6/6c/Sakurada_Miyu_chibi.png" alt="Foto">
    <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
                <label for="id"></label>
                <input type="text" name="id" id="id" class="form-control" hidden="" value="<?php echo $id ?>">

                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>">

                <label for="author">Autor</label>
                <input type="text" name="author" id="author" class="form-control" value="<?php echo $author ?>">

                <label for="genre_id">Genero</label>
                <input type="text" name="genre_id" id="genre_id" class="form-control" value="<?php echo $genre_id ?>">

                <br>
                  <label>Buscar género musical (Orden alfabético):</label>
                  <div class="genero">
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">

                      <?php 

                      $servidor="localhost";
                      $usuario="root";
                      $password="";
                      $db="music";
                      $conexion=mysqli_connect($servidor, $usuario, $password, $db);


                      $consulta="SELECT CONCAT (id,'.- ',name) as lista FROM genres";
                      $ejecuta=mysqli_query($conexion, $consulta);

                      ?>

                      <?php foreach ($ejecuta as $opciones): ?>
                        <option value="<?php echo $opciones['lista'] ?>"><?php echo $opciones['lista'] ?></option>
                        <?php endforeach;?>

                      </select>
                      <br><br>
                      <button class="btn btn-primary">Guardar</button>
                </div>
                <br>

                </form>
            </div>
        </div>
    </div>
 
  


    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
  </body>
</html>