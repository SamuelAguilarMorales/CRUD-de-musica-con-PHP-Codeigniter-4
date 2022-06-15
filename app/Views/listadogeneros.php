<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Lista de generos</title>
  </head>
  <body>


  <style>
    .formulariogeneros{
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
      padding: 10px 0;
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


<center>
        <div class="cabeza">
        <h1 class="center">CRUD de Música con CodeIgniter 4</h1>
        </div>
        </center>
        <br><br>
  <div class="container">
      <div class="formulariogeneros">
      <img src="https://static.wikia.nocookie.net/d4dj/images/4/41/Takeshita_Miiko_chibi.png" alt="">
    <div>
    <h1>Nuestra lista de géneros</h1>
      <div class="row">
          <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/creargenero' ?>">
                <label for="name">Nombre del género</label>
                <input type="text" name="name" id="name" class="form-control">
                <br>
                <button class="btn btn-primary btn-block">Guardar</button>
            </form>
          </div>
      </div>
    </div>
      </div>

      <hr>
      <h2 class="text-right">Lista de géneros</h2>
      <div class="row">
            <div class="col-sm-12">
            <div class="table table-responsive table-striped">
              <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        <?php foreach($datos as $key): ?>
                            <tr>
                                <td><?php echo $key->id  ?></td>
                                <td><?php echo $key->name  ?></td>
                                <td>
                                <a href="<?php echo base_url().'/obtenerGenero/'.$key->id ?>" class="btn btn-sm btn-warning btn-block">Editar</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url().'/eliminargenero/'.$key->id ?>" class="btn btn-sm btn-danger btn-block">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
      </div>
  </div>

  <footer>
<center>
<P>Programación web II</P>
      <P>Desarrollado en CodeIgniter 4</P>
</center>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>