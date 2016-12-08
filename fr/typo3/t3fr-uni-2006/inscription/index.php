<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
	
	// Form class
	require_once(PATH_mod . 't3fruni2006/class.t3fruni2006_register.php');
	
	// New form object
	$form = new t3fruni2006_register();
?>
							<div>
								<img src="/uploads/images/t3fr-uni-2006-banner.gif" alt="T3FRUniversity 2006" width="700" height="250" /><br />
							</div>
							<h1>T3FRUniversity 2006 - Inscription</h1>
							<div>
								<?php
									echo($form->getStatus());
								?>
								<?php
									if ($form->complete) {
								?>
								<div>
									<span class="strong">Merci de vous être inscrit.</span><br />
									Un email de confirmation vient de vous être envoyé.<br />
									Le montant total pour votre inscription est de <span class="strong">EUR <?php echo($form->amount['EUR']); ?>.- (CHF <?php echo($form->amount['CHF']); ?>.-)</span>
								</div>
								<h2>Modalités de paiement</h2>
								<?php
										if ($form->payment == 1) {
								?>
								<div>
									Vous avez choisi de payer par virement bancaire.
								</div>
								<h3>Paiement depuis la suisse</h3>
								<div class="italic">
									Jean-David Gadina<br />
									1131 Tolochenaz<br />
									CCP 17-52307-4
								</div>
								<h3>Paiement depuis l'étranger</h3>
								<div class="italic">
									IBAN électronique: CH0909000000170523074<br />
									IBAN papier: IBAN CH09 0900 0000 1705 2307 4<br />
									Code SWIFT / BIC: POFICHBEXXX<br />
									Banque du bénéficiaire: Swiss Post, Postfinance, Nordring 8, CH-3030 Bern<br />
									Numéro Clearing: 09000
								</div>
								<div>
									Merci d'apporter une confirmation du paiement, au cas où celui-ci n'aurait pas été réceptionné avant le début de la manifestation.
								</div>
								<?php
										} else {
								?>
								<div>
									Vous avez choisi de payer sur place. Nous vous rappelons que le montant total devra être payé en francs suisse, dès votre arrivée.
								</div>
								<?php
										}
									} else {
								?>
								<div class="box-red">
									<h2>Inscriptions fermées</h2>
									<div>
										Les inscriptions sont <span class="strong">fermées</span>.<br />
										Bien qu'il reste quelques places libres, la logistique ne nous permet malheureusement plus d'accueillir des personnes supplémentaires.<br />
										<span class="strong">Il n'est donc plus du tout possible de s'inscrire pour l'édition 2006 de l'université TYPO3 2006</span>.
									</div>
									<div>
										<span class="strong">Merci de votre compréhension, et merci pour votre soutien.</span>
									</div>
									<div>
										
									</div>
								</div>
								<div class="clearer">
									<h2 class="border">Informations importantes</h2>
									<h3>Prix</h3>
									<div>
									<img src="/uploads/images/t3fr-uni-2006/conference.jpg" alt="Atelier" width="225" height="150" class="right-notop" />
										Le prix d'entrée de cette université TYPO3 2006 a été fixé à <span class="strong">EUR 20</span>.- (CHF 30.-) la journée, et <span class="strong">EUR 65.-</span> (CHF 100.-) pour la semaine complète.
									</div>
									<div>
										Le paiement peut s'effectuer soit par <span class="strong">virement bancaire</span> (les coordonnées du compte vous seront communiquées une fois votre inscription enregistrée), soit <span class="strong">sur place</span>, le premier jour, en francs suisses uniquement.
									</div>
									<h3>Repas</h3>
									<div>
										Vous avez la possibilité, si vous le désirez, de <span class="strong">manger sur place</span> à midi. Le prix des repas est CHF 15.- par jour.
									</div>
									<div>
										Les repas étant commandés à l'avance, le paiement s'effectuera dans son intégralité le premier jour, en francs suisses.
									</div>
									<h3>Places</h3>
									<div>
										Pour des raisons logistiques, le nombre de places disponibles est <span class="strong">limité à 100 par journée</span>.
									</div>
									<div>
										Plus aucune inscription ne sera possible une fois ce nombre atteint.
									</div>
									<h3>Important</h3>
									<div>
										Si vous venez d'un autre pays que la Suisse, assurez-vous d'avoir en votre possession un <span class="strong">adaptateur</span> pour les prises de courant (220 volts - SEV 1011).
									</div>
									<div>
										<span class="strong">Auncun adaptateur ne sera fourni sur place!</span>
									</div>
									<div>
										<img src="/uploads/images/t3fr-uni-2006/electric-plug.gif" alt="SEV 1011" width="200" height="95" />
									</div>
								</div>
								<form method="post" enctype="multipart/form-data" action="<?php echo($_SERVER['PHP_SELF']); ?>">
									<div class="clearer">
										<div class="col-left-small">
											<h2 class="border">Informations personnelles</h2>
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
												<span class="label">Pseudo:</span><br />
												<?php
													echo($form->getError('nickname'));
												?>
												<input name="nickname" id="nickname" type="text" size="40" value="<?php echo($form->getValue('nickname')); ?>" />
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
													echo($form->getError('phone'));
												?>
												<input name="phone" id="phone" type="text" size="40" value="<?php echo($form->getValue('phone')); ?>" />
											</div>
											<div>
												<span class="label">Site internet:</span><br />
												<?php
													echo($form->getError('www'));
												?>
												<input name="www" id="www" type="text" size="40" value="<?php echo($form->getValue('www')); ?>" />
											</div>
											<h2 class="border">Niveau TYPO3</h2>
											<div>
												<?php
													echo($form->getError('typo3'));
												?>
												<input name="typo3" id="typo3-1" type="radio" value="1" /> Débutant<br />
												<input name="typo3" id="typo3-2" type="radio" value="2" /> Intermédiaire<br />
												<input name="typo3" id="typo3-3" type="radio" value="3" /> Avancé
											</div>
											<h2 class="border">Intérêts</h2>
											<div>
												<?php
													echo($form->getError('interest'));
												?>
												<input name="interest[]" id="interest-1" type="checkbox" value="1" /> Installation / Configuration<br />
												<input name="interest[]" id="interest-2" type="checkbox" value="2" /> Développement<br />
												<input name="interest[]" id="interest-3" type="checkbox" value="4" /> Ergonomie (navig + templates)<br />
												<input name="interest[]" id="interest-4" type="checkbox" value="8" /> Contenu (édition)
											</div>
											<div>
												<input name="submit" id="submit" type="submit" value="Envoyer mon inscription" />
											</div>
										</div>
										<div class="col-right-big">
											<h2 class="border">Je m'inscris pour les dates suivantes</h2>
											<div>
												<?php
													echo($form->getError('dates'));
												?>
												<?php
													echo($form->getPlaces(1));
													echo($form->getPlaces(2));
													echo($form->getPlaces(4));
													echo($form->getPlaces(8));
													echo($form->getPlaces(16));
												?>
											</div>
											<h2 class="border">Je désire manger à midi les jours suivants</h2>
											<div>
												<?php
													echo($form->getError('lunch'));
												?>
												<input name="lunch[]" id="lunch-1" type="checkbox" value="1" /> Lundi - 16 octobre 2006<br />
												<input name="lunch[]" id="lunch-2" type="checkbox" value="2" /> Mardi - 17 octobre 2006<br />
												<input name="lunch[]" id="lunch-3" type="checkbox" value="4" /> Mercredi - 18 octobre 2006<br />
												<input name="lunch[]" id="lunch-4" type="checkbox" value="8" /> Jeudi - 19 octobre 2006<br />
												<input name="lunch[]" id="lunch-5" type="checkbox" value="16" /> Vendredi - 20 octobre 2006
											</div>
											<h2 class="border">Matériel</h2>
											<div>
												<?php
													echo($form->getError('notebook'));
												?>
												<input name="notebook" id="notebook" type="checkbox" value="1" /> Je possède un ordinateur portable<br />
												<?php
													echo($form->getError('wifi'));
												?>
												<input name="wifi" id="wifi" type="checkbox" value="1" /> Je possède un équipement wifi<br />
												<span class="label">Si vous emmenez votre portable, indiquez dans le champ ci-dessous votre adresse mac, pour que nous puissions vous prévoir une connexion au réseau:</span><br />
												<input name="mac_address" id="mac_address" type="text" size="40" value="<?php echo($form->getValue('mac_address')); ?>" />
											</div>
											<h2 class="border">Système d'exploitation</h2>
											<div>
												<?php
													echo($form->getError('os'));
												?>
												<input name="os" id="os-linux" type="radio" value="1" /> Linux<br />
												<input name="os" id="os-win" type="radio" value="2" /> Windows<br />
												<input name="os" id="os-mac" type="radio" value="3" /> Mac OS X
											</div>
											<h2 class="border">Mode de paiement</h2>
											<div>
												<?php
													echo($form->getError('payment'));
												?>
												<input name="payment" id="payment-1" type="radio" value="1" /> Virement bancaire<br />
												<input name="payment" id="payment-2" type="radio" value="2" /> Sur place (CHF uniquement)<br />
											</div>
											<h2 class="border">Remarques / Suggestions</h2>
											<div>
												<?php
													echo($form->getError('comments'));
												?>
												<textarea id="comments" name="comments" rows="10" cols="60"><?php echo($form->getValue('comments')); ?></textarea>
											</div>
										</div>
									</div>
								</form>
								<?php
									}
								?>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
