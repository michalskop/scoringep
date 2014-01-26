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
	  var mepids = [340,664];
	  
	  $( document ).delegate("#mepPage", "pageinit", function() {
	    $.ajax({
            type: 'GET',
            url: 'sandbag.json',
            dataType: 'json',
            success: function (cdata) {
                $('#logo').attr('src',cdata.organization.logo);
                $('h1').html(cdata.score.title);
               //get details about MEP
               
               for (var i = 0; i < 2; i++) {
                $.ajax({ 
                    type: 'GET', 
                    //url: 'mep_detail_json.php?mepid=' + mepids[i] + '&v_dbids=4995,2636,220,3708,5276,2189,2340,3082,4096,5004', 
                    url: 'static/mep'+mepids[i]+'.json', 
                    
                    //data: { get_param: 'value' }, 
                    dataType: 'json',
                    async: false,
                    success: function (data) { 
                       $('#mepname' + i).html(data[0].displayName);
                       
                      
                      score = scoreit(data[0].votes,cdata.topics);
                      $('#totalScore' + i).html(score);
                      limitinfo = score2cd(score,cdata.score.limits);
                      $('#mepText' + i).html(limitinfo.text);
                      $('#totalScore' + i).css('background-color',limitinfo.color);
                      $('#mepPhoto' + i + ' img').attr('src', 'http://www.europarl.europa.eu/mepphoto/' + data[0].europarlID + '.jpg')
                      .addClass('portrait');
                      $('#mepFlag' + i + ' img').attr('src', 'http://lobbyplag.eu/assets/img/flags/20x15/' + data[0].countryCode + '.png')
                      .addClass('mepFlag');
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
        <h1 class="starthead"></h1>
		<h2><div class="score" title="Total score" id="totalScore0">-</div><span id="mepPhoto0"><img /></span><strong><span id="mepname0"></span><span id="mepFlag0"><img /></span></strong><span id="mepText0"></span></h2>
		<br style="clear:both" />
		<h2><div class="score" title="Total score" id="totalScore1">-</div><span id="mepPhoto1"><img /></span><strong><span id="mepname1"></span><span id="mepFlag1"><img /></span></strong><span id="mepText1"></span></h2>
	    
	    <div>
            <a class="ui-btn ui-icon-arrow-r ui-button-icon-right" href="list.php" data-ajax="false">Find your MEP</a>
            <a class="ui-btn ui-icon-arrow-r ui-button-icon-right" href="score.php" data-ajax="false">How do we score?</a>
	    </div>
    </div>
</div>
</body>
</hmtl>

