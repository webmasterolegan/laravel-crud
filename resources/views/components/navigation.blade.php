<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class=container>
        <a class=navbar-brand href="/">Online Notes</a>
        
        <button class=navbar-toggler type=button data-bs-toggle=collapse data-bs-target=#navbarNavDropdown aria-controls=navbarNavDropdown aria-expanded=false aria-label="Toggle navigation"><span class=navbar-toggler-icon></span></button>
        
        <div class="collapse navbar-collapse" id=navbarNavDropdown>
            <ul class=navbar-nav>
                <li class=nav-item><a class="nav-link @if(Route::is('home')) active @endif" aria-current=page href={{ route('home') }}>Home</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href=# id=navbarDropdownMenuLink role=button data-bs-toggle=dropdown aria-expanded=false>Notes</a>
                    
                    <ul class=dropdown-menu aria-labelledby=navbarDropdownMenuLink>
                        <li><a class="dropdown-item @if(Route::is('notes.index')) active @endif" href="{{ route('notes.index') }}">All Notes</a></li>
                        <li><hr class=dropdown-divider></li>
                        <li><a class="dropdown-item @if(Route::is('notes.create')) active @endif" href="{{ route('notes.create') }}">Create Note</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>