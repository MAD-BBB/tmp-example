<?php

header('Content-type: application/json');

if(isset($_POST['inputLastName']) && $_POST['inputLastName']=='Bull')
{
    $response = array('valid' => false, 'message' => 'Somthing other, please');
}
else
{
    $response = array('valid' => true);
}

sleep(1);
echo json_encode($response);
