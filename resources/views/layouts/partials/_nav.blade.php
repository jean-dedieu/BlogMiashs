 <!-- Fixed navbar -->
 <nav class="navbar navbar-default navbar-static">
      <div class="container">
        <div class="navbar-header">
         <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>-->
          <a class="navbar-brand" href="{{ route('root_path') }}">{{ env('APP_NAME')}}</a>

          <ul class="nav navbar-nav">
          <li class="{{ set_active_route('root_path') }}"><a href="{{ route('root_path') }}">Accueil</a></li>
         <li class="{{ set_active_route('about_path') }}"><a href="{{ route('about_path') }}">Qui sommes-nous</a></li>
         <li class="{{ set_active_route('contact_path') }}"><a href="{{ route('contact_path')}}">Contacts</a></li>
         <!--<li class="menu-text">Le Blog</li>-->
        <!-- <li><a href="http://127.0.0.1:8000/">Home</a></li>-->
         <li class="{{ set_active_route('articles_path') }}"><a href="http://127.0.0.1:8000/articles">Articles</a></li>
         <!--<li><a href="http://127.0.0.1:8000/contact">Contact</a></li>-->


         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sites extérieurs <span class="caret"></span></a>
           <ul class="dropdown-menu">
              <li><a href="http://www.twagirumuhoza.com">Atelier web</a></li>
             <li><a href="http://formations.univ-grenoble-alpes.fr/fr/catalogue/master-XB/sciences-humaines-et-sociales-SHS/master-
                   mathematiques-et-informatique-appliquees-aux-sciences-humaines-et-sociales-miashs-program-master-mathematiques-informatique-
                   appliquees-et-sciences-humaines-et-sociales/parcours-double-competence-informatique-et-sciences-sociales-dciss-subprogram-informatique-et
                   -sciences-sociales.html">Master MIASHS</a></li>


          
           </ul>
         </li>
       </ul>

      
       <ul class="nav navbar-nav navbar-right">
       @guest
         <li class="nav-item">
             <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
             </li>

             <li class="nav-item">
             <a class="nav-link" href="{{ route('register') }}">Devenir membre</a>
             </li>
             @else
             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
             @endguest

            </ul>
         
        </div>


        <div id="" class="navbar-collapse collapse" style="background-color: 99FFFF;">

        </div><!--/.nav-collapse -->
      </div>
</nav>
