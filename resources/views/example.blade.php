    <?php
        use Illuminate\Support\Facades\DB;
        use App\Models\examples;

        $examples = examples::where('car_name', 'camri')->get();
        foreach ($examples as $ex) {
            echo $ex->car_name;
        }
    ?>
