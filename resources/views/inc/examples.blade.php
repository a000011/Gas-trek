<?php
    if(isset($examples)){//TODO: сделать через blade
        foreach ($examples as $ex) {
            echo('
                <div style="cursor: pointer;" onclick="redirect('.$ex->id.')" class="col-xl-4 col-12 cards workCards">
                    <img  src="/images/examples/'.$ex->img[0].'" class="card-img-top" alt="Card image cap">
                    <div  class="card-body " id="workEx">
                        <p class="card-text">
                            '.$ex->car_name.'
                        </p>
                    </div>
                </div>
            ');
        }
    }
?>
