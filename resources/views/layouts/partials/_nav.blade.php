 <!-- Fixed navbar -->
 <nav class="navbar navbar-default navbar-static">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('root_path') }}">{{ env('APP_NAME')}}</a>
        </div>


        <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
            <li class="active"><a href="{{ route('root_path') }}">Accueil</a></li>
            <li><a href="{{ route('about_path') }}">Qui sommes-nous</a></li>
            <li><a href="{{ route('contact_path')}}">Contacts</a></li>
            <!--<li class="menu-text">Le Blog</li>-->
           <!-- <li><a href="http://127.0.0.1:8000/">Home</a></li>-->
            <li><a href="http://127.0.0.1:8000/articles">Articles</a></li>
            <!--<li><a href="http://127.0.0.1:8000/contact">Contact</a></li>-->


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sites extérieurs <span class="caret"></span></a>
              <ul class="dropdown-menu">
                 <li><a href="http://www.twagirumuhoza.com">Atelier web</a></li>
                <li><a href="http://formations.univ-grenoble-alpes.fr/fr/catalogue/master-XB/sciences-humaines-et-sociales-SHS/master-
                      mathematiques-et-informatique-appliquees-aux-sciences-humaines-et-sociales-miashs-program-master-mathematiques-informatique-
                      appliquees-et-sciences-humaines-et-sociales/parcours-double-competence-informatique-et-sciences-sociales-dciss-subprogram-informatique-et
                      -sciences-sociales.html">Master MIASHS</a></li>
               

               <!-- <li role="separator" class="divider"></li>
                <li class="dropdown-header">Autres</li>
                <li><a href="#">Autres</a></li>
                <li><a href="#">Autres</a></li>-->
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
                <button class="btn btn-default"><li><a href="#">Se connecter</a></li></button>
                <button class="btn btn-default"><li><a href="#">Devenir membre</a></li></button>
                
               </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>