<?php

$query = "";

if(isset($_GET["q"])){
    $query = htmlspecialchars($_GET["q"]);
}

?>

<form method="GET">

Search:
<input type="text" name="q" value="<?php echo $query; ?>">

<button type="submit">Search</button>

</form>

<?php
if($query){
    echo "<p>You searched for: $query</p>";
}
?>