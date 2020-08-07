<?php
include('connect.php');
include('donar.php');
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donate.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
      <div class="card mb-3" style="width: 100%; background:url('color.png')">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="bd.jpg" class="card-img" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title" style="color: white; text-align: center; text-transform: capitalize; font-family: 'Merriweather',serif;">Donate the Blood</h3>
              <br>
              <p class="card-text" style="color: white; text-align: justify; font-size: 20px; font-family: 'Merriweather',serif;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                  this is the platforn where you can donate the blood for the woh need it. Serve the suffering ones by giving them 
                  blood 
              </p>
            </div>
          </div>
        </div>
      </div>
   
    
    <div class="container size">
           <div class="row">
            <div class="col-md-6 offset-md-3 form-container">
        
                        <h3>Become a Donor!!!</h3>
                        <hr class=red-bar>
                        <?php if(isset($termerror)) echo $termerror;
                        if(isset($submit)) echo $submit;
                        if(isset($submiterror)) echo $submiterror;
                        ?>
              <!-- Error Messages -->
    <form class="form-group" action="" method="post" novalidate="">
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" 
                            title="Only lower and upper case and space" class="form-control" value="<?php if(isset($name)) echo $name;?>">
                            <?php if(isset($nameerror)) echo $nameerror;?>
                        </div><!--full name-->
                        <div class="form-group">
                  <label for="name">Blood Group</label><br>
                  <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                    <option value="">---Select Your Blood Group---</option>
                    <?php if(isset($bgroup)) echo '<option selected="" value="'.$bgroup.'">'.$bgroup.'</option>'; ?>
                    <option  value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                  </select>
                  <?php if(isset($bgerror)) echo $bgerror;
                        ?>
                </div>
                
                <!--End form-group-->
                        <div class="form-group">
                                  <label for="gender">Gender</label><br>
                                  <input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked> Male
                                  <input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;">    Female
                                          <?php if(isset($gendererror)) echo $gendererror;
                        ?>
                        </div><!--gender-->
                        <div class="form-inline">
                  <label for="name">Date of Birth</label>
                  <br>
                  <select class="form-control demo-default" id="day" name="day" style="margin-bottom:10px;" required>
                    <option value="">---Date---</option>
                    <?php if(isset($day)) echo '<option selected="" value="'.$day.'">'.$day.'</option>'; ?>
                    <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option>
                    <option value="04" >04</option><option value="05" >05</option><option value="06" >06</option>
                    <option value="07" >07</option> <option value="08" >08</option>
                    <option value="09" >09</option><option value="10" >10</option>
                    <option value="11" >11</option><option value="12" >12</option><option value="13" >13</option>
                    <option value="14" >14</option><option value="15" >15</option>
                    <option value="16" >16</option><option value="17" >17</option>
                    <option value="18" >18</option><option value="19" >19</option><option value="20" >20</option>
                    <option value="21" >21</option><option value="22" >22</option><option value="23" >23</option>
                    <option value="24" >24</option><option value="25" >25</option><option value="26" >26</option>
                    <option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
                    
                  </select>
                  
                  <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                    <option value="">---Month---</option>
                    <?php if(isset($mon)) echo '<option selected="" value="'.$mon.'">'.$mon.'</option>'; ?>
                    <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
                  </select>
                  <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                    <option value="">---Year---</option>
                    <?php if(isset($year)) echo '<option selected="" value="'.$year.'">'.$year.'</option>'; ?>
                    <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option>
                    <option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option>
                    <option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option>
                    <option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000" >2000</option><option value="2001" >2001</option>
                  </select>
                </div>
                <?php if(isset($dayerror)) echo $dayerror;?>
                <?php if(isset($montherror)) echo $montherror;?>
                <?php if(isset($yearerror)) echo $yearerror;?>
                <!--End form-group-->
                        <div class="form-group">
                            <label for="fullname">Email</label>
                            <input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" 
                            class="form-control" value="<?php if(isset($email)) echo $email;?>">
                            <?php if(isset($emailerror)) echo $emailerror;?>
                          </div>
                        
                        <div class="form-group">
                  <label for="contact_no">Contact No</label>
                  <input type="text" name="contact_no" placeholder="03********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" 
                  maxlength="11" value="<?php if(isset($ct)) echo $ct;?>">
                 <?php if(isset($cterror)) echo $cterror;?></div>
                <!--End form-group-->
                        <div class="form-group">
                  <label for="city">City</label>
                  <select name="city" id="city" class="form-control demo-default" required>
        <option value="">-- Select --</option><?php if(isset($city)) echo '<option selected="" value="'.$city.'">'.$city.'</option>'; ?>
        <optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup><option value="Bagh" >Bagh</option><option value="Bhimber" >Bhimber</option><option value="Kotli" >Kotli</option><option value="Mirpur" >Mirpur</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup><option value="Awaran" >Awaran</option><option value="Barkhan" >Barkhan</option><option value="Bolan" >Bolan</option>
        <option value="Chagai" >Chagai</option><option value="Dera Bugti" >Dera Bugti</option><option value="Gwadar" >Gwadar</option><option value="Jafarabad" >Jafarabad</option><option value="Jhal Magsi" >Jhal Magsi</option><option value="Kalat" >Kalat</option><option value="Kech" >Kech</option><option value="Kharan" >Kharan</option><option value="Khuzdar" >Khuzdar</option><option value="Kohlu" >Kohlu</option><option value="Lasbela" >Lasbela</option><option value="Loralai" >Loralai</option><option value="Mastung" >Mastung</option><option value="Musakhel" >Musakhel</option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option>
        <option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option>
        <option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup>
        <option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option>
        <option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option>
        <option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank
</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option>
<option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option>
<option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option>
        <option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option>
        <option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
        <?php if(isset($cityerror)) echo $cityerror;?>   
      </div>
                 <!--city end-->
                <!--End form-group-->
                <div class="form-inline">
                  <input type="checkbox" checked="" name="term" value="true" required style="margin-left:10px;">
                  <span style="margin-left:10px;"><i>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</i></span>
                </div><!--End form-group-->
                
                        <div class="form-group">
                            <button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Submit</button>
                        </div>
                    </form>
                </div>
                
        </div>
    </div>
    <br><br>
    <footer style="color: rgb(180,5,5); background-color: silver;">
                        <center>Copyright &copy; 2020 lifesaver</center>
                    </footer>

    </body>
    </html>