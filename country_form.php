<?php
require_once "lib/autoload.php";

$css = array( "style.css" );
$VS->BasicHead( $css );
?>
<body>

<div class="jumbotron text-center">
    <h1>Formulier Land</h1>
</div>

<div class="container">
    <div class="row">

        <?php
        $countries = $Container->getCountryLoader()->LoadCountry( $id = $_GET['id'] );
        $template = $VS->LoadTemplate("country_form");

        print $VS->ReplaceCountries( $countries, $template);
        ?>

    </div>
</div>

</body>
</html>
