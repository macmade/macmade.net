<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>Extensions TYPO3 - Roadmap</h1>
							<h2 class="italic">«It's not a bug, it's a missing feature»</h2>
							<h3>Warnings</h3>
							<div class="warning">
								New flexform data on Typo3 4.0 (index attribute on vDEF type nodes)
							</div>
							<div class="warning">
								LLXML in UTF-8 no BOM
							</div>
							<h2>Developer API</h2>
							<ul>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add PHP5 compatibility</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Fix vCard functions</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add Keizo code for generating pictures</span>
								</li>
								<li>
									[X] Add checkArrayKeys function
								</li>
								<li>
									[X] Directory deletion functions
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Valid XHTML output</span>
								</li>
								<li>
									[X] Add icon option to fe_buildSwapClassesJSCode
								</li>
								<li>
									[X] Clean output from fe_makeStyledContent
								</li>
								<li>
									[X] Add function for PI searchbox
								</li>
								<li>
									[X] Add function for PI browsebox
								</li>
							</ul>
							<h2>OpenLDAP / macmade.net</h2>
							<ul>
								<li>
									[X] Add ActiveDirectory support
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Delete users section</span>
								</li>
								<li>
									[X] Remove nospace from DN and Search
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Get DN using ldap_get_dn()</span>
								</li>
								<li>
									[X] UTF8
								</li>
								<li>
									[X] Add LDAP-TLS support
								</li>
								<li>
									[X] Direct importation option
								</li>
								<li>
									[X] Stop authentication option
								</li>
								<li>
									[X] Add PHP5 compatibility
								</li>
								<li>
									[X] LLXML
								</li>
								<li>
									[X] CSH
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] CSH L10N - FR</span>
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Direct update at authentication time (?)</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] AddressBook sync conduit</span>
								</li>
							</ul>
							<h2>FE MP3 Player</h2>
							<ul>
								<li>
									[X] Add new skin
								</li>
								<li>
									[X] Increase upload limit
								</li>
								<li>
									[X] Fix PI1 XML DS
								</li>
								<li>
									[X] Add more Flash parameters
								</li>
								<li>
									[X] Add option to read MP3s from a given directory
								</li>
								<li>
									[X] Add option to set MP3 path instead of uploading file
								</li>
								<li>
									[X] Fix rootlevel bug
								</li>
								<li>
									[X] Fix RealURL bug
								</li>
								<li>
									[X] Add PHP5 compatibility
								</li>
								<li>
									[X] Add CSH
								</li>
								<li>
									[X] Add option to read MP3 files from a PodCast
								</li>
								<li>
									[X] Add explicit support for nbo_podcast
								</li>
								<li>
									[X] Fix bug with new flexform data on Typo3 4.0 (<span class="red">QUICK PUBLISH!!!</span> - <span class="green">OK</span>)
								</li>
								<li>
									[X] LLXML
								</li>
								<li>
									[X] Better support for nbo_podcast
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Valid XHTML output (<a href="http://forum.typo3.fr/index.php?showtopic=4033">http://forum.typo3.fr/index.php?showtopic=4033</a>)</span>
								</li>
								<li>
									[X] Add option to disable HTML listing
								</li>
								<li>
									[X] Add new version of the player
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add XSPF support</span>
								</li>
								<li>
									[X] Add contextual skin options in PI1 XML DS
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add L10N - DK</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add hide feature in flexform</span>
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Coordination with ECT (<a href="http://wiki.typo3.org/index.php/Podcast%29">http://wiki.typo3.org/index.php/Podcast</a>)</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add TS implementation</span>
								</li>
							</ul>
							<h2>Flash SlideShow</h2>
							<ul>
								<li>
									[X] Fix bug with new flexform data on Typo3 4.0 (<span class="red">QUICK PUBLISH!!!</span> - <span class="green">OK</span>)
								</li>
								<li>
									[X] Add ID for XML page (<span class="red">QUICK PUBLISH!!!</span> - <span class="green">OK</span>)
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Increase upload limit</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Fix PI1 XML DS</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add more Flash parameters</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Fix rootlevel bug</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Fix RealURL bug</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add option to specifiy multiple links when reading from path</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add PHP5 compatibility</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add CSH</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] LLXML</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Valid XHTML output (<a href="http://forum.typo3.fr/index.php?showtopic=4033">http://forum.typo3.fr/index.php?showtopic=4033</a>)</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add L10N - DK</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add TS implementation</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add hide feature in flexform</span>
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] JavaScript SlideShow</span>
								</li>
							</ul>
							<h2>FLV Player</h2>
							<ul>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Increase upload limit</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Fix PI1 XML DS</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add more Flash parameters</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Fix rootlevel bug</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Fix RealURL bug</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add PHP5 compatibility</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add CSH</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] LLXML</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Valid XHTML output (<a href="http://forum.typo3.fr/index.php?showtopic=4033">http://forum.typo3.fr/index.php?showtopic=4033</a>)</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add L10N - DK</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add TS implementation</span>
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span>
								</li>
							</ul>
							<h2>Flash Page Header</h2>
							<ul>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add more Flash parameters</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Fix rootlevel bug</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Fix RealURL bug</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add PHP5 compatibility</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add CSH</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] LLXML</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Valid XHTML output (<a href="http://forum.typo3.fr/index.php?showtopic=4033">http://forum.typo3.fr/index.php?showtopic=4033</a>)</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] New SWF file with automatic picture import</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] TS example for image generation</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] L10N features</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] TS override</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add text field</span>
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span>
								</li>
							</ul>
							<h2>LoginBox</h2>
							<ul>
								<li>
									[X] Check redirection
								</li>
								<li>
									[X] Add redirection for small login box
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span> - <span class="green">OK</span>
								</li>
								<li>
									[X] Add L10N - DK
								</li>
								<li>
									[X] Add permalogin
								</li>
								<li>
									[X] LLXML
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span> - <span class="green">OK</span>
								</li>
								<li>
									[X] Fix LLXML in wizard
								</li>
								<li>
									[X] Add field classes
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span> - <span class="green">OK</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add MD5 password feature</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add PHP5 compatibility</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add CSH</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Valid XHTML output</span>
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add multiple starting points</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add multiple redirections (?)</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Restrict login with frontend groups</span>
										
								</li>
							</ul>
							<h2>DropDown SiteMap</h2>
							<ul>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Accessibility features (title attribute on +/- signs)</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Valid XHTML output</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Option to include pages «not in menu»</span>
										
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Lang disable flag on PI1 XML DS</span>
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span>
								</li>
							</ul>
							<h2>Home Directories</h2>
							<ul>
								<li>
									[X] Directory listing
								</li>
								<li>
									[X] Add L10N - FR
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span> - <span class="green">OK</span>
								</li>
							</ul>
							<h2>CSS Select</h2>
							<ul>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Stop inheritance option (<a href="http://cvs.cannonbose.com/cgi-bin/viewcvs.cgi/typo3/css_select/%29">http://cvs.cannonbose.com/cgi-bin/viewcvs.cgi/typo3/css_select/</a>)</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Valid XHTML output</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Definition of CSSDIR through Page TSConfig</span>
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span>
								</li>
							</ul>
							<h2>JS Select
								</h2>
							<ul>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Stop inheritance option</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Valid XHTML output</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Definition of JSDIR through Page TSConfig</span>
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span>
								</li>
							</ul>
							<h2>Set Page Type CSM
								</h2>
							<ul>
								<li>
									<span class="strong">[&nbsp;&nbsp;] LLXML</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] L10N encoding fix</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add L10N - DK</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Check icons in mods</span>
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span>
								</li>
							</ul>
							<h2>New Record Wizard CSM
								</h2>
							<ul>
								<li>
									<span class="strong">[&nbsp;&nbsp;] LLXML</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] L10N encoding fix</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Add L10N - DK</span>
								</li>
								<li>
									<span class="strong">[&nbsp;&nbsp;] Check icons in mods</span>
								</li>
								<li>
									- <span class="red">PUBLISH STATE</span>
								</li>
							</ul>
<?php
	
	// End page
	$PAGE->end();
?>
