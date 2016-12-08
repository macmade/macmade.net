<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>Dashboard Widgets</h1>
							<h2>Hash</h2>
							<div>
								The Dashboard «Hash» widget allows you to quickly display hash values for strings.<br />
								It actually supports MD5, SHA-1, SHA-256, CRC-32, Base64 (encode &amp; decode) and URL Encoding (encode &amp; decode).
							</div>
							<div>
								<img src="/uploads/images/widgets/widget-hash.gif" alt="Hash widget" width="638" height="75" />
							</div>
							<div>
								The hash functions come from the <a href="http://www.webtoolkit.info/" title="WebToolkit">WebToolkit</a> website. Many thanks to the author of those functions.
							</div>
							<div>
								<a href="/uploads/widgets/Hash.zip" title="Download Hash Widget">Download Hash Widget</a>
							</div>
							<h3>Requirements</h3>
							<div>
								You need at least Mac OS X 10.4.3 in order to run this widget. Mac OS X 10.5 is supported.
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
