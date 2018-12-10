<?php
/**
 * Created by PhpStorm.
 * User: Herberth
 * Date: 09/10/2018
 * Time: 06:36 PM
 */

$conn = new mysqli('localhost','root' ,'maga_098','iia');
if($conn->connect_error){
    echo $error->$conn->connect_error;
}
?>