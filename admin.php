<?php


require 'function.php';
$data = query('SELECT * FROM rate');


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>




    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tanggapan</th>
      <th scope="col">Rate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $item) { ?>
            <tr>
      <th scope="row">3</th>
      <td><?= $item['tanggapan'] ?></td>
      <td><?= $item['rate'] ?></td>
      <td></td>
    </tr>

        <?php } ?>
  </tbody>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>