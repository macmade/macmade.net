<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>Le manifeste GNU</h1>
							<div class="box">
								<span class="strong"><a href="http://www.mirror5.com/philosophy/philosophy.fr.html" title="Autres textes à lire">Autres textes à lire</a></span> - Versions: [ <a href="http://www.mirror5.com/gnu/manifesto.html" title="Anglais">Anglais</a> | <a href="http://www.mirror5.com/gnu/manifesto.fr.html" title="Français">Français</a> | <a href="http://www.mirror5.com/gnu/manifesto.nl.html" title="Néerlandais">Néerlandais</a> ]
							</div>
							<div>
								Copyright (C) 1985, 1993 Free Software Foundation, Inc.
							</div>
							<div>
								Permission is granted to anyone to make or distribute verbatim copies of this document, in any medium, provided that the copyright notice and permission notice are preserved, and that the distributor grants the recipient permission for further redistribution as permitted by this notice.
							</div>
							<div class="border">
								Modified versions may not be made.
							</div>
							<div>
								Copyright © 1985, 1993 Free Software Foundation, Inc.
							</div>
							<div>
								Autorisation est accordée à toute personne de créer et distribuer telles quelles des copies de ce document, dans n'importe quel format, sous condition que cette notice de copyright et d'autorisation soit préservée, et que le distributeur accorde ces mêmes libertés au destinataire pour d'éventuelles redistributions telles que garanties par cette notice.
							</div>
							<div class="border">
								Aucune modification ne peut être faite.
							</div>
							<h2>The GNU Manifesto</h2>
							<div>
								Le manifeste GNU, reproduit ci-dessous, a été écrit par <a href="http://www.stallman.org/" title="Richard Stallman">Richard Stallman</a> au commencement du projet GNU pour encourager la participation et le soutien de tous. Au cours des premières années, il y a eu quelques petites mises à jour pour tenir compte des développements, mais il nous semble maintenant plus judicieux de le laisser en l'état. Nous avons appris depuis qu'il y avait quelques incompréhensions ; celles-ci peuvent être corrigées en changeant quelques mots. Des notes de bas de page ajoutées en 1993 aident à clarifier ces points. Pour les dernières informations sur les logiciels GNU actuellement disponibles, veuillez vous référer à au <a href="http://www.mirror5.com/home.html" title="Site officiel">site officiel</a>, en particulier la <a href="http://www.mirror5.com/software/software.html" title="Liste de logiciels">liste de logiciels</a>.
							</div>
							<h3>Qu'est ce que GNU&nbsp;? Gnu N'est pas Unix&nbsp;!</h3>
							<div>
								<a href="http://www.mirror5.com/graphics/whatsgnu.html"><img src="/uploads/images/gnu.jpg" alt="GNU" height="120" width="125" class="right" /></a>
							</div>
							<div>
								Des traductions du Manifeste GNU sont disponibles en <a href="http://www.gnu.de/mani-ger.html" title="Allemand">Allemand</a>, Coréen (<a href="http://www.kldp.org/gnu/manifesto-k.html" title="Coréen 1">1</a>, <a href="http://my.dreamwiz.com/bangjy/gnumanifesto.html" title="Coréen 2">2</a>), <a href="http://www.dtext.com/hache/manifeste-GNU.html" title="Français">Français</a>, <a href="http://animal.unipv.it/gnu/manifesto.html" title="Italien">Italien</a>, <a href="http://www.mirror5.com/japan/manifesto-1993j-plain.html" title="Japonais">Japonais</a>, <a href="http://www-ru.gnu.org.ru/manifesto.html" title="Russe">Russe</a>, et <a href="http://www.df.lth.se/~triad/artiklar/GNU_Manifesto-swe.html" title="Suédois">Suédois</a>.
							</div>
								GNU, l'acronyme de GNU's Not Unix (GNU n'est pas Unix), est le nom du système complet de logiciels compatible Unix que j'écris pour pouvoir le donner librement à tous ceux qui en auraient besoin. <a name="r1" href="#f1" title="Aller à la note correspondante">(1)</a> De nombreux bénévoles m'aident. Les contributions en temps, en argent, en logiciels et en matériel sont les bienvenues.
							<div>
							</div>
							<div>
								Pour l'instant, nous avons un éditeur de texte, Emacs, utilisant le Lisp pour écrire des commandes d'édition, un débogueur, un générateur d'analyseurs syntaxiques compatible avec YACC, un éditeur de liens, et environ trente-cinq autres utilitaires. Un shell (un interprète de commandes) est presque terminé. Un nouveau compilateur C portable et optimisé s'est compilé lui-même et devrait être disponible cette année. Un premier noyau existe, mais nécessite plus de fonctions pour émuler Unix. Quand le noyau et le compilateur seront terminés, il sera possible de distribuer un système GNU propice au développement. Nous utiliserons TeX comme formateur de textes, mais un nroff est en cours de développement. Nous utiliserons aussi le système libre et portable X Window System. Par la suite, nous ajouterons un Common Lisp portable, le jeu Empire, un tableur et des centaines d'autres choses, plus une documentation en ligne. Nous espérons fournir, finalement, tout ce qui peut être utile et qui est normalement inclus dans un système Unix et plus encore.
							</div>
							<div>
								GNU pourra exécuter des programmes Unix mais ne sera pas identique à Unix. Nous ferons toutes les améliorations que nous jugerons appropriées, en nous fondant sur nos expériences avec d'autres systèmes d'exploitation. En particulier, nous prévoyons d'avoir des fichiers avec des noms longs, des numéros de version de fichier, un système de fichiers à tolérance de panne, éventuellement un système de complétion des noms de fichiers, un dispositif d'affichage indépendant du terminal, et peut-être, finalement, un système de fenêtrage fondé sur Lisp, au travers duquel plusieurs programmes Lisp et autres programmes Unix pourront partager un écran. Le C et le Lisp seront tous les deux disponibles comme langages de programmation système. Nous essayerons de supporter UUCP, MIT Chaosnet, et les protocoles de l'Internet pour la communication.
							</div>
							<div>
								Initialement, GNU vise les machines de classe 68000/16000 avec de la mémoire virtuelle, car ce sont les machines les plus simples pour le faire fonctionner. Nous laissons l'effort supplémentaire pour l'adapter sur de plus faibles machines à ceux qui voudront l'utiliser sur celles-ci.
							</div>
							<div>
								Pour éviter d'horribles confusions, veuillez bien prononcer le 'G' de 'GNU' quand vous parlez de ce projet.
							</div>
							<h3>Pourquoi j'ai dû écrire GNU</h3>
							<div>
								J'estime que la Règle d'or est que, si j'aime un programme, je dois le partager avec d'autres qui aiment ce programme. Les éditeurs de logiciels cherchent à diviser et à conquérir les utilisateurs, en interdisant à chacun de partager avec les autres. Je refuse de rompre la solidarité avec les autres utilisateurs de cette manière. Je ne peux pas, en mon âme et conscience, signer un accord de non-divulgation ou une licence de logiciels. Pendant des années, j'ai oeuvré au sein du Laboratoire d'Intelligence Artificielle du MIT pour résister à ces tendances, mais finalement, ils sont allés trop loin: je ne pouvais pas rester dans une institution où de telles choses avaient lieu contre ma volonté.
							</div>
							<div>
								Pour pouvoir continuer à utiliser les ordinateurs en accord avec ma conscience, j'ai décidé de rassembler un ensemble suffisant de logiciels libres, pour pouvoir me débrouiller sans logiciels non libres. J'ai démissionné du laboratoire d'Intelligence Artificielle pour que le MIT ne puisse invoquer toutes les excuses légales pour m'empêcher de distribuer GNU librement.
							</div>
							<h3>Pourquoi GNU sera compatible avec Unix</h3>
							<div>
								Unix n'est pas pour moi le système parfait, mais il n'est pas trop mauvais. Les fonctions essentielles d'Unix semble être les bonnes, et je pense pouvoir compléter ce qui manque à Unix sans les gâcher. Et un système compatible Unix serait commode à adopter par de nombreuses personnes.
							</div>
							<h3>Disponibilité de GNU</h3>
							<div>
								GNU n'est pas dans le domaine public. Tout le monde aura le droit de modifier et redistribuer GNU, mais aucun distributeur ne pourra restreindre ces futures redistributions. C'est-à-dire que des modifications <a href="http://www.mirror5.com/philosophy/categories.html#ProprietarySoftware" title="Programmes propriétaires">propriétaires</a> seront interdites. Je veux être sûr que toutes les versions de GNU restent libres.
							</div>
							<h3>Pourquoi beaucoup de programmeurs veulent contribuer.</h3>
							<div>
								J'ai rencontré beaucoup de programmeurs enthousiasmés par GNU et qui souhaitaient contribuer.
							</div>
							<div>
								De nombreux programmeurs sont insatisfaits de la commercialisation de logiciels systèmes. Il se peut que cela leur permette de gagner plus d'argent, mais cela les amène forcement à se sentir en conflit avec les autres programmeurs en général, plutôt que d'être camarades. L'acte fondamental d'une amitié entre des programmeurs est le partage des programmes; les arrangements commerciaux typiquement utilisés de nos jours interdisent aux programmeurs de considérer les autres comme des amis. L'acheteur de programmes doit choisir entre l'amitié et l'obéissance à la loi. Naturellement, un grand nombre décident que l'amitié est plus importante. Mais ceux qui respectent la loi se sentent souvent mal à l'aise face à ce seul choix. Ils sont désabusés et pensent que programmer n'est qu'une façon de gagner de l'argent.
							</div>
							<div>
								En utilisant GNU plutôt que des programmes propriétaires, nous pouvons être amicaux envers tout le monde tout en respectant la loi. De plus, GNU est une source d'inspiration et une bannière sous laquelle d'autres peuvent nous rejoindre dans le partage. Ceci peut nous procurer un sentiment d'harmonie, impossible à atteindre avec des logiciels qui ne sont pas libres. Pour environ la moitié des programmeurs avec lesquels j'ai discuté, c'est une satisfaction importante que l'argent ne peut pas remplacer.
							</div>
							<h3>Comment vous pouvez contribuer</h3>
							<div>
								Je demande aux fabricants d'ordinateurs de faire don de machines et d'argent. Je demande aux individus de faire don de programmes et de travail.
							</div>
							<div>
								Une des conséquences à laquelle vous pouvez vous attendre si vous donnez des machines, c'est que GNU tournera dessus très rapidement. Les machines doivent être complètes, prêtes à l'utilisation, sans besoin de système particulier de climatisation ou d'alimentation.
							</div>
							<div>
								J'ai trouvé de nombreux programmeurs impatients de contribuer à mi-temps pour GNU. Pour la plupart des projets, un tel travail distribué à temps partiel serait très difficile à coordonner; les diverses parties codées indépendamment ne fonctionneraient pas ensemble. Mais ce problème n'existe pas dans le cas du projet de remplacement d'Unix. Un système Unix complet contient des centaines d'utilitaires, chacun étant documenté séparément. La plupart des spécifications des interfaces sont déterminées par la compatibilité avec Unix. Si chaque collaborateur peut écrire un remplacement compatible pour un seul utilitaire Unix et l'intégrer proprement à la place de l'original sur un système Unix, il s'ensuit que ces utilitaires fonctionneront ensemble sans problème. Même en faisant quelques concessions à la loi de Murphy qui créera quelques problèmes inattendus, l'assemblage de ces composants sera une tâche réalisable. (Le noyau demandera quand même une communication plus soutenue et sera réalisé par un petit groupe.)
							</div>
							<div>
								Si je reçois des dons financiers, je pourrais embaucher quelques personnes à temps plein ou à mi-temps. Le salaire ne sera peut-être pas très élevé par rapport au marché, mais je cherche des personnes pour lesquelles l'esprit de communauté est aussi important que l'appât du gain. Je considère que c'est une façon de permettre à quelques personnes dévouées de consacrer toutes leurs ressources au projet GNU, en leur évitant d'avoir à gagner leur vie autrement.
							</div>
							<h3>Pourquoi tous les utilisateurs en bénéficieront.</h3>
							<div>
								Une fois GNU achevé, tout le monde pourra obtenir de bons logiciels libres comme l'air <a name="r2" href="#f2" title="Aller à la note correspondante">(2)</a>.
							</div>
							<div>
								Ceci représente beaucoup plus que l'économie d'une licence Unix. Cela veut dire que l'on va éviter la duplication inutile du travail de programmation. Cet effort pourra plutôt se diriger vers l'avancement du domaine informatique.
							</div>
							<div>
								Les sources du système complet seront disponibles pour tous. Et cela aura pour résultat qu'un utilisateur qui a besoin de changer un composant du système aura toujours la liberté d'effectuer des changements lui-même, ou d'engager une personne ou une société capable d'effectuer ces changements pour lui. Les utilisateurs ne seront plus à la merci d'une seule personne ou d'une seule société qui possède les sources du programme et qui est la seule à pouvoir effectuer des changements.
							</div>
							<div>
								Les écoles pourront fournir un milieu beaucoup plus éducatif en encourageant chaque étudiant à étudier et à améliorer le code du système. Le laboratoire informatique d'Harvard avait comme politique de n'installer aucun programme sur le système si ses sources n'étaient pas disponibles, et ils soutenaient cette politique en refusant carrément d'installer certains programmes. Cela m'a beaucoup inspiré.
							</div>
							<div>
								Enfin, les frais engendrés par les questions d'appartenance et de droits des logiciels ne seront plus d'actualité.
							</div>
							<div>
								Les mesures pour faire payer les licences des programmes et de leurs copies génèrent toujours un coût important pour la société en général, à cause des mécanismes nécessaires pour calculer combien (c'est-à-dire quels programmes) chacun doit payer. Et il faudrait un État policier pour appliquer parfaitement ces mesures. Prenons une station orbitale, où l'air doit être fabriqué à un coût important: facturer chaque litre inspiré peut être justifié, mais porter un masque/compteur toute la journée et toute la nuit est intolérable même si on a de quoi payer la facture. Et les cameras de surveillance placées partout pour vérifier que vous ne retirez jamais le masque/compteur seraient inacceptables. Il vaut mieux financer la fabrication de l'air avec une taxe par personne et se débarrasser des masques.
							</div>
							<div>
								De copier tout ou des parties d'un logiciel semble aussi naturel à un programmeur que de respirer, tout aussi productif. Cela aussi devrait être libre.
							</div>
							<h3>Quelques objections facilement contrées aux objectifs de GNU</h3>
							<div>
								<span class="strong">«Personne ne s'en servira si c'est gratuit, car cela veut dire que l'on ne peut compter sur aucun support.»</span>
							</div>
							<div>
								<span class="strong">«Il faut faire payer le logiciel pour financer le service après-vente.»</span>
							</div>
							<div>
								Il y a des gens qui préfèrent payer pour GNU et le service plutôt que d'obtenir GNU sans service <a href="#7" title="(7)">(7)</a><a name="R7">.</a> Une société qui propose le service uniquement à ceux qui ont obtenu GNU gratuitement, devrait être rentable <a name="r3" href="#f3" title="Aller à la note correspondante">(3)</a>.
							</div>
							<div>
								Nous devons faire la distinction entre le support en termes de réel travail de programmation et le simple support d'assistance. On ne peut pas compter sur le premier de la part d'un simple revendeur. Si votre problème n'est pas suffisamment répandu, le revendeur vous enverra balader.
							</div>
							<div>
								Si votre société a besoin d'un support fiable, la seule façon est d'avoir toutes les sources et tous les outils nécessaires. À partir de là, vous pouvez engager n'importe quelle personne qualifiée pour régler les problèmes. Vous n'êtes pas à la merci d'une seule personne. Avec Unix, le prix des sources rend cette solution inabordable pour la plupart des sociétés. Avec GNU ce sera facile. Il serait éventuellement concevable qu'il n'y ait personne de disponible, mais les modalités de distribution ne sont pas responsables de ce problème. GNU ne propose pas de régler tous les problèmes, mais seulement quelques-uns.
							</div>
							<div>
								Pendant ce temps, les utilisateurs qui n'y connaissent rien en informatique ont besoin d'assistance et de personnes pour les aider à faire ce qu'ils pourraient faire très bien eux-mêmes si seulement ils s'y connaissaient.
							</div>
							<div>
								De tels services pourraient être proposés par des sociétés qui ne font que des cours d'initiation et des réparations. S'il est vrai que les utilisateurs préfèrent dépenser de l'argent pour un logiciel intégrant un service après-vente, ils seront aussi d'accord pour payer simplement le service, ayant obtenu le logiciel gratuitement. Les sociétés de service se feront concurrence sur la qualité et le prix de leurs prestations. Les utilisateurs ne seront pas limités à une société particulière. En même temps, ceux d'entre nous qui n'ont pas besoin du service pourront utiliser le logiciel sans payer le service.
							</div>
							<div>
								<span class="strong">«On ne peut pas être connu sans publicité et il faut payer le logiciel pour financer la publicité.»</span>
							</div>
							<div>
								<span class="strong">«Ca ne sert à rien de faire de la publicité si on peut obtenir le logiciel gratuitement.»</span>
							</div>
							<div>
								Il existe plusieurs formes de publicité gratuite ou bon marché qui peuvent être utilisées pour informer de nombreux utilisateurs au sujet de GNU. Cependant, il est peut-être vrai que l'on peut atteindre plus d'utilisateurs avec de la publicité. Si cela est vrai, une société qui fait de la publicité sur le service payant de copie et de distribution de GNU doit être suffisamment rentable pour assurer sa propre publicité et bien davantage. Ainsi, seuls les utilisateurs qui bénéficient de la publicité la payent.
							</div>
							<div>
								En revanche, si de nombreuses personnes obtiennent GNU par leurs relations, de telles sociétés ne seraient pas rentables, et cela démontrerait que la publicité n'était pas vraiment nécessaire pour répandre GNU. Pourquoi est-ce que les partisans du libre échange ne veulent pas laisser cette décision au marché libre <a name="r4" href="#f4" title="Aller à la note correspondante">(4)</a>&nbsp;?
							</div>
							<div>
								<span class="strong">«Ma société a besoin d'un système propriétaire pour être compétitive. »</span>
							</div>
							<div>
								GNU va retirer les systèmes d'exploitation du domaine de la concurrence. Vous ne pourrez pas être avantagé dans ce domaine, mais votre concurrent non plus. Vous pourrez rivaliser dans d'autres domaines. Si votre domaine est la vente de systèmes d'exploitation, vous n'aimerez pas GNU, et c'est tant pis pour vous. Si votre domaine est différent, GNU peut vous éviter d'être poussé dans le domaine onéreux de la vente de systèmes d'exploitation.
							</div>
							<div>
								J'aimerais bien voir le développement de GNU financé par des dons de fabricants et utilisateurs, réduisant ainsi les coûts pour chacun . <a name="r5" href="#f5" title="Aller à la note correspondante">(5)</a>.
							</div>
							<div>
								<span class="strong">«Les programmeurs ne méritent-ils pas d'être récompensés pour leur créativité ? »</span>
							</div>
							<div>
								Si quelque chose mérite une récompense, c'est bien la contribution sociale. La créativité peut être une contribution sociale, mais seulement tant que la société est libre de profiter des résultats. Si les programmeurs méritent d'être récompensés pour la création de logiciels innovants, de même, ils méritent d'être punis s'ils limitent l'utilisation de leurs programmes.
							</div>
							<div>
								<span class="strong">«Un programmeur ne devrait-il pas avoir le droit de demander une récompense pour sa créativité&nbsp;?»</span>
							</div>
							<div>
								Il n'y a rien de mal à vouloir être payé pour son travail, ou à chercher à augmenter ses revenus, tant que l'on n'utilise pas de méthodes destructives. Mais les méthodes pratiquées dans le domaine du logiciel sont fondées sur la destruction. Extraire de l'argent aux utilisateurs d'un programme en limitant son utilisation est destructeur, car ces restrictions réduisent l'utilité du programme. Ce qui à son tour réduit la richesse apportée par ce programme à l'humanité. Quand le choix de limiter est délibéré, les conséquences néfastes qui en découlent sont de la destruction délibérée.
							</div>
							<div>
								La raison pour laquelle un bon citoyen ne doit pas utiliser de telles méthodes destructrices pour augmenter sa richesse personnelle est que si tout le monde faisait de même, il y aurait un appauvrissement général dû à la destruction mutuelle. C'est ce que l'on appelle la morale kantienne, ou la Règle d'or. Puisque je n'apprécie pas les conséquences qui adviennent si tout le monde fait de la rétention d'informations, je ne dois pas trouver acceptable qu'un individu le fasse. Plus précisément, le désir d'être récompensé pour sa création ne justifie pas que l'on prive le monde en général de toute ou partie de cette créativité.
							</div>
							<div>
								<span class="strong">«Les programmeurs ne vont-ils pas mourir de faim? »</span>
							</div>
							<div>
								Je peux répondre que personne n'est forcé d'être un programmeur. La plupart d'entre nous n'arriverait pas à se faire payer pour faire des grimaces dans la rue. Mais nous ne sommes pas pour autant condamnés à passer notre vie dans la rue à faire des grimaces et à mourir de faim. On fait autre chose.
							</div>
							<div>
								Mais c'est une mauvaise réponse, car elle accepte l'a priori de la question: c'est-à-dire que sans possession du logiciel, les programmeurs ne pourraient pas recevoir le moindre sou. C'est, soi-disant, tout ou rien.
							</div>
							<div>
								La vraie raison pour laquelle les programmeurs ne vont pas mourir de faim est qu'il sera quand même possible pour eux d'être payés pour programmer ; seulement, peut-être pas autant qu'actuellement.
							</div>
							<div>
								La restriction des copies n'est pas la seule base des affaires du domaine des logiciels. C'est la base la plus commune, car c'est la plus rentable. Si ces restrictions étaient interdites ou rejetées par le client, les éditeurs passeraient à d'autres formes d'organisation, qui sont actuellement moins utilisées. Il y a de nombreuses façons d'organiser une entreprise.
							</div>
							<div>
								Il est probable qu'avec ce nouveau système, la programmation serait moins rentable qu'elle ne l'est actuellement. Mais ce n'est pas un argument valable contre le changement. Il n'est pas considéré comme injuste que les caissières gagnent ce qu'elles gagnent. Si les programmeurs gagnaient la même chose, ce ne serait pas non plus une injustice. (En pratique, ils gagneraient quand même beaucoup plus.)
							</div>
							<div>
								<span class="strong">«Les gens n'ont-ils pas le droit de gérer l'utilisation de leur créativité? »</span>
							</div>
							<div>
								«Contrôler l'utilisation que l'on fait de ses idées» revient à contrôler la vie des autres ; et c'est souvent utilisé pour leur rendre la vie plus difficile.
							</div>
							<div>
								Ceux qui ont étudié le problème de la propriété intellectuelle à fond (les avocats, les juristes, etc.) soutiennent qu'il n'existe aucun droit intrinsèque à la propriété intellectuelle. Les différents droits de soi-disant propriété intellectuelle reconnus par le gouvernement ont été créés par des législations précises dans des buts bien précis.
							</div>
							<div>
								Par exemple, le système de brevets a été établi pour encourager les inventeurs à divulguer les détails de leurs inventions. Sa raison d'être était d'aider la société plutôt que d'avantager les inventeurs. À l'époque, la durée de vie de 17 ans pour un brevet était court par rapport à la cadence des évolutions technologiques. Puisque les brevets ne concernent que les fabricants, pour lesquels le coût et l'effort d'établir une licence sont minimes comparés à la mise en production, les brevets ne font souvent pas trop de tort. Ils ne gênent pas la plupart des individus qui utilisent des produits brevetés.
							</div>
							<div>
								Le concept de droit d'auteur n'existait pas dans l'Antiquité, les auteurs copiaient souvent, et beaucoup, l'oeuvre des autres. Cette pratique était utile, et c'est de cette seule façon que les travaux de certains auteurs ont survécus ne serait-ce qu'en partie. Le système du droit d'auteur a été créé expressément pour encourager les auteurs. Dans le domaine pour lequel ce système a été inventé, les livres, qui pouvaient seulement être copiés en imprimerie ne causait pas beaucoup de tort, et ne gênait pas la plupart des personnes qui lisaient ces livres.
							</div>
							<div>
								Tous les droits de propriété intellectuelles ne sont que des licences accordées par la société parce que nous pensions, à tort ou à raison, que la société en général bénéficierait de ces accords. Mais dans chaque situation précise, nous devons nous demander: bénéficierons-nous vraiment d'accorder cette licence? Quels actes autorisons-nous avec cette licence?
							</div>
							<div>
								Le cas des logiciels aujourd'hui est très différent de celui des livres il y a un siècle. Le fait que la manière la plus répandue de copier un programme est entre voisins, le fait qu'un programme contient à la fois du code source et du code binaire bien distinct, et le fait qu'un programme est utilisé plutôt que lu comme divertissement, se réunissent pour créer une situation dans laquelle celui qui applique le droit d'auteur fait du tort à la société, matériellement et spirituellement; cette personne ne devrait pas appliquer le droit d'auteur, que la loi l'y autorise ou non.
							</div>
							<div>
								<span class="strong">«La compétition permet de mieux faire les choses.»</span>
							</div>
							<div>
								Le paradigme de la compétition est une course: en récompensant le vainqueur, nous encourageons tout le monde à courir plus vite. Quand le capitalisme fonctionne réellement de cette façon, tout marche bien; mais ses partisans ont tort s'ils pensent que cela fonctionne toujours de cette façon. Si les coureurs oublient le pourquoi de la récompense, et deviennent obsédés par la victoire, quelles que soient les méthodes employées, ils risquent de trouver d'autres stratégies telles qu'agresser les autres concurrents. Si tous les coureurs s'engageaient dans un combat, ils finiraient tous en retard.
							</div>
							<div>
								Les logiciels propriétaires et secrets sont l'équivalent moral des coureurs qui se battent. Malheureusement, le seul arbitre que l'on ait ne semble pas s'opposer aux combats ; il se contente de les réguler («Pour dix mètres parcourus, vous avez le droit de tirer un coup de feu»). Il devrait en fait séparer les combattants, et punir les coureurs qui tentent de se battre.
							</div>
							<div>
								<span class="strong">«Les gens s'arrêteront-ils de programmer sans l'appât du gain?»</span>
							</div>
							<div>
								En fait, beaucoup de gens programmeront même sans aucun bénéfice financier. La programmation exerce une fascination irrésistible pour quelques-uns, généralement ceux qui programment le mieux. Il n'y a aucune pénurie de musiciens professionnels qui continuent à jouer, même sans l'espoir de pouvoir en faire leur gagne-pain.
							</div>
							<div>
								Mais en fait cette question, bien qu'elle soit souvent posée, ne convient pas à la situation. Les salaires des programmeurs ne disparaîtront pas mais diminueront peut-être. La question devient donc, trouvera-t-on des programmeurs qui travailleront pour une moindre rémunération? D'après mon expérience, la réponse est oui.
							</div>
							<div>
								Pendant plus de dix ans, plusieurs des meilleurs programmeurs du monde ont travaillé au laboratoire d'Intelligence Artificielle du MIT pour un salaire bien moins important que ce qu'ils auraient touchés ailleurs. Ils étaient récompensés de plusieurs autres manières: la notoriété, le respect des autres, par exemple. Et la créativité est une récompense en soi.
							</div>
							<div>
								Et puis la plupart sont partis pour faire le même travail pour beaucoup plus d'argent.
							</div>
							<div>
								Les faits démontrent que les gens programmeront pour d'autres raisons que l'accumulation de richesses; mais si on leur propose beaucoup plus d'argent, ils s'y attendront finalement et l'exigeront. Les organismes qui payent moins bien ont du mal face à ceux qui payent bien, mais ils devraient pouvoir s'en sortir si les gros payeurs sont bannis.
							</div>
							<div>
								<span class="strong">«Nos besoins en programmeurs sont tellement importants que s'ils interdisent le partage, nous ne pouvons que leur obéir.»</span>
							</div>
							<div>
								La situation n'est jamais aussi désespérée au point d'être amené à obéir à une telle interdiction.
							</div>
							<div>
								<span class="strong">«Les programmeurs doivent bien gagner leur pain. »</span>
							</div>
							<div>
								À court terme, cela est vrai. Cependant, il y a de nombreuses possibilités offertes à un programmeur pour vivre décemment sans pour autant vendre le droit d'utiliser un programme. Cette façon est la plus répandue actuellement, car c'est celle qui engendre le plus de profit pour les programmeurs et les hommes d'affaires, et non parce que c'est la seule manière de gagner son pain. Vous pouvez facilement trouver d'autres manières si vous le voulez. Voici quelques exemples.
							</div>
							<div>
								Un fabricant arrivant avec un nouvel ordinateur payera pour le portage des systèmes d'exploitation sur le nouveau matériel.
							</div>
							<div>
								L'offre de services d'enseignement, de conseil et de maintenance peut permettre la création d'emplois.
							</div>
							<div>
								Les personnes avec des idées nouvelles peuvent distribuer des logiciels librement, en demandant des dons aux utilisateurs satisfaits ou en offrant un service de conseil. J'ai déjà rencontré des personnes travaillant ainsi.
							</div>
							<div>
								Les utilisateurs ayant des besoins en commun, peuvent créer des groupes d'utilisateurs et payer des cotisations. Un tel groupe pourrait faire appel à une société de développement pour écrire les programmes spécifiques pour ses membres.
							</div>
							<div>
								Toutes sortes de développement pourraient être financés par une taxe sur les logiciels&nbsp;:
							</div>
							<div>
								Supposons que chaque personne qui achète un ordinateur doive payer x pour cent du prix en tant que taxe sur les logiciels. Le gouvernement reverserait cette somme à un organisme tel que la NSF pour subvenir au développement de logiciels.
							</div>
							<div>
								Mais si l'acheteur fait lui-même un don au développement de logiciels, il pourra être crédité pour cette taxe. Il pourrait donner au projet de son choix, car il espérera profiter des résultats à l'achèvement du projet. Il pourra donc être exempté de la taxe si le montant de sa donation recouvre celle-ci.
							</div>
							<div>
								Le taux de la taxe pourrait être déterminé par un vote de ceux qui la payent, pondéré par le montant de l'imposition.
							</div>
							<div>
								Les conséquences&nbsp;:
							</div>
							<ul>
								<li>
									La communauté des utilisateurs soutient le développement des logiciels.
								</li>
								<li>
									Cette communauté décide du niveau du soutien nécessaire.
								</li>
								<li>
									Pour les utilisateurs qui se soucient de quels projets profitent de leur participation, ils pourront les choisir eux-mêmes.
								</li>
							</ul>
							<div>
								À terme, rendre les programmes libres est un pas vers le monde d'après pénurie, quand personne ne devra travailler très dur juste pour survivre. Les gens seront libres de se consacrer à des activités ludiques telles que la programmation, après avoir, bien entendu, passé les dix heures par semaine nécessaires pour des oeuvres telles que la législation, la thérapie de famille, la réparation de robots et l'exploration d'astéroïdes. Il n'y aura donc plus besoin de gagner sa vie en programmant.
							</div>
							<div>
								Nous avons déjà beaucoup réduit la quantité de travail que la société entière doit fournir pour sa productivité, mais seulement une petite part se traduit en temps de loisirs pour les travailleurs, car beaucoup d'activités non productives sont nécessaires pour accompagner l'activité productive. Les raisons principales sont la bureaucratie et la lutte isométrique contre la concurrence. Le logiciel libre va réduire grandement ces fuites du domaine du développement logiciel. Nous devons faire cela, pour que les gains de productivité se traduisent en moins d'heures de travail pour nous.
							</div>
							<h4>Notes</h4>
							<div>
								<a name="f1" href="#r1" title="Aller au texte correspondant">(1)</a> Le choix des mots ici était irréfléchi. L'idée était que personne n'aurait à payer l'autorisation d'utiliser le système GNU. Mais cela n'était pas clair, et les gens ont souvent compris que les copies de GNU devaient toujours être distribuées peu chères ou gratuitement. Cela n'a jamais été l'intention ; plus tard, le manifeste mentionne pour les sociétés la possibilité de fournir un service de distribution rentable. Par la suite, j'ai appris à bien faire la distinction entre «free» dans le sens de libre, et «free» dans le sens de gratuit. Le logiciel libre est un programme que les utilisateurs ont la liberté de distribuer et de modifier. Certains utilisateurs peuvent obtenir des copies gratuitement, tandis que d'autres les paieront et si cela peut rapporter de quoi financer l'amélioration de programmes, tant mieux. L'important est que toute personne détenant une copie a le droit de l'utiliser en collaboration avec d'autres.
							</div>
							<div>
								<a name="f2" href="#r2" title="Aller au texte correspondant">(2)</a> Voilà un autre endroit où je n'ai pas fait la distinction entre les deux définitions de «libre». La phrase telle quelle n'est pas fausse, vous pouvez obtenir des copies de logiciels GNU gratuitement, par vos amis ou par l'Internet. Mais elle suggère effectivement la mauvaise idée. [N.d.t. - En français, la distinction entre «libre» et «gratuit» est évidente.]
							</div>
							<div>
								<a name="f3" href="#r3" title="Aller au texte correspondant">(3)</a> De telles sociétés existent actuellement.
							</div>
							<div>
								<a name="f4" href="#r4" title="Aller au texte correspondant">(4)</a> La Free Software Foundation recueille la plupart de ses fonds à travers un service de distribution, bien que ce soit plutôt un organisme caritatif qu'une société. Si *personne* ne choisit de <a href="http://www.mirror5.com/order/order.html" title="Commandes">commander</a> des copies de logiciels à la FSF, celle-ci sera incapable de compléter son oeuvre. Mais cela ne veut pas dire pour autant que des restrictions propriétaires soient justifiées pour forcer le paiement par chaque utilisateur. Si seulement une partie des utilisateurs commande des copies à la FSF, cela suffira à maintenir la FSF à flot. C'est pour cela que nous demandons aux utilisateurs de nous soutenir de cette façon. Avez-vous contribué?
							</div>
							<div>
								<a name="f5" href="#r5" title="Aller au texte correspondant">(5)</a> Un groupe de sociétés a récemment réuni des fonds pour financer la maintenance du compilateur C de GNU.
							</div>
							<div class="box">
								<span class="strong"><a href="http://www.mirror5.com/philosophy/philosophy.fr.html" title="Autres textes à lire">Autres textes à lire</a></span> - Versions: [ <a href="http://www.mirror5.com/gnu/manifesto.html" title="Anglais">Anglais</a> | <a href="http://www.mirror5.com/gnu/manifesto.fr.html" title="Français">Français</a> | <a href="http://www.mirror5.com/gnu/manifesto.nl.html" title="Néerlandais">Néerlandais</a> ]
							</div>
							<div>
								Allez à <a href="http://www.mirror5.com/home.fr.html" title="la page principale du projet GNU officiel">la page principale du projet GNU officiel</a>.
							</div>
							<div>
								Pour en savoir plus, envoyer vos questions à <a href="mailto:gnu@gnu.org"><span class="italic">gnu(at)gnu.org</span></a>.<br />
								Merci d'envoyer des commentaires sur cette page web à <a href="mailto:webmasters@gnu.org" title="webmasters(at)gnu.org">webmasters(at)gnu.org</a>
							</div>
							<div>
								Notice de copyright ci-dessus.<br />
								Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111, USA.
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
