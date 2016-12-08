						</div>
						<!-- Content - END -->
						
					</div>
					<!-- Left - END -->
					
					<!-- Right - BEGIN -->
					<div class="right">
						
						<!-- Content right - BEGIN -->
						<div id="content-right">
							
							<!-- Menu level 2 - BEGIN -->
							<div id="menu-level2">
								<?php
									
									// Menu level 1
									echo($GLOBALS['MENU']->buildMenu(2,2) . chr(10));
									
								?>
							</div>
							<!-- Menu level 2 - END -->
							
							<!-- Google search - START -->
							<div id="search">
								<div>
									<form action="http://www.google.com/custom" method="get" enctype="multipart/form-data" id="google-search">
										<div>
											<input name="q" id="google-q" type="text" value="" size="20" /><br />
											<input name="sa" id="google-sa" type="submit" value="Rechercher" />
											<input name="cof" id="google-cof" type="hidden" value="GALT:#B0C200;S:http://www.eosgarden.com/;VLC:#E55900;AH:left;BGC:#FFFFFF;LH:100;LC:#E55900;GFNT:#00AfC2;L:http://www.eosgarden.com/css/interface/logo-eos-green.gif;ALC:#E55900;LW:350;T:#737373;GIMP:#E55900;AWFID:c7741da6e2484c8a;" />
											<input name="filter" id="google-filter" type="hidden" value="0" />
											<input name="domains" id="google-domains" type="hidden" value="eosgarden.com" />
											<input name="sitesearch" id="google-sitesearch" type="hidden" value="eosgarden.com" />
										</div>
									</form>
								</div>
							</div>
							<!-- Google search - END -->
							
							<!-- Sponsor - START -->
							<div id="sponsor">
								<a href="http://association.typo3.org/" title="TYPO3 Association"><img src="/uploads/images/t3-association-banner.gif" alt="" width="140" height="50" /></a>
							</div>
							<!-- Sponsor - END -->
							
							<!-- News - START -->
							<div id="news">
								<h2 class="border-red">Actualités</h2>
								<div>
									<?php
										
										// News class
										require_once(PATH_mod . 'news/class.news_latest.php');
										
										// New news object
										$news = new news_latest();
										
										// Set display page
										$news->displayPage = '/' . SYS_lang . '/divers/news/index.php';
										
										// Show news
										echo($news->showNews());
										
									?>
								</div>
								<h2 class="border-red">Actualités TYPO3</h2>
								<div>
									<?php
										
										// RSS feed class
										require_once(PATH_mod . 'rssfeed/class.rssfeed_import.php');
										
										// New RSS feed object
										$rss = new rssfeed_import();
										
										// RSS feed URL
										$rss->feed = 'http://news.typo3.org/news/rss.xml';
										
										// Show RSS feed
										echo($rss->showFeed());
										
									?>
								</div>
							</div>
							<!-- News - END -->
							
						</div>
						<!-- Content right - END -->
						
					</div>
					<!-- Right - END -->
					
				</div>
				<!-- Main - END -->
				
				<!-- Footer - BEGIN -->
				<div id="footer">
					
					<!-- W3C - BEGIN -->
					<div id="w3c">
						<span><a href="http://validator.w3.org/check?uri=referer" title="valid xhtml"><img src="/css/interface/w3c-xhtml.gif" alt="valid xhtml" width="80" height="15" /></a></span>
						<span><a href="http://jigsaw.w3.org/css-validator/check/referer" title="valid css"><img src="/css/interface/w3c-css.gif" alt="valid css" width="80" height="15" /></a></span>
					</div>
					<!-- W3C - END -->
					
					<!-- Footer - BEGIN -->
					<div id="footer-infos">
						<div class="left">
							eosgarden &copy; 2002 - 2007 | <a href="http://www.eosgarden.com/" title="eosgarden.com">www.eosgarden.com</a> | <?php echo( $GLOBALS['DIV']->linkEmail( 'info@eosgarden.com' ) ); ?>
						</div>
						<div class="right">
							boulevard de grancy 19 | 1006 lausanne | switzerland
						</div>
					</div>
				</div>
				<!-- Footer - END -->
				
			</div>
			<!-- Main frame - END -->
			
		</div>
		<!-- Main container - END -->
		
	</body>
	
</html>
<?php
	
	// Check DB object
	if (isset($DB) && is_object($DB)) {
		
		// DB disconnect
		$DB->db_close();
	}
?>
