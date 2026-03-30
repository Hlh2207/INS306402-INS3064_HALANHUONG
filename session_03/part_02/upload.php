<?php

$allowed_types = ["image/jpeg", "image/png"];
$max_size = 2 * 1024 * 1024; // 2MB

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_FILES["avatar"])){

        $file = $_FILES["avatar"];

        if($file["size"] > $max_size){
            $message = "File too large. Max 2MB allowed.";
        }

        elseif(!in_array($file["type"], $allowed_types)){
            $message = "Only JPG and PNG allowed.";
        }

        else{

            $ext = pathinfo($file["name"], PATHINFO_EXTENSION);

            $new_name = uniqid() . "." . $ext;

            $upload_path = "uploads/" . $new_name;

            if(move_uploaded_file($file["tmp_name"], $upload_path)){
                $message = "Upload successful!";
            }else{
                $message = "Upload failed.";
            }
        }
    }
}

?>

<h2>Upload Avatar</h2>

<form method="POST" enctype="multipart/form-data">

<input type="file" name="avatar"><br><br>

<button type="submit">Upload</button>

</form>

<p><?php echo $message; ?></p>