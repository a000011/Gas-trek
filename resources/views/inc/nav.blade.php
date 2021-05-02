<nav class="navbar navbar-defaul navbar-expand-md navbar-inverse navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('main') }}">
        <img src="/images/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{ route ('main') }}">Главная</a>
            <a class="nav-item nav-link" href="{{ route ('examples') }}">Наши работы</a>
            <a class="nav-item nav-link" href="{{ route('address') }}">Наш адрес</a>
            <a class="nav-item nav-link" href="#">...</a>
        </div>
    </div>
</nav>
