<?php
include "assets/php/begintemplate.php";
if (!empty($_SESSION['user_id'])) {
?>

    <script src="assets/js/fetch.js"></script>
    <script src="assets/js/home.js"></script>

    <div class="mdl-grid"></div>

    <dic class="activeCard" style="display: none;">
        <div class="mdl-cell mdl-cell--12-col">
            <div class="demo-card-wide mdl-card mdl-shadow--2dp activeElement">

            </div>
        </div>
        </div>

    <?php
    include "assets/php/endtemplate.php";
} else { // nur anzeigen wenn user auch eingeloggt ist!!
    echo '
<script type="text/javascript">

alert("Sie müssen sich einloggen um Zugriff auf diese Seite zu erhalten!");
window.location.href = "index.php";

</script>';
}
    ?>