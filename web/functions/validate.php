<?php

function validate(){
    if($_POST['email']=='ericjonesmyemail@gmail.com'){
        die('Denied.');
    }

    if($_POST['first_name'] == $_POST['last_name']){
        die('Denied.');
    }
}