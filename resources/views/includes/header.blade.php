<nav class="navbar navbar-expand-md bg-body-tertiary">

    <div class="container">

        <a href="{{ route('home') }}" class="navbar-brand">
        
            {{ config('app.name') }}
    
        </a>
      
      <button type="button" class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        
        <span class="navbar-toggler-icon"></span>

      </button>


      <div class="collapse navbar-collapse" id="navbar-collapse">

        <ul class="navbar-nav me-auto mb-2 mb-md-0">

        <li class="nav-item">

            <a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page">

                {{ __('Главная') }}
            
            </a>

        </li>

        <li class="nav-item">

            <a href="{{ route('service') }}" class="nav-link {{ Route::is('service') ? 'active' : '' }}" aria-current="page">

                {{ __('Услуги') }}
            
            </a>

        </li>

        </ul>

        <ul class="navbar-nav ms-auto mb-2 mb-md-0">

            <li class="nav-item">
    
                <a href="{{ route('register') }}" class="nav-link {{ Route::is('register') ? 'active' : '' }}" aria-current="page">
    
                    {{ __('Регистрация') }}
                
                </a>
    
            </li>
    
            <li class="nav-item">
    
                <a href="{{ route('login') }}" class="nav-link {{ Route::is('login') ? 'active' : ''  }}" aria-current="page">
    
                    {{ __('Вход') }}
                
                </a>
    
            </li>
    
        </ul>

      </div>
    </div>
  </nav>






{{-- <header class="py-3 border-bottom">

    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('home') }}">
                    {{ config('app.name') }}
                </a> 
            </div>
        <div>
            <ul class="list-unstyled d-flex">
                <li class="ms-3">
                    <a href="{{ route('service') }}">Услуга</a>
                </li>
                <li class="ms-3">
                    <a href="{{ route('login') }}">Вход</a>
                </li>
                <li class="ms-3">
                    <a href="{{ route('register') }}">Регистрация</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</header> --}}
