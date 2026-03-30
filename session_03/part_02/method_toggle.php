<?php

$data = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = $_POST;
    $method = "POST";
}else{
    $data = $_GET;
    $method = "GET";
}

?>

<h2>Method: <?php echo $method; ?></h2>

<form method="GET">

<input type="text" name="data">

<button type="submit">Send via GET</button>

</form>

<br>

<form method="POST">

<input type="text" name="data">

<button type="submit">Send via POST</button>

</form>

<h3>Received Data</h3>

<pre>
<?php print_r($data); ?>
</pre>