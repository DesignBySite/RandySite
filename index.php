<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
      var verifiedCaptcha = function() {
        document.querySelector("#_honey").remove();
        document.querySelector("#submit").classList.remove('not-active');
      }
    </script>
    <style>
    @import url("https://use.typekit.net/pkl6pip.css");
    </style>
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav class="landing-nav">
      <img src="./assets/images/Superhuman Fitness.png" alt="" srcset="">
    </nav>
    <main class="landing-main-grid">
      <div class="landing-text">
        <p>Coming Soon!</p>
        <h1 class="landing-h1">superhumans in development...</h1>
        <p>Join us in discovering new abilities and keep in tune with new developments in unlocking your inner super human</p>
      </div>
      <form class="landing-form" action="?" method="post" id="form">
        <div>
          <label for="first">First Name</label>
          <input 
            type="text" 
            name="first-name"
            placeholder="First name"
            id="first-name"
            required>
        </div>
        <div>
          <label for="email">Your email address</label>
          <input 
            type="email" 
            name="email" 
            placeholder="Your email address"
            id="email"
            required>
        </div>
        <div id="submit-div">
          <div class="g-recaptcha" data-callback="verifiedCaptcha" data-sitekey="6Lf_A6UUAAAAALauF8k6bNd4Fe7bjm-E5BWrTgY_"></div>
          <div class="submit" id="_honey"><span>Submit</span></div>
          <input id="submit" type="submit" class="submit not-active" name="submit" form="form" value="Submit">
        </div>
        
        <!-- error_reporting(-1);
           ini_set('display_errors', 'On');
           set_error_handler("var_dump"); -->
         <?php
    $secretKey = "6Lf_A6UUAAAAAAiOw86YBUP_ErvTrPXFdGT9i2UF";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    $name = $_POST['first-name']; // required
    $from = $_POST['email']; // required
    $subject = "New interest in Superhuman Fitness";
    $to="contact@superhumanfitness.net";
    $headers="MIME-VERSION: 1.0" . "\r\n";
    $headers.="Content-type:text/html;charset=UTF-8" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
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

        if(strlen($error_message) > 0) {
            died($error_message);
            }

        $email_message = "Form details below.\n";


        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
            }



        $email_message .= "Name: ".clean_string($name)."\n";
        $email_message .= "Email: ".clean_string($from)."\n";

        if(mail($to,$subject,$email_message,$headers)) {
            echo '<p class="success-text">Thanks For reaching out!<p>';
        }
        else {
            echo '<p class="success-text">Failed to send email</p>';
        }
    }

    if($obj == false){
        echo '<p class="success-text">Obj false failed to send email</p>';
    }
}
    ?>
      </form>
      <div class="landing-images">
        <img src="./assets/images/Mind Graphic.png" alt="" srcset="">
        <img src="./assets/images/Body Graphic.png" alt="" srcset="">
        <img src="./assets/images/Nutrition Graphic.png" alt="" srcset="">
      </div>
    </main>
    <footer class="landing-footer">
      <p>Copyright@2019 Anthrofitness, LLC</p>
    </footer>
  </body>
</html>