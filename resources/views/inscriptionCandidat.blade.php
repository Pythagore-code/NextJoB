<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
    <title>Incription des candidats</title>
</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Inscription candidats</h2>
                    <form method="POST">
                        <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Prénom" name="prenom">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Nom" name="nom">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                              <input type="email" class="form-control" placeholder="email" name="email">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Numéro de télephone" name="phone">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="row g-3 align-items-center">
                                
                                <div class="col-auto">
                                  <input type="password" class="form-control" placeholder="Choisissez un mot de passe" name="password">
                                </div>
                                <div class="col-auto">
                                  <span id="passwordHelpInline" class="form-text">
                                    Au moins 8 caracteres 
                                  </span>
                                </div>
                            </div>
                        </div>
                        <br>
                    
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Insérer votre CV</label>
                            <input class="form-control" type="file" id="formFile">
                          </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Je m'inscris</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>