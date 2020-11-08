<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}" style="font: oblique bold 120% cursive;">Hotel La Rivera</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font: oblique bold 120% cursive;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hotel
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/hotel/historia') }}">Historia</a>
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/hotel/mision-vision') }}">Mision Y Vision</a>
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/hotel/ubicacion') }}">Ubicaión</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font: oblique bold 120% cursive;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Servicios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/servicios/habitaciones') }}">Habitaciones</a>
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/servicios/eventos/{id}') }}">Eventos</a>                
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" style="font: oblique bold 120% cursive;" href="{{ url('/reservas') }}">Reservas<span class="sr-only">(current)</span></a>
            </li>   
            <li class="nav-item active">
                <a class="nav-link" style="font: oblique bold 120% cursive;" href="{{ url('/contactos') }}">Contactos<span class="sr-only">(current)</span></a>
            </li>       
            </ul>
        </div>
        </nav>