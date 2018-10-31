<?php
/**
 * Created by PhpStorm.
 * User: Herberth
 * Date: 09/10/2018
 * Time: 06:36 PM
 */

$conn = new mysqli('localhost','root' ,'aserty','iia');
if($conn->connect_error){
    echo $error->$conn->connect_error;
}
?>