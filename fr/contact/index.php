<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
	
	// Form class
	require_once(PATH_mod . 'contact/class.contact.php');
	
	// New form object
	$form = new contact();
?>
							<div class="clearer">
								<div class="col-left-small">
									<h2 class="border">eosgarden</h2>
									<h3>jean-david gadina / macmade.net</h3>
									<h3>luigi iannitelli / kryzalid.com</h3>
									<div>
										boulevard de grancy 19<br />
										1006 lausanne<br />
										switzerland
									</div>
									<div>
										+41 (21) 601-9030<br />
										<?php echo( $GLOBALS['DIV']->linkEmail( 'info@eosgarden.com' ) ); ?><br />
										<a href="http://www.eosgarden.com/" title="eosgarden.com">www.eosgarden.com</a><br />
										<a href="https://www.xing.com/profile/JeanDavid_Gadina" title="Réseau XING">page personnelle xing</a>
									</div>
								</div>
								<div class="col-right-big">
									<h1 class="border-red">Formulaire de contact</h1>
									<?php
										echo($form->getStatus());
									?>
									<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
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
											<span class="label">Email:</span><br />
											<?php
												echo($form->getError('email'));
											?>
											<input name="email" id="email" type="text" size="40" value="<?php echo($form->getValue('email')); ?>" />
										</div>
										<div>
											<span class="label">Anti-spam (recopiez le code ci-dessous):</span><br />
											<?php
												echo($form->getError('captcha'));
											?>
											<input name="captcha" id="captcha" type="text" size="10" value="" /><br />
										</div>
										<div>
											<img src="<?php echo(str_replace(PATH_site,'/',PATH_lib) . 'class.captcha.php'); ?>" alt="captcha" width="100" height="25" />
										</div>
										<div>
											<span class="label">Message:</span><br />
											<?php
												echo($form->getError('message'));
											?>
											<textarea id="message" name="message" rows="10" cols="60"><?php echo($form->getValue('message')); ?></textarea>
										</div>
										<div>
											<input name="submit" id="submit" type="submit" value="Envoyer le message" />
										</div>
									</form>
								</div>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
