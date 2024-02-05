<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
<form action='process.php' method='GET'>
  <div class="mb-3">
    <label for="usertxt" class="form-label">Inserisci testo</label>
    <input type="textarea" name='usertxt' class="form-control" id="usertxt" aria-describedby="textHelp">
    <div id="textHelp" class="form-text">Inserisci il testo</div>
  </div>
  <div class="mb-3">
    <label for="censura" class="form-label">Parola da censurare</label>
    <input type="text" name='censura' class="form-control" id="censura">
  </div>
  <button type="submit" class="btn btn-primary">Invia</button>
</form>

</body>
</html>