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
	<script src="http://demos.jquerymobile.com/1.4.0/js/jquery.js"></script>
	<script src="http://demos.jquerymobile.com/1.4.0/_assets/js/index.js"></script>
	<script src="http://demos.jquerymobile.com/1.4.0/js/jquery.mobile-1.4.0.min.js"></script>
	
	<style>
	  .jqm-demos .jqm-content {
	    float: none;
	    width: 100%;
	  }
	  .score {
	    float: left;
	    font-weight: bold;
	    padding: .5em;
	    background-color: yellow;
	    margin-right: .5em;
	    font-size: 1.25em;
	  }
	  #mepPhoto {
	    padding-right: .5em;
	  }
	  #mepFlag img {
	    margin-bottom: 0.35em;
	  }
	</style>
	
	<script>
	  $( document ).delegate("#mepPage", "pageinit", function() {
	    //get details about MEP
        $.ajax({ 
            type: 'GET', 
            url: 'mep_detail_json.php?mepid=234&v_dbids=4995,2636,220,3708,5276,2189,2340,3082,4096,5004', 
            //data: { get_param: 'value' }, 
            dataType: 'json',
            success: function (data) { 
               $('#mepname').html(data[0].displayName);
               //get photo
               $.ajax({
                    type: 'GET',
                    url: 'getPhoto.php',
                    data: { europarlID: data[0].europarlID},
                    dataType: 'html',
                    success: function (pdata) {
                      $('#mepPhoto').html(pdata);
                    }
               });
               $.ajax({
                    type: 'GET',
                    url: 'getFlag.php',
                    data: { countryCode: data[0].countryCode},
                    dataType: 'html',
                    success: function (fdata) {
                      $('#mepFlag').html(fdata);
                    }
               });
               $.ajax({
                    type: 'GET',
                    url: 'sandbag.json',
                    //data: { countryCode: data[0].countryCode},
                    dataType: 'json',
                    success: function (cdata) {
                      $('#logo').attr('src',cdata.organization.logo);
                      score = scoreit(data[0].votes,cdata.topics);
                      $('#totalScore').html(score);
                      limitinfo = score2cd(score,cdata.score.limits);
                      $('#mepText').html(limitinfo.text);
                      $('#totalScore').css('background-color',limitinfo.color);
                    }
               });
            }
        });
      });
      
      //gets the color and description based on the score
      function score2cd (score,limits) {
        out = new Object;
        out.color = 'gray';
        out.text = ' is a great guy';
        for (i = 0; i < limits.length; i++) {
          if (score <= limits[i].upper) return limits[i];
        }
        return out;
      }
      
      //function calculate score
      function scoreit(mepvotes,topics ) {
        //reorder campaign data for easier access
        votings = new Object;
        $.each(topics, function (i0, v0) {
          $.each(v0.votings, function (i, v) {
            votings[v.v_dbid] = v;
          });
        });
        wsum = 0;
        vsum = 0;
        $.each(mepvotes, function( index, value ) {
          if ((votings[value.v_dbid] != 'undefined') && (value.exists)) {
            wsum += votings[value.v_dbid].v_weight;
            vsum += votings[value.v_dbid].v_weight*parseInt(value.vote)*parseInt(votings[value.v_dbid].v_recommendation);
          }
        });
        if (wsum != 0)
          out = Math.round((vsum/wsum + 1)/2 * 100);
        else
          out = 50; 
        return out;
      }
	</script>
	
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="false" id="mepPage">
	<div data-role="header" class="jqm-header">
		<h2><img src="logo.png" alt="Scoring EP" id="logo"></h2>
		<p>Version 0</p>
	</div><!-- /header -->
	
	<div role="main" class="ui-content jqm-content">

		<h1><div class="score" title="Total score" id="totalScore">-</div><span id="mepPhoto"></span><strong><span id="mepname"></span><span id="mepFlag"></span></strong><span id="mepText"></span></h1>
		

		
		
		<h2>Scorecard</h2>
		
		
    </div>
</div>
</body>
</hmtl>

