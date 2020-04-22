<?php

function validate_alphanumeric_underscore($str)
{
    return preg_match('/^[a-zA-Z0-9_]+$/',$str);
}

function validate_alpha_space($str)
{
    return preg_match('/^[a-zA-Z ]+$/',$str);
}


function validate_email($str)
{
    return preg_match('/^[a-zA-Z0-9_@.]+$/',$str);
}
function validate_img($img_array){
        // Get Image Dimension
        $fileinfo = @getimagesize($img_array["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];

        $allowed_image_extension = array(
            "png",
            "jpg",
            "jpeg"
        );

        // Get image file extension
        $file_extension = pathinfo($img_array["name"], PATHINFO_EXTENSION);

        // Validate file input to check if is not empty
        if (! file_exists($img_array["tmp_name"])) {
            $response = array(
                "type" => "error",
                "message" => "Choose image file to upload."
            );
        }    // Validate file input to check if is with valid extension
        else if (! in_array($file_extension, $allowed_image_extension)) {
            $response = array(
                "type" => "error",
                "message" => "Upload valiid images. Only PNG and JPEG are allowed."
            );
            echo $result;
        }    // Validate image file size
        else if (($img_array["size"] > 2000000)) {
            $response = array(
                "type" => "error",
                "message" => "Image size exceeds 2MB"
            );
        }    // Validate image file dimension
         else {
            date_default_timezone_set('Asia/Tashkent');
            $pathinfo = pathinfo(basename($img_array["name"]));
            $name =  date('mdYHis') . md5(basename($img_array["name"])) .".". $pathinfo['extension'];
            $target = "../images/products/" . $name;
            if (move_uploaded_file($img_array["tmp_name"], $target)) {
                $response = array(
                    "type" => "success",
                    "message" => "Image uploaded successfully.",
                    "target" => $name,
                );
            } else {
                $response = array(
                    "type" => "error",
                    "message" => "Problem in uploading image files."
                );
            }
        }
        return $response;
}

 ?>
