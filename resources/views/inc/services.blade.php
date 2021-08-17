<div id="services" align="center" class="d-flex justify-content-center col-12">
    @foreach ($services as $serv)
        <div class="service-card col-3" >
            <div class="card-content">
                <span class="material-icons">
                    {{ $serv['icon'] }}
                </span>
                <h1>
                    {{ $serv['text'] }}
                </h1>
            </div>
        </div>
    @endforeach
</div>
