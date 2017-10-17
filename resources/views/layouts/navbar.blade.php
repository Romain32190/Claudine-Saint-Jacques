<nav class="navbar navbar-default" style="background-color: #6495ED; color:white;">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" style="color: white; margin-top:0.0.1em;">
                {{config('app.name')}}
            </a>
           <ul class="nav navbar-nav">
             <li><a href="{{ url('/') }} " style="color: white; margin-top:0.0.1em;">Carte</a></li>
             <li><a href="{{ url('/createRoadmap') }}" style="color: white; margin-top:0.0.1em;">Feuille de route</a></li>
             <li><a href="{{ route('luggages.create') }}" style="color: white; margin-top:0.0.1em;">Créer un baggage</a></li>
             <li><a href="{{ route ('steps.create') }}" style="color: white; margin-top:0.0.1em;">Etapes</a></li>
             <li><a href="{{ route ('pilgrims.index')}}" style="color: white; margin-top:0.0.1em;">Liste des pélerin</a></li>
             <li><a href="{{ route ('drivers.index')}}" style="color: white; margin-top:0.0.1em;">Liste chauffeurs</a></li>
          </ul>
        </div>

    </div>
</nav>
