<!DOCTYPE html>
<html>
    <?php include('navbar/header.php')?>
    <?php include('db_connect/connect.php');?>

        <!-- Update Button -->

        <?php
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            

            $query = "SELECT * from add_project WHERE id = $id";

            $result = mysqli_query($conn, $query);

            if(!$result){
                die("query failed").mysqli_error();
            }
            else{

                $row = mysqli_fetch_assoc($result);


        }
                                      
    }                                        
    
        ?>                                       

        <?php

        $error = array('l-name' => '', 'f-name' => '', 'm-name' => '', 'b-place' => '','religion' => '','picture' => '',
        'email' => '', 'contact' => '', 'gender' => '', 'address' => '', 'bday' => '', 'elem' => '', 'high-s' => '', 'college' => '',
        'e-grad' => '',  'h-grad' => '', 'c-grad' => '', 'comp-name' => '', 'position' => '', 'comp-name-1' => '', 'position-1' => '');
        $lname = $fname = $mname = $bplace =  $religion =  $picture = $email = $contact =  $gender =  $address = $bday 
        =  $elem = $HighS =  $College = $egrad = $hgrad = $cgrad = $Compname = $Post =  $Compname1 = $Post1 = '';
        
        if(isset($_POST['update'])){
            if(isset($_GET['id_new'])){
                $idnew = $_GET['id_new'];
            }
            
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
        

            $query = "UPDATE add_project SET l_name = '$lname', f_name = '$fname', m_name = '$mname', b_place = '$bplace',
            religion = '$religion', pictures = '$picture', email = '$email', contact = '$contact', gender = '$gender', 
            ad_dress = '$address',  bday = '$bday',  elem = '$elem',  e_grad = '$egrad',  high_s = '$HighS', h_grad = '$hgrad',
            college = '$College', c_grad = '$cgrad', comp_name = '$Compname', position = '$Post', 
            comp_name_1	 = '$Compname1', position_1 = '$Post1' WHERE id = '$idnew'";
            

            $result = mysqli_query($conn, $query);

            if(!$result){
                die("query failed").mysqli_error();
            }
            else{
                header('Location: index.php');

            }
        }
        ?>

<br>
<div class="add-form container">
    <h1 class="text-danger" style="text-align: start;">Add Contract</h1>
<br>

  <form action="update.php?id_new=<?php echo $id; ?>" method="POST">
  <h3 style="text-align: left;">Personal Data</h3>
  <div class="form-width">
      <div class="perent">
      <input type="hidden" name="date-current" id="">

      <label for="">Last name</label>
      <input type="text" name="l-name" id="" value="<?php echo $row['l_name']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['l-name'])?></div>
      </div>
      <div class="perent">
      <label for="">First name</label>
      <input type="text" name="f-name" id="" value="<?php echo $row['f_name']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['f-name'])?></div>
      </div>
      <div class="perent">
      <label for="">Middle name</label>
      <input type="text" name="m-name" id="" value="<?php echo $row['m_name']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['m-name'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent">
      <label for="">Birth Place</label>
      <input type="text" name="b-place" id="" value="<?php echo $row['b_place']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['b-place'])?></div>
      </div>
      <div class="perent">
      <label for="">Religion</label>
      <input type="text" name="religion" id="" value="<?php echo $row['religion']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['religion'])?></div>
      </div>
      <div class="perent">
      <label for="">Picture ( 2x2 )</label>
      <input type="hidden" name="filename">
      <input type="file" name="picture" id="" value="<?php echo $row['pictures']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['picture'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent">
      <label for="">Email</label>
      <input type="email" name="email" id="" value="<?php echo $row['email']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['email'])?></div>
      </div>
      <div class="perent">
      <label for="">Contact No.</label>
      <input type="text" name="contact" id="" value="<?php echo $row['contact']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['contact'])?></div>
      </div>
      <div class="perent" style="display: flex; flex-direction: column;">
      <label for="" >Gender</label>
      <select name="gender" id="" value="<?php echo $row['gender']?>">
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
      <input type="text" name="address" id="" value="<?php echo $row['ad_dress']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['address'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Date of Birth</label>
      <input type="date" name="bday" id="" value="<?php echo $row['bday']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['bday'])?></div>
      </div>
  </div>
  <br>
  <h3>Educational Background</h3>

  <div class="form-width">
      <div class="perent-1">
      <label for="">Elementary</label>
      <input type="text" name="elem" id="" value="<?php echo $row['elem']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['elem'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Year Graduated</label>
      <input type="date" name="e-grad" id="" value="<?php echo $row['e_grad']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['e-grad'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent-1">
      <label for="">High School</label>
      <input type="text" name="high-s" id="" value="<?php echo $row['high_s']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['high-s'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Year Graduated</label>
      <input type="date" name="h-grad" id="" value="<?php echo $row['h_grad']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['h-grad'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent-1">
      <label for="">College</label>
      <input type="text" name="college" id="" value="<?php echo $row['college']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['college'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Year Graduated</label>
      <input type="date" name="c-grad" id="" value="<?php echo $row['c_grad']?>">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['c-grad'])?></div>
      </div>
  </div>
  <br>
  <h3>Employment Records</h3>
  <div class="form-width">
      <div class="perent-1">
      <label for="">Company name</label>
      <input type="text" name="comp-name" id="" value="<?php echo $row['comp_name']?>" >
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['comp-name'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Postion</label>
      <input type="text" name="position" id="" value="<?php echo $row['position']?>" >
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['position'])?></div>
      </div>
  </div>
  <br>
    <div class="form-width">
        <div class="perent-1">
        <label for="">Company name</label>
        <input type="text" name="comp-name-1" id="" value="<?php echo $row['comp_name_1']?>" >
        <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['comp-name-1'])?></div>
        </div>
        <div class="perent">
        </div>
        <div class="perent">
        <label for="">Postion</label>
        <input type="text" name="position-1" id="" value="<?php echo $row['position_1']?>" >
        <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['position-1'])?></div>
        </div>
    </div>
<br>
    <div class="btn-form">    
      <button type="submit" name="update" class="btn btn-outline-success">Submit</button>
      <button type="reset" name="cancel" class="btn btn-outline-danger">Cancel</button>
    </div>
  </div>
  </form>
  <br>


</div>