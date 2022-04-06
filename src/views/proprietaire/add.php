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

<div class="container mt-2">
  <div class="row">
    <div class="col-7">
      <h4 class="text-center">Enregistrer un proporietaire</h4>
    <form action="http://localhost/Brief-Project-TsImmo/ApprentissageDoctrine/Proprietaire/add" method="POST">
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Date de naissance</label>
    <input type="date" class="form-control" name="dateNaissance" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Lieu de naissance</label>
    <input type="text" class="form-control" name="lieuNaissance" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Civilite</label>
    <input type="text" class="form-control" name="civilite" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Code identite</label>
    <input type="text" class="form-control" name="codePieceIdentite" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Numero piece identite</label>
    <input type="text" class="form-control" name="numeroPieceIdentite" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-success mt-2">Enregistrer</button>
</form>
    </div>
    <div class="col-5"></div>

  </div>

</div>
    
</body>
</html>
