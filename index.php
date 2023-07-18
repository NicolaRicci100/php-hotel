<?php

$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-secondary">
  <div class="container">
    <h1 class="text-light text-center mt-5">Hotels</h1>
    <table class="table mt-5 table-dark table-striped shadow-lg border">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Parcheggio</th>
          <th scope="col">Voto</th>
          <th scope="col">Distanza dal centro</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hotels as $hotel) : ?>
          <tr>
            <th scope="row"><?= $hotel['name'] ?></th>
            <td><?= $hotel['description'] ?></td>
            <?php if ($hotel['parking'] == true) : ?>
              <td>SI</td>
            <?php else : ?>
              <td>NO</td>
            <?php endif ?>
            <td><?= $hotel['vote'] ?> &#9734;</td>
            <td><?= $hotel['distance_to_center'] ?> Km</td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>

</html>