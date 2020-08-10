<?php
require_once('../../resources/config.php');
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<link href="nav.css" rel="stylesheet">
</head>
<body>
      <div class="row bg-image" >
        <div class="col-md-12 donate-h1">
                <h1>Donate Blood </h1>
                <h4 class='donate-h4'>Save Life </h4>
        </div>
    </div>
    <br><br><br> 
    <!-- donate section -->
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h2 class="red" class="text-center" >Search for donar</h2>
        <hr class="red-bar" style="background-color: rgb(180,5,5); width: 45%; height: 3px;">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3" >
        <form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;
        margin-left:15%;">
		
							<div class="form-group text-center justify-content-center"  >
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
  <option value="">-- Select --</option><optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup><option value="Bagh" >Bagh</option><option value="Bhimber" >Bhimber</option>
  <option value="Kotli" >Kotli</option><option value="Mirpur" >Mirpur</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup><option value="Awaran" >Awaran</option><option value="Barkhan" >Barkhan</option><option value="Bolan" >Bolan</option><option value="Chagai" >Chagai</option>
  <option value="Dera Bugti" >Dera Bugti</option><option value="Gwadar" >Gwadar</option><option value="Jafarabad" >Jafarabad</option>
  <option value="Jhal Magsi" >Jhal Magsi</option><option value="Kalat" >Kalat</option><option value="Kech" >Kech</option><option value="Kharan" >Kharan</option><option value="Khuzdar" >Khuzdar</option><option value="Kohlu" >Kohlu</option><option value="Lasbela" >Lasbela</option>
  <option value="Loralai" >Loralai</option><option value="Mastung" >Mastung</option><option value="Musakhel" >Musakhel</option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option>
  <option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option>
  <option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option>
  <option value="North Waziristan Agency" >North Waziristan Agency</option>
  <option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option>
  <option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option>
  <option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option>
  <option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option>
  <option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option>
  <option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option>
  <option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option>
  <option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option>
  <option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
							</div>
							<div class="form-group center-aligned" style="text-align: center;" >
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
              </div>
              
							<div class="form-group center-aligned">
								<button type="submit" class=" btn btn-nav transparent" id="search" ><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
              </form>
        
		</div>
	</div>
<br><br><br><br><br>
			<div class="container-fluid red-background" id="about">
				<div class="row" >
					<div class="col-md-12" style="background-color:#dc3545;">
						<h2 class="text-center"  style="color: white; font-weight: 500;padding: 10px 0 0 0;"
                        ;">LIFE SAVER</h2>
						<hr class="white-bar" style="background-color: white; width:50%">
						<p  style="color: white; font-size: 20px; text-align: justify; font-family: 'Roboto',sans-serif;"> 
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
            scrambled it to make a type specimen book. It has survived not only five centuries,
             but also the leap into electronic typesetting, remaining essentially unchanged.
             It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
              and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned" style="color: white;">Become a Life Saver!</a>
					</div>
				</div>
			</div>
            <!-- end doante section -->
            <br<br><br>
            <br><br><br><br>
            <div class="row">
                <div class="col-md-6" style="text-align: center;" >
                    <br><br>
                    <img src="blood-donation.png" style="width: 50%; height: 50%; margin-left: 5%; ">
                    </div>
                    <div class="col-md-6 col-sm-12" style="text-align: justify; font-family: 'Roboto',sans-serif; " >
                        <h3 class="red">Donate Blood</h3>
                        <p style="margin-right: 5%; font-size:1.2rem; color: white;   background-color:#dc3545; padding: 5%;">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
            took a galley of type and 
            scrambled it to make a type specimen book. It has survived not only five centuries,
             but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p> 
                        </div>
            </div>
            <br><br><br>
            <div class="row">
                    <div class="col-md-6 col-sm-12" style="text-align: justify; " >
                        <h3 class="red">Get Blood</h3>
                        <p style="margin-left: 5%; font-size:1.2rem; font-family: 'Roboto',sans-serif; color: white;  background-color:  #dc3545; padding: 5%;" > 
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
              scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged.
                            
                            </p> 
                        </div>
                            <div class="col-md-6" style="text-align: center;">
                                <br></br>
                                <img src="blood-transfusion.png" 
                            style=" width: 50%; height: 50%;  margin-right: 5%;  ">
                            </article>
                            </div>
            </div>
            <br><br><br><br>
           
                    </div>
                    <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
</body>

</html>