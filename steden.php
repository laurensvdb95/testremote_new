<?php
ini_set("error_reporting", E_ALL);
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);

require_once "lib/autoload.php";

$css = array( "style.css");
$VS->BasicHead($css);

$MS->ShowMessages();
?>
<body>

<div class="jumbotron text-center">
    <h1>Leuke plekken in Europa</h1>
    <p>Tips voor citytrips voor vrolijke vakantiegangers!</p>
</div>

<?php $VS->PrintNavBar(); ?>

<div class="container">
    <div class="row">

        <?php
        $cities = $Container->getCityLoader()->LoadCity();
        $template = $VS->LoadTemplate("steden");

        print $VS->ReplaceCities( $cities, $template);
        ?>

    </div>
    <div class="row">
        <?php
        $countries = $Container->getCountryLoader()->LoadCountry();
        $template = $VS->LoadTemplate("landen");
        print $VS->ReplaceCountries($countries, $template);
        ?>
    </div>
</div>

</body>
</html>