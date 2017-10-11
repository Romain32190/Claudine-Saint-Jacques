<nav class="navbar navbar-default" style="background-color: #0000FF; color:white;">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" style="color: white; margin-top:0.0.1em;">
                {{config('app.name')}}
            </a>
           <ul class="nav navbar-nav">
             <li><a href="{{ url('/') }} " style="color: white; margin-top:0.0.1em;">Carte</a></li>
             <li><a href="{{ url('/createRoadmap') }}" style="color: white; margin-top:0.0.1em;">Feuille de route</a></li>
             <li><a href="{{ url('/createLuggage') }}" style="color: white; margin-top:0.0.1em;">Créer un baggage</a></li>
             <li><a href="{{ route('steps.create') }}" style="color: white; margin-top:0.0.1em;">Etapes</a></li>
             <li><a href="{{ url ('/createPilgrim')}}" style="color: white; margin-top:0.0.1em;">Créer un pélerin</a></li>
             <li><a href="{{ route ('drivers.create')}}" style="color: white; margin-top:0.0.1em;">Créer un chauffeur</a></li>
          </ul>
        </div>

    </div>
</nav>
