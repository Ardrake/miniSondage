<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sondage</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS Styling -->
    <link href="css/styles.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
        
      <div class="letter-form">
        <h1>Sondage sur vous!</h1>
          <div id="blanks">
            <form>
              <div class="form-group">
                <label for="nom">Votre nom</label>
                <input id="nom" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label for="age">Votre age</label>
                <input id="age" class="form-control" type="text">
              </div>
              <h5>Quelle est votre dessin animé favoris</h5>
              <select class="form-control" id="dessin">
                <option value="1">Goldorak</option>
                <option value="2">Candy</option>
                <option value="3">Belle et Sébastien</option>
                <option value="4">Albator</option>
              </select>
              <button type="submit" class="btn btn-danger">Envoyez</button>
            </form>
          </div>
        </div>
        
        <div id="answers">
          <ul>
            <li>Name: <span class="leNom"></span></li>
            <li>age: <span class="leAge"></span></li></li>
            <li>Dessin animé: <span class="leDessin"></span></li></li>
          </ul>
        </div>

    </div>

    <script src="js/jquery-2.2.4.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>

  </body>
</html>
