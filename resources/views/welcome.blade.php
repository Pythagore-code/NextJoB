  <!doctype html>
  <html lang="fr">
  <head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
    <title>NextJoB</title> 
  </head> 
  <body> <!-- Header --> 
    <section id="header"> 
    <div class="header container"> 
      <div class="nav-bar"> 
      <div class="brand"> <a href="#home"><h1><span>N</span>ext<span>J</span>o<span>B</span></h1></a> 
      </div> 
      <div class="nav-list"> 
        <div class="hamburger"> 
        <div class="bar"></div> 
        </div> 
        <ul> 
        <li><a href="#home" data-after="accueil">accueil</a></li> 
        <li><a href="#catégories" data-after="catégories">Tableau de bord</a></li> 
        <li><a href="#projects" data-after="publications">Publications</a></li> 
        <li><a href="#contact" data-after="contactez-nous">contactez-nous</a></li> 
        <li><a href="#connexion" data-after="connexion">connexion</a></li> 
        </ul> 
      </div> 
      </div> 
    </div> 
    </section> <!-- End Header --> <!-- home Section  --> 
    <section id="home"> 
    <div class="home container"> 
      <div> 
      <h1>Bienvenue sur NextJoB<span></span></h1> 
      
      <h1>Trouvez l'emploi de vos reves en un clic !<span></span></h1>
  
      
        <a href="#" type="button" class="cta">Recruteur</a>   
        <br> 

        </br>
        <a href="{{ route('inscription.candidat')}}" type="button" class="cta">Candidat </a>   
        <br> </br> <br> </br> 
        
        <div class="container-fluid">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div> 
    </div> 3
    </section> <!-- End home Section  --> <!-- Service Section --> 
    <section id="catégories">  
    <div class="catégories container"> 
      <div class="catégorie-top"> 
      <h1 class="section-title">Offres dispon<span>i</span>bles</h1> 
      <p>Retrouver des offres d'emploies par catégories </p> 
      </div> 
      <div class="catégorie-bottom"> 
      
      <div class="catégorie-item"> 
          <div class="icon"> 
            <img src="{{asset('images/stats.png')}}" alt="logo">
          </div> 
          <h2>Finance </h2>
          <br> <br>
          <div class="product">
          <span class="nbreoffre">25</span> Offres disponibles
          </div>
          <a href="#" class="btn btn-secondary">Voir les offres</a>
        </div> 
          <div class="catégorie-item"> 
          <div class="icon"> 
          <img src="{{asset('images/paint-board-and-brush.png')}}" alt="logo"> 
          </div> 
          <h2> Art et design</h2>
          <br> <br>
          <div class="product">
          <span class="nbreoffre">58</span>Offres disponibles
          </div>
          <a href="#" class="btn btn-secondary">Voir les offres</a>
        </div> 
        <div class="catégorie-item"> 
          <div class="icon"> 
          <img src="{{asset('images/enterprise.png')}}" alt="logo"> 
          </div> 
          <h2>Ressources humaines</h2> 
          <br> <br>
          <div class="product">
          <span class="nbreoffre">200</span>Offres disponibles
          </div>
          <a href="#" class="btn btn-secondary">Voir les offres</a>
        </div> 
        <div class="catégorie-item"> 
            <div class="icon"> 
            <img src="{{asset('images/social-worker.png')}}" alt="logo"> 
            </div> 
            <h2>Santé et services sociaux</h2> 
            <br> <br>
            <div class="product">
            <span class="nbreoffre">3500</span>Offres disponibles
            </div>
            <a href="#" class="btn btn-secondary">Voir les offres</a>
        </div>
        <div class="catégorie-item"> 
            <div class="icon"> 
            <img src="{{asset('images/social-media-marketing.png')}}" alt=logo> 
            </div> 
            <h2>Marketing digital</h2> 
            <br> <br>
            <div class="product">
              <span class="nbreoffre">593</span>Offres disponibles
            </div>
            <a href="#" class="btn btn-secondary">Voir les offres</a>
        </div> 
        <div class="catégorie-item"> 
            <div class="icon"> 
            <img src="{{asset('images/backup.png')}}" alt="logo"> 
            </div> 
            <h2>Electricité générale</h2> 
            <br> <br>
            <div class="product">
            <span class="nbreoffre">4000</span> Offres disponibles
          </div>
        <a href="#" class="btn btn-secondary">Voir les offres</a>
        </div> 
        <div class="catégorie-item"> 
            <div class="icon"> 
            <img src="{{asset('images/classroom.png')}}" alt=logo> 
            </div> 
            <h2>Enseignement et formattion</h2> 
            <br> <br>
            <div class="product">
            <span class="nbreoffre">5000</span> Offres disponibles
          </div>
        <a href="#" class="btn btn-secondary">Voir les offres</a>
        </div> 
      <div class="catégorie-item"> 
          <div class="icon"> 
          <img src="{{asset('images/coding.png')}}" alt="logo">
          </div> 
          <h2>Developpement Web</h2> 
          <br> <br>
          <div class="product">
          <span class="nbreoffre">3000</span> Offres disponibles
        </div>
      <a href="#" class="btn btn-secondary">Voir les offres</a>
      </div> 
      <div class="catégorie-item"> 
          <div class="icon"> 
          <img src="{{asset('images/internship.png')}}" alt=logo> 
          </div> 
          <h2>Stage academique et professionelle</h2> 
          <br> <br>
          <div class="product">
          <span class="nbreoffre">500</span> Offres disponibles
        </div>
      <a href="#" class="btn btn-secondary">Voir les offres</a>
      </div>
      <div class="catégorie-item"> 
          <div class="icon"> 
          <img src="{{asset('images/civil-engineering.png')}}" alt=logo> 
          </div> 
          <h2>Ingenieurie et architecture </h2> 
          <br> <br>
          <div class="product">
          <span class="nbreoffre">720</span> Offres disponibles
        </div>
        <a href="#" class="btn btn-secondary">Voir les offres</a>
      </div>  
      <div class="catégorie-item"> 
          <div class="icon"> 
          <img src="{{asset('images/makeup.png')}}" alt=logo> 
          </div> 
          <h2>Make-up artist</h2> 
          <br> <br>
          <div class="product">
          <span class="nbreoffre">290</span> Offres disponibles
        </div>
        <a href="#" class="btn btn-secondary">Voir les offres</a>
      </div> 
      <div class="catégorie-item"> 
        <div class="icon"> 
        <img src="{{asset('images/ux-design.png')}}" alt="logo"> 
        </div> 
        <h2>Designer UI/UX</h2> 
        <br> <br>
        <div class="product">
        <span class="nbreoffre">4470</span> Offres disponibles
      </div>
      <a href="#" class="btn btn-secondary">Voir les offres</a>
    </div> 
      </div> 
    </div> 
    </section> <!-- End Service Section --> <!-- Projects Section --> 
      <section id="projects"> 
      <div class="projects container"> 
        <div class="projects-header"> 
        <h1 class="section-title">Offres d'emplois r<span>é</span>centes</h1> 
      </div> 
      <div class="all-projects"> 
        <div class="card w-200 mb-5" style="width: 100rem;">

          <div class="card-body">
            <h5 class="card-title">Resposanble des ressources humaines</h5>
            <p class="card-text">Temps plein<br> ville: Douala<br> Salaire:450000F</p>
            <a href="#" class="btn btn-primary">Postuler</a>
            <a href="#" class="btn btn-secondary">Plus d'infos</a>
          </div>
          <div class="card-footer text-body-secondary">
            Il y a 45min
          </div>
        </div>

        <div class="card w-200 mb-5" style="width: 100rem;">

          <div class="card-body">
            <h5 class="card-title">Infimier(e) en santé mentale</h5>
            <p class="card-text">Temps plein<br> ville: Buéa<br> Salaire:450000F</p>
            <a href="#" class="btn btn-primary">Postuler</a>
            <a href="#" class="btn btn-secondary">Plus d'infos</a>
          </div>
          <div class="card-footer text-body-secondary">
            Il y a 15h
          </div>
        </div>

        <div class="card w-200 mb-5" style="width: 100rem;">

          <div class="card-body">
            <h5 class="card-title">Enseignant(e) en primaire</h5>
            <p class="card-text">Temps partiel<br> ville: Loum<br> Salaire:50000F</p>
            <a href="#" class="btn btn-primary">Postuler</a>
            <a href="#" class="btn btn-secondary">Plus d'infos</a>
          </div>
          <div class="card-footer text-body-secondary">
            Il y a 3 jours
          </div>
        </div>

        <div class="card w-200 mb-5" style="width: 100rem;">

          <div class="card-body">
            <h5 class="card-title">Finance et comptabilité</h5>
            <p class="card-text">Temps plein<br> ville: Loum <br> Salaire:50000F</p>
            <a href="#" class="btn btn-primary">Postuler</a>
            <a href="#" class="btn btn-secondary">Plus d'infos</a>
          </div>
          <div class="card-footer text-body-secondary">
            Il y a 6 jours
          </div>
        </div>

        <div class="card w-200 mb-5" style="width: 100rem;">

          <div class="card-body">
            <h5 class="card-title">Développeur web full stack Laravel</h5>
            <p class="card-text">Temps plein<br> ville: Bafoussam <br> Salaire:250000F</p>
            <a href="#" class="btn btn-primary">Postuler</a>
            <a href="#" class="btn btn-secondary">Plus d'infos</a>
          </div>
          <div class="card-footer text-body-secondary">
            Il y a 1 semaine
          </div>
        </div>

        

      <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link">Précédent</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Suivant</a>
            </li>
          </ul>
      </nav>

        </div> 
      </div> 
      </section> <!-- End Projects Section --><!--connexion section --> 
    <section id="connexion"> 
    <div class="connexion container"> 
      <div class="col-left"> 
      </div> 
      <div class="col-center"> 
      <h1 class="section-title">c<span>o</span>nn<span>e</span>xion </h1> 
      <br> 
      <h1>Connectez-vous ici </h1> 
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> 
      </div> 
    </div> <!-- end connexion section --> <!-- Contact Section --> 
    <section id="contact"> 
      <div class="contact container"> 
      <div> 
        <h1 class="section-title">c<span>o</span>nt<span>a</span>ctez-nous</h1> 
      </div> 
      <div class="contact-items"> 
        <div class="contact-item"> 
        <div class="icon"> 
          <img src="{{asset('images/whatsapp.png')}}" alt=logo> 
        </div> 
        <div class="contact-info"> 
          <h1>Telephone</h1> 
          <h2>+237 674 354 319</h2> 
        </div> 
        </div> 
        <div class="contact-item"> 
        <div class="icon"> 
          <img src="{{asset('images/envelope (1).png')}}" alt=logo> 
        </div> 
        <div class="contact-info"> 
          <h1>Email</h1> 
          <h2>NextJoB@gmail.com</h2>  
        </div> 
        </div> 
        <div class="contact-item"> 
        <div class="icon"> 
          <img src="{{asset('images/location.png')}}" alt=logo> 
        </div> 
        <div class="contact-info"> 
          <h1>Cameroun</h1> 
          <h2>Douala,Ndogbong</h2> 
        </div> 
        </div> 
      </div> 
      </div> 
    </section> <!-- End Contact Section --> <!-- Footer --> 
    <section id="footer"> 
      <div class="footer container"> 
      <div class="brand"> 
        <h1><span>N</span>e<span>x</span>tJoB</h1> 
      </div> 
      <h2>Social images</h2> 
      <div class="social-icon"> 
        <div class="social-item"> <a href="#"><img src="{{asset('images/facebook_6422199.png')}}" alt=logo></a> 
        <div class="social-item"> <a href="#"><img src="{{asset('images/github.png')}}" alt=logo></a> 
        </div> 
        <div class="social-item"> <a href="#"><img src="{{asset('images/twitter.png')}}" alt=logo></a> 
        </div> 
        <div class="social-item"> <a href="#"><img src="{{asset('images/facebook-messenger.png')}}" alt=logo></a> 
        </div> 
      </div> 
      <p>NextJoB © Copyright 2024 | All rights reserved</p> 
      </div> 
    </section> <!-- End Footer --> 
    <script src="{{asset('js/script.js')}}"></script> 
    
    </section> 
  </body>
  </html>