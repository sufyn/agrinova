<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Include Google Translate Script -->
    <script type="text/javascript">
		function googleTranslateElementInit() {
		  new google.translate.TranslateElement(
			{
			  pageLanguage: "en",
			  includedLanguages: "en,hi,bn,te,mr,kn,gu,pa,ta,ml,ur,as,or,sd",
			  layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
			  autoDisplay: false,
			},
			"google_translate_element"
		  );
		}
	  </script>
	  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	  
</head>
<body>
    <div>
        <?php 
            include("includes/db.php");
            include("Functions/functions.php");
            $sess_phone_number=$_SESSION['phonenumber'];    
            getProductDetails();


        ?>
    </div>
</body>
</html>