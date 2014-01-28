<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scoring EP</title>
	<link rel="shortcut icon" href="http://demos.jquerymobile.com/favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.0/css/themes/default/jquery.mobile-1.4.0.min.css">
	<link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.0/_assets/css/jqm-demos.css">
	<link rel="stylesheet" href="styles.css">
	<script src="http://demos.jquerymobile.com/1.4.0/js/jquery.js"></script>
	<script src="http://demos.jquerymobile.com/1.4.0/_assets/js/index.js"></script>
	<script src="http://demos.jquerymobile.com/1.4.0/js/jquery.mobile-1.4.0.min.js"></script>
	<script src="common.js"></script>	
	<script>	  
	  $( document ).delegate("#scorePage", "pageinit", function() {
	    $.ajax({
            type: 'GET',
            url: 'sandbag.json',
            dataType: 'json',
            success: function (cdata) {
                $('#logo').attr('src',cdata.organization.logo);
			}
		});
      });
	</script>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47560460-1', 'laurencewatson.co.uk');
  ga('send', 'pageview');

</script>
	
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="false" id="scorePage">
	<div data-role="header" class="jqm-header" onclick="document.location.href='index.php'" style="cursor:pointer">
		<h2>
		<img alt="" id="logo" />
		<p>Scoring the European Parliament – <strong>score-ep.org</strong></p>
		</h2>
	</div><!-- /header -->
	
	<div role="main" class="ui-content jqm-content">
        <h1 class="starthead"></h1>
		<p> 
		We examined MEPs voting records across 11 key votes over the last 5 years. The votes related to various different aspects of climate change policy. We gave each vote a weighting of importance, then gave the MEP that score for that vote if they voted in the direction most favourable for ambitious action on climate change. By averaging the scores across all the votes per MEP, we obtained the final rating.
		</p>
		<p>
		Based on data from <a href="http://www.sandbag.org.uk" target="_blank" >Sandbag</a>, <a href="http://www.climnet.org/"‎ target="_blank" >CAN Europe</a>, <a href="http://www.wwf.eu/‎" target="_blank" >WWF</a> and <a href="http://eu-parlameter.zdf.de/" target="_blank" >eu-parlameter</a>.
		</p>
		<p>
		Contributors: Joachim Gola, Michal Skop, Laurence Watson
		</p>
		<p>
		Contact: <a href="mailto:laurence@sandbag.org.uk" class="ui-link-inherit">Laurence Watson</a>
	    <div>
            <a class="ui-btn ui-icon-arrow-r ui-button-icon-right" href="list.php" data-ajax="false">Find your MEP</a>
	    </div>
    </div>
</div>
</body>
</hmtl>

