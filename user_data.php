<?php
//echo "Hello world <br/>";
if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    
    $client = [$name, $email, $dob, $gender, $country];

    $filename = 'userdata.csv';

    $file = fopen($filename, 'a');
    fputcsv($file, $client);
    fclose($file);

    print_r($client);
}else{echo "nothing to display";}

?>