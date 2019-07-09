<!DOCTYPE html><head><title>Contact Digital Fitness Madison WI</title><meta name="description" content="Contact Digital Fitness for any questions about our plans or services. Feel free to fill out our online contact form or call at 608.977.1540"><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- Global site tag (gtag.js) --><script async src="https://www.googletagmanager.com/gtag/js?id=UA-120745605-1"></script><script async defer="defer">window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

         gtag('config', 'UA-120745605-1')</script><meta name="viewport" content="width=device-width,initial-scale=1"><meta http-equiv="cache-control" content="public" expires="-1"><!-- Bootstrap --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!-- DF Style --><link async defer="defer" rel="stylesheet" href="/assets/style/style.min.css"><!-- Google Fonts --><link async defer="defer" href="https://fonts.googleapis.com/css?family=Montserrat:200,400,500,600,700" rel="stylesheet"><link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome/css/all.css"><!-- Font Awesome --><link async defer="defer" rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-TXfwrfuHVznxCssTxWoPZjhcss/hp38gEOH8UPZG/JcXonvBQ6SlsIF49wUzsGno" crossorigin="anonymous"><!-- Google Recaptcha --><script async defer="defer" src="https://www.google.com/recaptcha/api.js"></script><!-- Start of HubSpot Embed Code --><script async defer="defer" type="text/javascript" id="hs-script-loader" src="//js.hs-scripts.com/4735026.js"></script><!-- End of HubSpot Embed Code --><!-- <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-pro/css/all.css"> --></head><body class="index-grid"><nav class="navbar-main"><div class="logo__container"><img data-src="/assets/images/homepage/DF_herologolarge.png" alt="Digital Fitness Logo" class="lazy navbar-main__logo"></div><div class="nav-options uppercase"><a href="/" class="navbar-main__link home">home</a> <a href="team.php" class="navbar-main__link team">team</a> <a href="web-design.php" class="navbar-main__link webdes">web design</a> <a href="contact-us.php" class="navbar-main__link contact">contact</a> <a href="https://calendly.com/digitalfitness/30-minute-consultation" target="blank" class="navbar-main__link consultation"><i class="fal fa-calendar-alt icon"></i> consultation</a></div><div class="mobile-nav"><a style="cursor: pointer;" role="button" data-toggle="modal" href="#mobile-modal"><i class="far fa-bars"></i></a> <img data-src="/assets/images/homepage/DF_herologoD.png" alt="" class="lazy mobile-navbar__logo"></div></nav><div class="modal mobile-modal fade" id="mobile-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><ul class="modal-nav"><a href="index.php">home </a><a href="team.php">team </a><a href="web-design.php"><li>web design</li></a><div data-toggle="collapse" data-target="#navCollapse" role="button" aria-expanded="false" aria-controls="navCollapse">capabilities</div><div class="collapse" id="navCollapse"><ul><a href="seo.php"><li>SEO</li></a><a href="social-media.php"><li>social media</li></a><a href="graphic-design.php"><li>graphic design</li></a><a href="photography.php"><li>photography</li></a><a href="marketing.php"><li>marketing</li></a><a href="lead-generation.php">lead generation</a></ul></div><a href="https://www.getdigitallyfit.com/news">news </a><a href="contact-us.php">contact </a><a href="https://calendly.com/digitalfitness/30-minute-consultation" id="last-nav" target="blank"><i class="fal fa-calendar-alt icon"></i> consultation</a></ul></div></div></div></div><section class="contact-form second-section"><form class="contact" action="?" method="post" id="form" autocomplete="off"><h1 class="uppercase green-text text-center">Get in touch with us here!</h1><p class="contact--fields__style">First and Last Name: <input tabindex="1" type="text" name="name" placeholder="Enter name here" id="" required></p><p class="contact--fields__style">company name <input tabindex="2" type="text" name="company-name" placeholder="Enter company here" id="" required></p><p class="contact--fields__style">Phone: <input tabindex="3" type="tel" name="telephone" placeholder="Enter phone here" required></p><p class="contact--fields__style">Email: <input tabindex="4" type="email" name="email" placeholder="Enter email here" required></p><p class="contact--fields__style">What are you interested in? <select tabindex="5" name="referred" required><option value="">Select one</option><option value="Web Design">Web Design</option><option value="SEO">SEO</option><option value="Social Media">Social Media</option><option value="Graphic Design">Graphic Design</option><option value="Photography">Photography</option><option value="Marketing">Marketing</option><option value="Lead Generation">Lead Generation</option><option value="Digital Startup Plan">Digital Startup Plan</option></select></p><p class="contact--fields__style contact--fields__style-subject">Subject: <input tabindex="6" type="text" name="subject" placeholder="Enter subject here" required></p><p class="contact--fields__style contact--fields__style-textarea">Message <textarea tabindex="7" name="comment" rows="5" cols="40" placeholder="What can we do for you?" required></textarea></p><div class="contact--submit"><div class="g-recaptcha" data-sitekey="6LcigWIUAAAAAKt6MuTEDaitsmkzt3esqQWmLGXM" required></div><input class="contact--button" type="submit" name="submit" form="form" value="Submit"></div><!-- error_reporting(-1);
            ini_set('display_errors', 'On');
            set_error_handler("var_dump"); --> <?php

    $secretKey = "6LcigWIUAAAAAKkV-0ZpyusjvrijGqVIK-dQZu2a";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    $name = $_POST['name']; // required
    $company_name = $_POST['company-name']; //required
    $telephone = $_POST['telephone']; // not required
    $from = $_POST['email']; // required
    $email_subject = $_POST['subject'];
    $referred = $_POST['referred'];
    $subject = "$email_subject";
    $comment = $_POST['comment']; // required
    $to="support@i5digitalfitness.com, reports@i5digitalfitness.com";
    $headers="MIME-VERSION: 1.0" . "\r\n";
    $headers.="Content-type:text:text/html;charset=UTF-8" . "\r\n";
    $headers= "From : <$from> \r\n ";
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';



if (isset($_POST['submit'])) {

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

    $response = file_get_contents($url);
    $obj = json_decode($response);
    if($obj == true){

        if(!preg_match($email_exp,$from)) {
            $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
            }

        $string_exp = "/^[A-Za-z .'-]+$/";

        if(!preg_match($string_exp,$subject)) {
            $error_message .= 'The Subject you entered does not appear to be valid.<br />';
            }


        if(strlen($comment) < 2) {
            $error_message .= 'The Comment you entered do not appear to be valid.<br />';
            }

        if(strlen($error_message) > 0) {
            died($error_message);
            }

        $email_message = "Form details below.\n<p>";


        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
            }



        $email_message .= "Name: ".clean_string($name)."\n</p><p>";
        $email_message .= "Company: ".clean_string($company_name)."\n</p><p>";
        $email_message .= "Email: ".clean_string($from)."\n</p><p>";
        $email_message .= "Telephone: ".clean_string($telephone)."\n</p><p>";
        // $email_message .= "Location: ".clean_string($location)."\n</p><p>";
        $email_message .= "Interested in: ".clean_string($referred)."\n";
        $email_message .= "Comment: ".clean_string($comment)."\n</p><p>";

        if(mail($to,$subject,$email_message,$headers)) {
            echo '<p class="thanks--success">Thanks<p>';
        }
        else {
            echo "Failed to send email";
        }
    }

    if($obj == false){
        echo "failed to send email";
    }
}
    ?> </form></section><footer class="footer-main"><div class="row"><script type="application/ld+json">{
    "@context": "http://www.schema.org",
    "@type":"LocalBusiness",
    "name": "Digital Fitness",
    "url": "https://getdigitallyfit.com/",
    "image": "https://getdigitallyfit.com/assets/images/homepage/DF_herologolarge.png",
    "priceRange": "$",
    "telephone": "+1 608.977.1540",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "5940 Seminole Centre Court Suite #230",
      "addressLocality": "Madison",
      "addressRegion": "WI",
      "postalCode": "53711"
    }
  }</script><div class="footer"><div class="footer--info"><p><strong>contact us</strong></p><a class="green-link" href="tel:+1-608-977-1540">608.977.1540</a><address>5940 Seminole Centre Court<br>Suite #230<br>Madison, WI 53711</address></div><div class="footer--info"><p><strong>follow us</strong></p><div class="footer--social"><a target="blank" href="https://www.facebook.com/GetDigitallyFit/" class="footer--social-icons"><img class="lazy" data-src="/assets/images/footer/DF_footer_facebook.png" alt="Digital Fitness Facebook"></a><a target="blank" href="https://www.instagram.com/getdigitallyfit/" class="footer--social-icons"><img class="lazy" data-src="/assets/images/footer/DF_footer_instagram.png" alt="Digital Fitness instagram"></a><a target="blank" href="https://www.linkedin.com/company/getdigitallyfit" class="footer--social-icons"><img class="lazy" data-src="/assets/images/footer/DF_footer_linkedin.png" alt="Digital Fitness linkedin"></a><a target="blank" id="youtube" href="https://www.youtube.com/channel/UCsCL9nZ6jCvwPm9q_EweGbA" class="footer--social-icons"><i class="fab fa-youtube-square"></i></a></div></div><ul class="footer--info footer__links"><li><a class="green-link" href="https://www.getdigitallyfit.com/news/">News</a></li><li><a class="green-link" href="https://www.getdigitallyfit.com/contact-us.php">Careers</a></li><li><a class="green-link" href="terms.php">Terms of use</a></li><li><a class="green-link" href="privacy.php">Privacy Policy</a></li></ul></div><div class="col-lg-12 footer--bottom"><img class="footer-logo lazy" data-src="/assets/images/homepage/DigitalFitness_Logo_Final_black_white.png" alt=""> <img class="footer-pixel lazy" data-src="/assets/images/homepage/DF_pixelfooter.png" alt=""></div></div></footer></body><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script src="/node_modules/vanilla-lazyload/dist/lazyload.min.js"></script><script src="/assets/style/df-javascript.min.js"></script><script src="/assets/style/_home-tabs.min.js"></script>