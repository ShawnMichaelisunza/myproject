

<?php


$error = array('l-name' => '', 'f-name' => '', 'm-name' => '', 'b-place' => '','religion' => '','picture' => '',
'email' => '', 'contact' => '', 'gender' => '', 'address' => '', 'bday' => '', 'elem' => '', 'high-s' => '', 'college' => '',
'y-grad' => '', 'comp-name' => '', 'position' => '', 'comp-name-1' => '', 'position-1' => '');
$lname = $fname = $mname = $bplace =  $religion =  $picture = $email = $contact =  $gender =  $address = $bday 
=  $elem = $HighS =  $College = $yGrad = $Compname = $Post =  $Compname1 = $Post1 = '';

if(isset($_POST['form-submit'])){

    $lname = $_POST['l-name'];
    $fname = $_POST['f-name'];
    $mname = $_POST['m-name'];

    $bplace = $_POST['b-place'];
    $religion = $_POST['religion'];
    $picture = $_POST['picture'];

    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];

    $address = $_POST['address'];
    $bday = $_POST['bday'];

    $elem = $_POST['elem'];
    $HighS = $_POST['high-s'];
    $College = $_POST['college'];
    $yGrad = $_POST['y-grad'];

    $Compname = $_POST['comp-name'];
    $Post = $_POST['position'];

    $Compname1 = $_POST['comp-name-1'];
    $Post1 = $_POST['position-1'];

    
    if(empty($_POST['l-name'])){
        $error['l-name'] = '* Last name is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $lastName)){
            $error['l-name'] = '* Letters only';
        }
    }

    if(empty($_POST['f-name'])){
        $error['f-name'] = '* First name is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $firstName)){
            $error['f-name'] = '*Letters only';
        }
    }

    if(empty($_POST['m-name'])){
        $error['m-name'] = '* Middle name is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $middleName)){
            $error['m-name'] = '* Letters only';
        }
    }

    if(empty($_POST['b-place'])){
        $error['b-place'] = '* Birth place is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $lastName)){
            $error['b-place'] = '* Letters only';
        }
    }

    if(empty($_POST['religion'])){
        $error['religion'] = '* Religion name is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $lastName)){
            $error['religion'] = '* Letters only';
        }
    }

    if(empty($_POST['picture'])){
        $error['picture'] = '* Picture name is Required';

    }else{
        // success
    }

    if(empty($_POST['email'])){
        $error['email'] = '* Enter an email';
    }else{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error['email'] = '* email must be a valid email address';
        }
    }

    if(empty($_POST['contact'])){
        $error['contact'] = '* Phone number is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $phoneNum)){
            $error['contact'] = '* Numbers only';
        }
    }

    if(empty($_POST['gender'])){
        $error['gender'] = '* Gender is Required';

    }else{
        // Success
    }

    if(empty($_POST['address'])){
        $error['address'] = '* address is Required';

    }else{
        // Success
    }

    if(empty($_POST['bday'])){
        $error['bday'] = '* Date of Birth is Required';

    }else{
        // Success
    }

    if(empty($_POST['elem'])){
        $error['elem'] = '* Elementary School is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $phoneNum)){
            $error['elem'] = '* Letters only';
        }
    }

    if(empty($_POST['high-s'])){
        $error['high-s'] = '* High School is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $phoneNum)){
            $error['high-s'] = '* Letters only';
        }
    }

    if(empty($_POST['college'])){
        $error['college'] = '* College is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $phoneNum)){
            $error['college'] = '* Letters only';
        }
    }

    if(empty($_POST['y-grad'])){
        $error['y-grad'] = '* Year Graduated is Required';

    }else{
        // Success
    }

    if(empty($_POST['comp-name'])){
        $error['comp-name'] = '* Company name is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $phoneNum)){
            $error['comp-name'] = '* Letters only';
        }
    }
    if(empty($_POST['position'])){
        $error['position'] = '* Position is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $phoneNum)){
            $error['position'] = '* Letters only';
        }
    }

    if(empty($_POST['comp-name-1'])){
        $error['comp-name-1'] = '* Company name is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $phoneNum)){
            $error['comp-name-1'] = '* Letters only';
        }
    }
    if(empty($_POST['position-1'])){
        $error['position-1'] = '* Position is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $phoneNum)){
            $error['position-1'] = '* Letters only';
        }
    }

    
}

?>