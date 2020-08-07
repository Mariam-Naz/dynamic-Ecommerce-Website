<?php
include('connect.php');

if(isset($_POST['submit'])){
    if(isset($_POST['term']) === true){
        if(isset($_POST['name'])&&!empty($_POST['name'])){
            if(preg_match('/^[A-Za-z\s]+$/',$_POST['name'])){
                $name=$_POST['name'];
            }
            else{$nameerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
                <strong>Only lower and upper case and space are allowed</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times</span>
                </button>
                </div>';
      }
        }
        else{
            $nameerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
            <strong>fill the name field</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times</span>
            </button>
            </div>';
        }
        if(isset($_POST['gender'])&&!empty($_POST['gender'])){
           
                $gender=$_POST['gender'];
            
      }
        
        else{
            $gendererror='<div class="alert alert-danger alert dismissible fade show" role="alert">
            <strong>fill the gender field</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times</span>
            </button>
            </div>';
        }
        if(isset($_POST['day'])&&!empty($_POST['day'])){
           
            $day=$_POST['day'];
        
  }
    
    else{
        $dayerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
        <strong>Please enter the valid day</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>';
    }
    if(isset($_POST['month'])&&!empty($_POST['month'])){
           
        $mon=$_POST['month'];
    
}

else{
    $montherror='<div class="alert alert-danger alert dismissible fade show" role="alert">
    <strong>Please select the valid month</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times</span>
    </button>
    </div>';
}
if(isset($_POST['year'])&&!empty($_POST['year'])){
           
    $year=$_POST['year'];

}

else{
$yearerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
<strong>Please select the valid year</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times</span>
</button>
</div>';
}
if(isset($_POST['blood_group'])&&!empty($_POST['blood_group'])){
           
    $bgroup=$_POST['blood_group'];

}

else{
$bgerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
<strong>Please select the valid year</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times</span>
</button>
</div>';
}
if(isset($_POST['city'])&&!empty($_POST['city'])){
    if(preg_match('/^[A-Za-z\s]+$/',$_POST['city'])){
        $city=$_POST['city'];
    }
    else{$cityerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
        <strong>Only lower and upper case and space are allowed</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>';
}
}
else{
    $cityerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
    <strong>fill the city field</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times</span>
    </button>
    </div>';
}
if(isset($_POST['contact_no'])&&!empty($_POST['contact_no'])){
    if(preg_match('/\d{11}/',$_POST['contact_no'])){
        $ct=$_POST['contact_no'];
    }
    else{$cterror='<div class="alert alert-danger alert dismissible fade show" role="alert">
        <strong>Only contain 11 characters</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>';
}
}
else{
    $cterror='<div class="alert alert-danger alert dismissible fade show" role="alert">
    <strong>fill the contact field</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times</span>
    </button>
    </div>';
}
if(isset($_POST['email'])&&!empty($_POST['email'])){
    $pattern='/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    if(preg_match($pattern,$_POST['email'])){
        $checkemail=$_POST['email'];
        $sql="SELECT email FROM donar WHERE email='$checkemail'";
        $result=mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0){
            $emailerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
            <strong>This email already exist</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times</span>
            </button>
            </div>';
        }else{

            $email=$_POST['email'];
        }
    }
    else{$emailerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
        <strong>Please enter valid email</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>';
}
}
else{
    $emailerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
    <strong>fill the email field</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times</span>
    </button>
    </div>';
}
if( isset($name) && isset($bgroup) &&isset($gender)&&isset($day)&&isset($mon)&&($year)
&&isset($email)&&isset($city)&&isset($ct)){
    $donerdob=$year."-".$mon."-".$day;
    $sqlinsert="INSERT INTO donar(name,gender,Email,phoneno,city,dob,save_life_date,blood_group) 
    VALUES('$name','$gender','$email','$ct','$city','$donerdob',0,'$bgroup')";
    if(mysqli_query($connection,$sqlinsert)){
        $submit='<div class="alert alert-success alert dismissible fade show" role="alert">
        <strong>Data is inserted successfully</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>';
    }else{
        $submiterror='<div class="alert alert-danger alert dismissible fade show" role="alert">
        <strong>Please try again</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>';
    }
}
    }
    else{
        $termerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
        <strong>Please agree our terms and conditions</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>';
    }
}


?>