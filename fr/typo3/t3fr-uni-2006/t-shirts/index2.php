<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
	
	// Form class
	require_once(PATH_mod . 't3fruni2006/class.t3fruni2006_tshirts.php');
	
	// New form object
	$form = new t3fruni2006_tshirts();

?>
							<div>
								<img src="/uploads/images/t3fr-uni-2006-banner.gif" alt="T3FRUniversity 2006" width="700" height="250" /><br />
							</div>
							<h1>T3FRUniversity 2006 - Commande de T-Shirts</h1>
							<div class="clearer">
								<h2>Informations</h2>
								<div>
									Le prix des t-shirts sera communiqué <span class="strong">prochainement</span>.<br />
									Le formulaire de commande sera disponible à cette date.
								</div>
							</div>
							<div class="clearer">
								<h2 class="border">Modèles hommes</h2>
								<div class="left-4col">
									<h3>Fit-T</h3>
									<div>
										<span class="strong">Couleur:</span><br />
										Noir<br />
										<span class="strong">Impression:</span><br />
										Sérigraphie sur coeur<br />
										<span class="strong">Tailles:</span><br />
										XS - S - M - L - XL - XXL<br />
										<span class="strong">Prix:</span><br />
										CHF XX.-<br />
										<span class="strong">Description:</span><br />
										160 g/m2 - slim fit<br />100% coton ring-spun<br />GY: 85% coton - 15% viscose
									</div>
								</div>
								<div class="left-4col">
									<img src="/uploads/images/t3fr-uni-2006/t-shirts/M-01.png" alt="Modele homme 01" width="148" height="250" />
								</div>
								<div class="left-4col">
									<h3>Fit-T Hoody</h3>
									<div>
										<span class="strong">Couleur:</span><br />
										Noir<br />
										<span class="strong">Impression:</span><br />
										Sérigraphie sur manche<br />
										<span class="strong">Tailles:</span><br />
										XS - S - M - L - XL - XXL<br />
										<span class="strong">Prix:</span><br />
										CHF XX.-<br />
										<span class="strong">Description:</span><br />
										160 g/m2 - slim fit - capuche<br />100% coton ring-spun<br />GY: 85% coton - 15% viscose
									</div>
								</div>
								<div class="left-4col">
									<img src="/uploads/images/t3fr-uni-2006/t-shirts/M-02.png" alt="Modele homme 02" width="148" height="250" />
								</div>
							</div>
							<div class="clearer">
								<h2 class="border">Modèles femmes</h2>
								<div class="left-4col">
									<h3>Beauty Crew Neck</h3>
									<div>
										<span class="strong">Couleur:</span><br />
										Noir<br />
										<span class="strong">Impression:</span><br />
										Sérigraphie sur coeur<br />
										<span class="strong">Tailles:</span><br />
										XS - S - M - L - XL<br />
										<span class="strong">Prix:</span><br />
										CHF XX.-<br />
										<span class="strong">Description:</span><br />
										Col rond avec élasthanne - slim fit<br />95% coton peigné ring-spun - 5% élasthanne
									</div>
								</div>
								<div class="left-4col">
									<img src="/uploads/images/t3fr-uni-2006/t-shirts/F-01.png" alt="Modele femme 01" width="148" height="250" />
								</div>
								<div class="left-4col">
									<h3>Elegance Heavy-T</h3>
									<div>
										<span class="strong">Couleur:</span><br />
										Noir<br />
										<span class="strong">Impression:</span><br />
										Sérigraphie sur manche<br />
										<span class="strong">Tailles:</span><br />
										S - M - L - XL<br />
										<span class="strong">Prix:</span><br />
										CHF XX.-<br />
										<span class="strong">Description:</span><br />
										Manches 3/4 100% coton - comfort cut<br />100% coton peigné ring-spun
									</div>
								</div>
								<div class="left-4col">
									<img src="/uploads/images/t3fr-uni-2006/t-shirts/F-02.png" alt="Modele femme 02" width="165" height="250" />
								</div>
							</div>
							<div class="clearer">
								<h3>Livraison &amp; frais de ports</h3>
								<div>
									Pour des raisons logistiques, la livraison des articles commandés sera effectuée <span class="strong">3 semaine à 1 mois après la fermeture de l'université T3FR</span>.<br />
									Les prix indiqués s'entendent <span class="strong">sans les frais de port</span> qui seront facturés <span class="strong">en sus</span> lors de l'expédition (env 5 CHF).
								</div>
							</div>
							<div class="clearer">
								<h2 class="border">Informations</h2>
								<div class="left-4col">
									<h3>Textiles</h3>
									<div>
										Dans la continuité de l'université T3FR ou la communauté, l'échange et le partage sont maîtres mots, ils nous semblais important de vous fournir   
									</div>
								</div>
								<div class="left-4col">
									<img src="/uploads/images/t3fr-uni-2006/t-shirts/M-01.png" alt="Modele homme 01" width="148" height="250" />
								</div>
								<div class="left-4col">
									<h3>Impression</h3>
									<div>
										Texte Lowrider
									</div>
								</div>
								<div class="left-4col">
									<img src="/uploads/images/t3fr-uni-2006/t-shirts/F-02.png" alt="Modele femme 02" width="165" height="250" />
								</div>
							</div>
							<div class="clearer">
								<h3>Livraison & frais de ports</h3>
								<div>
									Pour des raisons logistiques, la livraison des articles commandés sera effectuée <span class="strong">3 semaine à 1 mois après la fermeture de l'université T3FR</span>.<br /><br />
									Les prix indiqués s'entendent sans <span class="strong">les frais de port</span> qui seront facturés <span class="strong">en sus</span> lors de l'expédition.
								</div>
							</div>

							<?php
								echo($form->getStatus());
							?>
							<?php
								if ($form->complete) {
							?>
								<form method="post" enctype="multipart/form-data" action="https://www.paypal.com/cgi-bin/webscr">
									<div>
										<input type="hidden" name="cmd" value="_xclick" />
										<input type="hidden" name="business" value="<?php echo($form->email); ?>" />
										<input type="hidden" name="item_name" value="<?php echo($form->itemName); ?>" />
										<input type="hidden" name="currency_code" value="<?php echo($form->currency); ?>" />
										<input type="hidden" name="amount" value="<?php echo($form->amount); ?>" />
										<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
									</div>
								</form>
								<?php
									} else {
								?>
								<form method="post" enctype="multipart/form-data" action="<?php echo($_SERVER['PHP_SELF']); ?>">
									<div class="clearer">
										<div class="col-left-small">
											<h2 class="border">Commande</h2>
											<h3>Informations personnelles</h3>
											<div>
												<span class="label">Prénom:</span><br />
												<?php
													echo($form->getError('name_first'));
												?>
												<input name="name_first" id="name_first" type="text" size="40" value="<?php echo($form->getValue('name_first')); ?>" />
											</div>
											<div>
												<span class="label">Nom:</span><br />
												<?php
													echo($form->getError('name_last'));
												?>
												<input name="name_last" id="name_last" type="text" size="40" value="<?php echo($form->getValue('name_last')); ?>" />
											</div>
											<div>
												<span class="label">Société:</span><br />
												<?php
													echo($form->getError('company'));
												?>
												<input name="company" id="company" type="text" size="40" value="<?php echo($form->getValue('company')); ?>" />
											</div>
											<div>
												<span class="label">Adresse:</span><br />
												<?php
													echo($form->getError('address'));
												?>
												<input name="address" id="address" type="text" size="40" value="<?php echo($form->getValue('address')); ?>" />
											</div>
											<div>
												<span class="label">NPA / Localité:</span><br />
												<?php
													echo($form->getError('zip'));
													echo($form->getError('city'));
												?>
												<input name="zip" id="zip" type="text" size="10" value="<?php echo($form->getValue('zip')); ?>" /> - <input name="city" id="city" type="text" size="20" value="<?php echo($form->getValue('city')); ?>" />
											</div>
											<div>
												<span class="label">Pays:</span><br />
												<?php
													echo($form->getError('country'));
												?>
												<input name="country" id="country" type="text" size="40" value="<?php echo($form->getValue('country')); ?>" />
											</div>
											<div>
												<span class="label">Email:</span><br />
												<?php
													echo($form->getError('email'));
												?>
												<input name="email" id="email" type="text" size="40" value="<?php echo($form->getValue('email')); ?>" />
											</div>
											<div>
												<span class="label">Téléphone:</span><br />
												<?php
													echo($form->getError('tel'));
												?>
												<input name="tel" id="tel" type="text" size="40" value="<?php echo($form->getValue('tel')); ?>" />
											</div>
											<div>
												<span class="label">Site internet:</span><br />
												<?php
													echo($form->getError('www'));
												?>
												<input name="www" id="www" type="text" size="40" value="<?php echo($form->getValue('www')); ?>" />
											</div>
											<div>
												<input name="submit" id="submit" type="submit" value="Envoyer ma commande" />
											</div>
										</div>
										<div class="col-right-big">
											<h2 class="border">Je commande le(s) article(s) suivant(s)</h2>
											<h3>Homme - Fit-T</h3>
											<fieldset>
												<legend>€ 50.- / Pce</legend>
													<input name="fitt_xs" id="fitt_xs" type="text" size="5" value="" /> : <span>XS</span> | 
													<input name="fitt_s" id="fitt_s" type="text" size="5" value="" /> : <span>S</span> | 
													<input name="fitt_m" id="fitt_m" type="text" size="5" value="" /> : <span>M</span> | 
													<input name="fitt_l" id="fitt_l" type="text" size="5" value="" /> : <span>L</span> | 
													<input name="fitt_xl" id="fitt_xl" type="text" size="5" value="" /> : <span>XL</span> | 
													<input name="fitt_xxl" id="fitt_xxl" type="text" size="5" value="" /> : <span>XXL</span>
											</fieldset>
											<h3>Homme - Fit-T Hoody</h3>
											<fieldset>
												<legend>€ 50.- / Pce</legend>
													<input name="fitthoody_xs" id="fitthoody_xs" type="text" size="5" value="" /> : <span>XS</span> | 
													<input name="fitthoody_s" id="fitthoody_s" type="text" size="5" value="" /> : <span>S</span> | 
													<input name="fitthoody_m" id="fitthoody_m" type="text" size="5" value="" /> : <span>M</span> | 
													<input name="fitthoody_l" id="fitthoody_l" type="text" size="5" value="" /> : <span>L</span> | 
													<input name="fitthoody_xl" id="fitthoody_xl" type="text" size="5" value="" /> : <span>XL</span> | 
													<input name="fitthoody_xxl" id="fitthoody_xxl" type="text" size="5" value="" /> : <span>XXL</span> | 
											</fieldset>

											<h3>Femme - Beauty Crew Neck</h3>
											<fieldset>
												<legend>€ 50.- / Pce</legend>
													<input name="beauty_xs" id="beauty_xs" type="text" size="5" value="" /> : <span>XS</span> | 
													<input name="beauty_s" id="beauty_s" type="text" size="5" value="" /> : <span>S</span> | 
													<input name="beauty_m" id="beauty_m" type="text" size="5" value="" /> : <span>M</span> | 
													<input name="beauty_l" id="beauty_l" type="text" size="5" value="" /> : <span>L</span> | 
													<input name="beauty_xl" id="beauty_xl" type="text" size="5" value="" /> : <span>XL</span>
											</fieldset>

											<h3>Femme - Elegance Heavy-T</h3>
											<fieldset>
												<legend>€ 50.- / Pce</legend>
													<input name="elegance_xs" id="elegance_xs" type="text" size="5" value="" /> : <span>XS</span> | 
													<input name="elegance_s" id="elegance_s" type="text" size="5" value="" /> : <span>S</span> | 
													<input name="elegance_m" id="elegance_m" type="text" size="5" value="" /> : <span>M</span> | 
													<input name="elegance_l" id="elegance_l" type="text" size="5" value="" /> : <span>L</span> | 
													<input name="elegance_xl" id="elegance_xl" type="text" size="5" value="" /> : <span>XL</span>
											</fieldset>
										</div>
									</div>
								</form>
								<?php
									}
								?>

<?php
	
	// End page
	$PAGE->end();
?>
