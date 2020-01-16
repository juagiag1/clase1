<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="col-md-6 col-md-offset-3">
    <h2>Formulario de contacto</h2>
    <?php  
    if (isset($_GET['envia'])) {
      switch ($_GET['envia']) {
        case 'ok':
          echo ' <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Consulta enviada! Muchas gracias.
              </div>';
          break;

        case 'error':
          echo ' <div class="alert alert-warning alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Rellena todos los campos.
              </div>';
          break;

        case 'error_cond':
          echo ' <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Acepta las condiciones y el aviso legal
              </div>';
          break;
        
        default:
          
          break;
      }
    }
    ?>

    <form action="./envia_email.php" method="post">
      <div class="form-group">
        <label for="name">Nombre*:</label>
        <input type="text" class="form-control" placeholder="Introduce tu nombre" name="name">
      </div>
      <div class="form-group">
        <label for="email">Email*:</label>
        <input type="email" class="form-control"  placeholder="Introduce tu email" name="email">
      </div>
      <div class="form-group">
        <label for="phone">Teléfono*:</label>
        <input type="text" class="form-control" placeholder="Introduce tu teléfono" name="phone">
      </div>
      <div class="form-group">
        <label for="message">Mensaje*:</label>
        <textarea type="text" class="form-control" placeholder="Introduce tu consulta" name="message" rows="5" ></textarea>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="conditions"> He leído y acepto las condiciones</label>
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>
</div>

</body>
</html>
