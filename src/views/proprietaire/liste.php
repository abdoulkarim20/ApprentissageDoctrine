<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand mx-3" href="">Doctrine Ts-Immo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/Brief-Project-TsImmo/ApprentissageDoctrine/Proprietaire/add">Ajouter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/Brief-Project-TsImmo/ApprentissageDoctrine/Proprietaire/getAll">Lister</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <h3 class="text-center">La liste des proprietaires</h3>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prenoms</th>
      <th scope="col">Nom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Lieu de naissance</th>
      <th scope="col">Civilite</th>
      <th scope="col">Code piece</th>
      <th scope="col">Numero piece</th>
      <th scope="col" colspan="2" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php  foreach ($data as $proprietaire){ ?>
    <tr>
      <td><?=$proprietaire->getId() ;?></td>
      <td><?=$proprietaire->getNom() ;?></td>
      <td><?=$proprietaire->getPrenom();?></td>
      <td><?=$proprietaire->getDateNaissance();?></td>
      <td><?=$proprietaire->getLieuNaissance();?></td>
      <td><?=$proprietaire->getCivilite();?></td>
      <td><?=$proprietaire->getCodePieceIdentite();?></td>
      <td><?=$proprietaire->getNumeroPieceIdentite();?></td>
      <td class="text-center"><a href="?Proprietaire/<?=$proprietaire->getId();?>"><i class="bi bi-pencil-square"></i></a></td>
      <td class="text-center"><a href=""><i class="bi bi-trash3-fill" style="color:#ce0033"></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
</div>
    
</body>
</html>
