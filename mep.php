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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47560460-1', 'laurencewatson.co.uk');
  ga('send', 'pageview');

	</script>
	
	<script>
	  var mepid = getParameter('id');
	  
	  $( document ).delegate("#mepPage", "pageinit", function() {
	    //get details about MEP
        $.ajax({ 
            type: 'GET', 
            //url: 'mep_detail_json.php?mepid=' + mepid + '&v_dbids=4995,2636,220,3708,5276,2189,2340,3082,4096,5004', 
            url: 'static/mep'+mepid+'.json', 
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
                      
                      $.each(cdata.topics, function( index, value ) {
                        divhtml = '<div data-role="collapsible" id="topX-wrapper"><h2>topicNAME</h2><ul id="topicX" data-role="listview"></ul></div>';
                        divhtml = divhtml.replace("topicX", "topic" + index);
                        divhtml = divhtml.replace("topX", "topic" + index);
                        divhtml = divhtml.replace("topicNAME", value.title);
                        $('#topics').append(divhtml);
                        $.each(value.votings, function( i, v ) {
                          lihtml = '<li><div data-role="collapsible"><h3><div class="boxito votingCLASS">votingVAL</div>votingNAME</h3><ul id="votingX"><p>votingDESCRIPTION</p><a href="votingLINK" class="ui-btn ui-mini ui-btn-inline">This division on VoteWatch</a></ul></div></li>';
                          lihtml = lihtml.replace("votingX", "voting" + i);
                          lihtml = lihtml.replace("votingLINK", v.v_link);
                          
                          var val = 0;
                          
                          if (hisvote = findvote(v.v_dbid,data[0].votes)) {
                            if (hisvote.exists) {
                              
                              if (parseInt(v.v_recommendation)*hisvote.vote == 1)
                                agreeclass = 'agreement';
                              else
                                if (parseInt(v.v_recommendation)*hisvote.vote == -1)
                                  agreeclass = 'disagreement';
                                else 
                                  agreeclass = 'neutral';
                            } else {
                              agreeclass = 'not-present';
                            }
                          } else {
                            agreeclass = 'not-present';
                          }
                          lihtml = lihtml.replace("votingCLASS", agreeclass);
                          lihtml = lihtml.replace("votingNAME", v.v_title);
                          lihtml = lihtml.replace("votingDESCRIPTION", v.v_description);
                          lihtml = lihtml.replace("votingVAL", v.v_display);
                          $('#topic'+index).append(lihtml);
                          
                        });
                        $('#topic'+index+'-wrapper').trigger('create');
                        $('#topic'+index).trigger('create');
                      });
                    }
               });
            }
        });
      });  
      function findvote (v_dbid, votes) {
        for (i=0;i<votes.length;i++) {
          if (parseInt(votes[i].v_dbid) == v_dbid)
            return votes[i];
        }
        return false;
      }
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
<div data-role="page" class="jqm-demos" data-quicklinks="false" id="mepPage">
	<div data-role="header" class="jqm-header"  onclick="document.location.href='index.php'" style="cursor:pointer">
		<h2>
		<img alt="" id="logo" />
		<p>Scoring the European Parliament – <strong>score-ep.org</strong></p>
		</h2>
		
	</div><!-- /header -->
	
	<div role="main" class="ui-content jqm-content">

		<h1><div class="score" title="Total score" id="totalScore">-</div><span id="mepPhoto"></span><br /><strong><span id="mepname"></span><span id="mepFlag"></span></strong><span id="mepText"></span></h1>
		

		
		
		<h2>Scorecard</h2>
		<p>The score for every Member of Parliament starts at 50 ("undecided") and changes according to the following votes in European Parliament:</p>
		<div id="topics">

		</div>
		
    </div>
</div>
</body>
</hmtl>

