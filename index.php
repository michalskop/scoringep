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
	  var mepids = [123,234];
	  
	  $( document ).delegate("#mepPage", "pageinit", function() {
	    $.ajax({
            type: 'GET',
            url: 'sandbag.json',
            dataType: 'json',
            success: function (cdata) {
                $('#logo').attr('src',cdata.organization.logo);
               //get details about MEP
               
               for (var i = 0; i < 2; i++) {
                $.ajax({ 
                    type: 'GET', 
                    url: 'mep_detail_json.php?mepid=' + mepids[i] + '&v_dbids=4995,2636,220,3708,5276,2189,2340,3082,4096,5004', 
                    //data: { get_param: 'value' }, 
                    dataType: 'json',
                    async: false,
                    success: function (data) { 
                       $('#mepname' + i).html(data[0].displayName);
                       //get photo
                       $.ajax({
                            type: 'GET',
                            url: 'getPhoto.php',
                            data: { europarlID: data[0].europarlID},
                            dataType: 'html',
                            success: function (pdata) {
                              $('#mepPhoto' + i).html(pdata);
                            }
                       });
                       $.ajax({
                            type: 'GET',
                            url: 'getFlag.php',
                            data: { countryCode: data[0].countryCode},
                            dataType: 'html',
                            success: function (fdata) {
                              $('#mepFlag' + i).html(fdata);
                            }
                       });
                      
                      score = scoreit(data[0].votes,cdata.topics);
                      $('#totalScore' + i).html(score);
                      limitinfo = score2cd(score,cdata.score.limits);
                      $('#mepText' + i).html(limitinfo.text);
                      $('#totalScore' + i).css('background-color',limitinfo.color);
                            
                       
                    }
                });
            } // for
        }
    });
    });
	</script>
	
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="false" id="mepPage">
	<div data-role="header" class="jqm-header">
		<h2><img alt="Scoring EP" id="logo"></h2>
		<p>Version 0</p>
	</div><!-- /header -->
	
	<div role="main" class="ui-content jqm-content">

		<h2><div class="score" title="Total score" id="totalScore0">-</div><span id="mepPhoto0"></span><br /><strong><span id="mepname0"></span><span id="mepFlag0"></span></strong><span id="mepText0"></span></h2>
		<br style="clear:both" />
		<h2><div class="score" title="Total score" id="totalScore1">-</div><span id="mepPhoto1"></span><br /><strong><span id="mepname1"></span><span id="mepFlag1"></span></strong><span id="mepText1"></span></h2>
				
    </div>
</div>
</body>
</hmtl>

