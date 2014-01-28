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
	  $( document ).delegate("#listPage", "pageinit", function() {
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
<div data-role="page" class="jqm-demos" data-quicklinks="false" id="listPage">
	<div data-role="header" class="jqm-header"  onclick="document.location.href='index.php'" style="cursor:pointer">
		<h2>
		<img alt="" id="logo" />
		<p>Scoring the European Parliament – <strong>score-ep.org</strong></p>
		</h2>
	</div><!-- /header -->
    <div role="main" class="ui-content jqm-content">
<ul data-role="listview" data-filter="true" data-filter-placeholder="Search MEPs..." data-inset="true" style="margin: 1em 10%">



<li data-filtertext="211	fr	96850	Member	Damien Abad	Abad, Damien 	PPE	2009		" data-filter-reveal="true" ><a href="./mep.php?id=211" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Abad, Damien </span>
			   </a></li>
<li data-filtertext="578	gb	96897	Member	John Stuart Agnew	Agnew, John Stuart 	EFD	2009		" ><a href="./mep.php?id=578" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Agnew, John Stuart </span>
			   </a></li>
<li data-filtertext="213	it	28367	Member of the Bureau	Gabriele Albertini	Albertini, Gabriele 	PPE	2009		" ><a href="./mep.php?id=213" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Albertini, Gabriele </span>
			   </a></li>
<li data-filtertext="565	de	96736	Member	Jan Philipp Albrecht	Albrecht, Jan Philipp 	VALE	2009		" ><a href="./mep.php?id=565" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Albrecht, Jan Philipp </span>
			   </a></li>
<li data-filtertext="398	it	97086	Member	Sonia Alfano	Alfano, Sonia 	ALDE	2009		" ><a href="./mep.php?id=398" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Alfano, Sonia </span>
			   </a></li>
<li data-filtertext="101	fr	96750	Member	François Alfonsi	Alfonsi, François 	VALE	2009		" ><a href="./mep.php?id=101" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Alfonsi, François </span>
			   </a></li>
<li data-filtertext="606	it	96992	Member	Magdi Cristiano Allam	Allam, Magdi Cristiano 	PPE	2009		" ><a href="./mep.php?id=606" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Allam, Magdi Cristiano </span>
			   </a></li>
<li data-filtertext="136	de	28246	Member	Alexander Alvaro	Alvaro, Alexander 	ALDE	2009		" ><a href="./mep.php?id=136" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Alvaro, Alexander </span>
			   </a></li>
<li data-filtertext="26	pt	96976	Member	Luís Paulo Alves	Alves, Luís Paulo 	SD	2009		" ><a href="./mep.php?id=26" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Alves, Luís Paulo </span>
			   </a></li>
<li data-filtertext="688	es	96986	Member	Josefa Andrés Barea	Andrés Barea, Josefa 	SD	2009		" ><a href="./mep.php?id=688" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Andrés Barea, Josefa </span>
			   </a></li>
<li data-filtertext="638	gb	96954	Vice-Chair/Member of the Bureau	Marta Andreasen	Andreasen, Marta 	EFD	2009		" ><a href="./mep.php?id=638" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Andreasen, Marta </span>
			   </a></li>
<li data-filtertext="214	lt	28276	Member	Laima Liucija Andrikienė	Andrikienė, Laima Liucija 	PPE	2009		" ><a href="./mep.php?id=214" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Andrikienė, Laima Liucija </span>
			   </a></li>
<li data-filtertext="215	it	1941	Member of the Bureau	Roberta Angelilli	Angelilli, Roberta 	PPE	2009		" ><a href="./mep.php?id=215" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Angelilli, Roberta </span>
			   </a></li>
<li data-filtertext="742	gr	99419	Member	Charalampos Angourakis	Angourakis, Charalampos 	GUENGL	2009		" ><a href="./mep.php?id=742" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Angourakis, Charalampos </span>
			   </a></li>
<li data-filtertext="462	it	97193	Member of the Bureau	Antonello Antinoro	Antinoro, Antonello 	PPE	2009		" ><a href="./mep.php?id=462" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Antinoro, Antonello </span>
			   </a></li>
<li data-filtertext="216	ro	96702	Member	Elena Oana Antonescu	Antonescu, Elena Oana 	PPE	2009		" ><a href="./mep.php?id=216" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Antonescu, Elena Oana </span>
			   </a></li>
<li data-filtertext="656	it	28422	Member	Alfredo Antoniozzi	Antoniozzi, Alfredo 	PPE	2009		" ><a href="./mep.php?id=656" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Antoniozzi, Alfredo </span>
			   </a></li>
<li data-filtertext="715	es	96808	Member	Pablo Arias Echeverría	Arias Echeverría, Pablo 	PPE	2009		" ><a href="./mep.php?id=715" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Arias Echeverría, Pablo </span>
			   </a></li>
<li data-filtertext="620	fr	28137	Member	Kader Arif	Arif, Kader 	SD	2009		" ><a href="./mep.php?id=620" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Arif, Kader </span>
			   </a></li>
<li data-filtertext="676	it	97228	Member	Pino Arlacchi	Arlacchi, Pino 	SD	2009		" ><a href="./mep.php?id=676" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Arlacchi, Pino </span>
			   </a></li>
<li data-filtertext="518	gr	97009	Member	Kriton Arsenis	Arsenis, Kriton 	SD	2009		" ><a href="./mep.php?id=518" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Arsenis, Kriton </span>
			   </a></li>
<li data-filtertext="182	gb	28132	Member	Richard Ashworth	Ashworth, Richard 	ECR	2009		" ><a href="./mep.php?id=182" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Ashworth, Richard </span>
			   </a></li>
<li data-filtertext="418	gb	4537	Member	Sir Robert Atkins	Atkins, Sir Robert 	ECR	2009		" ><a href="./mep.php?id=418" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Atkins, Sir Robert </span>
			   </a></li>
<li data-filtertext="519	mt	23938	Member	John Attard-Montalto	Attard-Montalto, John 	SD	2009		" ><a href="./mep.php?id=519" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/mt.png" /><span>Attard-Montalto, John </span>
			   </a></li>
<li data-filtertext="646	fr	96862	Member	Sophie Auconie	Auconie, Sophie 	PPE	2009		" ><a href="./mep.php?id=646" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Auconie, Sophie </span>
			   </a></li>
<li data-filtertext="102	dk	28161	Member	Margrete Auken	Auken, Margrete 	VALE	2009		" ><a href="./mep.php?id=102" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Auken, Margrete </span>
			   </a></li>
<li data-filtertext="27	es	28292	Member	Inés Ayala Sender	Ayala Sender, Inés 	SD	2009		" ><a href="./mep.php?id=27" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Ayala Sender, Inés </span>
			   </a></li>
<li data-filtertext="399	ie	28114	Member	Liam Aylward	Aylward, Liam 	ALDE	2009		" ><a href="./mep.php?id=399" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Aylward, Liam </span>
			   </a></li>
<li data-filtertext="716	es	4319	Member	Pilar Ayuso	Ayuso, Pilar 	PPE	2009		" ><a href="./mep.php?id=716" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Ayuso, Pilar </span>
			   </a></li>
<li data-filtertext="212	hu	96659	Member of the Bureau	János Áder	Áder, János 	PPE	2009		" ><a href="./mep.php?id=212" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Áder, János </span>
			   </a></li>
<li data-filtertext="489	pl	96791	Member	Elżbieta Katarzyna Łukacijewska	Łukacijewska, Elżbieta Katarzyna 	PPE	2009		" ><a href="./mep.php?id=489" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Łukacijewska, Elżbieta Katarzyna </span>
			   </a></li>
<li data-filtertext="331	hu	23819	Member of the Bureau	Csaba Őry	Őry, Csaba 	PPE	2009		" ><a href="./mep.php?id=331" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Őry, Csaba </span>
			   </a></li>
<li data-filtertext="508	sk	28170	Member	Peter Šťastný	Šťastný, Peter 	PPE	2009		" ><a href="./mep.php?id=508" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Šťastný, Peter </span>
			   </a></li>
<li data-filtertext="563	ro	36281	Member	Silvia-Adriana Ţicău	Ţicău, Silvia-Adriana 	SD	2009		" ><a href="./mep.php?id=563" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Ţicău, Silvia-Adriana </span>
			   </a></li>
<li data-filtertext="135	lv	28619	Member	Tatjana Ždanoka	Ždanoka, Tatjana 	VALE	2009		" ><a href="./mep.php?id=135" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lv.png" /><span>Ždanoka, Tatjana </span>
			   </a></li>
<li data-filtertext="421	cz	96719	Member	Andrea Češková	Češková, Andrea 	ECR	2009		" ><a href="./mep.php?id=421" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Češková, Andrea </span>
			   </a></li>
<li data-filtertext="218	lu	97293	Member	Georges Bach	Bach, Georges 	PPE	2009		" ><a href="./mep.php?id=218" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lu.png" /><span>Bach, Georges </span>
			   </a></li>
<li data-filtertext="754	hu	23813	Member	Zoltán Bagó	Bagó, Zoltán 	PPE	2009		" ><a href="./mep.php?id=754" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Bagó, Zoltán </span>
			   </a></li>
<li data-filtertext="29	lt	96680	Member	Zigmantas Balčytis	Balčytis, Zigmantas 	SD	2009		" ><a href="./mep.php?id=29" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Balčytis, Zigmantas </span>
			   </a></li>
<li data-filtertext="219	it	96757	Member	Raffaele Baldassarre	Baldassarre, Raffaele 	PPE	2009		" ><a href="./mep.php?id=219" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Baldassarre, Raffaele </span>
			   </a></li>
<li data-filtertext="220	de	96997	Member	Burkhard Balz	Balz, Burkhard 	PPE	2009		" ><a href="./mep.php?id=220" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Balz, Burkhard </span>
			   </a></li>
<li data-filtertext="520	it	96979	Member	Francesca Balzani	Balzani, Francesca 	SD	2009		" ><a href="./mep.php?id=520" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Balzani, Francesca </span>
			   </a></li>
<li data-filtertext="717	it	21818	Member	Paolo Bartolozzi	Bartolozzi, Paolo 	PPE	2009		" ><a href="./mep.php?id=717" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Bartolozzi, Paolo </span>
			   </a></li>
<li data-filtertext="463	pt	5956	Member	Regina Bastos	Bastos, Regina 	PPE	2009		" ><a href="./mep.php?id=463" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Bastos, Regina </span>
			   </a></li>
<li data-filtertext="8	gb	28497	Member	Gerard Batten	Batten, Gerard 	EFD	2009		" ><a href="./mep.php?id=8" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Batten, Gerard </span>
			   </a></li>
<li data-filtertext="223	sk	23866	Member of the Bureau	Edit Bauer	Bauer, Edit 	PPE	2009		" ><a href="./mep.php?id=223" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Bauer, Edit </span>
			   </a></li>
<li data-filtertext="103	fr	96738	Member	Sandrine Bélier	Bélier, Sandrine 	VALE	2009		" ><a href="./mep.php?id=103" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Bélier, Sandrine </span>
			   </a></li>
<li data-filtertext="226	de	1037	Member of the Bureau	Reimer Böge	Böge, Reimer 	PPE	2009		" ><a href="./mep.php?id=226" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Böge, Reimer </span>
			   </a></li>
<li data-filtertext="607	ro	96814	Member	Elena Băsescu	Băsescu, Elena 	PPE	2009		" ><a href="./mep.php?id=607" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Băsescu, Elena </span>
			   </a></li>
<li data-filtertext="229	cz	28354	Member	Jan Březina	Březina, Jan 	PPE	2009		" ><a href="./mep.php?id=229" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Březina, Jan </span>
			   </a></li>
<li data-filtertext="400	gb	96955	Member	Catherine Bearder	Bearder, Catherine 	ALDE	2009		" ><a href="./mep.php?id=400" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Bearder, Catherine </span>
			   </a></li>
<li data-filtertext="603	ro	96846	Member	George Becali	Becali, George 	NI	2009		" ><a href="./mep.php?id=603" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Becali, George </span>
			   </a></li>
<li data-filtertext="764	at	107041	Member	Heinz K. Becker	Becker, Heinz K. 	PPE	2009		" ><a href="./mep.php?id=764" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Becker, Heinz K. </span>
			   </a></li>
<li data-filtertext="9	nl	4507	Chair of the Bureau	Bastiaan Belder	Belder, Bastiaan 	EFD	2009		" ><a href="./mep.php?id=9" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Belder, Bastiaan </span>
			   </a></li>
<li data-filtertext="225	be	28257	Member	Ivo Belet	Belet, Ivo 	PPE	2009		" ><a href="./mep.php?id=225" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Belet, Ivo </span>
			   </a></li>
<li data-filtertext="104	fr	96732	Member	Malika Benarab-Attou	Benarab-Attou, Malika 	VALE	2009		" ><a href="./mep.php?id=104" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Benarab-Attou, Malika </span>
			   </a></li>
<li data-filtertext="401	fr	28214	Member	Jean-Luc Bennahmias	Bennahmias, Jean-Luc 	ALDE	2009		" ><a href="./mep.php?id=401" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Bennahmias, Jean-Luc </span>
			   </a></li>
<li data-filtertext="30	fr	1985	Member	Pervenche Berès	Berès, Pervenche 	SD	2009		" ><a href="./mep.php?id=30" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Berès, Pervenche </span>
			   </a></li>
<li data-filtertext="465	it	4746	Member	Sergio Berlato	Berlato, Sergio 	PPE	2009		" ><a href="./mep.php?id=465" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Berlato, Sergio </span>
			   </a></li>
<li data-filtertext="521	it	97156	Member	Luigi Berlinguer	Berlinguer, Luigi 	SD	2009		" ><a href="./mep.php?id=521" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Berlinguer, Luigi </span>
			   </a></li>
<li data-filtertext="670	nl	28174	Member	Thijs Berman	Berman, Thijs 	SD	2009		" ><a href="./mep.php?id=670" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Berman, Thijs </span>
			   </a></li>
<li data-filtertext="105	fr	96699	Member	Jean-Paul Besset	Besset, Jean-Paul 	VALE	2009		" ><a href="./mep.php?id=105" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Besset, Jean-Paul </span>
			   </a></li>
<li data-filtertext="138	es	96922	Member of the Bureau	Izaskun Bilbao Barandica	Bilbao Barandica, Izaskun 	ALDE	2009		" ><a href="./mep.php?id=138" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Bilbao Barandica, Izaskun </span>
			   </a></li>
<li data-filtertext="206	bg	38610	Member	Slavi Binev	Binev, Slavi 	NI	2009		" ><a href="./mep.php?id=206" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Binev, Slavi </span>
			   </a></li>
<li data-filtertext="378	lt	96681	Member	Vilija Blinkevičiūtė	Blinkevičiūtė, Vilija 	SD	2009		" ><a href="./mep.php?id=378" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Blinkevičiūtė, Vilija </span>
			   </a></li>
<li data-filtertext="31	ro	39711	Member	Victor Boştinaru	Boştinaru, Victor 	SD	2009		" ><a href="./mep.php?id=31" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Boştinaru, Victor </span>
			   </a></li>
<li data-filtertext="466	ro	39722	Member	Sebastian Valentin Bodu	Bodu, Sebastian Valentin 	PPE	2009		" ><a href="./mep.php?id=466" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Bodu, Sebastian Valentin </span>
			   </a></li>
<li data-filtertext="437	it	21817	Member	Mario Borghezio	Borghezio, Mario 	EFD	2009		" ><a href="./mep.php?id=437" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Borghezio, Mario </span>
			   </a></li>
<li data-filtertext="621	it	96916	Member	Rita Borsellino	Borsellino, Rita 	SD	2009		" ><a href="./mep.php?id=621" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Borsellino, Rita </span>
			   </a></li>
<li data-filtertext="228	pl	96799	Member	Piotr Borys	Borys, Piotr 	PPE	2009		" ><a href="./mep.php?id=228" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Borys, Piotr </span>
			   </a></li>
<li data-filtertext="756	fr	105624	Member	Philippe Boulland	Boulland, Philippe 	PPE	2009		" ><a href="./mep.php?id=756" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Boulland, Philippe </span>
			   </a></li>
<li data-filtertext="106	fr	96744	Member	José Bové	Bové, José 	VALE	2009		" ><a href="./mep.php?id=106" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Bové, José </span>
			   </a></li>
<li data-filtertext="1	gb	33570	Member of the Bureau	Sharon Bowles	Bowles, Sharon 	ALDE	2009		" ><a href="./mep.php?id=1" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Bowles, Sharon </span>
			   </a></li>
<li data-filtertext="663	nl	28171	Member	Emine Bozkurt	Bozkurt, Emine 	SD	2009		" ><a href="./mep.php?id=663" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Bozkurt, Emine </span>
			   </a></li>
<li data-filtertext="184	gb	4540	Co-treasurer	Philip Bradbourn	Bradbourn, Philip 	ECR	2009		" ><a href="./mep.php?id=184" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Bradbourn, Philip </span>
			   </a></li>
<li data-filtertext="107	de	96662	Member	Franziska Katharina Brantner	Brantner, Franziska Katharina 	VALE	2009		" ><a href="./mep.php?id=107" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Brantner, Franziska Katharina </span>
			   </a></li>
<li data-filtertext="566	be	28463	Member	Frieda Brepoels	Brepoels, Frieda 	VALE	2009		" ><a href="./mep.php?id=566" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Brepoels, Frieda </span>
			   </a></li>
<li data-filtertext="230	de	1263	Member of the Bureau	Elmar Brok	Brok, Elmar 	PPE	2009		" ><a href="./mep.php?id=230" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Brok, Elmar </span>
			   </a></li>
<li data-filtertext="207	gb	96749	Member	Andrew Henry William Brons	Brons, Andrew Henry William 	NI	2009		" ><a href="./mep.php?id=207" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Brons, Andrew Henry William </span>
			   </a></li>
<li data-filtertext="622	cz	96716	Member	Zuzana Brzobohatá	Brzobohatá, Zuzana 	SD	2009		" ><a href="./mep.php?id=622" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Brzobohatá, Zuzana </span>
			   </a></li>
<li data-filtertext="139	ro	38420	Member	Cristian Silviu Buşoi	Buşoi, Cristian Silviu 	ALDE	2009		" ><a href="./mep.php?id=139" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Buşoi, Cristian Silviu </span>
			   </a></li>
<li data-filtertext="203	gb	96798	Member	John Bufton	Bufton, John 	EFD	2009		" ><a href="./mep.php?id=203" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Bufton, John </span>
			   </a></li>
<li data-filtertext="32	de	4267	Member	Udo Bullmann	Bullmann, Udo 	SD	2009		" ><a href="./mep.php?id=32" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Bullmann, Udo </span>
			   </a></li>
<li data-filtertext="232	pl	28269	Member of the Bureau	Jerzy Buzek	Buzek, Jerzy 	PPE	2009		" ><a href="./mep.php?id=232" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Buzek, Jerzy </span>
			   </a></li>
<li data-filtertext="420	cz	28324	Member	Milan Cabrnoch	Cabrnoch, Milan 	ECR	2009		" ><a href="./mep.php?id=420" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Cabrnoch, Milan </span>
			   </a></li>
<li data-filtertext="233	fr	96849	Member	Alain Cadec	Cadec, Alain 	PPE	2009		" ><a href="./mep.php?id=233" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Cadec, Alain </span>
			   </a></li>
<li data-filtertext="592	gb	4536	Member of the Bureau	Martin Callanan	Callanan, Martin 	ECR	2009		" ><a href="./mep.php?id=592" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Callanan, Martin </span>
			   </a></li>
<li data-filtertext="204	gb	96912	Member	David Campbell Bannerman	Campbell Bannerman, David 	ECR	2009		" ><a href="./mep.php?id=204" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Campbell Bannerman, David </span>
			   </a></li>
<li data-filtertext="467	it	96733	Member	Antonio Cancian	Cancian, Antonio 	PPE	2009		" ><a href="./mep.php?id=467" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Cancian, Antonio </span>
			   </a></li>
<li data-filtertext="109	fr	96711	Member	Pascal Canfin	Canfin, Pascal 	VALE	2009		" ><a href="./mep.php?id=109" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Canfin, Pascal </span>
			   </a></li>
<li data-filtertext="664	pt	28311	Member	Luis Manuel Capoulas Santos	Capoulas Santos, Luis Manuel 	SD	2009		" ><a href="./mep.php?id=664" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Capoulas Santos, Luis Manuel </span>
			   </a></li>
<li data-filtertext="671	it	96866	Member	Salvatore Caronna	Caronna, Salvatore 	SD	2009		" ><a href="./mep.php?id=671" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Caronna, Salvatore </span>
			   </a></li>
<li data-filtertext="235	pt	96867	Member	Maria Da Graça Carvalho	Carvalho, Maria Da Graça 	PPE	2009		" ><a href="./mep.php?id=235" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Carvalho, Maria Da Graça </span>
			   </a></li>
<li data-filtertext="236	mt	28122	Member	David Casa	Casa, David 	PPE	2009		" ><a href="./mep.php?id=236" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/mt.png" /><span>Casa, David </span>
			   </a></li>
<li data-filtertext="689	gb	4532	Member	Michael Cashman	Cashman, Michael 	SD	2009		" ><a href="./mep.php?id=689" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Cashman, Michael </span>
			   </a></li>
<li data-filtertext="237	de	28219	Member of the Bureau	Daniel Caspary	Caspary, Daniel 	PPE	2009		" ><a href="./mep.php?id=237" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Caspary, Daniel </span>
			   </a></li>
<li data-filtertext="665	fr	28148	Member	Françoise Castex	Castex, Françoise 	SD	2009		" ><a href="./mep.php?id=665" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Castex, Françoise </span>
			   </a></li>
<li data-filtertext="238	fr	28206	Member of the Bureau	Jean-Marie Cavada	Cavada, Jean-Marie 	PPE	2009		" ><a href="./mep.php?id=238" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Cavada, Jean-Marie </span>
			   </a></li>
<li data-filtertext="666	es	4337	Member	Alejandro Cercas	Cercas, Alejandro 	SD	2009		" ><a href="./mep.php?id=666" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Cercas, Alejandro </span>
			   </a></li>
<li data-filtertext="140	de	28243	Member	Jorgo Chatzimarkakis	Chatzimarkakis, Jorgo 	ALDE	2009		" ><a href="./mep.php?id=140" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Chatzimarkakis, Jorgo </span>
			   </a></li>
<li data-filtertext="185	gb	2097	Member of the Bureau	Giles Chichester	Chichester, Giles 	ECR	2009		" ><a href="./mep.php?id=185" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Chichester, Giles </span>
			   </a></li>
<li data-filtertext="522	ie	96603	Member	Nessa Childers	Childers, Nessa 	SD	2009		" ><a href="./mep.php?id=522" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Childers, Nessa </span>
			   </a></li>
<li data-filtertext="384	gr	26851	Member of the Bureau	Nikolaos Chountis	Chountis, Nikolaos 	GUENGL	2009		" ><a href="./mep.php?id=384" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Chountis, Nikolaos </span>
			   </a></li>
<li data-filtertext="523	dk	28154	Member	Ole Christensen	Christensen, Ole 	SD	2009		" ><a href="./mep.php?id=523" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Christensen, Ole </span>
			   </a></li>
<li data-filtertext="391	be	24030	Member	Philip Claeys	Claeys, Philip 	NI	2009		" ><a href="./mep.php?id=391" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Claeys, Philip </span>
			   </a></li>
<li data-filtertext="579	gb	28493	Member	Derek Roland Clark	Clark, Derek Roland 	EFD	2009		" ><a href="./mep.php?id=579" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Clark, Derek Roland </span>
			   </a></li>
<li data-filtertext="239	pt	1892	Member	Carlos Coelho	Coelho, Carlos 	PPE	2009		" ><a href="./mep.php?id=239" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Coelho, Carlos </span>
			   </a></li>
<li data-filtertext="524	it	96915	Member	Sergio Gaetano Cofferati	Cofferati, Sergio Gaetano 	SD	2009		" ><a href="./mep.php?id=524" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Cofferati, Sergio Gaetano </span>
			   </a></li>
<li data-filtertext="639	gb	94283	Member	Trevor Colman	Colman, Trevor 	NI	2009		" ><a href="./mep.php?id=639" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Colman, Trevor </span>
			   </a></li>
<li data-filtertext="240	it	96775	Member	Lara Comi	Comi, Lara 	PPE	2009		" ><a href="./mep.php?id=240" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Comi, Lara </span>
			   </a></li>
<li data-filtertext="241	se	96674	Member	Anna Maria Corazza Bildt	Corazza Bildt, Anna Maria 	PPE	2009		" ><a href="./mep.php?id=241" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Corazza Bildt, Anna Maria </span>
			   </a></li>
<li data-filtertext="525	pt	96975	Member	António Fernando Correia de Campos	Correia de Campos, António Fernando 	SD	2009		" ><a href="./mep.php?id=525" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Correia de Campos, António Fernando </span>
			   </a></li>
<li data-filtertext="379	es	96987	Member	Ricardo Cortés Lastra	Cortés Lastra, Ricardo 	SD	2009		" ><a href="./mep.php?id=379" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Cortés Lastra, Ricardo </span>
			   </a></li>
<li data-filtertext="648	it	96917	Member	Silvia Costa	Costa, Silvia 	SD	2009		" ><a href="./mep.php?id=648" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Costa, Silvia </span>
			   </a></li>
<li data-filtertext="526	it	96880	Member	Andrea Cozzolino	Cozzolino, Andrea 	SD	2009		" ><a href="./mep.php?id=526" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Cozzolino, Andrea </span>
			   </a></li>
<li data-filtertext="635	de	28238	Member	Michael Cramer	Cramer, Michael 	VALE	2009		" ><a href="./mep.php?id=635" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Cramer, Michael </span>
			   </a></li>
<li data-filtertext="527	ro	33997	Member	Corina Creţu	Creţu, Corina 	SD	2009		" ><a href="./mep.php?id=527" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Creţu, Corina </span>
			   </a></li>
<li data-filtertext="141	de	96873	Member	Jürgen Creutzmann	Creutzmann, Jürgen 	ALDE	2009		" ><a href="./mep.php?id=141" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Creutzmann, Jürgen </span>
			   </a></li>
<li data-filtertext="723	it	96886	Member	Rosario Crocetta	Crocetta, Rosario 	SD	2009		" ><a href="./mep.php?id=723" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Crocetta, Rosario </span>
			   </a></li>
<li data-filtertext="677	ie	2109	Member	Brian Crowley	Crowley, Brian 	ALDE	2009		" ><a href="./mep.php?id=677" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Crowley, Brian </span>
			   </a></li>
<li data-filtertext="33	ro	96856	Member	George Sabin Cutaş	Cutaş, George Sabin 	SD	2009		" ><a href="./mep.php?id=33" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Cutaş, George Sabin </span>
			   </a></li>
<li data-filtertext="186	pl	96786	Member	Tadeusz Cymański	Cymański, Tadeusz 	ECR	2009		" ><a href="./mep.php?id=186" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Cymański, Tadeusz </span>
			   </a></li>
<li data-filtertext="593	pl	28372	Member	Ryszard Czarnecki	Czarnecki, Ryszard 	ECR	2009		" ><a href="./mep.php?id=593" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Czarnecki, Ryszard </span>
			   </a></li>
<li data-filtertext="34	be	97125	Member	Frédéric Daerden	Daerden, Frédéric 	SD	2009		" ><a href="./mep.php?id=34" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Daerden, Frédéric </span>
			   </a></li>
<li data-filtertext="740	gr	99325	Member	Spyros Danellis	Danellis, Spyros 	SD	2009		" ><a href="./mep.php?id=740" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Danellis, Spyros </span>
			   </a></li>
<li data-filtertext="242	fr	96747	Member of the Bureau	Arnaud Danjean	Danjean, Arnaud 	PPE	2009		" ><a href="./mep.php?id=242" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Danjean, Arnaud </span>
			   </a></li>
<li data-filtertext="243	fr	97296	Member	Michel Dantin	Dantin, Michel 	PPE	2009		" ><a href="./mep.php?id=243" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Dantin, Michel </span>
			   </a></li>
<li data-filtertext="580	gb	96958	Member	William (the Earl of) Dartmouth	Dartmouth, William (the Earl of) 	EFD	2009		" ><a href="./mep.php?id=580" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Dartmouth, William (the Earl of) </span>
			   </a></li>
<li data-filtertext="673	fr	72775	Member	Rachida Dati	Dati, Rachida 	PPE	2009		" ><a href="./mep.php?id=673" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Dati, Rachida </span>
			   </a></li>
<li data-filtertext="245	pt	96973	Member	Mário David	David, Mário 	PPE	2009		" ><a href="./mep.php?id=245" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>David, Mário </span>
			   </a></li>
<li data-filtertext="142	gb	4554	Member	Chris Davies	Davies, Chris 	ALDE	2009		" ><a href="./mep.php?id=142" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Davies, Chris </span>
			   </a></li>
<li data-filtertext="649	fr	4318	Member	Harlem Désir	Désir, Harlem 	SD	2009		" ><a href="./mep.php?id=649" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Désir, Harlem </span>
			   </a></li>
<li data-filtertext="472	es	28397	Member	Agustín Díaz de Mera García Consuegra	Díaz de Mera García Consuegra, A. 	PPE	2009		" ><a href="./mep.php?id=472" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Díaz de Mera García Consuegra, A. </span>
			   </a></li>
<li data-filtertext="35	ro	95281	Member	Vasilica Viorica Dăncilă	Dăncilă, Vasilica Viorica 	SD	2009		" ><a href="./mep.php?id=35" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Dăncilă, Vasilica Viorica </span>
			   </a></li>
<li data-filtertext="690	it	96887	Member	Francesco De Angelis	De Angelis, Francesco 	SD	2009		" ><a href="./mep.php?id=690" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>De Angelis, Francesco </span>
			   </a></li>
<li data-filtertext="691	it	96891	Member	Paolo De Castro	De Castro, Paolo 	SD	2009		" ><a href="./mep.php?id=691" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>De Castro, Paolo </span>
			   </a></li>
<li data-filtertext="600	nl	96748	Member of the Bureau	Cornelis de Jong	de Jong, Cornelis 	GUENGL	2009		" ><a href="./mep.php?id=600" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>de Jong, Cornelis </span>
			   </a></li>
<li data-filtertext="298	nl	38398	Member	Esther de Lange	de Lange, Esther 	PPE	2009		" ><a href="./mep.php?id=298" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>de Lange, Esther </span>
			   </a></li>
<li data-filtertext="470	it	1746	Member	Luigi Ciriaco De Mita	De Mita, Luigi Ciriaco 	PPE	2009		" ><a href="./mep.php?id=470" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>De Mita, Luigi Ciriaco </span>
			   </a></li>
<li data-filtertext="692	ie	1289	Member	Proinsias De Rossa	De Rossa, Proinsias 	SD	2009		" ><a href="./mep.php?id=692" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>De Rossa, Proinsias </span>
			   </a></li>
<li data-filtertext="471	fr	4347	Member	Christine De Veyrac	De Veyrac, Christine 	PPE	2009		" ><a href="./mep.php?id=471" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>De Veyrac, Christine </span>
			   </a></li>
<li data-filtertext="641	fr	2212	Vice-Chair/Member of the Bureau	Philippe de Villiers	de Villiers, Philippe 	EFD	2009		" ><a href="./mep.php?id=641" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>de Villiers, Philippe </span>
			   </a></li>
<li data-filtertext="247	de	28228	Member of the Bureau	Albert Deß	Deß, Albert	PPE	2009		" ><a href="./mep.php?id=247" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Deß, Albert</span>
			   </a></li>
<li data-filtertext="469	be	28256	Member	Jean-Luc Dehaene	Dehaene, Jean-Luc 	PPE	2009		" ><a href="./mep.php?id=469" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Dehaene, Jean-Luc </span>
			   </a></li>
<li data-filtertext="468	es	28390	Member of the Bureau	Pilar del Castillo Vera	del Castillo Vera, Pilar 	PPE	2009		" ><a href="./mep.php?id=468" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>del Castillo Vera, Pilar </span>
			   </a></li>
<li data-filtertext="112	fr	96868	Member	Karima Delli	Delli, Karima 	VALE	2009		" ><a href="./mep.php?id=112" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Delli, Karima </span>
			   </a></li>
<li data-filtertext="246	be	96914	Member	Anne Delvaux	Delvaux, Anne 	PPE	2009		" ><a href="./mep.php?id=246" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Delvaux, Anne </span>
			   </a></li>
<li data-filtertext="248	hu	96826	Member	Tamás Deutsch	Deutsch, Tamás 	PPE	2009		" ><a href="./mep.php?id=248" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Deutsch, Tamás </span>
			   </a></li>
<li data-filtertext="708	gb	4556	Member	Nirj Deva	Deva, Nirj 	ECR	2009		" ><a href="./mep.php?id=708" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Deva, Nirj </span>
			   </a></li>
<li data-filtertext="654	gb	96951	Member	Diane Dodds	Dodds, Diane 	NI	2009		" ><a href="./mep.php?id=654" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Dodds, Diane </span>
			   </a></li>
<li data-filtertext="693	it	96888	Member	Leonardo Domenici	Domenici, Leonardo 	SD	2009		" ><a href="./mep.php?id=693" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Domenici, Leonardo </span>
			   </a></li>
<li data-filtertext="403	lt	96692	Member of the Bureau	Leonidas Donskis	Donskis, Leonidas 	ALDE	2009		" ><a href="./mep.php?id=403" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Donskis, Leonidas </span>
			   </a></li>
<li data-filtertext="473	it	96787	Member of the Bureau	Herbert Dorfmann	Dorfmann, Herbert 	PPE	2009		" ><a href="./mep.php?id=473" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Dorfmann, Herbert </span>
			   </a></li>
<li data-filtertext="623	cz	96717	Member	Robert Dušek	Dušek, Robert 	SD	2009		" ><a href="./mep.php?id=623" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Dušek, Robert </span>
			   </a></li>
<li data-filtertext="143	gb	4514	Member	Andrew Duff	Duff, Andrew 	ALDE	2009		" ><a href="./mep.php?id=143" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Duff, Andrew </span>
			   </a></li>
<li data-filtertext="652	be	96639	Member	Isabelle Durant	Durant, Isabelle 	VALE	2009		" ><a href="./mep.php?id=652" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Durant, Isabelle </span>
			   </a></li>
<li data-filtertext="719	de	28226	Member of the Bureau	Christian Ehler	Ehler, Christian 	PPE	2009		" ><a href="./mep.php?id=719" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Ehler, Christian </span>
			   </a></li>
<li data-filtertext="21	at	39769	Member	Martin Ehrenhauser	Ehrenhauser, Martin 	NI	2009		" ><a href="./mep.php?id=21" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Ehrenhauser, Martin </span>
			   </a></li>
<li data-filtertext="113	nl	96725	Member	Bas Eickhout	Eickhout, Bas 	VALE	2009		" ><a href="./mep.php?id=113" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Eickhout, Bas </span>
			   </a></li>
<li data-filtertext="404	se	28127	Member of the Bureau	Lena Ek	Ek, Lena 	ALDE	2009		" ><a href="./mep.php?id=404" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Ek, Lena </span>
			   </a></li>
<li data-filtertext="36	be	25718	Member	Saïd El Khadraoui	El Khadraoui, Saïd 	SD	2009		" ><a href="./mep.php?id=36" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>El Khadraoui, Saïd </span>
			   </a></li>
<li data-filtertext="187	gb	1419	Member	James Elles	Elles, James 	ECR	2009		" ><a href="./mep.php?id=187" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Elles, James </span>
			   </a></li>
<li data-filtertext="37	ro	96859	Member	Ioan Enciu	Enciu, Ioan 	SD	2009		" ><a href="./mep.php?id=37" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Enciu, Ioan </span>
			   </a></li>
<li data-filtertext="114	se	96676	Member	Christian Engström	Engström, Christian 	VALE	2009		" ><a href="./mep.php?id=114" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Engström, Christian </span>
			   </a></li>
<li data-filtertext="598	de	96852	Member	Cornelia Ernst	Ernst, Cornelia 	GUENGL	2009		" ><a href="./mep.php?id=598" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Ernst, Cornelia </span>
			   </a></li>
<li data-filtertext="650	de	96842	Member	Ismail Ertug	Ertug, Ismail 	SD	2009		" ><a href="./mep.php?id=650" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Ertug, Ismail </span>
			   </a></li>
<li data-filtertext="474	fi	96682	Member	Sari Essayah	Essayah, Sari 	PPE	2009		" ><a href="./mep.php?id=474" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Essayah, Sari </span>
			   </a></li>
<li data-filtertext="608	es	96811	Member	Rosa Estaras Ferragut	Estaras Ferragut, Rosa 	PPE	2009		" ><a href="./mep.php?id=608" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Estaras Ferragut, Rosa </span>
			   </a></li>
<li data-filtertext="115	gb	4550	Vice-Chair	Jill Evans	Evans, Jill 	VALE	2009		" ><a href="./mep.php?id=115" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Evans, Jill </span>
			   </a></li>
<li data-filtertext="423	cz	23695	Co-treasurer	Hynek Fajmon	Fajmon, Hynek 	ECR	2009		" ><a href="./mep.php?id=423" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Fajmon, Hynek </span>
			   </a></li>
<li data-filtertext="38	sl	96911	Member	Tanja Fajon	Fajon, Tanja 	SD	2009		" ><a href="./mep.php?id=38" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sl.png" /><span>Fajon, Tanja </span>
			   </a></li>
<li data-filtertext="397	cz	23840	Member	Richard Falbr	Falbr, Richard 	SD	2009		" ><a href="./mep.php?id=397" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Falbr, Richard </span>
			   </a></li>
<li data-filtertext="39	se	4265	Member	Göran Färm	Färm, Göran 	SD	2009		" ><a href="./mep.php?id=39" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Färm, Göran </span>
			   </a></li>
<li data-filtertext="250	pt	96977	Member	Diogo Feio	Feio, Diogo 	PPE	2009		" ><a href="./mep.php?id=250" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Feio, Diogo </span>
			   </a></li>
<li data-filtertext="252	pt	96899	Member	José Manuel Fernandes	Fernandes, José Manuel 	PPE	2009		" ><a href="./mep.php?id=252" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Fernandes, José Manuel </span>
			   </a></li>
<li data-filtertext="694	pt	28308	Member	Elisa Ferreira	Ferreira, Elisa	SD	2009		" ><a href="./mep.php?id=694" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Ferreira, Elisa</span>
			   </a></li>
<li data-filtertext="599	pt	96706	Member	João Ferreira	Ferreira, João	GUENGL	2009		" ><a href="./mep.php?id=599" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Ferreira, João</span>
			   </a></li>
<li data-filtertext="253	it	96810	Member of the Bureau	Carlo Fidanza	Fidanza, Carlo 	PPE	2009		" ><a href="./mep.php?id=253" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Fidanza, Carlo </span>
			   </a></li>
<li data-filtertext="254	es	96729	Member	Santiago Fisas Ayxela	Fisas Ayxela, Santiago 	PPE	2009		" ><a href="./mep.php?id=254" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Fisas Ayxela, Santiago </span>
			   </a></li>
<li data-filtertext="255	se	28126	Member	Christofer Fjellner	Fjellner, Christofer 	PPE	2009		" ><a href="./mep.php?id=255" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Fjellner, Christofer </span>
			   </a></li>
<li data-filtertext="116	fr	4385	Member	Hélène Flautre	Flautre, Hélène 	VALE	2009		" ><a href="./mep.php?id=116" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Flautre, Hélène </span>
			   </a></li>
<li data-filtertext="40	de	96840	Member	Knut Fleckenstein	Fleckenstein, Knut 	SD	2009		" ><a href="./mep.php?id=40" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Fleckenstein, Knut </span>
			   </a></li>
<li data-filtertext="256	de	1038	Member of the Bureau	Karl-Heinz Florenz	Florenz, Karl-Heinz 	PPE	2009		" ><a href="./mep.php?id=256" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Florenz, Karl-Heinz </span>
			   </a></li>
<li data-filtertext="438	it	96993	Member	Lorenzo Fontana	Fontana, Lorenzo 	EFD	2009		" ><a href="./mep.php?id=438" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Fontana, Lorenzo </span>
			   </a></li>
<li data-filtertext="643	gb	96949	Member	Vicky Ford	Ford, Vicky 	ECR	2009		" ><a href="./mep.php?id=643" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Ford, Vicky </span>
			   </a></li>
<li data-filtertext="188	gb	4553	Member	Jacqueline Foster	Foster, Jacqueline 	ECR	2009		" ><a href="./mep.php?id=188" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Foster, Jacqueline </span>
			   </a></li>
<li data-filtertext="257	es	1993	Member of the Bureau	Carmen Fraga Estévez	Fraga Estévez, Carmen 	PPE	2009		" ><a href="./mep.php?id=257" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Fraga Estévez, Carmen </span>
			   </a></li>
<li data-filtertext="395	fr	96908	Member	Gaston Franco	Franco, Gaston 	PPE	2009		" ><a href="./mep.php?id=395" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Franco, Gaston </span>
			   </a></li>
<li data-filtertext="258	de	2341	Member of the Bureau	Michael Gahler	Gahler, Michael 	PPE	2009		" ><a href="./mep.php?id=258" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Gahler, Michael </span>
			   </a></li>
<li data-filtertext="678	ie	2125	Member of the Bureau	Pat the Cope Gallagher	Gallagher, Pat the Cope 	ALDE	2009		" ><a href="./mep.php?id=678" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Gallagher, Pat the Cope </span>
			   </a></li>
<li data-filtertext="475	fr	96896	Member of the Bureau	Marielle Gallo	Gallo, Marielle 	PPE	2009		" ><a href="./mep.php?id=475" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Gallo, Marielle </span>
			   </a></li>
<li data-filtertext="530	es	28298	Member	Iratxe García Pérez	García Pérez, Iratxe 	SD	2009		" ><a href="./mep.php?id=530" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>García Pérez, Iratxe </span>
			   </a></li>
<li data-filtertext="260	es	1992	Member of the Bureau	José Manuel García-Margallo y Marfil	García-Margallo y Marfil, José M.	PPE	2009		" ><a href="./mep.php?id=260" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>García-Margallo y Marfil, José M.</span>
			   </a></li>
<li data-filtertext="531	es	96991	Member	Eider Gardiazábal Rubial	Gardiazábal Rubial, Eider 	SD	2009		" ><a href="./mep.php?id=531" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Gardiazábal Rubial, Eider </span>
			   </a></li>
<li data-filtertext="261	it	58758	Member	Elisabetta Gardini	Gardini, Elisabetta 	PPE	2009		" ><a href="./mep.php?id=261" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Gardini, Elisabetta </span>
			   </a></li>
<li data-filtertext="768	it	4562	Member	Giuseppe Gargani	Gargani, Giuseppe 	PPE	2009		" ><a href="./mep.php?id=768" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Gargani, Giuseppe </span>
			   </a></li>
<li data-filtertext="476	es	1665	Member of the Bureau	Salvador Garriga Polledo	Garriga Polledo, Salvador 	PPE	2009		" ><a href="./mep.php?id=476" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Garriga Polledo, Salvador </span>
			   </a></li>
<li data-filtertext="262	fr	28193	Member of the Bureau	Jean-Paul Gauzès	Gauzès, Jean-Paul 	PPE	2009		" ><a href="./mep.php?id=262" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Gauzès, Jean-Paul </span>
			   </a></li>
<li data-filtertext="259	hu	28150	Member	Kinga Gál	Gál, Kinga 	PPE	2009		" ><a href="./mep.php?id=259" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Gál, Kinga </span>
			   </a></li>
<li data-filtertext="749	hu	102886	Member of the Bureau	Ildikó Gáll-Pelcz	Gáll-Pelcz, Ildikó 	PPE	2009		" ><a href="./mep.php?id=749" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Gáll-Pelcz, Ildikó </span>
			   </a></li>
<li data-filtertext="696	hu	96832	Member	Kinga Göncz	Göncz, Kinga 	SD	2009		" ><a href="./mep.php?id=696" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Göncz, Kinga </span>
			   </a></li>
<li data-filtertext="41	de	1913	Member	Evelyne Gebhardt	Gebhardt, Evelyne 	SD	2009		" ><a href="./mep.php?id=41" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Gebhardt, Evelyne </span>
			   </a></li>
<li data-filtertext="42	de	96833	Member	Jens Geier	Geier, Jens 	SD	2009		" ><a href="./mep.php?id=42" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Geier, Jens </span>
			   </a></li>
<li data-filtertext="732	nl	96940	Member	Gerben-Jan Gerbrandy	Gerbrandy, Gerben-Jan 	ALDE	2009		" ><a href="./mep.php?id=732" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Gerbrandy, Gerben-Jan </span>
			   </a></li>
<li data-filtertext="532	pl	28377	Member	Lidia Joanna Geringer de Oedenberg	Geringer de Oedenberg, Lidia Joanna 	SD	2009		" ><a href="./mep.php?id=532" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Geringer de Oedenberg, Lidia Joanna </span>
			   </a></li>
<li data-filtertext="636	de	96730	Member	Sven Giegold	Giegold, Sven 	VALE	2009		" ><a href="./mep.php?id=636" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Giegold, Sven </span>
			   </a></li>
<li data-filtertext="533	pl	28379	Member	Adam Gierek	Gierek, Adam 	SD	2009		" ><a href="./mep.php?id=533" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Gierek, Adam </span>
			   </a></li>
<li data-filtertext="189	gb	96956	Member	Julie Girling	Girling, Julie 	ECR	2009		" ><a href="./mep.php?id=189" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Girling, Julie </span>
			   </a></li>
<li data-filtertext="43	de	1902	Member	Norbert Glante	Glante, Norbert 	SD	2009		" ><a href="./mep.php?id=43" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Glante, Norbert </span>
			   </a></li>
<li data-filtertext="477	hu	28145	Member	Béla Glattfelder	Glattfelder, Béla 	PPE	2009		" ><a href="./mep.php?id=477" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Glattfelder, Béla </span>
			   </a></li>
<li data-filtertext="144	lv	97004	Member of the Bureau	Ivars Godmanis	Godmanis, Ivars 	ALDE	2009		" ><a href="./mep.php?id=144" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lv.png" /><span>Godmanis, Ivars </span>
			   </a></li>
<li data-filtertext="534	lu	4429	Member	Robert Goebbels	Goebbels, Robert 	SD	2009		" ><a href="./mep.php?id=534" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lu.png" /><span>Goebbels, Robert </span>
			   </a></li>
<li data-filtertext="145	lu	840	Member of the Bureau	Charles Goerens	Goerens, Charles 	ALDE	2009		" ><a href="./mep.php?id=145" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lu.png" /><span>Goerens, Charles </span>
			   </a></li>
<li data-filtertext="208	fr	1164	Member	Bruno Gollnisch	Gollnisch, Bruno 	NI	2009		" ><a href="./mep.php?id=208" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Gollnisch, Bruno </span>
			   </a></li>
<li data-filtertext="695	pt	28306	Member	Ana Gomes	Gomes, Ana 	SD	2009		" ><a href="./mep.php?id=695" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Gomes, Ana </span>
			   </a></li>
<li data-filtertext="3	fr	97137	Member	Sylvie Goulard	Goulard, Sylvie 	ALDE	2009		" ><a href="./mep.php?id=3" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Goulard, Sylvie </span>
			   </a></li>
<li data-filtertext="264	de	28220	Member of the Bureau	Ingeborg Gräßle	Gräßle, Ingeborg	PPE	2009		" ><a href="./mep.php?id=264" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Gräßle, Ingeborg</span>
			   </a></li>
<li data-filtertext="190	pl	96790	Member	Marek Józef Gróbarczyk	Gróbarczyk, Marek Józef 	ECR	2009		" ><a href="./mep.php?id=190" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Gróbarczyk, Marek Józef </span>
			   </a></li>
<li data-filtertext="535	mt	28123	Member	Louis Grech	Grech, Louis 	SD	2009		" ><a href="./mep.php?id=535" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/mt.png" /><span>Grech, Louis </span>
			   </a></li>
<li data-filtertext="536	fr	96953	Member	Estelle Grelier	Grelier, Estelle 	SD	2009		" ><a href="./mep.php?id=536" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Grelier, Estelle </span>
			   </a></li>
<li data-filtertext="637	fr	96745	Member	Catherine Grèze	Greze, Catherine	VALE	2009		" ><a href="./mep.php?id=637" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Greze, Catherine</span>
			   </a></li>
<li data-filtertext="4	fr	28208	Member	Nathalie Griesbeck	Griesbeck, Nathalie 	ALDE	2009		" ><a href="./mep.php?id=4" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Griesbeck, Nathalie </span>
			   </a></li>
<li data-filtertext="209	gb	96751	Member	Nick Griffin	Griffin, Nick 	NI	2009		" ><a href="./mep.php?id=209" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Griffin, Nick </span>
			   </a></li>
<li data-filtertext="659	de	34728	Member	Matthias Groote	Groote, Matthias 	SD	2009		" ><a href="./mep.php?id=659" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Groote, Matthias </span>
			   </a></li>
<li data-filtertext="478	be	2247	Member of the Bureau	Mathieu Grosch	Grosch, Mathieu 	PPE	2009		" ><a href="./mep.php?id=478" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Grosch, Mathieu </span>
			   </a></li>
<li data-filtertext="265	fr	2025	Member	Françoise Grossetête	Grossetête, Françoise 	PPE	2009		" ><a href="./mep.php?id=265" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Grossetête, Françoise </span>
			   </a></li>
<li data-filtertext="479	pl	23785	Member of the Bureau	Andrzej Grzyb	Grzyb, Andrzej 	PPE	2009		" ><a href="./mep.php?id=479" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Grzyb, Andrzej </span>
			   </a></li>
<li data-filtertext="44	it	96892	Member	Roberto Gualtieri	Gualtieri, Roberto 	SD	2009		" ><a href="./mep.php?id=44" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Gualtieri, Roberto </span>
			   </a></li>
<li data-filtertext="537	es	96768	Member	Enrique Guerrero Salom	Guerrero Salom, Enrique 	SD	2009		" ><a href="./mep.php?id=537" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Guerrero Salom, Enrique </span>
			   </a></li>
<li data-filtertext="381	fr	96952	Member	Sylvie Guillaume	Guillaume, Sylvie 	SD	2009		" ><a href="./mep.php?id=381" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Guillaume, Sylvie </span>
			   </a></li>
<li data-filtertext="738	hu	23805	Member	Zita Gurmai	Gurmai, Zita 	SD	2009		" ><a href="./mep.php?id=738" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Gurmai, Zita </span>
			   </a></li>
<li data-filtertext="753	es	103488	Member	Sergio Gutiérrez Prieto	Gutiérrez Prieto, Sergio 	SD	2009		" ><a href="./mep.php?id=753" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Gutiérrez Prieto, Sergio </span>
			   </a></li>
<li data-filtertext="267	es	4326	Member	Cristina Gutiérrez-Cortines	Gutiérrez-Cortines, Cristina 	PPE	2009		" ><a href="./mep.php?id=267" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Gutiérrez-Cortines, Cristina </span>
			   </a></li>
<li data-filtertext="146	fi	96683	Member of the Bureau	Carl Haglund	Haglund, Carl 	ALDE	2009		" ><a href="./mep.php?id=146" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Haglund, Carl </span>
			   </a></li>
<li data-filtertext="147	gb	28477	Member of the Bureau	Fiona Hall	Hall, Fiona 	ALDE	2009		" ><a href="./mep.php?id=147" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Hall, Fiona </span>
			   </a></li>
<li data-filtertext="657	pl	28275	Member	Małgorzata Handzlik	Handzlik, Małgorzata 	PPE	2009		" ><a href="./mep.php?id=657" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Handzlik, Małgorzata </span>
			   </a></li>
<li data-filtertext="720	hu	96707	Member	Ágnes Hankiss	Hankiss, Ágnes 	PPE	2009		" ><a href="./mep.php?id=720" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Hankiss, Ágnes </span>
			   </a></li>
<li data-filtertext="191	gb	4555	Member	Daniel Hannan	Hannan, Daniel 	ECR	2009		" ><a href="./mep.php?id=191" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Hannan, Daniel </span>
			   </a></li>
<li data-filtertext="192	gb	4538	Member of the Bureau	Malcolm Harbour	Harbour, Malcolm 	ECR	2009		" ><a href="./mep.php?id=192" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Harbour, Malcolm </span>
			   </a></li>
<li data-filtertext="148	ie	28116	Member of the Bureau	Marian Harkin	Harkin, Marian 	ALDE	2009		" ><a href="./mep.php?id=148" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Harkin, Marian </span>
			   </a></li>
<li data-filtertext="752	nl	103132	Member	Lucas Hartong	Hartong, Lucas 	NI	2009		" ><a href="./mep.php?id=752" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Hartong, Lucas </span>
			   </a></li>
<li data-filtertext="567	fi	28321	Member	Satu Hassi	Hassi, Satu 	VALE	2009		" ><a href="./mep.php?id=567" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Hassi, Satu </span>
			   </a></li>
<li data-filtertext="45	de	1914	Member	Jutta Haug	Haug, Jutta 	SD	2009		" ><a href="./mep.php?id=45" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Haug, Jutta </span>
			   </a></li>
<li data-filtertext="727	de	96758	Member	Gerald Häfner	Häfner, Gerald 	VALE	2009		" ><a href="./mep.php?id=727" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Häfner, Gerald </span>
			   </a></li>
<li data-filtertext="16	de	96851	Member of the Bureau	Thomas Händel	Händel, Thomas 	GUENGL	2009		" ><a href="./mep.php?id=16" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Händel, Thomas </span>
			   </a></li>
<li data-filtertext="568	de	96752	Member	Martin Häusling	Häusling, Martin 	VALE	2009		" ><a href="./mep.php?id=568" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Häusling, Martin </span>
			   </a></li>
<li data-filtertext="386	fr	28215	Member	Jacky Hénin	Hénin, Jacky 	GUENGL	2009		" ><a href="./mep.php?id=386" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Hénin, Jacky </span>
			   </a></li>
<li data-filtertext="480	pl	96779	Member of the Bureau	Danuta Maria Hübner	Hübner, Danuta Maria 	PPE	2009		" ><a href="./mep.php?id=480" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Hübner, Danuta Maria </span>
			   </a></li>
<li data-filtertext="47	se	28131	Member	Anna Hedh	Hedh, Anna 	SD	2009		" ><a href="./mep.php?id=47" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Hedh, Anna </span>
			   </a></li>
<li data-filtertext="577	gb	4516	Member	Roger Helmer	Helmer, Roger 	ECR	2009		" ><a href="./mep.php?id=577" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Helmer, Roger </span>
			   </a></li>
<li data-filtertext="270	es	22418	Member	Esther Herranz García	Herranz García, Esther 	PPE	2009		" ><a href="./mep.php?id=270" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Herranz García, Esther </span>
			   </a></li>
<li data-filtertext="271	pl	96753	Member	Jolanta Emilia Hibner	Hibner, Jolanta Emilia 	PPE	2009		" ><a href="./mep.php?id=271" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Hibner, Jolanta Emilia </span>
			   </a></li>
<li data-filtertext="272	ie	28117	Member of the Bureau	Jim Higgins	Higgins, Jim 	PPE	2009		" ><a href="./mep.php?id=272" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Higgins, Jim </span>
			   </a></li>
<li data-filtertext="150	de	96872	Member	Nadja Hirsch	Hirsch, Nadja 	ALDE	2009		" ><a href="./mep.php?id=150" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Hirsch, Nadja </span>
			   </a></li>
<li data-filtertext="697	fr	96950	Member	Liem Hoang Ngoc	Hoang Ngoc, Liem 	SD	2009		" ><a href="./mep.php?id=697" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Hoang Ngoc, Liem </span>
			   </a></li>
<li data-filtertext="17	fr	96881	Member	Elie Hoarau	Hoarau, Elie 	GUENGL	2009		" ><a href="./mep.php?id=17" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Hoarau, Elie </span>
			   </a></li>
<li data-filtertext="647	de	96780	Member	Monika Hohlmeier	Hohlmeier, Monika 	PPE	2009		" ><a href="./mep.php?id=647" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Hohlmeier, Monika </span>
			   </a></li>
<li data-filtertext="538	gb	5846	Member	Mary Honeyball	Honeyball, Mary 	SD	2009		" ><a href="./mep.php?id=538" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Honeyball, Mary </span>
			   </a></li>
<li data-filtertext="761	fr	5565	Member	Brice Hortefeux	Hortefeux, Brice 	PPE	2009		" ><a href="./mep.php?id=761" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Hortefeux, Brice </span>
			   </a></li>
<li data-filtertext="539	gb	2073	Member	Richard Howitt	Howitt, Richard 	SD	2009		" ><a href="./mep.php?id=539" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Howitt, Richard </span>
			   </a></li>
<li data-filtertext="119	gb	2338	Member	Ian Hudghton	Hudghton, Ian 	VALE	2009		" ><a href="./mep.php?id=119" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Hudghton, Ian </span>
			   </a></li>
<li data-filtertext="151	bg	34249	Member of the Bureau	Filiz Hakaeva Hyusmenova	Hyusmenova, Filiz Hakaeva 	ALDE	2009		" ><a href="./mep.php?id=151" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Hyusmenova, Filiz Hakaeva </span>
			   </a></li>
<li data-filtertext="274	it	96818	Member	Salvatore Iacolino	Iacolino, Salvatore 	PPE	2009		" ><a href="./mep.php?id=274" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Iacolino, Salvatore </span>
			   </a></li>
<li data-filtertext="481	se	28125	Member	Anna Ibrisagic	Ibrisagic, Anna 	PPE	2009		" ><a href="./mep.php?id=481" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Ibrisagic, Anna </span>
			   </a></li>
<li data-filtertext="152	bg	34235	Member	Stanimir Ilchev	Ilchev, Stanimir 	ALDE	2009		" ><a href="./mep.php?id=152" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Ilchev, Stanimir </span>
			   </a></li>
<li data-filtertext="439	lt	96693	Member	Juozas Imbrasas	Imbrasas, Juozas 	EFD	2009		" ><a href="./mep.php?id=439" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Imbrasas, Juozas </span>
			   </a></li>
<li data-filtertext="153	nl	28266	Member of the Bureau	Sophia in 't Veld	in 't Veld, Sophia 	ALDE	2009		" ><a href="./mep.php?id=153" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>in 't Veld, Sophia </span>
			   </a></li>
<li data-filtertext="624	bg	38605	Member	Iliana Malinova Iotova	Iotova, Iliana Malinova 	SD	2009		" ><a href="./mep.php?id=624" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Iotova, Iliana Malinova </span>
			   </a></li>
<li data-filtertext="736	it	97130	Member	Vincenzo Iovine	Iovine, Vincenzo 	ALDE	2009		" ><a href="./mep.php?id=736" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Iovine, Vincenzo </span>
			   </a></li>
<li data-filtertext="755	es	105192	Member	María Irigoyen Pérez	Irigoyen Pérez, María 	SD	2009		" ><a href="./mep.php?id=755" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Irigoyen Pérez, María </span>
			   </a></li>
<li data-filtertext="275	es	28398	Member	Carlos José Iturgaiz Angulo	Iturgaiz Angulo, Carlos José 	PPE	2009		" ><a href="./mep.php?id=275" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Iturgaiz Angulo, Carlos José </span>
			   </a></li>
<li data-filtertext="276	bg	96834	Member	Iliana Ivanova	Ivanova, Iliana 	PPE	2009		" ><a href="./mep.php?id=276" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Ivanova, Iliana </span>
			   </a></li>
<li data-filtertext="625	fi	96684	Member	Liisa Jaakonsaari	Jaakonsaari, Liisa 	SD	2009		" ><a href="./mep.php?id=625" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Jaakonsaari, Liisa </span>
			   </a></li>
<li data-filtertext="569	fr	96740	Member	Yannick Jadot	Jadot, Yannick 	VALE	2009		" ><a href="./mep.php?id=569" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Jadot, Yannick </span>
			   </a></li>
<li data-filtertext="277	de	96772	Member of the Bureau	Peter Jahr	Jahr, Peter 	PPE	2009		" ><a href="./mep.php?id=277" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Jahr, Peter </span>
			   </a></li>
<li data-filtertext="278	pl	96781	Member	Danuta Jazłowiecka	Jazłowiecka, Danuta 	PPE	2009		" ><a href="./mep.php?id=278" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Jazłowiecka, Danuta </span>
			   </a></li>
<li data-filtertext="609	hu	28141	Member	Lívia Járóka	Járóka, Lívia 	PPE	2009		" ><a href="./mep.php?id=609" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Járóka, Lívia </span>
			   </a></li>
<li data-filtertext="541	dk	28156	Member	Dan Jørgensen	Jørgensen, Dan 	SD	2009		" ><a href="./mep.php?id=541" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Jørgensen, Dan </span>
			   </a></li>
<li data-filtertext="279	pl	96782	Member	Sidonia Elżbieta Jędrzejewska	Jędrzejewska, Sidonia Elżbieta 	PPE	2009		" ><a href="./mep.php?id=279" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Jędrzejewska, Sidonia Elżbieta </span>
			   </a></li>
<li data-filtertext="280	de	4271	Member	Elisabeth Jeggle	Jeggle, Elisabeth 	PPE	2009		" ><a href="./mep.php?id=280" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Jeggle, Elisabeth </span>
			   </a></li>
<li data-filtertext="154	dk	4440	Member	Anne E. Jensen	Jensen, Anne E. 	ALDE	2009		" ><a href="./mep.php?id=154" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Jensen, Anne E. </span>
			   </a></li>
<li data-filtertext="281	es	96806	Member	Teresa Jiménez-Becerril Barrio	Jimenez-Becerril Barrio, Teresa	PPE	2009		" ><a href="./mep.php?id=281" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Jimenez-Becerril Barrio, Teresa</span>
			   </a></li>
<li data-filtertext="120	fr	96883	Member	Eva Joly	Joly, Eva 	VALE	2009		" ><a href="./mep.php?id=120" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Joly, Eva </span>
			   </a></li>
<li data-filtertext="610	sl	28291	Member	Romana Jordan Cizelj	Jordan Cizelj, Romana 	PPE	2009		" ><a href="./mep.php?id=610" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sl.png" /><span>Jordan Cizelj, Romana </span>
			   </a></li>
<li data-filtertext="570	es	96708	Member	Oriol Junqueras Vies	Junqueras Vies, Oriol 	VALE	2009		" ><a href="./mep.php?id=570" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Junqueras Vies, Oriol </span>
			   </a></li>
<li data-filtertext="282	fr	96884	Member	Philippe Juvin	Juvin, Philippe 	PPE	2009		" ><a href="./mep.php?id=282" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Juvin, Philippe </span>
			   </a></li>
<li data-filtertext="155	sl	23691	Member of the Bureau	Jelko Kacin	Kacin, Jelko 	ALDE	2009		" ><a href="./mep.php?id=155" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sl.png" /><span>Kacin, Jelko </span>
			   </a></li>
<li data-filtertext="483	pl	28280	Member of the Bureau	Filip Kaczmarek	Kaczmarek, Filip 	PPE	2009		" ><a href="./mep.php?id=483" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Kaczmarek, Filip </span>
			   </a></li>
<li data-filtertext="50	at	97014	Member	Karin Kadenbach	Kadenbach, Karin 	SD	2009		" ><a href="./mep.php?id=50" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Kadenbach, Karin </span>
			   </a></li>
<li data-filtertext="542	bg	96807	Member	Ivailo Kalfin	Kalfin, Ivailo 	SD	2009		" ><a href="./mep.php?id=542" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Kalfin, Ivailo </span>
			   </a></li>
<li data-filtertext="283	pl	96771	Member	Jarosław Kalinowski	Kalinowski, Jarosław 	PPE	2009		" ><a href="./mep.php?id=283" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Kalinowski, Jarosław </span>
			   </a></li>
<li data-filtertext="484	lv	96934	Member	Sandra Kalniete	Kalniete, Sandra 	PPE	2009		" ><a href="./mep.php?id=484" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lv.png" /><span>Kalniete, Sandra </span>
			   </a></li>
<li data-filtertext="425	gb	33569	Member	Syed Kamall	Kamall, Syed 	ECR	2009		" ><a href="./mep.php?id=425" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Kamall, Syed </span>
			   </a></li>
<li data-filtertext="426	pl	23792	Member of the Bureau	Michał Tomasz Kamiński	Kamiński, Michał Tomasz 	ECR	2009		" ><a href="./mep.php?id=426" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Kamiński, Michał Tomasz </span>
			   </a></li>
<li data-filtertext="51	de	96837	Member	Petra Kammerevert	Kammerevert, Petra 	SD	2009		" ><a href="./mep.php?id=51" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Kammerevert, Petra </span>
			   </a></li>
<li data-filtertext="594	gb	28481	Member	Sajjad Karim	Karim, Sajjad 	ECR	2009		" ><a href="./mep.php?id=594" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Karim, Sajjad </span>
			   </a></li>
<li data-filtertext="287	de	25919	Member	Martin Kastler	Kastler, Martin 	PPE	2009		" ><a href="./mep.php?id=287" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Kastler, Martin </span>
			   </a></li>
<li data-filtertext="156	bg	38613	Member	Metin Kazak	Kazak, Metin 	ALDE	2009		" ><a href="./mep.php?id=156" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Kazak, Metin </span>
			   </a></li>
<li data-filtertext="487	hu	96829	Member	Ádám Kósa	Kósa, Ádám 	PPE	2009		" ><a href="./mep.php?id=487" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Kósa, Ádám </span>
			   </a></li>
<li data-filtertext="292	at	96882	Member	Elisabeth Köstinger	Köstinger, Elisabeth 	PPE	2009		" ><a href="./mep.php?id=292" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Köstinger, Elisabeth </span>
			   </a></li>
<li data-filtertext="121	de	96734	Member	Franziska Keller	Keller, Franziska 	VALE	2009		" ><a href="./mep.php?id=121" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Keller, Franziska </span>
			   </a></li>
<li data-filtertext="485	ie	96668	Member	Seán Kelly	Kelly, Seán 	PPE	2009		" ><a href="./mep.php?id=485" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Kelly, Seán </span>
			   </a></li>
<li data-filtertext="122	fr	96737	Member	Nicole Kiil-Nielsen	Kiil-Nielsen, Nicole 	VALE	2009		" ><a href="./mep.php?id=122" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Kiil-Nielsen, Nicole </span>
			   </a></li>
<li data-filtertext="52	bg	34231	Member	Evgeni Kirilov	Kirilov, Evgeni 	SD	2009		" ><a href="./mep.php?id=52" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Kirilov, Evgeni </span>
			   </a></li>
<li data-filtertext="289	de	1929	Member	Christa Klaß	Klaß, Christa	PPE	2009		" ><a href="./mep.php?id=289" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Klaß, Christa</span>
			   </a></li>
<li data-filtertext="765	sl	23413	Member	Mojca Kleva	Kleva, Mojca 	SD	2009		" ><a href="./mep.php?id=765" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sl.png" /><span>Kleva, Mojca </span>
			   </a></li>
<li data-filtertext="157	de	28244	Member	Wolf Klinz	Klinz, Wolf 	ALDE	2009		" ><a href="./mep.php?id=157" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Klinz, Wolf </span>
			   </a></li>
<li data-filtertext="446	de	96769	Member	Jürgen Klute	Klute, Jürgen 	GUENGL	2009		" ><a href="./mep.php?id=446" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Klute, Jürgen </span>
			   </a></li>
<li data-filtertext="194	cz	96704	Member	Edvard Kožušník	Kožušník, Edvard 	ECR	2009		" ><a href="./mep.php?id=194" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Kožušník, Edvard </span>
			   </a></li>
<li data-filtertext="486	de	1852	Member	Dieter-Lebrecht Koch	Koch, Dieter-Lebrecht 	PPE	2009		" ><a href="./mep.php?id=486" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Koch, Dieter-Lebrecht </span>
			   </a></li>
<li data-filtertext="158	de	28241	Member	Silvana Koch-Mehrin	Koch-Mehrin, Silvana 	ALDE	2009		" ><a href="./mep.php?id=158" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Koch-Mehrin, Silvana </span>
			   </a></li>
<li data-filtertext="601	cz	28331	Member	Jaromír Kohlíček	Kohlíček, Jaromír 	GUENGL	2009		" ><a href="./mep.php?id=601" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Kohlíček, Jaromír </span>
			   </a></li>
<li data-filtertext="290	pl	96785	Member	Lena Kolarska-Bobińska	Kolarska-Bobińska, Lena 	PPE	2009		" ><a href="./mep.php?id=290" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Kolarska-Bobińska, Lena </span>
			   </a></li>
<li data-filtertext="53	gr	39319	Member	Maria Eleni Koppa	Koppa, Maria Eleni 	SD	2009		" ><a href="./mep.php?id=53" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Koppa, Maria Eleni </span>
			   </a></li>
<li data-filtertext="291	fi	4260	Member	Eija-Riitta Korhola	Korhola, Eija-Riitta 	PPE	2009		" ><a href="./mep.php?id=291" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Korhola, Eija-Riitta </span>
			   </a></li>
<li data-filtertext="730	gr	97011	Member	Georgios Koumoutsakos	Koumoutsakos, Georgios 	PPE	2009		" ><a href="./mep.php?id=730" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Koumoutsakos, Georgios </span>
			   </a></li>
<li data-filtertext="748	hu	102887	Member	Béla Kovács	Kovács, Béla 	NI	2009		" ><a href="./mep.php?id=748" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Kovács, Béla </span>
			   </a></li>
<li data-filtertext="644	pl	96793	Member	Paweł Robert Kowal	Kowal, Paweł Robert 	ECR	2009		" ><a href="./mep.php?id=644" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Kowal, Paweł Robert </span>
			   </a></li>
<li data-filtertext="747	pl	101954	Member	Jan Kozłowski	Kozłowski, Jan 	PPE	2009		" ><a href="./mep.php?id=747" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Kozłowski, Jan </span>
			   </a></li>
<li data-filtertext="159	sk	23873	Member of the Bureau	Sergej Kozlík	Kozlík, Sergej 	ALDE	2009		" ><a href="./mep.php?id=159" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Kozlík, Sergej </span>
			   </a></li>
<li data-filtertext="406	de	28247	Member	Holger Krahmer	Krahmer, Holger 	ALDE	2009		" ><a href="./mep.php?id=406" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Krahmer, Holger </span>
			   </a></li>
<li data-filtertext="294	gr	4482	Member of the Bureau	Rodi Kratsa-Tsagaropoulou	Kratsa-Tsagaropoulou, Rodi 	PPE	2009		" ><a href="./mep.php?id=294" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Kratsa-Tsagaropoulou, Rodi </span>
			   </a></li>
<li data-filtertext="54	de	1854	Member	Constanze Angela Krehl	Krehl, Constanze Angela 	SD	2009		" ><a href="./mep.php?id=54" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Krehl, Constanze Angela </span>
			   </a></li>
<li data-filtertext="55	de	1935	Member	Wolfgang Kreissl-Dörfler	Kreissl-Dörfler, Wolfgang 	SD	2009		" ><a href="./mep.php?id=55" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Kreissl-Dörfler, Wolfgang </span>
			   </a></li>
<li data-filtertext="295	de	96767	Member	Werner Kuhn	Kuhn, Werner 	PPE	2009		" ><a href="./mep.php?id=295" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Kuhn, Werner </span>
			   </a></li>
<li data-filtertext="296	sk	96651	Member	Eduard Kukan	Kukan, Eduard 	PPE	2009		" ><a href="./mep.php?id=296" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Kukan, Eduard </span>
			   </a></li>
<li data-filtertext="709	pl	96795	Member	Jacek Olgierd Kurski	Kurski, Jacek Olgierd 	ECR	2009		" ><a href="./mep.php?id=709" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Kurski, Jacek Olgierd </span>
			   </a></li>
<li data-filtertext="300	it	96816	Member	Giovanni La Via	La Via, Giovanni 	PPE	2009		" ><a href="./mep.php?id=300" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>La Via, Giovanni </span>
			   </a></li>
<li data-filtertext="297	fr	1204	Member of the Bureau	Alain Lamassoure	Lamassoure, Alain 	PPE	2009		" ><a href="./mep.php?id=297" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Lamassoure, Alain </span>
			   </a></li>
<li data-filtertext="706	gb	4531	Member	Jean Lambert	Lambert, Jean 	VALE	2009		" ><a href="./mep.php?id=706" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Lambert, Jean </span>
			   </a></li>
<li data-filtertext="669	be	96648	Member	Philippe Lamberts	Lamberts, Philippe 	VALE	2009		" ><a href="./mep.php?id=669" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Lamberts, Philippe </span>
			   </a></li>
<li data-filtertext="544	de	1909	Member	Bernd Lange	Lange, Bernd 	SD	2009		" ><a href="./mep.php?id=544" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Lange, Bernd </span>
			   </a></li>
<li data-filtertext="307	es	28399	Member of the Bureau	Antonio López-Istúriz White	López-Istúriz White, Antonio 	PPE	2009		" ><a href="./mep.php?id=307" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>López-Istúriz White, Antonio </span>
			   </a></li>
<li data-filtertext="582	de	96854	Member	Sabine Lösing	Lösing, Sabine 	GUENGL	2009		" ><a href="./mep.php?id=582" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Lösing, Sabine </span>
			   </a></li>
<li data-filtertext="571	se	96675	Member	Isabella Lövin	Lövin, Isabella 	VALE	2009		" ><a href="./mep.php?id=571" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Lövin, Isabella </span>
			   </a></li>
<li data-filtertext="679	dk	96709	Member	Morten Løkkegaard	Løkkegaard, Morten 	ALDE	2009		" ><a href="./mep.php?id=679" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Løkkegaard, Morten </span>
			   </a></li>
<li data-filtertext="757	fr	105849	Member	Agnès Le Brun	Le Brun, Agnès 	PPE	2009		" ><a href="./mep.php?id=757" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Le Brun, Agnès </span>
			   </a></li>
<li data-filtertext="745	fr	101580	Member	Constance Le Grip	Le Grip, Constance 	PPE	2009		" ><a href="./mep.php?id=745" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Le Grip, Constance </span>
			   </a></li>
<li data-filtertext="583	fr	1023	Member	Jean-Marie Le Pen	Le Pen, Jean-Marie	NI	2009		" ><a href="./mep.php?id=583" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Le Pen, Jean-Marie</span>
			   </a></li>
<li data-filtertext="675	fr	28210	Member	Marine Le Pen	Le Pen, Marine	NI	2009		" ><a href="./mep.php?id=675" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Le Pen, Marine</span>
			   </a></li>
<li data-filtertext="301	de	4283	Member	Kurt Lechner	Lechner, Kurt 	PPE	2009		" ><a href="./mep.php?id=301" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Lechner, Kurt </span>
			   </a></li>
<li data-filtertext="302	de	2224	Member of the Bureau	Klaus-Heiner Lehne	Lehne, Klaus-Heiner 	PPE	2009		" ><a href="./mep.php?id=302" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Lehne, Klaus-Heiner </span>
			   </a></li>
<li data-filtertext="651	de	4262	Member	Jo Leinen	Leinen, Jo 	SD	2009		" ><a href="./mep.php?id=651" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Leinen, Jo </span>
			   </a></li>
<li data-filtertext="161	fr	97076	Member	Corinne Lepage	Lepage, Corinne 	ALDE	2009		" ><a href="./mep.php?id=161" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Lepage, Corinne </span>
			   </a></li>
<li data-filtertext="304	de	1927	Member of the Bureau	Peter Liese	Liese, Peter 	PPE	2009		" ><a href="./mep.php?id=304" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Liese, Peter </span>
			   </a></li>
<li data-filtertext="305	pl	96788	Member	Krzysztof Lisek	Lisek, Krzysztof 	PPE	2009		" ><a href="./mep.php?id=305" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Lisek, Krzysztof </span>
			   </a></li>
<li data-filtertext="653	de	96728	Member	Barbara Lochbihler	Lochbihler, Barbara 	VALE	2009		" ><a href="./mep.php?id=653" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Lochbihler, Barbara </span>
			   </a></li>
<li data-filtertext="306	es	96765	Member	Veronica Lope Fontagné	Lope Fontagné, Veronica 	PPE	2009		" ><a href="./mep.php?id=306" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Lope Fontagné, Veronica </span>
			   </a></li>
<li data-filtertext="162	gb	4529	Member	Baroness Sarah Ludford	Ludford, Baroness Sarah 	ALDE	2009		" ><a href="./mep.php?id=162" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Ludford, Baroness Sarah </span>
			   </a></li>
<li data-filtertext="60	se	96673	Member	Olle Ludvigsson	Ludvigsson, Olle 	SD	2009		" ><a href="./mep.php?id=60" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Ludvigsson, Olle </span>
			   </a></li>
<li data-filtertext="308	ro	96823	Member	Petru Constantin Luhan	Luhan, Petru Constantin 	PPE	2009		" ><a href="./mep.php?id=308" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Luhan, Petru Constantin </span>
			   </a></li>
<li data-filtertext="309	lu	1186	Member of the Bureau	Astrid Lulling	Lulling, Astrid 	PPE	2009		" ><a href="./mep.php?id=309" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lu.png" /><span>Lulling, Astrid </span>
			   </a></li>
<li data-filtertext="124	at	97017	Member	Ulrike Lunacek	Lunacek, Ulrike 	VALE	2009		" ><a href="./mep.php?id=124" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Lunacek, Ulrike </span>
			   </a></li>
<li data-filtertext="407	gb	4541	Member	Elizabeth Lynne	Lynne, Elizabeth 	ALDE	2009		" ><a href="./mep.php?id=407" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Lynne, Elizabeth </span>
			   </a></li>
<li data-filtertext="5	gb	96959	Member	George Lyon	Lyon, George 	ALDE	2009		" ><a href="./mep.php?id=5" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Lyon, George </span>
			   </a></li>
<li data-filtertext="449	cz	23704	Treasurer	Jiří Maštálka	Maštálka, Jiří 	GUENGL	2009		" ><a href="./mep.php?id=449" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Maštálka, Jiří </span>
			   </a></li>
<li data-filtertext="63	sk	28192	Member	Vladimír Maňka	Maňka, Vladimír 	SD	2009		" ><a href="./mep.php?id=63" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Maňka, Vladimír </span>
			   </a></li>
<li data-filtertext="311	ro	96824	Member	Monica Luisa Macovei	Macovei, Monica Luisa 	PPE	2009		" ><a href="./mep.php?id=311" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Macovei, Monica Luisa </span>
			   </a></li>
<li data-filtertext="459	nl	96904	Member	Barry Madlener	Madlener, Barry 	NI	2009		" ><a href="./mep.php?id=459" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Madlener, Barry </span>
			   </a></li>
<li data-filtertext="655	nl	4560	Member	Toine Manders	Manders, Toine 	ALDE	2009		" ><a href="./mep.php?id=655" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Manders, Toine </span>
			   </a></li>
<li data-filtertext="312	de	1922	Member	Thomas Mann	Mann, Thomas 	PPE	2009		" ><a href="./mep.php?id=312" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Mann, Thomas </span>
			   </a></li>
<li data-filtertext="590	fi	96685	Member of the Bureau	Riikka Manner	Manner, Riikka 	ALDE	2009		" ><a href="./mep.php?id=590" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Manner, Riikka </span>
			   </a></li>
<li data-filtertext="490	pl	96792	Member	Bogdan Kazimierz Marcinkiewicz	Marcinkiewicz, Bogdan Kazimierz 	PPE	2009		" ><a href="./mep.php?id=490" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Marcinkiewicz, Bogdan Kazimierz </span>
			   </a></li>
<li data-filtertext="64	es	4346	Member	Miguel Angel Martínez Martínez	Martínez Martínez, Miguel Angel 	SD	2009		" ><a href="./mep.php?id=64" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Martínez Martínez, Miguel Angel </span>
			   </a></li>
<li data-filtertext="545	gb	1403	Member	David Martin	Martin, David	SD	2009		" ><a href="./mep.php?id=545" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Martin, David</span>
			   </a></li>
<li data-filtertext="22	at	4238	Member	Hans-Peter Martin	Martin, Hans-Peter	NI	2009		" ><a href="./mep.php?id=22" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Martin, Hans-Peter</span>
			   </a></li>
<li data-filtertext="546	es	28338	Member	Antonio Masip Hidalgo	Masip Hidalgo, Antonio 	SD	2009		" ><a href="./mep.php?id=546" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Masip Hidalgo, Antonio </span>
			   </a></li>
<li data-filtertext="491	it	4462	Member	Clemente Mastella	Mastella, Clemente 	PPE	2009		" ><a href="./mep.php?id=491" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Mastella, Clemente </span>
			   </a></li>
<li data-filtertext="314	it	96813	Member	Barbara Matera	Matera, Barbara 	PPE	2009		" ><a href="./mep.php?id=314" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Matera, Barbara </span>
			   </a></li>
<li data-filtertext="315	fr	4412	Member	Véronique Mathieu	Mathieu, Véronique 	PPE	2009		" ><a href="./mep.php?id=315" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Mathieu, Véronique </span>
			   </a></li>
<li data-filtertext="387	pt	96820	Member	Marisa Matias	Matias, Marisa 	GUENGL	2009		" ><a href="./mep.php?id=387" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Matias, Marisa </span>
			   </a></li>
<li data-filtertext="316	es	96936	Member	Gabriel Mato Adrover	Mato Adrover, Gabriel 	PPE	2009		" ><a href="./mep.php?id=316" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Mato Adrover, Gabriel </span>
			   </a></li>
<li data-filtertext="317	ro	95017	Member of the Bureau	Iosif Matula	Matula, Iosif 	PPE	2009		" ><a href="./mep.php?id=317" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Matula, Iosif </span>
			   </a></li>
<li data-filtertext="667	cy	96906	Member	Kyriakos Mavronikolas	Mavronikolas, Kyriakos 	SD	2009		" ><a href="./mep.php?id=667" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cy.png" /><span>Mavronikolas, Kyriakos </span>
			   </a></li>
<li data-filtertext="319	de	4275	Member	Hans-Peter Mayer	Mayer, Hans-Peter 	PPE	2009		" ><a href="./mep.php?id=319" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Mayer, Hans-Peter </span>
			   </a></li>
<li data-filtertext="492	it	96817	Member of the Bureau	Erminia Mazzoni	Mazzoni, Erminia 	PPE	2009		" ><a href="./mep.php?id=492" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Mazzoni, Erminia </span>
			   </a></li>
<li data-filtertext="450	fr	96742	Member	Jean-Luc Mélenchon	Mélenchon, Jean-Luc 	GUENGL	2009		" ><a href="./mep.php?id=450" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Mélenchon, Jean-Luc </span>
			   </a></li>
<li data-filtertext="321	es	1873	Member of the Bureau	Íñigo Méndez de Vigo	Méndez de Vigo, Íñigo 	PPE	2009		" ><a href="./mep.php?id=321" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Méndez de Vigo, Íñigo </span>
			   </a></li>
<li data-filtertext="731	sk	96652	Member	Alajos Mészáros	Mészáros, Alajos 	PPE	2009		" ><a href="./mep.php?id=731" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Mészáros, Alajos </span>
			   </a></li>
<li data-filtertext="584	at	28255	Member	Andreas Mölzer	Mölzer, Andreas 	NI	2009		" ><a href="./mep.php?id=584" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Mölzer, Andreas </span>
			   </a></li>
<li data-filtertext="408	ro	39717	Member	Ramona Nicole Mănescu	Mănescu, Ramona Nicole 	ALDE	2009		" ><a href="./mep.php?id=408" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Mănescu, Ramona Nicole </span>
			   </a></li>
<li data-filtertext="61	gb	2327	Member	Linda Mcavan	McAvan, Linda	SD	2009		" ><a href="./mep.php?id=61" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>McAvan, Linda</span>
			   </a></li>
<li data-filtertext="62	gb	2173	Member	Arlene Mccarthy	McCarthy, Arlene	SD	2009		" ><a href="./mep.php?id=62" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>McCarthy, Arlene</span>
			   </a></li>
<li data-filtertext="427	gb	96919	Member	Emma Mcclarkin	Mcclarkin, Emma 	ECR	2009		" ><a href="./mep.php?id=427" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Mcclarkin, Emma </span>
			   </a></li>
<li data-filtertext="310	ie	28115	Member	Mairead Mcguinness	McGuinness, Mairead	PPE	2009		" ><a href="./mep.php?id=310" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>McGuinness, Mairead</span>
			   </a></li>
<li data-filtertext="163	de	96870	Member	Gesine Meissner	Meissner, Gesine 	ALDE	2009		" ><a href="./mep.php?id=163" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Meissner, Gesine </span>
			   </a></li>
<li data-filtertext="698	es	4348	Member	Emilio Menéndez del Valle	Menéndez del Valle, Emilio 	SD	2009		" ><a href="./mep.php?id=698" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Menéndez del Valle, Emilio </span>
			   </a></li>
<li data-filtertext="699	nl	96910	Member	Judith A. Merkies	Merkies, Judith A. 	SD	2009		" ><a href="./mep.php?id=699" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Merkies, Judith A. </span>
			   </a></li>
<li data-filtertext="440	dk	96663	Vice-Chair/Member of the Bureau	Morten Messerschmidt	Messerschmidt, Morten 	EFD	2009		" ><a href="./mep.php?id=440" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Messerschmidt, Morten </span>
			   </a></li>
<li data-filtertext="451	es	28407	Member of the Bureau	Willy Meyer	Meyer, Willy 	GUENGL	2009		" ><a href="./mep.php?id=451" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Meyer, Willy </span>
			   </a></li>
<li data-filtertext="164	be	96670	Member of the Bureau	Louis Michel	Michel, Louis 	ALDE	2009		" ><a href="./mep.php?id=164" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Michel, Louis </span>
			   </a></li>
<li data-filtertext="195	pl	96800	Member	Marek Henryk Migalski	Migalski, Marek Henryk 	ECR	2009		" ><a href="./mep.php?id=195" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Migalski, Marek Henryk </span>
			   </a></li>
<li data-filtertext="322	sk	28178	Member	Miroslav Mikolášik	Mikolášik, Miroslav 	PPE	2009		" ><a href="./mep.php?id=322" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Mikolášik, Miroslav </span>
			   </a></li>
<li data-filtertext="65	it	97020	Member	Guido Milana	Milana, Guido 	SD	2009		" ><a href="./mep.php?id=65" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Milana, Guido </span>
			   </a></li>
<li data-filtertext="323	es	28400	Member of the Bureau	Francisco José Millán Mon	Millán Mon, Francisco José 	PPE	2009		" ><a href="./mep.php?id=323" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Millán Mon, Francisco José </span>
			   </a></li>
<li data-filtertext="733	lv	96999	Member	Alexander Mirsky	Mirsky, Alexander 	SD	2009		" ><a href="./mep.php?id=733" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lv.png" /><span>Mirsky, Alexander </span>
			   </a></li>
<li data-filtertext="66	gb	4519	Member	Claude Moraes	Moraes, Claude 	SD	2009		" ><a href="./mep.php?id=66" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Moraes, Claude </span>
			   </a></li>
<li data-filtertext="700	pt	96930	Member	Vital Moreira	Moreira, Vital 	SD	2009		" ><a href="./mep.php?id=700" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Moreira, Vital </span>
			   </a></li>
<li data-filtertext="713	it	97280	Member	Claudio Morganti	Morganti, Claudio 	EFD	2009		" ><a href="./mep.php?id=713" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Morganti, Claudio </span>
			   </a></li>
<li data-filtertext="324	fr	38596	Member of the Bureau	Elisabeth Morin-Chartier	Morin-Chartier, Elisabeth 	PPE	2009		" ><a href="./mep.php?id=324" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Morin-Chartier, Elisabeth </span>
			   </a></li>
<li data-filtertext="743	lt	96695	Member	Radvilė Morkūnaitė-MikulėNienė	Morkūnaitė-MikulėNienė, Radvilė 	PPE	2009		" ><a href="./mep.php?id=743" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Morkūnaitė-MikulėNienė, Radvilė </span>
			   </a></li>
<li data-filtertext="585	hu	96661	Member	Krisztina Morvai	Morvai, Krisztina 	NI	2009		" ><a href="./mep.php?id=585" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Morvai, Krisztina </span>
			   </a></li>
<li data-filtertext="685	it	96760	Member	Tiziano Motti	Motti, Tiziano 	PPE	2009		" ><a href="./mep.php?id=685" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Motti, Tiziano </span>
			   </a></li>
<li data-filtertext="383	es	96701	Member	María Muñiz de Urquiza	Muñiz de Urquiza, María 	SD	2009		" ><a href="./mep.php?id=383" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Muñiz de Urquiza, María </span>
			   </a></li>
<li data-filtertext="751	nl	1965	Member	Jan Mulder	Mulder, Jan 	ALDE	2009		" ><a href="./mep.php?id=751" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Mulder, Jan </span>
			   </a></li>
<li data-filtertext="762	ie	97344	Member	Paul Murphy	Murphy, Paul 	GUENGL	2009		" ><a href="./mep.php?id=762" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Murphy, Paul </span>
			   </a></li>
<li data-filtertext="326	it	1073	Member	Cristiana Muscardini	Muscardini, Cristiana 	PPE	2009		" ><a href="./mep.php?id=326" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Muscardini, Cristiana </span>
			   </a></li>
<li data-filtertext="11	gb	28506	Member	Mike Nattrass	Nattrass, Mike 	NI	2009		" ><a href="./mep.php?id=11" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Nattrass, Mike </span>
			   </a></li>
<li data-filtertext="327	bg	96848	Member	Mariya Nedelcheva	Nedelcheva, Mariya 	PPE	2009		" ><a href="./mep.php?id=327" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Nedelcheva, Mariya </span>
			   </a></li>
<li data-filtertext="67	de	96844	Member	Norbert Neuser	Neuser, Norbert 	SD	2009		" ><a href="./mep.php?id=67" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Neuser, Norbert </span>
			   </a></li>
<li data-filtertext="547	sk	96653	Member	Katarína Neveďalová	Neveďalová, Katarína 	SD	2009		" ><a href="./mep.php?id=547" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Neveďalová, Katarína </span>
			   </a></li>
<li data-filtertext="165	gb	1394	Member of the Bureau	Bill Newton Dunn	Newton Dunn, Bill 	ALDE	2009		" ><a href="./mep.php?id=165" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Newton Dunn, Bill </span>
			   </a></li>
<li data-filtertext="744	bg	96861	Member	Nadezhda Neynsky	Neynsky, Nadezhda 	PPE	2009		" ><a href="./mep.php?id=744" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Neynsky, Nadezhda </span>
			   </a></li>
<li data-filtertext="166	be	1946	Member	Annemie Neyts-Uyttebroeck	Neyts-Uyttebroeck, Annemie 	ALDE	2009		" ><a href="./mep.php?id=166" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Neyts-Uyttebroeck, Annemie </span>
			   </a></li>
<li data-filtertext="196	gb	1318	Member	James Nicholson	Nicholson, James 	ECR	2009		" ><a href="./mep.php?id=196" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Nicholson, James </span>
			   </a></li>
<li data-filtertext="409	ro	96825	Member of the Bureau	Norica Nicolai	Nicolai, Norica 	ALDE	2009		" ><a href="./mep.php?id=409" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Nicolai, Norica </span>
			   </a></li>
<li data-filtertext="328	ro	39714	Member	Rareş-Lucian Niculescu	Niculescu, Rareş-Lucian 	PPE	2009		" ><a href="./mep.php?id=328" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Niculescu, Rareş-Lucian </span>
			   </a></li>
<li data-filtertext="329	de	4289	Member of the Bureau	Angelika Niebler	Niebler, Angelika 	PPE	2009		" ><a href="./mep.php?id=329" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Niebler, Angelika </span>
			   </a></li>
<li data-filtertext="494	pl	96794	Member	Sławomir Witold Nitras	Nitras, Sławomir Witold 	PPE	2009		" ><a href="./mep.php?id=494" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Nitras, Sławomir Witold </span>
			   </a></li>
<li data-filtertext="735	gb	96805	Member	Paul Nuttall	Nuttall, Paul 	EFD	2009		" ><a href="./mep.php?id=735" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Nuttall, Paul </span>
			   </a></li>
<li data-filtertext="586	at	96981	Member	Franz Obermayr	Obermayr, Franz 	NI	2009		" ><a href="./mep.php?id=586" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Obermayr, Franz </span>
			   </a></li>
<li data-filtertext="548	es	4328	Member	Raimon Obiols	Obiols, Raimon 	SD	2009		" ><a href="./mep.php?id=548" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Obiols, Raimon </span>
			   </a></li>
<li data-filtertext="680	ee	97230	Member of the Bureau	Kristiina Ojuland	Ojuland, Kristiina 	ALDE	2009		" ><a href="./mep.php?id=680" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ee.png" /><span>Ojuland, Kristiina </span>
			   </a></li>
<li data-filtertext="495	pl	28288	Member of the Bureau	Jan Olbrycht	Olbrycht, Jan 	PPE	2009		" ><a href="./mep.php?id=495" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Olbrycht, Jan </span>
			   </a></li>
<li data-filtertext="68	pl	96783	Member	Wojciech Michał Olejniczak	Olejniczak, Wojciech Michał 	SD	2009		" ><a href="./mep.php?id=68" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Olejniczak, Wojciech Michał </span>
			   </a></li>
<li data-filtertext="612	nl	1122	Member	Ria Oomen-Ruijten	Oomen-Ruijten, Ria 	PPE	2009		" ><a href="./mep.php?id=612" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Oomen-Ruijten, Ria </span>
			   </a></li>
<li data-filtertext="197	cz	23705	Member of the Bureau	Miroslav Ouzký	Ouzký, Miroslav 	ECR	2009		" ><a href="./mep.php?id=197" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Ouzký, Miroslav </span>
			   </a></li>
<li data-filtertext="167	ee	26829	Member of the Bureau	Siiri Oviir	Oviir, Siiri 	ALDE	2009		" ><a href="./mep.php?id=167" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ee.png" /><span>Oviir, Siiri </span>
			   </a></li>
<li data-filtertext="71	ro	33984	Member	Ioan Mircea Paşcu	Paşcu, Ioan Mircea 	SD	2009		" ><a href="./mep.php?id=71" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Paşcu, Ioan Mircea </span>
			   </a></li>
<li data-filtertext="442	sk	96654	Vice-Chair/Member of the Bureau	Jaroslav Paška	Paška, Jaroslav 	EFD	2009		" ><a href="./mep.php?id=442" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Paška, Jaroslav </span>
			   </a></li>
<li data-filtertext="332	de	1191	Member of the Bureau	Doris Pack	Pack, Doris 	PPE	2009		" ><a href="./mep.php?id=332" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Pack, Doris </span>
			   </a></li>
<li data-filtertext="628	ee	97025	Member	Ivari Padar	Padar, Ivari 	SD	2009		" ><a href="./mep.php?id=628" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ee.png" /><span>Padar, Ivari </span>
			   </a></li>
<li data-filtertext="441	lt	96694	Vice-Chair/Member of the Bureau	Rolandas Paksas	Paksas, Rolandas 	EFD	2009		" ><a href="./mep.php?id=441" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Paksas, Rolandas </span>
			   </a></li>
<li data-filtertext="734	gr	97007	Member	Chrysoula Paliadeli	Paliadeli, Chrysoula 	SD	2009		" ><a href="./mep.php?id=734" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Paliadeli, Chrysoula </span>
			   </a></li>
<li data-filtertext="658	it	97197	Member	Alfredo Pallone	Pallone, Alfredo 	PPE	2009		" ><a href="./mep.php?id=658" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Pallone, Alfredo </span>
			   </a></li>
<li data-filtertext="168	bg	38602	Member	Vladko Todorov Panayotov	Panayotov, Vladko Todorov 	ALDE	2009		" ><a href="./mep.php?id=168" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Panayotov, Vladko Todorov </span>
			   </a></li>
<li data-filtertext="70	it	28365	Member	Pier Antonio Panzeri	Panzeri, Pier Antonio 	SD	2009		" ><a href="./mep.php?id=70" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Panzeri, Pier Antonio </span>
			   </a></li>
<li data-filtertext="629	cy	97050	Member	Antigoni Papadopoulou	Papadopoulou, Antigoni 	SD	2009		" ><a href="./mep.php?id=629" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cy.png" /><span>Papadopoulou, Antigoni </span>
			   </a></li>
<li data-filtertext="721	gr	96900	Member	Georgios Papanikolaou	Papanikolaou, Georgios 	PPE	2009		" ><a href="./mep.php?id=721" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Papanikolaou, Georgios </span>
			   </a></li>
<li data-filtertext="333	gr	28572	Member	Georgios Papastamkos	Papastamkos, Georgios 	PPE	2009		" ><a href="./mep.php?id=333" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Papastamkos, Georgios </span>
			   </a></li>
<li data-filtertext="549	fr	96948	Member	Gilles Pargneaux	Pargneaux, Gilles 	SD	2009		" ><a href="./mep.php?id=549" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Pargneaux, Gilles </span>
			   </a></li>
<li data-filtertext="686	pt	96902	Member	Maria do Céu Patrão Neves	Patrão Neves, Maria do Céu 	PPE	2009		" ><a href="./mep.php?id=686" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Patrão Neves, Maria do Céu </span>
			   </a></li>
<li data-filtertext="613	it	36392	Member	Aldo Patriciello	Patriciello, Aldo 	PPE	2009		" ><a href="./mep.php?id=613" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Patriciello, Aldo </span>
			   </a></li>
<li data-filtertext="410	se	4270	Member	Marit Paulsen	Paulsen, Marit 	ALDE	2009		" ><a href="./mep.php?id=410" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Paulsen, Marit </span>
			   </a></li>
<li data-filtertext="337	de	1253	Member	Hans-Gert Pöttering	Pöttering, Hans-Gert 	PPE	2009		" ><a href="./mep.php?id=337" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Pöttering, Hans-Gert </span>
			   </a></li>
<li data-filtertext="550	fr	28166	Member	Vincent Peillon	Peillon, Vincent 	SD	2009		" ><a href="./mep.php?id=550" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Peillon, Vincent </span>
			   </a></li>
<li data-filtertext="551	es	96989	Member	Andres Perello Rodriguez	Perello Rodriguez, Andres 	SD	2009		" ><a href="./mep.php?id=551" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Perello Rodriguez, Andres </span>
			   </a></li>
<li data-filtertext="334	sl	23693	Member	Alojz Peterle	Peterle, Alojz 	PPE	2009		" ><a href="./mep.php?id=334" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sl.png" /><span>Peterle, Alojz </span>
			   </a></li>
<li data-filtertext="396	de	28224	Member	Markus Pieper	Pieper, Markus 	PPE	2009		" ><a href="./mep.php?id=396" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Pieper, Markus </span>
			   </a></li>
<li data-filtertext="687	fi	40599	Member	Sirpa Pietikäinen	Pietikäinen, Sirpa 	PPE	2009		" ><a href="./mep.php?id=687" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Pietikäinen, Sirpa </span>
			   </a></li>
<li data-filtertext="428	pl	28341	Member	Mirosław Piotrowski	Piotrowski, Mirosław 	ECR	2009		" ><a href="./mep.php?id=428" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Piotrowski, Mirosław </span>
			   </a></li>
<li data-filtertext="668	it	96890	Member	Mario Pirillo	Pirillo, Mario 	SD	2009		" ><a href="./mep.php?id=668" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Pirillo, Mario </span>
			   </a></li>
<li data-filtertext="763	at	2307	Member	Hubert Pirker	Pirker, Hubert 	PPE	2009		" ><a href="./mep.php?id=763" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Pirker, Hubert </span>
			   </a></li>
<li data-filtertext="72	it	4436	Member	Gianni Pittella	Pittella, Gianni 	SD	2009		" ><a href="./mep.php?id=72" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Pittella, Gianni </span>
			   </a></li>
<li data-filtertext="552	cz	96715	Member	Pavel Poc	Poc, Pavel 	SD	2009		" ><a href="./mep.php?id=552" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Poc, Pavel </span>
			   </a></li>
<li data-filtertext="702	gr	39317	Member	Anni Podimata	Podimata, Anni 	SD	2009		" ><a href="./mep.php?id=702" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Podimata, Anni </span>
			   </a></li>
<li data-filtertext="335	fr	96931	Member	Maurice Ponga	Ponga, Maurice 	PPE	2009		" ><a href="./mep.php?id=335" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Ponga, Maurice </span>
			   </a></li>
<li data-filtertext="429	pl	96801	Member of the Bureau	Tomasz Piotr Poręba	Poręba, Tomasz Piotr 	ECR	2009		" ><a href="./mep.php?id=429" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Poręba, Tomasz Piotr </span>
			   </a></li>
<li data-filtertext="388	pt	28406	Member of the Bureau	Miguel Portas	Portas, Miguel 	GUENGL	2009		" ><a href="./mep.php?id=388" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Portas, Miguel </span>
			   </a></li>
<li data-filtertext="336	de	2229	Member	Bernd Posselt	Posselt, Bernd 	PPE	2009		" ><a href="./mep.php?id=336" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Posselt, Bernd </span>
			   </a></li>
<li data-filtertext="496	gr	96658	Member	Konstantinos Poupakis	Poupakis, Konstantinos 	PPE	2009		" ><a href="./mep.php?id=496" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Poupakis, Konstantinos </span>
			   </a></li>
<li data-filtertext="338	ro	96838	Member	Cristian Dan Preda	Preda, Cristian Dan 	PPE	2009		" ><a href="./mep.php?id=338" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Preda, Cristian Dan </span>
			   </a></li>
<li data-filtertext="767	ie	107386	Member	Phil Prendergast	Prendergast, Phil 	SD	2009		" ><a href="./mep.php?id=767" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Prendergast, Phil </span>
			   </a></li>
<li data-filtertext="630	it	28370	Member	Vittorio Prodi	Prodi, Vittorio 	SD	2009		" ><a href="./mep.php?id=630" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Prodi, Vittorio </span>
			   </a></li>
<li data-filtertext="497	pl	23782	Member of the Bureau	Jacek Protasiewicz	Protasiewicz, Jacek 	PPE	2009		" ><a href="./mep.php?id=497" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Protasiewicz, Jacek </span>
			   </a></li>
<li data-filtertext="339	de	1055	Member	Godelieve Quisthoudt-Rowohl	Quisthoudt-Rowohl, Godelieve 	PPE	2009		" ><a href="./mep.php?id=339" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Quisthoudt-Rowohl, Godelieve </span>
			   </a></li>
<li data-filtertext="631	gr	96925	Member	Sylvana Rapti	Rapti, Sylvana 	SD	2009		" ><a href="./mep.php?id=631" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Rapti, Sylvana </span>
			   </a></li>
<li data-filtertext="502	at	2278	Member	Paul Rübig	Rübig, Paul 	PPE	2009		" ><a href="./mep.php?id=502" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Rübig, Paul </span>
			   </a></li>
<li data-filtertext="127	de	4294	Member	Heide Rühle	Rühle, Heide 	VALE	2009		" ><a href="./mep.php?id=127" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Rühle, Heide </span>
			   </a></li>
<li data-filtertext="703	at	96998	Member	Evelyn Regner	Regner, Evelyn 	SD	2009		" ><a href="./mep.php?id=703" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Regner, Evelyn </span>
			   </a></li>
<li data-filtertext="170	de	96875	Member	Britta Reimers	Reimers, Britta 	ALDE	2009		" ><a href="./mep.php?id=170" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Reimers, Britta </span>
			   </a></li>
<li data-filtertext="453	cz	28330	Member	Vladimír Remek	Remek, Vladimír 	GUENGL	2009		" ><a href="./mep.php?id=453" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Remek, Vladimír </span>
			   </a></li>
<li data-filtertext="588	fi	96686	Member	Mitro Repo	Repo, Mitro 	SD	2009		" ><a href="./mep.php?id=588" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Repo, Mitro </span>
			   </a></li>
<li data-filtertext="340	de	28225	Member of the Bureau	Herbert Reul	Reul, Herbert 	PPE	2009		" ><a href="./mep.php?id=340" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Reul, Herbert </span>
			   </a></li>
<li data-filtertext="74	es	28349	Member	Teresa Riera Madurell	Riera Madurell, Teresa 	SD	2009		" ><a href="./mep.php?id=74" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Riera Madurell, Teresa </span>
			   </a></li>
<li data-filtertext="171	be	4253	Member	Frédérique Ries	Ries, Frédérique 	ALDE	2009		" ><a href="./mep.php?id=171" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Ries, Frédérique </span>
			   </a></li>
<li data-filtertext="499	fr	96885	Member	Dominique Riquet	Riquet, Dominique 	PPE	2009		" ><a href="./mep.php?id=499" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Riquet, Dominique </span>
			   </a></li>
<li data-filtertext="125	fr	96743	Member	Michèle Rivasi	Rivasi, Michèle 	VALE	2009		" ><a href="./mep.php?id=125" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Rivasi, Michèle </span>
			   </a></li>
<li data-filtertext="500	it	97199	Member	Crescenzio Rivellini	Rivellini, Crescenzio 	PPE	2009		" ><a href="./mep.php?id=500" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Rivellini, Crescenzio </span>
			   </a></li>
<li data-filtertext="7	fr	97022	Member	Robert Rochefort	Rochefort, Robert 	ALDE	2009		" ><a href="./mep.php?id=7" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Rochefort, Robert </span>
			   </a></li>
<li data-filtertext="75	de	93624	Member	Ulrike Rodust	Rodust, Ulrike 	SD	2009		" ><a href="./mep.php?id=75" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Rodust, Ulrike </span>
			   </a></li>
<li data-filtertext="411	dk	96710	Member of the Bureau	Jens Rohde	Rohde, Jens 	ALDE	2009		" ><a href="./mep.php?id=411" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Rohde, Jens </span>
			   </a></li>
<li data-filtertext="76	es	96990	Member	Carmen Romero López	Romero López, Carmen 	SD	2009		" ><a href="./mep.php?id=76" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Romero López, Carmen </span>
			   </a></li>
<li data-filtertext="341	it	96819	Member of the Bureau	Licia Ronzulli	Ronzulli, Licia 	PPE	2009		" ><a href="./mep.php?id=341" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Ronzulli, Licia </span>
			   </a></li>
<li data-filtertext="596	dk	96664	Member of the Bureau	Anna Rosbach	Rosbach, Anna 	ECR	2009		" ><a href="./mep.php?id=596" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Rosbach, Anna </span>
			   </a></li>
<li data-filtertext="640	it	97196	Member	Oreste Rossi	Rossi, Oreste 	EFD	2009		" ><a href="./mep.php?id=640" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Rossi, Oreste </span>
			   </a></li>
<li data-filtertext="77	de	1183	Member	Dagmar Roth-Behrendt	Roth-Behrendt, Dagmar 	SD	2009		" ><a href="./mep.php?id=77" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Roth-Behrendt, Dagmar </span>
			   </a></li>
<li data-filtertext="78	cz	23707	Member	Libor Rouček	Rouček, Libor 	SD	2009		" ><a href="./mep.php?id=78" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Rouček, Libor </span>
			   </a></li>
<li data-filtertext="454	lv	96988	Member of the Bureau	Alfreds Rubiks	Rubiks, Alfreds 	GUENGL	2009		" ><a href="./mep.php?id=454" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lv.png" /><span>Rubiks, Alfreds </span>
			   </a></li>
<li data-filtertext="342	fr	4345	Member	Tokia Saïfi	Saïfi, Tokia 	PPE	2009		" ><a href="./mep.php?id=342" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Saïfi, Tokia </span>
			   </a></li>
<li data-filtertext="343	es	2002	Member of the Bureau	José Ignacio Salafranca Sánchez-Neyra	Salafranca Sánchez- Neyra, José I. 	PPE	2009		" ><a href="./mep.php?id=343" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Salafranca Sánchez- Neyra, José I. </span>
			   </a></li>
<li data-filtertext="615	it	96889	Member	Potito Salatto	Salatto, Potito 	PPE	2009		" ><a href="./mep.php?id=615" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Salatto, Potito </span>
			   </a></li>
<li data-filtertext="741	gr	99416	Member	Nikolaos Salavrakos	Salavrakos, Nikolaos 	EFD	2009		" ><a href="./mep.php?id=741" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Salavrakos, Nikolaos </span>
			   </a></li>
<li data-filtertext="443	it	28404	Member	Matteo Salvini	Salvini, Matteo 	EFD	2009		" ><a href="./mep.php?id=443" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Salvini, Matteo </span>
			   </a></li>
<li data-filtertext="344	fr	96746	Member	Marie-Thérèse Sanchez-Schmid	Sanchez-Schmid, Marie-Thérèse 	PPE	2009		" ><a href="./mep.php?id=344" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Sanchez-Schmid, Marie-Thérèse </span>
			   </a></li>
<li data-filtertext="128	nl	96815	Member	Judith Sargentini	Sargentini, Judith 	VALE	2009		" ><a href="./mep.php?id=128" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Sargentini, Judith </span>
			   </a></li>
<li data-filtertext="503	it	4423	Member of the Bureau	Amalia Sartori	Sartori, Amalia 	PPE	2009		" ><a href="./mep.php?id=503" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Sartori, Amalia </span>
			   </a></li>
<li data-filtertext="346	lt	96696	Member	Algirdas Saudargas	Saudargas, Algirdas 	PPE	2009		" ><a href="./mep.php?id=346" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Saudargas, Algirdas </span>
			   </a></li>
<li data-filtertext="681	ee	97308	Member	Vilja Savisaar-Toomast	Savisaar-Toomast, Vilja 	ALDE	2009		" ><a href="./mep.php?id=681" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ee.png" /><span>Savisaar-Toomast, Vilja </span>
			   </a></li>
<li data-filtertext="79	es	28295	Member	Antolín Sánchez Presedo	Sánchez Presedo, Antolín 	SD	2009		" ><a href="./mep.php?id=79" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Sánchez Presedo, Antolín </span>
			   </a></li>
<li data-filtertext="80	ro	33989	Member	Daciana Octavia Sârbu	Sârbu, Daciana Octavia 	SD	2009		" ><a href="./mep.php?id=80" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Sârbu, Daciana Octavia </span>
			   </a></li>
<li data-filtertext="356	ro	39724	Member	Csaba Sógor	Sógor, Csaba 	PPE	2009		" ><a href="./mep.php?id=356" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Sógor, Csaba </span>
			   </a></li>
<li data-filtertext="456	dk	37676	Member of the Bureau	Søren Bo Søndergaard	Søndergaard, Søren Bo 	GUENGL	2009		" ><a href="./mep.php?id=456" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Søndergaard, Søren Bo </span>
			   </a></li>
<li data-filtertext="172	nl	96945	Member	Marietje Schaake	Schaake, Marietje 	ALDE	2009		" ><a href="./mep.php?id=172" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Schaake, Marietje </span>
			   </a></li>
<li data-filtertext="81	dk	37312	Member	Christel Schaldemose	Schaldemose, Christel 	SD	2009		" ><a href="./mep.php?id=81" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Schaldemose, Christel </span>
			   </a></li>
<li data-filtertext="504	hu	28135	Member	György Schöpflin	Schöpflin, György 	PPE	2009		" ><a href="./mep.php?id=504" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Schöpflin, György </span>
			   </a></li>
<li data-filtertext="573	se	28139	Member	Carl Schlyter	Schlyter, Carl 	VALE	2009		" ><a href="./mep.php?id=573" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Schlyter, Carl </span>
			   </a></li>
<li data-filtertext="173	se	4274	Member of the Bureau	Olle Schmidt	Schmidt, Olle 	ALDE	2009		" ><a href="./mep.php?id=173" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Schmidt, Olle </span>
			   </a></li>
<li data-filtertext="348	de	1930	Member	Horst Schnellhardt	Schnellhardt, Horst 	PPE	2009		" ><a href="./mep.php?id=348" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Schnellhardt, Horst </span>
			   </a></li>
<li data-filtertext="349	de	96827	Member	Birgit Schnieber-Jastram	Schnieber-Jastram, Birgit 	PPE	2009		" ><a href="./mep.php?id=349" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Schnieber-Jastram, Birgit </span>
			   </a></li>
<li data-filtertext="455	de	96646	Member	Helmut Scholz	Scholz, Helmut 	GUENGL	2009		" ><a href="./mep.php?id=455" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Scholz, Helmut </span>
			   </a></li>
<li data-filtertext="129	de	1933	Member	Elisabeth Schroedter	Schroedter, Elisabeth 	VALE	2009		" ><a href="./mep.php?id=129" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Schroedter, Elisabeth </span>
			   </a></li>
<li data-filtertext="130	de	96731	Member	Werner Schulz	Schulz, Werner	VALE	2009		" ><a href="./mep.php?id=130" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Schulz, Werner</span>
			   </a></li>
<li data-filtertext="350	de	28223	Member of the Bureau	Andreas Schwab	Schwab, Andreas 	PPE	2009		" ><a href="./mep.php?id=350" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Schwab, Andreas </span>
			   </a></li>
<li data-filtertext="555	mt	96671	Member	Edward Scicluna	Scicluna, Edward 	SD	2009		" ><a href="./mep.php?id=555" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/mt.png" /><span>Scicluna, Edward </span>
			   </a></li>
<li data-filtertext="597	it	96996	Member	Giancarlo Scottà	Scottà, Giancarlo 	EFD	2009		" ><a href="./mep.php?id=597" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Scottà, Giancarlo </span>
			   </a></li>
<li data-filtertext="351	it	96843	Member of the Bureau	Marco Scurria	Scurria, Marco 	PPE	2009		" ><a href="./mep.php?id=351" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Scurria, Marco </span>
			   </a></li>
<li data-filtertext="352	at	28252	Member of the Bureau	Richard Seeber	Seeber, Richard 	PPE	2009		" ><a href="./mep.php?id=352" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Seeber, Richard </span>
			   </a></li>
<li data-filtertext="83	cz	96718	Member	Olga Sehnalová	Sehnalová, Olga 	SD	2009		" ><a href="./mep.php?id=83" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Sehnalová, Olga </span>
			   </a></li>
<li data-filtertext="84	pl	96789	Member	Joanna Senyszyn	Senyszyn, Joanna 	SD	2009		" ><a href="./mep.php?id=84" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Senyszyn, Joanna </span>
			   </a></li>
<li data-filtertext="85	it	96865	Member	Debora Serracchiani	Serracchiani, Debora 	SD	2009		" ><a href="./mep.php?id=85" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Serracchiani, Debora </span>
			   </a></li>
<li data-filtertext="704	ro	33990	Member	Adrian Severin	Severin, Adrian 	NI	2009		" ><a href="./mep.php?id=704" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Severin, Adrian </span>
			   </a></li>
<li data-filtertext="353	pl	23787	Member	Czesław Adam Siekierski	Siekierski, Czesław Adam 	PPE	2009		" ><a href="./mep.php?id=353" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Siekierski, Czesław Adam </span>
			   </a></li>
<li data-filtertext="505	it	96755	Member	Sergio Paolo Francesco Silvestris	Silvestris, Sergio Paolo Francesco 	PPE	2009		" ><a href="./mep.php?id=505" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Silvestris, Sergio Paolo Francesco </span>
			   </a></li>
<li data-filtertext="86	de	96836	Member	Peter Simon	Simon, Peter 	SD	2009		" ><a href="./mep.php?id=86" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Simon, Peter </span>
			   </a></li>
<li data-filtertext="87	gb	1309	Member	Brian Simpson	Simpson, Brian 	SD	2009		" ><a href="./mep.php?id=87" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Simpson, Brian </span>
			   </a></li>
<li data-filtertext="13	gb	96960	Member	Nicole Sinclaire	Sinclaire, Nicole 	NI	2009		" ><a href="./mep.php?id=13" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Sinclaire, Nicole </span>
			   </a></li>
<li data-filtertext="660	de	96932	Member	Birgit Sippel	Sippel, Birgit 	SD	2009		" ><a href="./mep.php?id=660" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Sippel, Birgit </span>
			   </a></li>
<li data-filtertext="556	pl	28380	Member	Marek Siwiec	Siwiec, Marek 	SD	2009		" ><a href="./mep.php?id=556" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Siwiec, Marek </span>
			   </a></li>
<li data-filtertext="557	gb	2081	Member	Peter Skinner	Skinner, Peter 	SD	2009		" ><a href="./mep.php?id=557" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Skinner, Peter </span>
			   </a></li>
<li data-filtertext="354	pl	96770	Member	Joanna Katarzyna Skrzydlewska	Skrzydlewska, Joanna Katarzyna 	PPE	2009		" ><a href="./mep.php?id=354" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Skrzydlewska, Joanna Katarzyna </span>
			   </a></li>
<li data-filtertext="355	gr	97018	Member of the Bureau	Theodoros Skylakakis	Skylakakis, Theodoros 	ALDE	2009		" ><a href="./mep.php?id=355" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Skylakakis, Theodoros </span>
			   </a></li>
<li data-filtertext="574	gb	28508	Member	Alyn Smith	Smith, Alyn 	VALE	2009		" ><a href="./mep.php?id=574" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Smith, Alyn </span>
			   </a></li>
<li data-filtertext="558	sk	96655	Member	Monika Smolková	Smolková, Monika 	SD	2009		" ><a href="./mep.php?id=558" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Smolková, Monika </span>
			   </a></li>
<li data-filtertext="506	de	4282	Member of the Bureau	Renate Sommer	Sommer, Renate 	PPE	2009		" ><a href="./mep.php?id=506" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Sommer, Renate </span>
			   </a></li>
<li data-filtertext="507	pl	28299	Member	Bogusław Sonik	Sonik, Bogusław 	PPE	2009		" ><a href="./mep.php?id=507" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Sonik, Bogusław </span>
			   </a></li>
<li data-filtertext="460	es	97170	Member	Francisco Sosa Wagner	Sosa Wagner, Francisco 	NI	2009		" ><a href="./mep.php?id=460" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Sosa Wagner, Francisco </span>
			   </a></li>
<li data-filtertext="131	be	4751	Member	Bart Staes	Staes, Bart 	VALE	2009		" ><a href="./mep.php?id=131" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Staes, Bart </span>
			   </a></li>
<li data-filtertext="461	nl	96905	Member	Laurence J.A.J. Stassen	Stassen, Laurence J.A.J. 	NI	2009		" ><a href="./mep.php?id=461" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Stassen, Laurence J.A.J. </span>
			   </a></li>
<li data-filtertext="559	gr	97008	Member	Georgios Stavrakakis	Stavrakakis, Georgios 	SD	2009		" ><a href="./mep.php?id=559" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Stavrakakis, Georgios </span>
			   </a></li>
<li data-filtertext="88	de	96831	Member	Jutta Steinruck	Steinruck, Jutta 	SD	2009		" ><a href="./mep.php?id=88" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Steinruck, Jutta </span>
			   </a></li>
<li data-filtertext="174	be	4243	Member of the Bureau	Dirk Sterckx	Sterckx, Dirk 	ALDE	2009		" ><a href="./mep.php?id=174" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Sterckx, Dirk </span>
			   </a></li>
<li data-filtertext="710	gb	4546	Member	Struan Stevenson	Stevenson, Struan 	ECR	2009		" ><a href="./mep.php?id=710" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Stevenson, Struan </span>
			   </a></li>
<li data-filtertext="560	gb	4545	Member	Catherine Stihler	Stihler, Catherine 	SD	2009		" ><a href="./mep.php?id=560" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Stihler, Catherine </span>
			   </a></li>
<li data-filtertext="210	bg	34254	Member	Dimitar Stoyanov	Stoyanov, Dimitar	NI	2009		" ><a href="./mep.php?id=210" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Stoyanov, Dimitar</span>
			   </a></li>
<li data-filtertext="509	bg	96863	Member	Emil Stoyanov	Stoyanov, Emil	PPE	2009		" ><a href="./mep.php?id=509" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Stoyanov, Emil</span>
			   </a></li>
<li data-filtertext="645	cz	28320	Member	Ivo Strejček	Strejček, Ivo 	ECR	2009		" ><a href="./mep.php?id=645" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Strejček, Ivo </span>
			   </a></li>
<li data-filtertext="510	fr	96860	Member	Michèle Striffler	Striffler, Michèle 	PPE	2009		" ><a href="./mep.php?id=510" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Striffler, Michèle </span>
			   </a></li>
<li data-filtertext="198	gb	2037	Member	Robert Sturdy	Sturdy, Robert 	ECR	2009		" ><a href="./mep.php?id=198" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Sturdy, Robert </span>
			   </a></li>
<li data-filtertext="511	hu	23820	Member of the Bureau	László Surján	Surján, László 	PPE	2009		" ><a href="./mep.php?id=511" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Surján, László </span>
			   </a></li>
<li data-filtertext="561	it	36396	Member	Gianluca Susta	Susta, Gianluca 	SD	2009		" ><a href="./mep.php?id=561" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Susta, Gianluca </span>
			   </a></li>
<li data-filtertext="360	se	96678	Member	Alf Svensson	Svensson, Alf	PPE	2009		" ><a href="./mep.php?id=360" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Svensson, Alf</span>
			   </a></li>
<li data-filtertext="430	gb	96920	Member	Kay Swinburne	Swinburne, Kay 	ECR	2009		" ><a href="./mep.php?id=430" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Swinburne, Kay </span>
			   </a></li>
<li data-filtertext="714	hu	96855	Member	Csanád Szegedi	Szegedi, Csanád 	NI	2009		" ><a href="./mep.php?id=714" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Szegedi, Csanád </span>
			   </a></li>
<li data-filtertext="431	pl	28358	Member	Konrad Szymański	Szymański, Konrad 	ECR	2009		" ><a href="./mep.php?id=431" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Szymański, Konrad </span>
			   </a></li>
<li data-filtertext="90	hu	23808	Member	Csaba Sándor Tabajdi	Tabajdi, Csaba Sándor 	SD	2009		" ><a href="./mep.php?id=90" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Tabajdi, Csaba Sándor </span>
			   </a></li>
<li data-filtertext="412	fi	28316	Member	Hannu Takkula	Takkula, Hannu 	ALDE	2009		" ><a href="./mep.php?id=412" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Takkula, Hannu </span>
			   </a></li>
<li data-filtertext="432	gb	4521	Member	Charles Tannock	Tannock, Charles 	ECR	2009		" ><a href="./mep.php?id=432" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Tannock, Charles </span>
			   </a></li>
<li data-filtertext="91	be	29579	Member	Marc Tarabella	Tarabella, Marc 	SD	2009		" ><a href="./mep.php?id=91" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Tarabella, Marc </span>
			   </a></li>
<li data-filtertext="132	ee	97136	Member	Indrek Tarand	Tarand, Indrek 	VALE	2009		" ><a href="./mep.php?id=132" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ee.png" /><span>Tarand, Indrek </span>
			   </a></li>
<li data-filtertext="662	it	1945	Member	Salvatore Tatarella	Tatarella, Salvatore 	PPE	2009		" ><a href="./mep.php?id=662" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Tatarella, Salvatore </span>
			   </a></li>
<li data-filtertext="389	pt	96821	Member	Rui Tavares	Tavares, Rui 	VALE	2009		" ><a href="./mep.php?id=389" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Tavares, Rui </span>
			   </a></li>
<li data-filtertext="750	gb	102931	Member	Keith Taylor	Taylor, Keith 	VALE	2009		" ><a href="./mep.php?id=750" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Taylor, Keith </span>
			   </a></li>
<li data-filtertext="589	ro	96847	Member	Claudiu Ciprian Tănăsescu	Tănăsescu, Claudiu Ciprian 	SD	2009		" ><a href="./mep.php?id=589" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Tănăsescu, Claudiu Ciprian </span>
			   </a></li>
<li data-filtertext="617	ro	39726	Member of the Bureau	László Tőkés	Tőkés, László 	PPE	2009		" ><a href="./mep.php?id=617" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Tőkés, László </span>
			   </a></li>
<li data-filtertext="362	pt	96974	Member	Nuno Teixeira	Teixeira, Nuno 	PPE	2009		" ><a href="./mep.php?id=362" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Teixeira, Nuno </span>
			   </a></li>
<li data-filtertext="766	fi	107385	Vice-Chair/Member of the Bureau	Sampo Terho	Terho, Sampo 	EFD	2009		" ><a href="./mep.php?id=766" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Terho, Sampo </span>
			   </a></li>
<li data-filtertext="413	de	96874	Member	Alexandra Thein	Thein, Alexandra 	ALDE	2009		" ><a href="./mep.php?id=413" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Thein, Alexandra </span>
			   </a></li>
<li data-filtertext="616	cy	25704	Member	Eleni Theocharous	Theocharous, Eleni 	PPE	2009		" ><a href="./mep.php?id=616" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cy.png" /><span>Theocharous, Eleni </span>
			   </a></li>
<li data-filtertext="414	de	96871	Member	Michael Theurer	Theurer, Michael 	ALDE	2009		" ><a href="./mep.php?id=414" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Theurer, Michael </span>
			   </a></li>
<li data-filtertext="725	dk	28153	Member	Britta Thomsen	Thomsen, Britta 	SD	2009		" ><a href="./mep.php?id=725" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Thomsen, Britta </span>
			   </a></li>
<li data-filtertext="363	pl	96776	Member	Róża Gräfin von Thun und Hohenstein	Thun und Hohenstein, Róża Gräfin von 	PPE	2009		" ><a href="./mep.php?id=363" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Thun und Hohenstein, Róża Gräfin von </span>
			   </a></li>
<li data-filtertext="92	fr	97026	Member	Patrice Tirolien	Tirolien, Patrice 	SD	2009		" ><a href="./mep.php?id=92" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Tirolien, Patrice </span>
			   </a></li>
<li data-filtertext="200	cz	96713	Member	Evžen Tošenovský	Tošenovský, Evžen 	ECR	2009		" ><a href="./mep.php?id=200" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Tošenovský, Evžen </span>
			   </a></li>
<li data-filtertext="199	lt	96697	Member of the Bureau	Valdemar Tomaševski	Tomaševski, Valdemar 	ECR	2009		" ><a href="./mep.php?id=199" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Tomaševski, Valdemar </span>
			   </a></li>
<li data-filtertext="390	gr	28584	Member of the Bureau	Georgios Toussas	Toussas, Georgios 	GUENGL	2009		" ><a href="./mep.php?id=390" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Toussas, Georgios </span>
			   </a></li>
<li data-filtertext="575	de	28240	Member	Helga Trüpel	Trüpel, Helga 	VALE	2009		" ><a href="./mep.php?id=575" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Trüpel, Helga </span>
			   </a></li>
<li data-filtertext="133	gr	96909	Member	Michail Tremopoulos	Tremopoulos, Michail 	VALE	2009		" ><a href="./mep.php?id=133" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Tremopoulos, Michail </span>
			   </a></li>
<li data-filtertext="175	es	97203	Member of the Bureau	Ramon Tremosa i Balcells	Tremosa i Balcells, Ramon 	ALDE	2009		" ><a href="./mep.php?id=175" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Tremosa i Balcells, Ramon </span>
			   </a></li>
<li data-filtertext="18	cy	28514	Member	Kyriacos Triantaphyllides	Triantaphyllides, Kyriacos 	GUENGL	2009		" ><a href="./mep.php?id=18" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cy.png" /><span>Triantaphyllides, Kyriacos </span>
			   </a></li>
<li data-filtertext="512	pl	96773	Member	Rafał Trzaskowski	Trzaskowski, Rafał 	PPE	2009		" ><a href="./mep.php?id=512" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Trzaskowski, Rafał </span>
			   </a></li>
<li data-filtertext="23	gr	96898	Member	Ioannis A. Tsoukalas	Tsoukalas, Ioannis A. 	PPE	2009		" ><a href="./mep.php?id=23" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Tsoukalas, Ioannis A. </span>
			   </a></li>
<li data-filtertext="134	dk	96703	Vice-Chair	Emilie Turunen	Turunen, Emilie 	VALE	2009		" ><a href="./mep.php?id=134" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Turunen, Emilie </span>
			   </a></li>
<li data-filtertext="581	gr	96660	Vice-Chair/Member of the Bureau	Niki Tzavela	Tzavela, Niki 	EFD	2009		" ><a href="./mep.php?id=581" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Tzavela, Niki </span>
			   </a></li>
<li data-filtertext="415	it	97131	Member	Giommaria Uggias	Uggias, Giommaria 	ALDE	2009		" ><a href="./mep.php?id=415" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Uggias, Giommaria </span>
			   </a></li>
<li data-filtertext="365	de	28221	Member	Thomas Ulmer	Ulmer, Thomas 	PPE	2009		" ><a href="./mep.php?id=365" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Ulmer, Thomas </span>
			   </a></li>
<li data-filtertext="513	ro	96835	Member	Traian Ungureanu	Ungureanu, Traian 	PPE	2009		" ><a href="./mep.php?id=513" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Ungureanu, Traian </span>
			   </a></li>
<li data-filtertext="514	bg	38601	Member	Vladimir Urutchev	Urutchev, Vladimir 	PPE	2009		" ><a href="./mep.php?id=514" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Urutchev, Vladimir </span>
			   </a></li>
<li data-filtertext="176	lt	96698	Member of the Bureau	Viktor Uspaskich	Uspaskich, Viktor 	ALDE	2009		" ><a href="./mep.php?id=176" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Uspaskich, Viktor </span>
			   </a></li>
<li data-filtertext="605	ro	96845	Member	Corneliu Vadim Tudor	Vadim Tudor, Corneliu 	NI	2009		" ><a href="./mep.php?id=605" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Vadim Tudor, Corneliu </span>
			   </a></li>
<li data-filtertext="515	lv	28617	Member of the Bureau	Inese Vaidere	Vaidere, Inese 	PPE	2009		" ><a href="./mep.php?id=515" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lv.png" /><span>Vaidere, Inese </span>
			   </a></li>
<li data-filtertext="591	sl	97019	Member of the Bureau	Ivo Vajgl	Vajgl, Ivo 	ALDE	2009		" ><a href="./mep.php?id=591" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sl.png" /><span>Vajgl, Ivo </span>
			   </a></li>
<li data-filtertext="137	nl	96937	Member of the Bureau	Johannes Cornelis van Baalen	van Baalen, Johannes Cornelis 	ALDE	2009		" ><a href="./mep.php?id=137" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>van Baalen, Johannes Cornelis </span>
			   </a></li>
<li data-filtertext="392	nl	96946	Member	Daniël van der Stoep	van der Stoep, Daniël 	NI	2009		" ><a href="./mep.php?id=392" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>van der Stoep, Daniël </span>
			   </a></li>
<li data-filtertext="330	nl	28165	Member of the Bureau	Lambert van Nistelrooij	van Nistelrooij, Lambert 	PPE	2009		" ><a href="./mep.php?id=330" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>van Nistelrooij, Lambert </span>
			   </a></li>
<li data-filtertext="433	gb	4513	Member of the Bureau	Geoffrey Van Orden	Van Orden, Geoffrey 	ECR	2009		" ><a href="./mep.php?id=433" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Van Orden, Geoffrey </span>
			   </a></li>
<li data-filtertext="393	be	1956	Member	Frank Vanhecke	Vanhecke, Frank 	NI	2009		" ><a href="./mep.php?id=393" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Vanhecke, Frank </span>
			   </a></li>
<li data-filtertext="416	it	4398	Member	Gianni Vattimo	Vattimo, Gianni 	ALDE	2009		" ><a href="./mep.php?id=416" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Vattimo, Gianni </span>
			   </a></li>
<li data-filtertext="96	gb	96918	Member	Derek Vaughan	Vaughan, Derek 	SD	2009		" ><a href="./mep.php?id=96" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Vaughan, Derek </span>
			   </a></li>
<li data-filtertext="97	fr	28177	Member	Bernadette Vergnaud	Vergnaud, Bernadette 	SD	2009		" ><a href="./mep.php?id=97" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Vergnaud, Bernadette </span>
			   </a></li>
<li data-filtertext="516	de	96756	Member	Sabine Verheyen	Verheyen, Sabine 	PPE	2009		" ><a href="./mep.php?id=516" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Verheyen, Sabine </span>
			   </a></li>
<li data-filtertext="366	es	4308	Member of the Bureau	Alejo Vidal-Quadras	Vidal-Quadras, Alejo 	PPE	2009		" ><a href="./mep.php?id=366" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Vidal-Quadras, Alejo </span>
			   </a></li>
<li data-filtertext="98	bg	34232	Member	Kristian Vigenin	Vigenin, Kristian 	SD	2009		" ><a href="./mep.php?id=98" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Vigenin, Kristian </span>
			   </a></li>
<li data-filtertext="711	cz	28323	Member	Oldřich Vlasák	Vlasák, Oldřich 	ECR	2009		" ><a href="./mep.php?id=711" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Vlasák, Oldřich </span>
			   </a></li>
<li data-filtertext="618	fr	5737	Member	Dominique Vlasto	Vlasto, Dominique 	PPE	2009		" ><a href="./mep.php?id=618" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Vlasto, Dominique </span>
			   </a></li>
<li data-filtertext="722	de	96761	Member	Axel Voss	Voss, Axel 	PPE	2009		" ><a href="./mep.php?id=722" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Voss, Axel </span>
			   </a></li>
<li data-filtertext="367	pl	96774	Member	Jarosław Leszek Wałęsa	Wałęsa, Jarosław Leszek 	PPE	2009		" ><a href="./mep.php?id=367" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Wałęsa, Jarosław Leszek </span>
			   </a></li>
<li data-filtertext="417	gb	2155	Member of the Bureau	Sir Graham Watson	Watson, Sir Graham 	ALDE	2009		" ><a href="./mep.php?id=417" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Watson, Sir Graham </span>
			   </a></li>
<li data-filtertext="201	pl	96802	Member	Jacek Włosowicz	Włosowicz, Jacek 	ECR	2009		" ><a href="./mep.php?id=201" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Włosowicz, Jacek </span>
			   </a></li>
<li data-filtertext="99	fr	2319	Member	Henri Weber	Weber, Henri	SD	2009		" ><a href="./mep.php?id=99" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Weber, Henri</span>
			   </a></li>
<li data-filtertext="180	ro	39713	Member	Renate Weber	Weber, Renate	ALDE	2009		" ><a href="./mep.php?id=180" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Weber, Renate</span>
			   </a></li>
<li data-filtertext="632	de	1907	Member	Barbara Weiler	Weiler, Barbara 	SD	2009		" ><a href="./mep.php?id=632" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Weiler, Barbara </span>
			   </a></li>
<li data-filtertext="517	de	28227	Member	Anja Weisgerber	Weisgerber, Anja 	PPE	2009		" ><a href="./mep.php?id=517" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Weisgerber, Anja </span>
			   </a></li>
<li data-filtertext="394	at	97016	Member	Angelika Werthmann	Werthmann, Angelika 	NI	2009		" ><a href="./mep.php?id=394" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Werthmann, Angelika </span>
			   </a></li>
<li data-filtertext="633	se	28130	Member	Åsa Westlund	Westlund, Åsa 	SD	2009		" ><a href="./mep.php?id=633" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Westlund, Åsa </span>
			   </a></li>
<li data-filtertext="661	de	96839	Member	Kerstin Westphal	Westphal, Kerstin 	SD	2009		" ><a href="./mep.php?id=661" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Westphal, Kerstin </span>
			   </a></li>
<li data-filtertext="369	de	2323	Member of the Bureau	Rainer Wieland	Wieland, Rainer 	PPE	2009		" ><a href="./mep.php?id=369" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Wieland, Rainer </span>
			   </a></li>
<li data-filtertext="181	se	96677	Member	Cecilia Wikström	Wikström, Cecilia 	ALDE	2009		" ><a href="./mep.php?id=181" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Wikström, Cecilia </span>
			   </a></li>
<li data-filtertext="370	de	96764	Member	Hermann Winkler	Winkler, Hermann	PPE	2009		" ><a href="./mep.php?id=370" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Winkler, Hermann</span>
			   </a></li>
<li data-filtertext="371	ro	39725	Member of the Bureau	Iuliu Winkler	Winkler, Iuliu	PPE	2009		" ><a href="./mep.php?id=371" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Winkler, Iuliu</span>
			   </a></li>
<li data-filtertext="434	pl	23784	Member	Janusz Wojciechowski	Wojciechowski, Janusz 	ECR	2009		" ><a href="./mep.php?id=434" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Wojciechowski, Janusz </span>
			   </a></li>
<li data-filtertext="202	gb	96944	Member	Marina Yannakoudakis	Yannakoudakis, Marina 	ECR	2009		" ><a href="./mep.php?id=202" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Yannakoudakis, Marina </span>
			   </a></li>
<li data-filtertext="705	es	28278	Member	Luis Yáñez-Barnuevo García	Yáñez-Barnuevo García, Luis 	SD	2009		" ><a href="./mep.php?id=705" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Yáñez-Barnuevo García, Luis </span>
			   </a></li>
<li data-filtertext="374	es	96763	Member	Pablo Zalba Bidegain	Zalba Bidegain, Pablo 	PPE	2009		" ><a href="./mep.php?id=374" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Zalba Bidegain, Pablo </span>
			   </a></li>
<li data-filtertext="375	pl	96777	Member	Paweł Zalewski	Zalewski, Paweł 	PPE	2009		" ><a href="./mep.php?id=375" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Zalewski, Paweł </span>
			   </a></li>
<li data-filtertext="619	it	41007	Member	Iva Zanicchi	Zanicchi, Iva 	PPE	2009		" ><a href="./mep.php?id=619" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Zanicchi, Iva </span>
			   </a></li>
<li data-filtertext="376	pl	96778	Member	Artur Zasada	Zasada, Artur 	PPE	2009		" ><a href="./mep.php?id=376" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Zasada, Artur </span>
			   </a></li>
<li data-filtertext="436	lv	28615	Member of the Bureau	Roberts Zīle	Zīle, Roberts 	ECR	2009		" ><a href="./mep.php?id=436" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lv.png" /><span>Zīle, Roberts </span>
			   </a></li>
<li data-filtertext="24	de	96762	Member	Joachim Zeller	Zeller, Joachim 	PPE	2009		" ><a href="./mep.php?id=24" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Zeller, Joachim </span>
			   </a></li>
<li data-filtertext="100	pl	96784	Member	Janusz Władysław Zemke	Zemke, Janusz Władysław 	SD	2009		" ><a href="./mep.php?id=100" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Zemke, Janusz Władysław </span>
			   </a></li>
<li data-filtertext="20	de	28248	Member of the Bureau	Gabriele Zimmer	Zimmer, Gabriele 	GUENGL	2009		" ><a href="./mep.php?id=20" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Zimmer, Gabriele </span>
			   </a></li>
<li data-filtertext="728	pl	96803	Member	Zbigniew Ziobro	Ziobro, Zbigniew 	ECR	2009		" ><a href="./mep.php?id=728" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Ziobro, Zbigniew </span>
			   </a></li>
<li data-filtertext="674	pl	28301	Member of the Bureau	Tadeusz Zwiefka	Zwiefka, Tadeusz 	PPE	2009		" ><a href="./mep.php?id=674" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Zwiefka, Tadeusz </span>
			   </a></li>
<li data-filtertext="69	lt	28279	Member	Justas Vincas Paleckis	Paleckis, Justas Vincas 	SD	2009		" ><a href="./mep.php?id=69" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Paleckis, Justas Vincas </span>
			   </a></li>
<li data-filtertext="205	gb	28511	Member of the Bureau	Bairbre de Brún	de Brún, Bairbre 	GUENGL	2009		" ><a href="./mep.php?id=205" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>de Brún, Bairbre </span>
			   </a></li>
<li data-filtertext="447	fr	96735	Vice-Chair	Patrick Le Hyaric	Le Hyaric, Patrick 	GUENGL	2009		" ><a href="./mep.php?id=447" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Le Hyaric, Patrick </span>
			   </a></li>
<li data-filtertext="19	fr	96858	Treasurer	Marie-Christine Vergiat	Vergiat, Marie-Christine 	GUENGL	2009		" ><a href="./mep.php?id=19" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Vergiat, Marie-Christine </span>
			   </a></li>
<li data-filtertext="12	it	96994	Member	Fiorello Provera	Provera, Fiorello 	EFD	2009		" ><a href="./mep.php?id=12" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Provera, Fiorello </span>
			   </a></li>
<li data-filtertext="712	it	97198	Member	Mara Bizzotto	Bizzotto, Mara 	EFD	2009		" ><a href="./mep.php?id=712" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Bizzotto, Mara </span>
			   </a></li>
<li data-filtertext="707	nl	96809	Member of the Bureau	Peter van Dalen	van Dalen, Peter 	ECR	2009		" ><a href="./mep.php?id=707" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>van Dalen, Peter </span>
			   </a></li>
<li data-filtertext="422	be	97133	Vice-Chair	Derk Jan Eppink	Eppink, Derk Jan 	ECR	2009		" ><a href="./mep.php?id=422" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Eppink, Derk Jan </span>
			   </a></li>
<li data-filtertext="183	hu	96878	Member of the Bureau	Lajos Bokros	Bokros, Lajos 	ECR	2009		" ><a href="./mep.php?id=183" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Bokros, Lajos </span>
			   </a></li>
<li data-filtertext="288	ee	28424	Member of the Bureau	Tunne Kelam	Kelam, Tunne 	PPE	2009		" ><a href="./mep.php?id=288" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ee.png" /><span>Kelam, Tunne </span>
			   </a></li>
<li data-filtertext="464	dk	96705	Member of the Bureau	Bendt Bendtsen	Bendtsen, Bendt 	PPE	2009		" ><a href="./mep.php?id=464" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/dk.png" /><span>Bendtsen, Bendt </span>
			   </a></li>
<li data-filtertext="231	mt	28120	Member of the Bureau	Simon Busuttil	Busuttil, Simon 	PPE	2009		" ><a href="./mep.php?id=231" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/mt.png" /><span>Busuttil, Simon </span>
			   </a></li>
<li data-filtertext="501	cz	28352	Member of the Bureau	Zuzana Roithová	Roithová, Zuzana 	PPE	2009		" ><a href="./mep.php?id=501" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Roithová, Zuzana </span>
			   </a></li>
<li data-filtertext="377	sl	96933	Member of the Bureau	Milan Zver	Zver, Milan 	PPE	2009		" ><a href="./mep.php?id=377" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sl.png" /><span>Zver, Milan </span>
			   </a></li>
<li data-filtertext="249	lu	96876	Member of the Bureau	Frank Engel	Engel, Frank 	PPE	2009		" ><a href="./mep.php?id=249" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lu.png" /><span>Engel, Frank </span>
			   </a></li>
<li data-filtertext="285	lv	96901	Member of the Bureau	Krišjānis Kariņš	Kariņš, Krišjānis 	PPE	2009		" ><a href="./mep.php?id=285" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lv.png" /><span>Kariņš, Krišjānis </span>
			   </a></li>
<li data-filtertext="482	fi	28313	Member of the Bureau	Ville Itälä	Itälä, Ville 	PPE	2009		" ><a href="./mep.php?id=482" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Itälä, Ville </span>
			   </a></li>
<li data-filtertext="488	lt	23746	Member of the Bureau	Vytautas Landsbergis	Landsbergis, Vytautas 	PPE	2009		" ><a href="./mep.php?id=488" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Landsbergis, Vytautas </span>
			   </a></li>
<li data-filtertext="493	ie	28112	Member of the Bureau	Gay Mitchell	Mitchell, Gay 	PPE	2009		" ><a href="./mep.php?id=493" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Mitchell, Gay </span>
			   </a></li>
<li data-filtertext="234	nl	96754	Member of the Bureau	Wim van de Camp	van de Camp, Wim 	PPE	2009		" ><a href="./mep.php?id=234" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>van de Camp, Wim </span>
			   </a></li>
<li data-filtertext="364	be	1832	Member of the Bureau	Marianne Thyssen	Thyssen, Marianne 	PPE	2009		" ><a href="./mep.php?id=364" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Thyssen, Marianne </span>
			   </a></li>
<li data-filtertext="373	sk	23894	Member of the Bureau	Anna Záborská	Záborská, Anna 	PPE	2009		" ><a href="./mep.php?id=373" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Záborská, Anna </span>
			   </a></li>
<li data-filtertext="604	gb	1405	Member	Edward Mcmillan-Scott	McMillan-Scott, Edward	ALDE	2009		" ><a href="./mep.php?id=604" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>McMillan-Scott, Edward</span>
			   </a></li>
<li data-filtertext="179	gb	4544	Member of the Bureau	Diana Wallis	Wallis, Diana 	ALDE	2009		" ><a href="./mep.php?id=179" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Wallis, Diana </span>
			   </a></li>
<li data-filtertext="169	bg	34234	Vice-Chair	Antonyia Parvanova	Parvanova, Antonyia 	ALDE	2009		" ><a href="./mep.php?id=169" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Parvanova, Antonyia </span>
			   </a></li>
<li data-filtertext="111	nl	96726	Vice-Chair	Marije Cornelissen	Cornelissen, Marije 	VALE	2009		" ><a href="./mep.php?id=111" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Cornelissen, Marije </span>
			   </a></li>
<li data-filtertext="126	es	28409	Vice-Chair	Raül Romeva i Rueda	Romeva i Rueda, Raül 	VALE	2009		" ><a href="./mep.php?id=126" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Romeva i Rueda, Raül </span>
			   </a></li>
<li data-filtertext="123	at	28253	Vice-Chair	Eva Lichtenberger	Lichtenberger, Eva 	VALE	2009		" ><a href="./mep.php?id=123" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Lichtenberger, Eva </span>
			   </a></li>
<li data-filtertext="58	at	28251	Member	Jörg Leichtfried	Leichtfried, Jörg 	SD	2009		" ><a href="./mep.php?id=58" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Leichtfried, Jörg </span>
			   </a></li>
<li data-filtertext="726	sk	96656	Member	Boris Zala	Zala, Boris 	SD	2009		" ><a href="./mep.php?id=726" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Zala, Boris </span>
			   </a></li>
<li data-filtertext="95	be	5729	Member	Kathleen Van Brempt	Van Brempt, Kathleen 	SD	2009		" ><a href="./mep.php?id=95" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Van Brempt, Kathleen </span>
			   </a></li>
<li data-filtertext="380	pt	28310	Member	Edite Estrela	Estrela, Edite 	SD	2009		" ><a href="./mep.php?id=380" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Estrela, Edite </span>
			   </a></li>
<li data-filtertext="634	gb	35743	Member	Glenis Willmott	Willmott, Glenis 	SD	2009		" ><a href="./mep.php?id=634" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Willmott, Glenis </span>
			   </a></li>
<li data-filtertext="382	ro	96857	Member	Cătălin Sorin Ivan	Ivan, Cătălin Sorin 	SD	2009		" ><a href="./mep.php?id=382" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Ivan, Cătălin Sorin </span>
			   </a></li>
<li data-filtertext="46	cz	96714	Member	Jiří Havel	Havel, Jiří 	SD	2009		" ><a href="./mep.php?id=46" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Havel, Jiří </span>
			   </a></li>
<li data-filtertext="626	pl	23768	Member	Bogusław Liberadzki	Liberadzki, Bogusław 	SD	2009		" ><a href="./mep.php?id=626" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Liberadzki, Bogusław </span>
			   </a></li>
<li data-filtertext="452	cz	23706	Vice-Chair	Miloslav Ransdorf	Ransdorf, Miloslav 	GUENGL	2009		" ><a href="./mep.php?id=452" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Ransdorf, Miloslav </span>
			   </a></li>
<li data-filtertext="602	de	96741	Member	Sabine Wils	Wils, Sabine 	GUENGL	2009		" ><a href="./mep.php?id=602" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Wils, Sabine </span>
			   </a></li>
<li data-filtertext="15	it	997	Co-Chair	Francesco Enrico Speroni	Speroni, Francesco Enrico 	EFD	2009		" ><a href="./mep.php?id=15" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Speroni, Francesco Enrico </span>
			   </a></li>
<li data-filtertext="419	pl	23788	Vice-Chair	Adam Bielan	Bielan, Adam 	ECR	2009		" ><a href="./mep.php?id=419" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Bielan, Adam </span>
			   </a></li>
<li data-filtertext="424	gb	96957	Member of the Bureau	Ashley Fox	Fox, Ashley 	ECR	2009		" ><a href="./mep.php?id=424" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Fox, Ashley </span>
			   </a></li>
<li data-filtertext="293	bg	97968	Member of the Bureau	Andrey Kovatchev	Kovatchev, Andrey 	PPE	2009		" ><a href="./mep.php?id=293" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Kovatchev, Andrey </span>
			   </a></li>
<li data-filtertext="684	gr	1431	Member of the Bureau	Marietta Giannakou	Giannakou, Marietta 	PPE	2009		" ><a href="./mep.php?id=684" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Giannakou, Marietta </span>
			   </a></li>
<li data-filtertext="611	pt	96978	Member of the Bureau	Nuno Melo	Melo, Nuno 	PPE	2009		" ><a href="./mep.php?id=611" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Melo, Nuno </span>
			   </a></li>
<li data-filtertext="358	ro	39721	Member of the Bureau	Theodor Dumitru Stolojan	Stolojan, Theodor Dumitru 	PPE	2009		" ><a href="./mep.php?id=358" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Stolojan, Theodor Dumitru </span>
			   </a></li>
<li data-filtertext="269	hu	23816	Member of the Bureau	András Gyürk	Gyürk, András 	PPE	2009		" ><a href="./mep.php?id=269" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Gyürk, András </span>
			   </a></li>
<li data-filtertext="263	es	28393	Member of the Bureau	Luis de Grandes Pascual	de Grandes Pascual, Luis 	PPE	2009		" ><a href="./mep.php?id=263" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>de Grandes Pascual, Luis </span>
			   </a></li>
<li data-filtertext="345	pl	28297	Member of the Bureau	Jacek Saryusz-Wolski	Saryusz-Wolski, Jacek 	PPE	2009		" ><a href="./mep.php?id=345" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Saryusz-Wolski, Jacek </span>
			   </a></li>
<li data-filtertext="217	fr	33775	Member of the Bureau	Jean-Pierre Audy	Audy, Jean-Pierre 	PPE	2009		" ><a href="./mep.php?id=217" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Audy, Jean-Pierre </span>
			   </a></li>
<li data-filtertext="718	it	988	Member of the Bureau	Carlo Casini	Casini, Carlo 	PPE	2009		" ><a href="./mep.php?id=718" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Casini, Carlo </span>
			   </a></li>
<li data-filtertext="318	it	4393	Member of the Bureau	Mario Mauro	Mauro, Mario 	PPE	2009		" ><a href="./mep.php?id=318" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Mauro, Mario </span>
			   </a></li>
<li data-filtertext="405	fi	28314	Vice-Chair	Anneli Jäätteenmäki	Jäätteenmäki, Anneli 	ALDE	2009		" ><a href="./mep.php?id=405" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Jäätteenmäki, Anneli </span>
			   </a></li>
<li data-filtertext="177	ro	37324	Vice-Chair	Adina-Ioana Vălean	Vălean, Adina-Ioana 	ALDE	2009		" ><a href="./mep.php?id=177" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Vălean, Adina-Ioana </span>
			   </a></li>
<li data-filtertext="576	lu	4432	Vice-Chair	Claude Turmes	Turmes, Claude 	VALE	2009		" ><a href="./mep.php?id=576" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lu.png" /><span>Turmes, Claude </span>
			   </a></li>
<li data-filtertext="108	de	96739	Vice-Chair	Reinhard Bütikofer	Bütikofer, Reinhard 	VALE	2009		" ><a href="./mep.php?id=108" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Bütikofer, Reinhard </span>
			   </a></li>
<li data-filtertext="59	es	96812	Member	Juan Fernando López Aguilar	López Aguilar, Juan Fernando 	SD	2009		" ><a href="./mep.php?id=59" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>López Aguilar, Juan Fernando </span>
			   </a></li>
<li data-filtertext="553	de	1906	Member	Bernhard Rapkay	Rapkay, Bernhard 	SD	2009		" ><a href="./mep.php?id=553" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Rapkay, Bernhard </span>
			   </a></li>
<li data-filtertext="48	hu	28155	Treasurer	Edit Herczog	Herczog, Edit 	SD	2009		" ><a href="./mep.php?id=48" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Herczog, Edit </span>
			   </a></li>
<li data-filtertext="529	sk	23868	Vice-Chair	Monika Flašíková Beňová	Flašíková Beňová, Monika 	SD	2009		" ><a href="./mep.php?id=529" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sk.png" /><span>Flašíková Beňová, Monika </span>
			   </a></li>
<li data-filtertext="554	it	96864	Member	David-Maria Sassoli	Sassoli, David-Maria 	SD	2009		" ><a href="./mep.php?id=554" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Sassoli, David-Maria </span>
			   </a></li>
<li data-filtertext="93	fr	1129	Member	Catherine Trautmann	Trautmann, Catherine 	SD	2009		" ><a href="./mep.php?id=93" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Trautmann, Catherine </span>
			   </a></li>
<li data-filtertext="445	cy	96907	Vice-Chair	Takis Hadjigeorgiou	Hadjigeorgiou, Takis 	GUENGL	2009		" ><a href="./mep.php?id=445" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cy.png" /><span>Hadjigeorgiou, Takis </span>
			   </a></li>
<li data-filtertext="448	nl	28182	Vice-Chair	Kartika Tamara Liotard	Liotard, Kartika Tamara 	GUENGL	2009		" ><a href="./mep.php?id=448" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Liotard, Kartika Tamara </span>
			   </a></li>
<li data-filtertext="672	gb	28513	Member	Godfrey Bloom	Bloom, Godfrey 	EFD	2009		" ><a href="./mep.php?id=672" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Bloom, Godfrey </span>
			   </a></li>
<li data-filtertext="595	pl	96796	Vice-Chair	Ryszard Antoni Legutko	Legutko, Ryszard Antoni 	ECR	2009		" ><a href="./mep.php?id=595" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Legutko, Ryszard Antoni </span>
			   </a></li>
<li data-filtertext="193	gb	4542	Deputy Chair	Timothy Kirkhope	Kirkhope, Timothy 	ECR	2009		" ><a href="./mep.php?id=193" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Kirkhope, Timothy </span>
			   </a></li>
<li data-filtertext="251	de	1917	Member of the Bureau	Markus Ferber	Ferber, Markus 	PPE	2009		" ><a href="./mep.php?id=251" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Ferber, Markus </span>
			   </a></li>
<li data-filtertext="299	de	1928	Member of the Bureau	Werner Langen	Langen, Werner 	PPE	2009		" ><a href="./mep.php?id=299" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Langen, Werner </span>
			   </a></li>
<li data-filtertext="273	se	28124	Vice-Chair	Gunnar Hökmark	Hökmark, Gunnar 	PPE	2009		" ><a href="./mep.php?id=273" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Hökmark, Gunnar </span>
			   </a></li>
<li data-filtertext="286	cy	28474	Vice-Chair	Ioannis Kasoulides	Kasoulides, Ioannis 	PPE	2009		" ><a href="./mep.php?id=286" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cy.png" /><span>Kasoulides, Ioannis </span>
			   </a></li>
<li data-filtertext="313	ro	33982	Vice-Chair	Marian-Jean Marinescu	Marinescu, Marian-Jean 	PPE	2009		" ><a href="./mep.php?id=313" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Marinescu, Marian-Jean </span>
			   </a></li>
<li data-filtertext="498	pt	96903	Vice-Chair	Paulo Rangel	Rangel, Paulo 	PPE	2009		" ><a href="./mep.php?id=498" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Rangel, Paulo </span>
			   </a></li>
<li data-filtertext="2	fr	4335	Vice-Chair	Marielle De Sarnez	De Sarnez, Marielle 	ALDE	2009		" ><a href="./mep.php?id=2" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>De Sarnez, Marielle </span>
			   </a></li>
<li data-filtertext="6	it	97229	Vice-Chair	Niccolò Rinaldi	Rinaldi, Niccolò 	ALDE	2009		" ><a href="./mep.php?id=6" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Rinaldi, Niccolò </span>
			   </a></li>
<li data-filtertext="110	fr	1934	Co-Chair	Daniel Cohn-Bendit	Cohn-Bendit, Daniel 	VALE	2009		" ><a href="./mep.php?id=110" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Cohn-Bendit, Daniel </span>
			   </a></li>
<li data-filtertext="57	fr	28162	Vice-Chair	Stéphane Le Foll	Le Foll, Stéphane 	SD	2009		" ><a href="./mep.php?id=57" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Le Foll, Stéphane </span>
			   </a></li>
<li data-filtertext="528	be	22097	Vice-Chair	Véronique De Keyser	De Keyser, Véronique 	SD	2009		" ><a href="./mep.php?id=528" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>De Keyser, Véronique </span>
			   </a></li>
<li data-filtertext="73	ro	38595	Vice-Chair	Rovana Plumb	Plumb, Rovana 	SD	2009		" ><a href="./mep.php?id=73" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Plumb, Rovana </span>
			   </a></li>
<li data-filtertext="540	gb	1407	Vice-Chair	Stephen Hughes	Hughes, Stephen 	SD	2009		" ><a href="./mep.php?id=540" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Hughes, Stephen </span>
			   </a></li>
<li data-filtertext="385	pt	4466	Vice-Chair	Ilda Figueiredo	Figueiredo, Ilda 	GUENGL	2009		" ><a href="./mep.php?id=385" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Figueiredo, Ilda </span>
			   </a></li>
<li data-filtertext="457	se	28134	Vice-Chair	Eva-Britt Svensson	Svensson, Eva-Britt	GUENGL	2009		" ><a href="./mep.php?id=457" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Svensson, Eva-Britt</span>
			   </a></li>
<li data-filtertext="10	gb	4525	Co-Chair	Nigel Farage	Farage, Nigel 	EFD	2009		" ><a href="./mep.php?id=10" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Farage, Nigel </span>
			   </a></li>
<li data-filtertext="435	cz	23712	Chair	Jan Zahradil	Zahradil, Jan 	ECR	2009		" ><a href="./mep.php?id=435" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>Zahradil, Jan </span>
			   </a></li>
<li data-filtertext="284	at	4246	Vice-Chair	Othmar Karas	Karas, Othmar 	PPE	2009		" ><a href="./mep.php?id=284" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Karas, Othmar </span>
			   </a></li>
<li data-filtertext="227	it	29074	Vice-Chair	Vito Bonsignore	Bonsignore, Vito 	PPE	2009		" ><a href="./mep.php?id=227" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Bonsignore, Vito </span>
			   </a></li>
<li data-filtertext="368	de	28229	Vice-Chair	Manfred Weber	Weber, Manfred	PPE	2009		" ><a href="./mep.php?id=368" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Weber, Manfred</span>
			   </a></li>
<li data-filtertext="361	hu	23821	Vice-Chair	József Szájer	Szájer, József 	PPE	2009		" ><a href="./mep.php?id=361" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Szájer, József </span>
			   </a></li>
<li data-filtertext="372	nl	28167	Vice-Chair	Corien Wortmann-Kool	Wortmann-Kool, Corien 	PPE	2009		" ><a href="./mep.php?id=372" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Wortmann-Kool, Corien </span>
			   </a></li>
<li data-filtertext="320	es	28362	Vice-Chair	Jaime Mayor Oreja	Mayor Oreja, Jaime 	PPE	2009		" ><a href="./mep.php?id=320" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Mayor Oreja, Jaime </span>
			   </a></li>
<li data-filtertext="244	fr	4342	Chair	Joseph Daul	Daul, Joseph 	PPE	2009		" ><a href="./mep.php?id=244" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Daul, Joseph </span>
			   </a></li>
<li data-filtertext="178	be	97058	Chair	Guy Verhofstadt	Verhofstadt, Guy 	ALDE	2009		" ><a href="./mep.php?id=178" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>Verhofstadt, Guy </span>
			   </a></li>
<li data-filtertext="160	de	28242	Vice-Chair	Alexander Graf Lambsdorff	Lambsdorff, Alexander Graf 	ALDE	2009		" ><a href="./mep.php?id=160" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Lambsdorff, Alexander Graf </span>
			   </a></li>
<li data-filtertext="117	de	28233	Co-Chair	Rebecca Harms	Harms, Rebecca 	VALE	2009		" ><a href="./mep.php?id=117" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Harms, Rebecca </span>
			   </a></li>
<li data-filtertext="564	it	28340	Vice-Chair	Patrizia Toia	Toia, Patrizia 	SD	2009		" ><a href="./mep.php?id=564" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Toia, Patrizia </span>
			   </a></li>
<li data-filtertext="94	se	96672	Vice-Chair	Marita Ulvskog	Ulvskog, Marita 	SD	2009		" ><a href="./mep.php?id=94" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Ulvskog, Marita </span>
			   </a></li>
<li data-filtertext="82	de	1911	Chair	Martin Schulz	Schulz, Martin	SD	2009		" ><a href="./mep.php?id=82" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Schulz, Martin</span>
			   </a></li>
<li data-filtertext="89	at	2295	Vice-Chair	Hannes Swoboda	Swoboda, Hannes 	SD	2009		" ><a href="./mep.php?id=89" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Swoboda, Hannes </span>
			   </a></li>
<li data-filtertext="28	es	28342	Vice-Chair	Maria Badia i Cutchet	Badia i Cutchet, Maria 	SD	2009		" ><a href="./mep.php?id=28" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Badia i Cutchet, Maria </span>
			   </a></li>
<li data-filtertext="444	de	96650	Chair	Lothar Bisky	Bisky, Lothar 	GUENGL	2009		" ><a href="./mep.php?id=444" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Bisky, Lothar </span>
			   </a></li>
<li data-filtertext="829	mt	118860		Claudette Abela Baldacchino	Abela Baldacchino, Claudette	SD	2009		" ><a href="./mep.php?id=829" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/mt.png" /><span>Abela Baldacchino, Claudette</span>
			   </a></li>
<li data-filtertext="25	es	97024	Member	Magdalena Alvarez	Alvarez, Magdalena 	SD	2009		" ><a href="./mep.php?id=25" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Alvarez, Magdalena </span>
			   </a></li>
<li data-filtertext="778	se	108570		Amelia Andersdotter	Andersdotter, Amelia	VALE	2009		" ><a href="./mep.php?id=778" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Andersdotter, Amelia</span>
			   </a></li>
<li data-filtertext="811	gb	113959		Martina Anderson	Anderson, Martina	VALE	2009		" ><a href="./mep.php?id=811" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Anderson, Martina</span>
			   </a></li>
<li data-filtertext="807	fr	113892		Eric Andrieu	Andrieu, Eric	SD	2009		" ><a href="./mep.php?id=807" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Andrieu, Eric</span>
			   </a></li>
<li data-filtertext="789	lt	111033		KÄrlis Å adurskis	Å adurskis, KÄrlis	PPE	2009		" ><a href="./mep.php?id=789" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Å adurskis, KÄrlis</span>
			   </a></li>
<li data-filtertext="642	hu	96877	Member	Zoltán Balczó	Balczó, Zoltán 	NI	2009		" ><a href="./mep.php?id=642" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Balczó, Zoltán </span>
			   </a></li>
<li data-filtertext="221	fr	72776	Member of the Bureau	Michel Barnier	Barnier, Michel 	PPE	2009		" ><a href="./mep.php?id=221" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Barnier, Michel </span>
			   </a></li>
<li data-filtertext="821	it	116823		Francesca Barracciu	Barracciu, Francesca	SD	2009		" ><a href="./mep.php?id=821" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Barracciu, Francesca</span>
			   </a></li>
<li data-filtertext="222	fr	1759	Member	Dominique Baudis	Baudis, Dominique 	PPE	2009		" ><a href="./mep.php?id=222" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Baudis, Dominique </span>
			   </a></li>
<li data-filtertext="224	fr	97002	Member	Christophe Béchu	Béchu, Christophe 	PPE	2009		" ><a href="./mep.php?id=224" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Béchu, Christophe </span>
			   </a></li>
<li data-filtertext="808	hu	113883		Erik BÃ¡nki	BÃ¡nki, Erik	PPE	2009		" ><a href="./mep.php?id=808" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>BÃ¡nki, Erik</span>
			   </a></li>
<li data-filtertext="800	gb	112014		Phil Bennion	Bennion, Phil	ALDE	2009		" ><a href="./mep.php?id=800" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Bennion, Phil</span>
			   </a></li>
<li data-filtertext="812	fr	96947		Nora Berra	Berra, Nora	SD	2009		" ><a href="./mep.php?id=812" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Berra, Nora</span>
			   </a></li>
<li data-filtertext="826	it	118709		Fabrizio Bertot	Bertot, Fabrizio	PPE	2009		" ><a href="./mep.php?id=826" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Bertot, Fabrizio</span>
			   </a></li>
<li data-filtertext="809	fr	113891		Jean-Jacob Bicep	Bicep, Jean-Jacob	VALE	2009		" ><a href="./mep.php?id=809" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Bicep, Jean-Jacob</span>
			   </a></li>
<li data-filtertext="827	it	118710		Franco Bonanini	Bonanini, Franco	NI	2009		" ><a href="./mep.php?id=827" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Bonanini, Franco</span>
			   </a></li>
<li data-filtertext="458	nl	96893	Member	Louis Bontes	Bontes, Louis 	NI	2009		" ><a href="./mep.php?id=458" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Bontes, Louis </span>
			   </a></li>
<li data-filtertext="822	bg	116816		Preslav Borissov	Borissov, Preslav	PPE	2009		" ><a href="./mep.php?id=822" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Borissov, Preslav</span>
			   </a></li>
<li data-filtertext="779	pl	111126		Arkadiusz Tomasz Bratkowski	Bratkowski, Arkadiusz Tomasz	PPE	2009		" ><a href="./mep.php?id=779" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Bratkowski, Arkadiusz Tomasz</span>
			   </a></li>
<li data-filtertext="799	gr	111823		Nikos Chrysogelos	Chrysogelos, Nikos	VALE	2009		" ><a href="./mep.php?id=799" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Chrysogelos, Nikos</span>
			   </a></li>
<li data-filtertext="806	ro	113597		Minodora Cliveti	Cliveti, Minodora	SD	2009		" ><a href="./mep.php?id=806" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Cliveti, Minodora</span>
			   </a></li>
<li data-filtertext="780	fr	1202		Yves Cochet	Cochet, Yves	VALE	2009		" ><a href="./mep.php?id=780" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Cochet, Yves</span>
			   </a></li>
<li data-filtertext="804	de	112788		Birgit Collin-Langen	Collin-Langen, Birgit	PPE	2009		" ><a href="./mep.php?id=804" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Collin-Langen, Birgit</span>
			   </a></li>
<li data-filtertext="729	it	97195	Member	Giovanni Collino	Collino, Giovanni 	PPE	2009		" ><a href="./mep.php?id=729" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Collino, Giovanni </span>
			   </a></li>
<li data-filtertext="794	es	111496		María Auxiliadora CORREA ZAMORA 	Correa Zamora, María Auxiliadora	PPE	2009		" ><a href="./mep.php?id=794" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Correa Zamora, María Auxiliadora</span>
			   </a></li>
<li data-filtertext="801	ie	112071		Emer Costello	Costello, Emer	SD	2009		" ><a href="./mep.php?id=801" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Costello, Emer</span>
			   </a></li>
<li data-filtertext="813	fr	2315		Jean Louis Cottigny	Cottigny, Jean Louis	SD	2009		" ><a href="./mep.php?id=813" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Cottigny, Jean Louis</span>
			   </a></li>
<li data-filtertext="769	fi	107973		Tarja Cronberg	Cronberg, Tarja	VALE	2009		" ><a href="./mep.php?id=769" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Cronberg, Tarja</span>
			   </a></li>
<li data-filtertext="777	mt	110984		Joseph Cuschieri	Cuschieri, Joseph	SD	2009		" ><a href="./mep.php?id=777" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/mt.png" /><span>Cuschieri, Joseph</span>
			   </a></li>
<li data-filtertext="772	be	109337		Philippe De Backer	De Backer, Philippe	ALDE	2009		" ><a href="./mep.php?id=772" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/be.png" /><span>De Backer, Philippe</span>
			   </a></li>
<li data-filtertext="402	it	97129	Member of the Bureau	Luigi de Magistris	de Magistris, Luigi 	ALDE	2009		" ><a href="./mep.php?id=402" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>de Magistris, Luigi </span>
			   </a></li>
<li data-filtertext="828	it	118708		Susy De Martini	De Martini, Susy	ECR	2009		" ><a href="./mep.php?id=828" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>De Martini, Susy</span>
			   </a></li>
<li data-filtertext="824	bg	117477		Mark Demesmaeker	Demesmaeker, Mark	VALE	2009		" ><a href="./mep.php?id=824" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Demesmaeker, Mark</span>
			   </a></li>
<li data-filtertext="770	gr	107977		Dimitrios Droutsas	Droutsas, Dimitrios	SD	2009		" ><a href="./mep.php?id=770" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Droutsas, Dimitrios</span>
			   </a></li>
<li data-filtertext="830	it	118999		Franco Frigo	Frigo, Franco	SD	2009		" ><a href="./mep.php?id=830" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Frigo, Franco</span>
			   </a></li>
<li data-filtertext="782	es	111017		Dolores GarcÃ­a-Hierro Caraballo	GarcÃ­a-Hierro Caraballo, Dolores	SD	2009		" ><a href="./mep.php?id=782" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>GarcÃ­a-Hierro Caraballo, Dolores</span>
			   </a></li>
<li data-filtertext="781	es	39321		Vicente Miguel GARCÉS RAMÓN 	GARCÉS RAMÓN, Vicente Miguel	SD	2009		" ><a href="./mep.php?id=781" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>GARCÉS RAMÓN, Vicente Miguel</span>
			   </a></li>
<li data-filtertext="266	fr	96983	Member of the Bureau	Pascale Gruny	Gruny, Pascale 	PPE	2009		" ><a href="./mep.php?id=266" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Gruny, Pascale </span>
			   </a></li>
<li data-filtertext="774	se	109649		Mikael Gustafsson	Gustafsson, Mikael	GUENGL	2009		" ><a href="./mep.php?id=774" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Gustafsson, Mikael</span>
			   </a></li>
<li data-filtertext="268	hu	96830	Member of the Bureau	Enikő Győri	Győri, Enikő 	PPE	2009		" ><a href="./mep.php?id=268" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Győri, Enikő </span>
			   </a></li>
<li data-filtertext="118	fi	2054	Member	Heidi Hautala	Hautala, Heidi 	VALE	2009		" ><a href="./mep.php?id=118" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Hautala, Heidi </span>
			   </a></li>
<li data-filtertext="847	ru	37448		Eduard-Raul Hellvig	Hellvig, Eduard-Raul	ALDE	2009		" ><a href="./mep.php?id=847" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ru.png" /><span>Hellvig, Eduard-Raul</span>
			   </a></li>
<li data-filtertext="149	nl	28176	Member	Jeanine Hennis-Plasschaert	Hennis-Plasschaert, Jeanine 	ALDE	2009		" ><a href="./mep.php?id=149" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Hennis-Plasschaert, Jeanine </span>
			   </a></li>
<li data-filtertext="683	ie	96669	Member of the Bureau	Joe Higgins	Higgins, Joe	GUENGL	2009		" ><a href="./mep.php?id=683" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Higgins, Joe</span>
			   </a></li>
<li data-filtertext="848	es	119875		IÃ±aki Irazabalbeitia FernÃ¡ndez	Irazabalbeitia FernÃ¡ndez, IÃ±aki	VALE	2009		" ><a href="./mep.php?id=848" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Irazabalbeitia FernÃ¡ndez, IÃ±aki</span>
			   </a></li>
<li data-filtertext="49	es	97078	Member	Ramón Jáuregui Atondo	Jauregui Atondo, Ramón	SD	2009		" ><a href="./mep.php?id=49" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Jauregui Atondo, Ramón</span>
			   </a></li>
<li data-filtertext="776	SE	110365		Kent Johansson	Johansson, Kent	ALDE	2009		" ><a href="./mep.php?id=776" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/SE.png" /><span>Johansson, Kent</span>
			   </a></li>
<li data-filtertext="543	ie	96667	Member	Alan Kelly	Kelly, Alan	SD	2009		" ><a href="./mep.php?id=543" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ie.png" /><span>Kelly, Alan</span>
			   </a></li>
<li data-filtertext="56	gr	28576	Member	Stavros Lambrinidis	Lambrinidis, Stavros 	SD	2009		" ><a href="./mep.php?id=56" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Lambrinidis, Stavros </span>
			   </a></li>
<li data-filtertext="303	pl	23781	Member	Janusz Lewandowski	Lewandowski, Janusz 	PPE	2009		" ><a href="./mep.php?id=303" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pl.png" /><span>Lewandowski, Janusz </span>
			   </a></li>
<li data-filtertext="572	gb	4524	Member	Caroline Lucas	Lucas, Caroline 	VALE	2009		" ><a href="./mep.php?id=572" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Lucas, Caroline </span>
			   </a></li>
<li data-filtertext="833	Bg	37524		Marusya Lyubcheva	Lyubcheva, Marusya	SD	2009		" ><a href="./mep.php?id=833" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Lyubcheva, Marusya</span>
			   </a></li>
<li data-filtertext="784	bg	111027		Svetoslav Hristov Malinov	Malinov, Svetoslav Hristov	PPE	2009		" ><a href="./mep.php?id=784" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Malinov, Svetoslav Hristov</span>
			   </a></li>
<li data-filtertext="785	sl	39916		Zofija Mazej KukoviÄ	Mazej KukoviÄ, Zofija	PPE	2009		" ><a href="./mep.php?id=785" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sl.png" /><span>Mazej KukoviÄ, Zofija</span>
			   </a></li>
<li data-filtertext="783	gb	111011		Anthea McIntyre	McIntyre, Anthea	ECR	2009		" ><a href="./mep.php?id=783" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>McIntyre, Anthea</span>
			   </a></li>
<li data-filtertext="831	mt	118859		Roberta Metsola	Metsola, Roberta	PPE	2009		" ><a href="./mep.php?id=831" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/mt.png" /><span>Metsola, Roberta</span>
			   </a></li>
<li data-filtertext="849	de	120478		Martina Michels	Michels, Martina	GUENGL	2009		" ><a href="./mep.php?id=849" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/de.png" /><span>Michels, Martina</span>
			   </a></li>
<li data-filtertext="795	es	24942		Ana Miranda	Miranda, Ana	VALE	2009		" ><a href="./mep.php?id=795" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Miranda, Ana</span>
			   </a></li>
<li data-filtertext="832	mt	118858		Marlene Mizzi	Mizzi, Marlene	SD	2009		" ><a href="./mep.php?id=832" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/mt.png" /><span>Mizzi, Marlene</span>
			   </a></li>
<li data-filtertext="816	cz	114873		Vojtěch MYNÁŘ 	MYNÁŘ, Vojtěch	SD	2009		" ><a href="./mep.php?id=816" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cz.png" /><span>MYNÁŘ, Vojtěch</span>
			   </a></li>
<li data-filtertext="796	es	5537		Juan Andrés NARANJO ESCOBAR 	Naranjo Escobar, Juan Andrés	PPE	2009		" ><a href="./mep.php?id=796" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Naranjo Escobar, Juan Andrés</span>
			   </a></li>
<li data-filtertext="786	se	111024		Jens Nilsson	Nilsson, Jens	SD	2009		" ><a href="./mep.php?id=786" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/se.png" /><span>Nilsson, Jens</span>
			   </a></li>
<li data-filtertext="797	fr	30482		Younous Omarjee	Omarjee, Younous	GUENGL	2009		" ><a href="./mep.php?id=797" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Omarjee, Younous</span>
			   </a></li>
<li data-filtertext="787	es	111019		Eva Ortiz Vilella	Ortiz Vilella, Eva	PPE	2009		" ><a href="./mep.php?id=787" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>Ortiz Vilella, Eva</span>
			   </a></li>
<li data-filtertext="737	gr	28583	Member	Athanasios Pafilis	Pafilis, Athanasios 	GUENGL	2009		" ><a href="./mep.php?id=737" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Pafilis, Athanasios </span>
			   </a></li>
<li data-filtertext="819	bg	116663		Monika Panayotova	Panayotova, Monika	PPE	2009		" ><a href="./mep.php?id=819" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/bg.png" /><span>Panayotova, Monika</span>
			   </a></li>
<li data-filtertext="701	gr	97006	Member	Giorgos Papakonstantinou	Papakonstantinou, Giorgos 	SD	2009		" ><a href="./mep.php?id=701" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Papakonstantinou, Giorgos </span>
			   </a></li>
<li data-filtertext="825	CY	118144		Andreas Pitsillides	Pitsillides, Andreas	PPE	2009		" ><a href="./mep.php?id=825" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/CY.png" /><span>Pitsillides, Andreas</span>
			   </a></li>
<li data-filtertext="682	gr	97010	Member	Athanasios Plevris	Plevris, Athanasios 	EFD	2009		" ><a href="./mep.php?id=682" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gr.png" /><span>Plevris, Athanasios </span>
			   </a></li>
<li data-filtertext="771	fr	108080		Franck Proust	Proust, Franck	PPE	2009		" ><a href="./mep.php?id=771" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Proust, Franck</span>
			   </a></li>
<li data-filtertext="614	at	96879	Member	Hella Ranner	Ranner, Hella 	PPE	2009		" ><a href="./mep.php?id=614" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Ranner, Hella </span>
			   </a></li>
<li data-filtertext="788	fr	111068		Jean Roatta	Roatta, Jean	PPE	2009		" ><a href="./mep.php?id=788" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Roatta, Jean</span>
			   </a></li>
<li data-filtertext="802	fi	112611		Petri Sarvanmaa	Sarvanmaa, Petri	NI	2009		" ><a href="./mep.php?id=802" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Sarvanmaa, Petri</span>
			   </a></li>
<li data-filtertext="347	hu	28133	Member of the Bureau	Pál Schmitt	Schmitt, Pál 	PPE	2009		" ><a href="./mep.php?id=347" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/hu.png" /><span>Schmitt, Pál </span>
			   </a></li>
<li data-filtertext="790	es	111018		Salvador SedÃ³ i Alabart	SedÃ³ i Alabart, Salvador	PPE	2009		" ><a href="./mep.php?id=790" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/es.png" /><span>SedÃ³ i Alabart, Salvador</span>
			   </a></li>
<li data-filtertext="850	ro	33991		Ovidiu Ioan Silaghi	Silaghi, Ovidiu Ioan	ALDE	2009		" ><a href="./mep.php?id=850" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Silaghi, Ovidiu Ioan</span>
			   </a></li>
<li data-filtertext="14	fi	96666	Chair of the Bureau	Timo Soini	Soini, Timo 	EFD	2009		" ><a href="./mep.php?id=14" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Soini, Timo </span>
			   </a></li>
<li data-filtertext="817	cy	114840		Sophocles Sophocleous	Sophocleous, Sophocles	SD	2009		" ><a href="./mep.php?id=817" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/cy.png" /><span>Sophocleous, Sophocles</span>
			   </a></li>
<li data-filtertext="357	fr	97294	Member	Catherine Soullie	Soullie, Catherine 	PPE	2009		" ><a href="./mep.php?id=357" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Soullie, Catherine </span>
			   </a></li>
<li data-filtertext="805	pt	113487		Alda Sousa	Sousa, Alda	VALE	2009		" ><a href="./mep.php?id=805" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Sousa, Alda</span>
			   </a></li>
<li data-filtertext="791	at	111026		Ewald Stadler	Stadler, Ewald	NI	2009		" ><a href="./mep.php?id=791" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Stadler, Ewald</span>
			   </a></li>
<li data-filtertext="359	at	96766	Member of the Bureau	Ernst Strasser	Strasser, Ernst 	PPE	2009		" ><a href="./mep.php?id=359" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Strasser, Ernst </span>
			   </a></li>
<li data-filtertext="803	gb	112620		Rebecca Elisabeth Taylor	Taylor, Rebecca Elisabeth	ALDE	2009		" ><a href="./mep.php?id=803" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/gb.png" /><span>Taylor, Rebecca Elisabeth</span>
			   </a></li>
<li data-filtertext="562	sl	96727	Member	Zoran Thaler	Thaler, Zoran 	SD	2009		" ><a href="./mep.php?id=562" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/sl.png" /><span>Thaler, Zoran </span>
			   </a></li>
<li data-filtertext="814	fr	114279		Isabelle Thomas	Thomas, Isabelle	SD	2009		" ><a href="./mep.php?id=814" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Thomas, Isabelle</span>
			   </a></li>
<li data-filtertext="815	fi	114268		Nils Torvalds	Torvalds, Nils	ALDE	2009		" ><a href="./mep.php?id=815" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fi.png" /><span>Torvalds, Nils</span>
			   </a></li>
<li data-filtertext="792	it	110987		Gino Trematerra	Trematerra, Gino	PPE	2009		" ><a href="./mep.php?id=792" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Trematerra, Gino</span>
			   </a></li>
<li data-filtertext="818	nl	115868		Patricia van der Kammen	van der Kammen, Patricia	NI	2009		" ><a href="./mep.php?id=818" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>van der Kammen, Patricia</span>
			   </a></li>
<li data-filtertext="820	lt	30475		Justina Vitkauskaite	Vitkauskaite, Justina	ALDE	2009		" ><a href="./mep.php?id=820" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/lt.png" /><span>Vitkauskaite, Justina</span>
			   </a></li>
<li data-filtertext="793	at	111014		Josef Weidenholzer	Weidenholzer, Josef	SD	2009		" ><a href="./mep.php?id=793" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/at.png" /><span>Weidenholzer, Josef</span>
			   </a></li>
<li data-filtertext="823	ro	117119		Dan Dumitru Zamfirescu	Zamfirescu, Dan Dumitru	NI	2009		" ><a href="./mep.php?id=823" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/ro.png" /><span>Zamfirescu, Dan Dumitru</span>
			   </a></li>
<li data-filtertext="773	it	108329		Andrea Zanoni	Zanoni, Andrea	ALDE	2009		" ><a href="./mep.php?id=773" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/it.png" /><span>Zanoni, Andrea</span>
			   </a></li>
<li data-filtertext="810	fr	113890		Karim Zeribi	Zeribi, Karim	VALE	2009		" ><a href="./mep.php?id=810" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/fr.png" /><span>Zeribi, Karim</span>
			   </a></li>
<li data-filtertext="775	nl	103246		Auke Zijlstra	Zijlstra, Auke	NI	2009		" ><a href="./mep.php?id=775" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/nl.png" /><span>Zijlstra, Auke</span>
			   </a></li>

<li data-filtertext="798	pt	111589		Inês ZUBER 	Zuber, Inês	GUENGL	2009" ><a href="./mep.php?id=798" class="ui-link-inherit" data-ajax="false">
				 <img class="ui-li-icon ui-corner-none" src="http://lobbyplag.eu/assets/img/flags/20x15/pt.png" /><span>Zuber, Inês</span>
			   </a></li>


</ul>

    </div>
    </div>
</div>
</body>
</hmtl>
