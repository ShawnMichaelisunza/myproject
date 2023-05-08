<?php

include('db_connect/connect.php');

$error = array('l-name' => '', 'f-name' => '', 'm-name' => '', 'b-place' => '','religion' => '','picture' => '',
'email' => '', 'contact' => '', 'gender' => '', 'address' => '', 'bday' => '', 'elem' => '', 'high-s' => '', 'college' => '',
'e-grad' => '',  'h-grad' => '', 'c-grad' => '', 'comp-name' => '', 'position' => '', 'comp-name-1' => '', 'position-1' => '');
$lname = $fname = $mname = $bplace =  $religion =  $picture = $email = $contact =  $gender =  $address = $bday 
=  $elem = $HighS =  $College = $egrad = $hgrad = $cgrad = $Compname = $Post =  $Compname1 = $Post1 = '';

if(isset($_POST['form-submit'])){

    $currentDate = $_POST['date-current'].date('Y-m-d');
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
    $egrad = $_POST['e-grad'];
    $hgrad = $_POST['h-grad'];
    $cgrad = $_POST['c-grad'];

    $Compname = $_POST['comp-name'];
    $Post = $_POST['position'];

    $Compname1 = $_POST['comp-name-1'];
    $Post1 = $_POST['position-1'];

    
    if(empty($_POST['l-name'])){
        $error['l-name'] = '* Last name is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $lname)){
            $error['l-name'] = '* Letters only';
        }
    }

    if(empty($_POST['f-name'])){
        $error['f-name'] = '* First name is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $fname)){
            $error['f-name'] = '*Letters only';
        }
    }

    if(empty($_POST['m-name'])){
        $error['m-name'] = '* Middle name is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $mname)){
            $error['m-name'] = '* Letters only';
        }
    }

    if(empty($_POST['b-place'])){
        $error['b-place'] = '* Birth place is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $bplace)){
            $error['b-place'] = '* Letters only';
        }
    }

    if(empty($_POST['religion'])){
        $error['religion'] = '* Religion name is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $religion)){
            $error['religion'] = '* Letters only';
        }
    }

    // if(empty($_POST['picture'])){
    //     $error['picture'] = '* Picture name is Required';

    // }else{
    //     // success
    // }

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
        if(!preg_match('/^[a-zA-Z\s]+$/', $elem)){
            $error['elem'] = '* Letters only';
        }
    }

    if(empty($_POST['high-s'])){
        $error['high-s'] = '* High School is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $HighS)){
            $error['high-s'] = '* Letters only';
        }
    }

    if(empty($_POST['college'])){
        $error['college'] = '* College is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $College)){
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
        if(!preg_match('/^[a-zA-Z\s]+$/', $Compname)){
            $error['comp-name'] = '* Letters only';
        }
    }
    if(empty($_POST['position'])){
        $error['position'] = '* Position is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $Post)){
            $error['position'] = '* Letters only';
        }
    }

    if(empty($_POST['comp-name-1'])){
        $error['comp-name-1'] = '* Company name is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $Compname1)){
            $error['comp-name-1'] = '* Letters only';
        }
    }
    if(empty($_POST['position-1'])){
        $error['position-1'] = '* Position is Required';

    }else{
        if(!preg_match('/^[a-zA-Z\s]+$/', $Post1)){
            $error['position-1'] = '* Letters only';
        }

        
    }

    if(!array_filter($error)){                          // checking error
        // echo 'errors in the form';
    }else{

        $lname = mysqli_real_escape_string($conn, $_POST['l-name']);
        $fname = mysqli_real_escape_string($conn, $_POST['f-name']);
        $mname = mysqli_real_escape_string($conn, $_POST['m-name']);
        $bplace = mysqli_real_escape_string($conn, $_POST['b-place']);
        $religion = mysqli_real_escape_string($conn, $_POST['religion']);
        $picture = mysqli_real_escape_string($conn, $_POST['picture']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $contact = mysqli_real_escape_string($conn, $_POST['contact']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $bday = mysqli_real_escape_string($conn, $_POST['bday']);
        $elem = mysqli_real_escape_string($conn, $_POST['elem']);
        $HighS = mysqli_real_escape_string($conn, $_POST['high-s']);
        $College = mysqli_real_escape_string($conn, $_POST['college']);
        $egrad = mysqli_real_escape_string($conn, $_POST['e-grad']);
        $hgrad = mysqli_real_escape_string($conn, $_POST['h-grad']);
        $cgrad = mysqli_real_escape_string($conn, $_POST['c-grad']);
        $Compname = mysqli_real_escape_string($conn, $_POST['comp-name']);
        $Post = mysqli_real_escape_string($conn, $_POST['position']);
        $Compname1 = mysqli_real_escape_string($conn, $_POST['comp-name-1']);
        $Post1 = mysqli_real_escape_string($conn, $_POST['position-1']);

        //create sql
        $sql ="INSERT INTO add_project(l_name, f_name, m_name, b_place, religion, pictures , email, contact, gender, ad_dress, bday, elem, e_grad, 
        high_s, h_grad, college, c_grad, comp_name, position, comp_name_1, position_1) 
        VALUES('$lname','$fname', '$mname', '$bplace','$religion', '$picture', '$email','$contact', '$gender', '$address','$bday', '$elem',
        '$egrad','$HighS', '$hgrad','$College','$cgrad', '$Compname', '$Post','$Compname1', '$Post1')";


        //save to db and check

        if(mysqli_query($conn, $sql)){
            // success
        }else{
            //error
            echo 'query error :' . mysqli_error($conn);
        }

        header('Location: index.php');

    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('navbar/header.php')?>
<br>
<div class="add-form container">
    <h1 class="text-danger" style="text-align: start;">Add Contract</h1>
<br>

  <form action="add.php" method="POST">
  <h3 style="text-align: left;">Personal Data</h3>
  <div class="form-width">
      <div class="perent">
      <input type="hidden" name="date-current" id="">

      <label for="">Last name</label>
      <input type="text" name="l-name" id="" value="<?php echo htmlspecialchars($lname)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['l-name'])?></div>
      </div>
      <div class="perent">
      <label for="">First name</label>
      <input type="text" name="f-name" id="" value="<?php echo htmlspecialchars($fname)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['f-name'])?></div>
      </div>
      <div class="perent">
      <label for="">Middle name</label>
      <input type="text" name="m-name" id="" value="<?php echo htmlspecialchars($mname)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['m-name'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent">
      <label for="">Birth Place</label>
      <input type="text" name="b-place" id="" value="<?php echo htmlspecialchars($bplace)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['b-place'])?></div>
      </div>
      <div class="perent">
      <label for="">Religion</label>
      <input type="text" name="religion" id="" value="<?php echo htmlspecialchars($religion)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['religion'])?></div>
      </div>
      <div class="perent">
      <label for="">Picture ( 2x2 )</label>
      <input type="hidden" name="filename">
      <input type="file" name="picture" id="" value="<?php echo htmlspecialchars($picutre)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['picture'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent">
      <label for="">Email</label>
      <input type="email" name="email" id="" value="<?php echo htmlspecialchars($email)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['email'])?></div>
      </div>
      <div class="perent">
      <label for="">Contact No.</label>
      <input type="text" name="contact" id="" value="<?php echo htmlspecialchars($contact)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['contact'])?></div>
      </div>
      <div class="perent" style="display: flex; flex-direction: column;">
      <label for="" >Gender</label>
      <select name="gender" id="" value="<?php echo htmlspecialchars($gender)?>">
        <option value=""></option>
        <option value="male">Male</option>
        <option value="male">Female</option>
      </select>
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['gender'])?></div>
      </div>
    </div>
    <br>

    <div class="form-width">
      <div class="perent-1">
      <label for="">Address</label>
      <input type="text" name="address" id="" value="<?php echo htmlspecialchars($address)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['address'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Date of Birth</label>
      <input type="date" name="bday" id="" value="<?php echo htmlspecialchars($bday)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['bday'])?></div>
      </div>
  </div>
  <br>
  <h3>Educational Background</h3>

  <div class="form-width">
      <div class="perent-1">
      <label for="">Elementary</label>
      <input type="text" name="elem" id="" value="<?php echo htmlspecialchars($elem)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['elem'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Year Graduated</label>
      <input type="date" name="e-grad" id="" value="<?php echo htmlspecialchars($egrad)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['e-grad'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent-1">
      <label for="">High School</label>
      <input type="text" name="high-s" id="" value="<?php echo htmlspecialchars($HighS)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['high-s'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Year Graduated</label>
      <input type="date" name="h-grad" id="" value="<?php echo htmlspecialchars($hgrad)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['h-grad'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent-1">
      <label for="">College</label>
      <input type="text" name="college" id="" value="<?php echo htmlspecialchars($College)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['college'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Year Graduated</label>
      <input type="date" name="c-grad" id="" value="<?php echo htmlspecialchars($cgrad)?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['c-grad'])?></div>
      </div>
  </div>
  <br>
  <h3>Employment Records</h3>
  <div class="form-width">
      <div class="perent-1">
      <label for="">Company name</label>
      <input type="text" name="comp-name" id="" value="<?php echo htmlspecialchars($Compname)?>" >
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['comp-name'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Postion</label>
      <input type="text" name="position" id="" value="<?php echo htmlspecialchars($Post)?>" >
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['position'])?></div>
      </div>
  </div>
  <br>
    <div class="form-width">
        <div class="perent-1">
        <label for="">Company name</label>
        <input type="text" name="comp-name-1" id="" value="<?php echo htmlspecialchars($Compname1)?>" >
        <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['comp-name-1'])?></div>
        </div>
        <div class="perent">
        </div>
        <div class="perent">
        <label for="">Postion</label>
        <input type="text" name="position-1" id="" value="<?php echo htmlspecialchars($Post1)?>" >
        <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['position-1'])?></div>
        </div>
    </div>
<br>
    <div class="btn-form">    
      <button type="submit" name="form-submit" class="btn btn-outline-success">Submit</button>
      <button type="reset" name="cancel" class="btn btn-outline-danger">Cancel</button>
    </div>
  </div>
  </form>
  <br>


</div>



<?php include('navbar/footer.php')?>
</html>