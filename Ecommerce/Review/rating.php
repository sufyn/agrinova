


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">
	<div class="row">
		<h2>Working Star Ratings for Bootstrap 3 <small>Hover and click on a star</small></h2>
	</div>

    <div class="row lead">
        <p>Also you can give a default rating by adding attribute data-rating</p>
        <div id="stars-existing" class="starrr" data-rating='4'></div>
        You gave a rating of <span id="count-existing">4</span> star(s)
        <input type = "hidden" id = "post_id" value = "<?php echo $post->id; ?>"/>
    </div>
</div>
<script src="star.js"></script>
</body>
</html>



