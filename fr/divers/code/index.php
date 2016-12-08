<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Add CSS
	$PAGE->addCSS('menu/menu.css');
	
	// Start page
	$PAGE->start();
?>
							<h1>Code divers</h1>
							<h2>Menu CSS</h2>
							<div>
								Cet example de menu déroulant est généré uniquement à partir de feuilles de styles CSS. Aucun JavaScript n'est utilisé.<br />
								Malheusement, Internet Exploser n'est pas encore capable de l'afficher correctement, l'état :hover sur un LI n'étant pas reconnu.
							</div>
							<div>
								<div id="rootline">
									<ul id="rootlineFirstLevel" class="adxm">
										<li class="container">
											<a href="#">Section 1</a>
											<ul>
												<li><a href="#">Section 1</a></li>
												<li><a href="#">Section 2</a></li>
												<li class="container">
													<a href="#">Section 3</a>
													<ul>
														<li><a href="#">Section 1 (avec un titre super long juste pour rire...)</a></li>
														<li class="container">
															<a href="#">Section 2</a>
															<ul>
																<li><a href="#">Section 1</a></li>
																<li><a href="#">Section 2</a></li>
																<li><a href="#">Section 3</a></li>
																<li><a href="#">Section 4</a></li>
																<li><a href="#">Section 5</a></li>
															</ul>
														</li>
														<li><a href="#">Section 3</a></li>
														<li><a href="#">Section 4</a></li>
														<li><a href="#">Section 5</a></li>
													</ul>
												</li>
												<li><a href="#">Section 4</a></li>
												<li><a href="#">Section 5</a></li>
											</ul>
										</li>
										<li><a href="#">Section 2</a></li>
										<li><a href="#">Section 3</a></li>
										<li><a href="#">Section 4</a></li>
										<li class="container">
											<a href="#">Section 5</a>
											<ul>
												<li><a href="#">Section 1</a></li>
												<li><a href="#">Section 2</a></li>
												<li><a href="#">Section 3</a></li>
												<li><a href="#">Section 4</a></li>
												<li><a href="#">Section 5</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
