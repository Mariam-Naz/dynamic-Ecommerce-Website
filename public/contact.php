
<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>


<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>

<!-- Contact Section -->

<div class="container contact">
<div class="row">
<div class="col-lg-12 text-center">
<h1 class="section-heading">Contact Us</h1>
<h3 class="section-subheading"><?php display_message(); ?></h3>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form name="sentMessage" id="contactForm" method="POST" autocomplete="off">
    <?php send_message(); ?>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Your Subject" id="phone" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <textarea rows='10' class="form-control" name="message" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12 text-center">
            <div id="success"></div>
            <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
        </div>
    </div>
</form>
</div>
</div>
</div>

</div>
<!-- /.container -->
<?php include(TEMPLATE_FRONT .  "/footer.php");?>