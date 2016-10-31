<style type="text/css">
* {
    font-family: sans-serif;
}
.felem {
    display: block;
    margin: 5px 0px;
}
</style>

<?php
require 'process_form.php';
if(!isset($_GET["GET"])) {
?>
<form action="process_form.php" method="get">
    <input class="felem" type="number" step="0.01" placeholder="l" name="l">
    <input class="felem" type="number" step="0.01" placeholder="f" name="f">
    <input class="felem" type="number" step="0.01" placeholder="c" name="c">
    <button class="felem" name="GET">Calculate</button>
</form>
<?php } ?>