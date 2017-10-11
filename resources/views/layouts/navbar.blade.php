<nav class="navbar navbar-default" style="background-color: #0000FF; color:white;">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" style="color: white; margin-top:0.0.1em;">
                {{config('app.name')}}
            </a>
           <ul class="nav navbar-nav">
             <li><a href="{{ url('/') }} " style="font-size: 16px; color: white;">Carte</a></li>
             <li><a href="{{ url('/createRoadmap') }}" style="font-size: 16px; color: white;">Feuille de route</a></li>
             <li><a href="{{ url('/createLuggage') }}" style="font-size: 16px; color: white;">Créer un baggage</a></li>
             <li><a href="{{ route('steps.create') }}" style="font-size: 16px; color: white;">Etapes</a></li>
             <li><a href="#"></a></li>
          </ul>
        </div>

    </div>
</nav>
