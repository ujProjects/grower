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

 ?>