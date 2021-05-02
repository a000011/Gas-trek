<?php
    if(isset($examples)){
        if(count($examples) > 5){
        for ($i=0; $i < 5; $i++) {
            echo('
                <div style="cursor: pointer;" onclick="redirect('.$examples[$i]->id.')" class="col-xl-4 col-12 cards workCards">
                    <img  src="/images/examples/'.$examples[$i]->img[0].'" class="card-img-top" alt="Card image cap">
                    <div  class="card-body " id="workEx">
                        <p class="card-text">
                            '.$examples[$i]->car_name.'
                        </p>
                    </div>
                </div>
            ');
        }
        echo('
                <div style="cursor: pointer;" class="col-xl-4 col-12 cards workCards">
                    <img src="/images/watch_all.png" class="card-img-top" alt="Card image cap">
                    <div class="card-body " id="workEx">
                        <p class="card-text">
                            показать остальное
                        </p>
                    </div>
                </div>
            ');
    }
    else{
        foreach ($examples as $ex) {
            echo('
                <div style="cursor: pointer;" onclick="redirect('.$examples[$i]->id.')" class="col-xl-4 col-12 cards workCards">
                    <img  src="/images/examples/'.$ex->img.'" class="card-img-top" alt="Card image cap">
                    <div  class="card-body " id="workEx">
                        <p class="card-text">
                            '.$ex->car_name.'
                        </p>
                    </div>
                </div>
            ');
        }
    }
    }
?>
