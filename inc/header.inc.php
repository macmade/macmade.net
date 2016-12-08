<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
	<head>
		
		<!--
		
		##################################################
		
		// Blood Sweat & Code (& Rock'N'Roll)
		// Thanx for looking at the source code
		
		// eosgarden © 2008
		// www.eosgarden.com
		// info(at)eosgarden.com
		
		// boulevard de grancy 19
		// 1006 lausanne
		// switzerland
		
		##################################################
		
		-->
		
		<link rel="schema.dc" href="http://purl.org/metadata/dublin_core_elements" />
		<link rel="stylesheet" rev="stylesheet" href="/css/base.css" type="text/css" media="screen" charset="iso-8859-1" />
		<link rev="made" href="mailto:info@eosgarden.com" />
		<meta http-equiv="content-language" content="fr" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="reply-to" content="info@eosgarden.com" />
		<meta name="author" content="eosgarden" />
		<meta name="copyright" content="Copyright, eosgarden, 2008" />
		<meta name="DC.Creator" content="eosgarden" />
		<meta name="DC.Description" content="macmade.net - web solutions - web communication framework - web design - content management system - typo3 - development" />
		<meta name="DC.Language" scheme="NISOZ39.50" content="fr" />
		<meta name="DC.Rights" content="Copyright, eosgarden, 2008" />
		<meta name="DC.Subject" content="communication,competence,content,design,developer,development,développement,extensions,flash,formations,framework,france,gadina,jean-david,iannitelli,luigi,lausanne,linux,logiciel libre,macmade,management,multimedia,mysql,network,opensource,php,programation,ressources,software,solutions,suisse,switzerlnd,system,t3fruni,typo3,typoscript,unix,web" />
		<meta name="description" content="macmade.net - web solutions - web communication framework - web design - content management system - typo3 - development" />
		<meta name="generator" content="BBEdit 8.6" />
		<meta name="keywords" content="communication,competence,content,design,developer,development,développement,extensions,flash,formations,framework,france,gadina,jean-david,iannitelli,luigi,lausanne,linux,logiciel libre,macmade,management,multimedia,mysql,network,opensource,php,programation,ressources,software,solutions,suisse,switzerlnd,system,t3fruni,typo3,typoscript,unix,web" />
		<meta name="rating" content="General" />
		<meta name="robots" content="all" />
		<title>eosgarden<?php echo($GLOBALS['PAGE']->title); ?></title>
		<script src="/js/functions.js" type="text/javascript" charset="utf-8"></script>
		<script src="http://www.google-analytics.com/urchin.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" charset="utf-8">
			// <![CDATA[
			_uacct = "UA-3609304-1";
			urchinTracker();
			// ]]>
		</script>
		<?php
			
			// Page specific header data
			echo($GLOBALS['PAGE']->headerData());
		?>
	</head>
	
	<body>
		
		<!-- Main container - BEGIN -->
		<div id="container">
			
			<!-- Shadow - BEGIN -->
			<div id="shadow">&nbsp;</div>
			<!-- Shadow - END -->
			
			<!-- Main frame - BEGIN -->
			<div id="frame">
				
				<!-- Header - BEGIN -->
				<div id="header">
					
					<!-- Left - BEGIN -->
					<div class="left">
						
						<!-- Logo - BEGIN -->
						<div id="logo">
							<a href="/" title="Accueil">
								<img src="/css/interface/logo-eos-green.gif" alt="eosgarden" width="350" height="100" />
							</a>
						</div>
						<!-- Logo - END -->
						
						<!-- Copyright - BEGIN -->
						<div id="copyright">
							powered by eosgarden
						</div>
						<!-- Copyright - END -->
						
					</div>
					
					<!-- Right - BEGIN -->
					<div class="right">
						
						<!-- Menu level 1 - BEGIN -->
						<div id="menu-level1">
							<?php
								
								// Menu level 1
								echo($GLOBALS['MENU']->buildMenu() . chr(10));
								
							?>
						</div>
						<!-- Menu level 1 - END -->
						
					</div>
					<!-- Right - END -->
					
					<!-- Bar - BEGIN -->
					<div id="bar">&nbsp;</div>
					<!-- Bar - END -->
					
				</div>
				<!-- Header - END -->
				
				<!-- Main - BEGIN -->
				<div id="main">
					
					<!-- Left - BEGIN -->
					<div class="left">
						
						<!-- Content - BEGIN -->
						<div id="content">
