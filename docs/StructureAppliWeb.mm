<map version="freeplane 1.8.0">
<!--To view this file, download free mind mapping software Freeplane from http://freeplane.sourceforge.net -->
<node TEXT="Structure d&apos;une&#xa;Appli web" FOLDED="false" ID="ID_1185347818" CREATED="1568660723147" MODIFIED="1601220099845" STYLE="oval">
<font SIZE="18"/>
<hook NAME="MapStyle" zoom="1.61">
    <properties fit_to_viewport="false" edgeColorConfiguration="#808080ff,#ff0000ff,#0000ffff,#00ff00ff,#ff00ffff,#00ffffff,#7c0000ff,#00007cff,#007c00ff,#7c007cff,#007c7cff,#7c7c00ff"/>

<map_styles>
<stylenode LOCALIZED_TEXT="styles.root_node" STYLE="oval" UNIFORM_SHAPE="true" VGAP_QUANTITY="24.0 pt">
<font SIZE="24"/>
<stylenode LOCALIZED_TEXT="styles.predefined" POSITION="right" STYLE="bubble">
<stylenode LOCALIZED_TEXT="default" ICON_SIZE="12.0 pt" COLOR="#000000" STYLE="fork">
<font NAME="SansSerif" SIZE="10" BOLD="false" ITALIC="false"/>
</stylenode>
<stylenode LOCALIZED_TEXT="defaultstyle.details"/>
<stylenode LOCALIZED_TEXT="defaultstyle.attributes">
<font SIZE="9"/>
</stylenode>
<stylenode LOCALIZED_TEXT="defaultstyle.note" COLOR="#000000" BACKGROUND_COLOR="#ffffff" TEXT_ALIGN="LEFT"/>
<stylenode LOCALIZED_TEXT="defaultstyle.floating">
<edge STYLE="hide_edge"/>
<cloud COLOR="#f0f0f0" SHAPE="ROUND_RECT"/>
</stylenode>
</stylenode>
<stylenode LOCALIZED_TEXT="styles.user-defined" POSITION="right" STYLE="bubble">
<stylenode LOCALIZED_TEXT="styles.topic" COLOR="#18898b" STYLE="fork">
<font NAME="Liberation Sans" SIZE="10" BOLD="true"/>
</stylenode>
<stylenode LOCALIZED_TEXT="styles.subtopic" COLOR="#cc3300" STYLE="fork">
<font NAME="Liberation Sans" SIZE="10" BOLD="true"/>
</stylenode>
<stylenode LOCALIZED_TEXT="styles.subsubtopic" COLOR="#669900">
<font NAME="Liberation Sans" SIZE="10" BOLD="true"/>
</stylenode>
<stylenode LOCALIZED_TEXT="styles.important">
<icon BUILTIN="yes"/>
</stylenode>
</stylenode>
<stylenode LOCALIZED_TEXT="styles.AutomaticLayout" POSITION="right" STYLE="bubble">
<stylenode LOCALIZED_TEXT="AutomaticLayout.level.root" COLOR="#000000" STYLE="oval" SHAPE_HORIZONTAL_MARGIN="10.0 pt" SHAPE_VERTICAL_MARGIN="10.0 pt">
<font SIZE="18"/>
</stylenode>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,1" COLOR="#0033ff">
<font SIZE="16"/>
</stylenode>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,2" COLOR="#00b439">
<font SIZE="14"/>
</stylenode>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,3" COLOR="#990000">
<font SIZE="12"/>
</stylenode>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,4" COLOR="#111111">
<font SIZE="10"/>
</stylenode>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,5"/>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,6"/>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,7"/>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,8"/>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,9"/>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,10"/>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,11"/>
</stylenode>
</stylenode>
</map_styles>
</hook>
<hook NAME="AutomaticEdgeColor" COUNTER="8" RULE="ON_BRANCH_CREATION"/>
<node TEXT="PhalnApplicationSkeleton" FOLDED="true" POSITION="right" ID="ID_805446073" CREATED="1568660776454" MODIFIED="1601555226717">
<edge COLOR="#ff0000"/>
<node TEXT="Installation et configuration" FOLDED="true" ID="ID_805936611" CREATED="1601557078045" MODIFIED="1601557235048">
<node TEXT="Dans une console, placez-vous dans le dossier www de votre installation" ID="ID_634636416" CREATED="1601557088473" MODIFIED="1601557116018"/>
<node TEXT="git clone https://gitlab.com/csi-ort_etudiants/csi_grpavance/PhalnApplicationSkeleton.git" ID="ID_525870491" CREATED="1601557116556" MODIFIED="1601557154396"/>
<node TEXT="Mettez à jour les fichiers de configuration" ID="ID_1209042650" CREATED="1601557236986" MODIFIED="1601557318555" LINK="#ID_1888823131"/>
</node>
<node TEXT="/docs" FOLDED="true" ID="ID_1751880306" CREATED="1601557175938" MODIFIED="1601557185705">
<node TEXT="Un fichier texte expliquant la démarche" ID="ID_1263699009" CREATED="1601557187066" MODIFIED="1601557204361"/>
<node TEXT="Ce présent fichier" ID="ID_763112983" CREATED="1601557204922" MODIFIED="1601557212425"/>
</node>
<node TEXT="/config" FOLDED="true" ID="ID_1888823131" CREATED="1568660909342" MODIFIED="1578666765511">
<node TEXT="Les fichiers de configuration de l&apos;application" ID="ID_53862420" CREATED="1568660917496" MODIFIED="1568660929056"/>
<node TEXT="globalConfig.php" FOLDED="true" ID="ID_1327879417" CREATED="1568660929696" MODIFIED="1568660975498">
<node TEXT="Les réglages généraux de l&apos;application qui ne devraient pas changer" ID="ID_1962422980" CREATED="1568660976909" MODIFIED="1568661006693"/>
<node TEXT="Les define pour les constantes PHP vers les dossiers importants de l&apos;application." ID="ID_1832858053" CREATED="1601220260558" MODIFIED="1601555254350">
<node TEXT="Vous pouvez utiliser ces constantes dans vos fichiers pour des redirections ou des url." ID="ID_1834010383" CREATED="1601220303343" MODIFIED="1601220340340"/>
<node TEXT="Voir le fichier /index.php ou le fichier /public/index.php" ID="ID_823227897" CREATED="1601555265058" MODIFIED="1601555291809"/>
</node>
<node TEXT="Autorise ou pas l&apos;affichage des erreurs et des warning avec la constante DUMP." ID="ID_460597156" CREATED="1601220569891" MODIFIED="1601220633022">
<node TEXT="Si DUMP est définie à FALSE (c&apos;est le cas en prod...) pas d&apos;affichage des erreurs, mais elles sont loggées dans le fichier LOG_DIR.&apos;error_log.txt&apos;" ID="ID_132709538" CREATED="1601220638920" MODIFIED="1601220704793"/>
</node>
<node TEXT="l&apos;autoload et sa config" ID="ID_1418745819" CREATED="1568661006927" MODIFIED="1568661022164"/>
</node>
<node TEXT="appConfig.php" ID="ID_82416172" CREATED="1568661039628" MODIFIED="1568661049844">
<node TEXT="La configuration particulière de l&apos;application" ID="ID_1422647753" CREATED="1568664791111" MODIFIED="1568664810310"/>
<node TEXT="A ajouter en début de toutes vos pages!!" ID="ID_1083165654" CREATED="1578666420108" MODIFIED="1601220764994">
<icon BUILTIN="yes"/>
<node TEXT="Voir le fichier /public/index.php" ID="ID_923174360" CREATED="1601555323235" MODIFIED="1601555336874"/>
</node>
<node TEXT="Déclare la possibilité d&apos;utiliser le typage fort" ID="ID_1725935802" CREATED="1601220784717" MODIFIED="1601220802882">
<node TEXT="A prévilégier quand c&apos;est possible" ID="ID_1379715596" CREATED="1601220805623" MODIFIED="1601220819335"/>
<node TEXT="La librairie Phaln utilise en partie le typage fort.&#xa;Donc ne pas modifier si vous utilisez la librairie." ID="ID_793619785" CREATED="1601555343137" MODIFIED="1601555385479"/>
</node>
<node TEXT="définition de la constante DUMP" ID="ID_1057629094" CREATED="1568664810560" MODIFIED="1601220782694">
<node TEXT="Passez à TRUE pour activer les affichages des erreurs" ID="ID_1867847187" CREATED="1578666531403" MODIFIED="1578666553102"/>
<node TEXT="Utile aussi pour laisser dans le code les affichages de développement et les réactiver à volonté." ID="ID_1262830540" CREATED="1601555419988" MODIFIED="1601555455131">
<node TEXT="Utilisez sour forme:&#xa;if(DUMP) var_dump($maVariable);" ID="ID_291762719" CREATED="1578666590611" MODIFIED="1578666623388"/>
<node TEXT="Ou utilisez:&#xa;dump_var($maVariable, DUMP, &apos;Ceci est un message pour présenter la variable dumpée...&apos;);" ID="ID_710807603" CREATED="1578666624181" MODIFIED="1601220838730">
<node TEXT="La fonction dump_var est définie dans phaln\Phaln\config\phalnconfig.php" ID="ID_749700794" CREATED="1601220844409" MODIFIED="1601220932739"/>
<node TEXT="Elle est pratique pour mettre en forme les var_dump lorsque XDebug n&apos;est pas installé (sans doute le cas en prod...)" ID="ID_1627985123" CREATED="1601220933183" MODIFIED="1601220976326"/>
</node>
</node>
<node TEXT="Passez à FALSE en version production" ID="ID_1145815817" CREATED="1578666553664" MODIFIED="1578666570886">
<node TEXT="Attention!! Aucun affichage d&apos;erreur ou de warning!" ID="ID_1637746566" CREATED="1578666572234" MODIFIED="1578666588028"/>
<node TEXT="Par contre, utilisation de fichiers de log" ID="ID_48340781" CREATED="1601220988826" MODIFIED="1601221000650"/>
</node>
</node>
<node TEXT="Définition de l&apos;url de base de l&apos;application" ID="ID_1295862835" CREATED="1601221032206" MODIFIED="1601221051463">
<node TEXT="Pensez à utiliser cette constante dans votre application!!" ID="ID_1252359114" CREATED="1601221052908" MODIFIED="1601221070849"/>
</node>
<node TEXT="Les informations sur la base de données" ID="ID_1450083854" CREATED="1568664814231" MODIFIED="1601221113058"/>
<node TEXT="Inclusion de la configuration globale" ID="ID_1782416079" CREATED="1601221078454" MODIFIED="1601221092689"/>
<node TEXT="Activation des sessions." ID="ID_1866673850" CREATED="1578666519999" MODIFIED="1578666528076"/>
<node TEXT="Ce fichier n&apos;est pas pushé sur un dépôt Git" ID="ID_643559862" CREATED="1568664941444" MODIFIED="1601555554324">
<node TEXT="C&apos;est pour cela que vous avez un modèle appConfig.local.php qui est à laisser vierge mais qui est pushé" ID="ID_696755871" CREATED="1601221183415" MODIFIED="1601221218914"/>
<node TEXT="Attention lorsque vous déployez votre application en ligne avec ftp de ne pas écraser les versions locale ou distante..." ID="ID_1928675889" CREATED="1601555651852" MODIFIED="1601555717151"/>
</node>
</node>
<node TEXT="appConfig.local.php" ID="ID_1044022130" CREATED="1568664890320" MODIFIED="1568664901099">
<node TEXT="Une version de appConfig.php expurgée des données confidentielles" ID="ID_467309028" CREATED="1568664902989" MODIFIED="1568664926853"/>
<node TEXT="Sert de modèle pour le fichier appConfig.php" ID="ID_595629779" CREATED="1601555569029" MODIFIED="1601555583163"/>
<node TEXT="Ce fichier est pushé sur le dépôt Git" ID="ID_1504570915" CREATED="1568664927243" MODIFIED="1601555601692">
<node TEXT="Donc attention à ne pas  y mettre les infos confidentielles!" ID="ID_1777663669" CREATED="1601555605651" MODIFIED="1601555624033"/>
</node>
<node TEXT="En créer une copie, retirer .local du nom et complétez-le" ID="ID_558577579" CREATED="1578666265081" MODIFIED="1578666349924"/>
</node>
<node TEXT="testConfig.php" ID="ID_200953383" CREATED="1568664832645" MODIFIED="1568664840622">
<node TEXT="La configuration pour les tests unitaires, si elle doit être différente de celle de l&apos;application." ID="ID_780240935" CREATED="1568664842543" MODIFIED="1578666373128"/>
</node>
</node>
<node TEXT="/log" FOLDED="true" ID="ID_1116851852" CREATED="1568664968048" MODIFIED="1601221327241">
<node TEXT="Les fichiers de journalisation du fonctionnement de l&apos;application." ID="ID_1790717480" CREATED="1568664973609" MODIFIED="1568665012240"/>
<node TEXT="Non pushé sur un dépôt Git" ID="ID_1426807126" CREATED="1568665013115" MODIFIED="1568665026940"/>
</node>
<node TEXT="/tests" FOLDED="true" ID="ID_1275602629" CREATED="1568665034001" MODIFIED="1578666773589">
<node TEXT="Les fichiers de test unitaires des classes et des fonctions." ID="ID_643123631" CREATED="1568665039312" MODIFIED="1568665064654"/>
<node TEXT="La plupart n&apos;utilisent pas de mise en forme complexe, une exécution en console suffit" ID="ID_1769887294" CREATED="1568665064903" MODIFIED="1568807781206"/>
<node TEXT="Ils requirent le fichier config/testsConfig.php ou appConfig.php sir vous utilisez la même config" ID="ID_537211595" CREATED="1568665099557" MODIFIED="1601221388305"/>
<node TEXT="Pensez à tester vos classe AVANT de les utiliser dans des pages et du développement plus lourd!!&#xa;Contrairement à ce que vous pouvez penser, vous gagnerez probablement du temps!" ID="ID_286890208" CREATED="1601555756400" MODIFIED="1601555826094"/>
</node>
<node TEXT="/public" FOLDED="true" ID="ID_849653814" CREATED="1568665149697" MODIFIED="1578666778282">
<node TEXT="Les éléments publics &quot;visibles&quot; de l&apos;application" ID="ID_981998117" CREATED="1568665162042" MODIFIED="1601221424278"/>
<node TEXT="/css" ID="ID_1061255816" CREATED="1568665199867" MODIFIED="1568665259172">
<node TEXT="Les feuilles de style" ID="ID_332625260" CREATED="1568665205303" MODIFIED="1568665213067"/>
<node TEXT="Il y a la feuille de style de normalisation, à utiliser en premier." ID="ID_1338676275" CREATED="1601555838130" MODIFIED="1601555858111"/>
</node>
<node TEXT="/img" ID="ID_1345407510" CREATED="1568665215603" MODIFIED="1568665263066">
<node TEXT="Les images" ID="ID_892937227" CREATED="1568665220546" MODIFIED="1568665227269"/>
</node>
<node TEXT="/js" ID="ID_388876823" CREATED="1568665229380" MODIFIED="1568665266174">
<node TEXT="Les fichiers javascript" ID="ID_1221108157" CREATED="1568665238987" MODIFIED="1568665248219"/>
<node TEXT="/vendor" ID="ID_1671444037" CREATED="1568665249609" MODIFIED="1568665272722">
<node TEXT="Les librairies JAvaScript tiers (JQuerry par exemple)" ID="ID_1538763748" CREATED="1568665274471" MODIFIED="1601221473197"/>
</node>
</node>
<node TEXT="index.php" ID="ID_382501996" CREATED="1601221560407" MODIFIED="1601221568002">
<node TEXT="Le fichier &quot;principal&quot; de l&apos;application vers où redirige le fichier index.php présent à la racine du dossier de l&apos;application." ID="ID_426724290" CREATED="1601221589016" MODIFIED="1601221638836"/>
<node TEXT="Pas forcément &quot;une page&quot; si vous utilisez MVC" ID="ID_820059236" CREATED="1578666712341" MODIFIED="1601221921933">
<node TEXT="Dans ce cas, les pages sont alors des templates utilisés par les classes de la couche Vues... donc dans src" ID="ID_1168186203" CREATED="1601221914150" MODIFIED="1601221932823"/>
<node TEXT="Ils contient alors la &quot;gestion&quot; des url pour instancier un contrôleur et appeler une de ses actions." ID="ID_1435970995" CREATED="1601221933747" MODIFIED="1601221975523"/>
<node TEXT="Vous avez dans le projet gitlab DemoPhalnTwig une démonstration de l&apos;utilisation de la librairie avec une approche MVC et du templating Twig." ID="ID_317325522" CREATED="1601555910118" MODIFIED="1601555974625"/>
<node TEXT="Attention, c&apos;est à fois plus simple quand on maitrise, mais plus complexe à maitriser!&#xa;Ne sous estimez pas le temps d&apos;apprentissage et de prise en main." ID="ID_392088400" CREATED="1601555976198" MODIFIED="1601556050813"/>
</node>
</node>
<node TEXT="Vos pages web" ID="ID_17706068" CREATED="1568665292874" MODIFIED="1568665301044">
<node TEXT="Pensez à factoriser les portions communes que vous placez dans un dossier inc" ID="ID_1665209981" CREATED="1601556107159" MODIFIED="1601556221987">
<node TEXT="Les css" ID="ID_1789071456" CREATED="1601556130768" MODIFIED="1601556134489"/>
<node TEXT="Le javascript" ID="ID_752204653" CREATED="1601556134685" MODIFIED="1601556140833"/>
<node TEXT="le bandeau d&apos;en-tête" ID="ID_549937934" CREATED="1601556141780" MODIFIED="1601556149463"/>
<node TEXT="le bandeau de pied de page" ID="ID_1589726394" CREATED="1601556150002" MODIFIED="1601556156222"/>
<node TEXT="les menu" ID="ID_350794584" CREATED="1601556157820" MODIFIED="1601556168447"/>
<node TEXT="..." ID="ID_1002499345" CREATED="1601556169009" MODIFIED="1601556170980"/>
</node>
<node TEXT="Si vous utilisez MVC, il ne devrait pas y en avoir d&apos;autre que index.php..." ID="ID_1377212615" CREATED="1601556174042" MODIFIED="1601556201144"/>
</node>
<node TEXT="/inc" ID="ID_1378134752" CREATED="1568665301544" MODIFIED="1568665304731">
<node TEXT="Les &quot;morceaux&quot; de pages réutilisables (header, footer, menu, ...) et communs à plusieurs pages." ID="ID_1223913778" CREATED="1568665305778" MODIFIED="1568665357096"/>
<node TEXT="Pas forcément présent si vous utilisez MVC et les templates" ID="ID_250629364" CREATED="1601221982795" MODIFIED="1601222000224"/>
</node>
</node>
<node TEXT="/src" FOLDED="true" ID="ID_272787710" CREATED="1568665364688" MODIFIED="1601222688022">
<node TEXT="L&apos;essentiel de votre travail avec les différentes classes organisées en espaces de nom" ID="ID_751030556" CREATED="1568665370030" MODIFIED="1568665400054"/>
<node TEXT="/Entities" FOLDED="true" ID="ID_1447898419" CREATED="1568665401616" MODIFIED="1601556954099">
<node TEXT="Les différentes classes entités" ID="ID_1355847019" CREATED="1568665414242" MODIFIED="1568665427168"/>
<node TEXT="Elles représentent les entités (tables) de la bdd" ID="ID_1269032025" CREATED="1568665477858" MODIFIED="1601556254797"/>
<node TEXT="Typiquement, peu de chose à par des attributs, des accesseurs et le constructeur." ID="ID_1452636380" CREATED="1601556378493" MODIFIED="1601556954096"/>
<node TEXT="Attention, quelques contraintes si vous utilisez la librairie Phaln" ID="ID_602040493" CREATED="1601556333695" MODIFIED="1601559071802" LINK="#ID_1460639466">
<node TEXT="Elles étendent Phaln\AbstractEntity" ID="ID_704594426" CREATED="1601559095167" MODIFIED="1601559115044"/>
<node TEXT="Les attributs représentant les champs de la table DOIVENT être protected." ID="ID_975668723" CREATED="1601556265116" MODIFIED="1601556290656"/>
<node TEXT="Les attributs ne représentant les champs de la table DOIVENT être private" ID="ID_430021647" CREATED="1601556291908" MODIFIED="1601556312559"/>
</node>
</node>
<node TEXT="/Repositories" FOLDED="true" ID="ID_1487203390" CREATED="1568665441250" MODIFIED="1601559236900">
<node TEXT="Les différents repositories manipulant les entités et la base de données" ID="ID_1738205484" CREATED="1568665451670" MODIFIED="1601222122353"/>
<node TEXT="Typiquement, les requêtes SQL sont là..." ID="ID_105865841" CREATED="1601556423008" MODIFIED="1601559236900"/>
<node TEXT="Vous pouvez utiliser la librairie Phaln pour vous aider." ID="ID_845925863" CREATED="1601559134521" MODIFIED="1601559175758" LINK="#ID_108875754">
<node TEXT="Vos entités doivent alors être conformes au entités de la librairie, c&apos;est à dire étendre AbstractEntity." ID="ID_1261386469" CREATED="1601559179053" MODIFIED="1601559233423"/>
</node>
</node>
<node TEXT="/Controller" FOLDED="true" ID="ID_1738592506" CREATED="1578666802693" MODIFIED="1578666808863">
<node TEXT="N&apos;a de sens que si vous utilisez MVC" ID="ID_1595827159" CREATED="1601556449116" MODIFIED="1601556460409"/>
<node TEXT="Vos contrôleurs." ID="ID_1531717147" CREATED="1578666810280" MODIFIED="1578666823204"/>
<node TEXT="Ce sont eux qui, via les méthodes suffixées Action réagissent aux URL." ID="ID_1382642192" CREATED="1578666823891" MODIFIED="1578666867987"/>
<node TEXT="Ils manipulent des Entités via les Repository (la couche Model) et génèrent les pages affichées via les Vues et les templates (la couche View)." ID="ID_1225358800" CREATED="1578666874440" MODIFIED="1601556512480"/>
</node>
<node TEXT="/View" FOLDED="true" ID="ID_1089720026" CREATED="1578666929237" MODIFIED="1578666945481">
<node TEXT="N&apos;a de sens que si vous utilisez MVC" ID="ID_1693028945" CREATED="1601556449116" MODIFIED="1601556460409"/>
<node TEXT="Les classes chargées de la génération des pages affichées." ID="ID_973715663" CREATED="1578666947309" MODIFIED="1578666967730"/>
<node TEXT="Utilisent (ou pas...) les templates." ID="ID_825475153" CREATED="1578666968167" MODIFIED="1578666981469"/>
<node TEXT="Vous pouvez vous en passer si vous utilisez Twig comme moteur de templating, une classe de la librairie Phaln permettant de simplifier leur création." ID="ID_1536585865" CREATED="1601222405054" MODIFIED="1601556557593"/>
</node>
<node TEXT="/Validators" FOLDED="true" ID="ID_1196203994" CREATED="1578666983312" MODIFIED="1601222688021">
<node TEXT="Les classes permettant de &quot;valider&quot; les entités." ID="ID_61914968" CREATED="1578666996548" MODIFIED="1578667016579"/>
<node TEXT="Utiles pour vérifier les entitées crées à partir d&apos;informations venant d&apos;un formulaire et s&apos;assurer qu&apos;elles sont conformes avec la base de données." ID="ID_1812368614" CREATED="1578667017016" MODIFIED="1601222190329"/>
<node TEXT="Pour l&apos;instant" ID="ID_417376871" CREATED="1578667064157" MODIFIED="1601222225605">
<node TEXT="Filtres PHP pour valider un type de données" ID="ID_1074098732" CREATED="1578667064157" MODIFIED="1601222247076"/>
<node TEXT="Taille pour s&apos;assurer de ne pas avoir de chaine plus longues que spécifiées dans la BDD." ID="ID_903366704" CREATED="1578667064157" MODIFIED="1601222256062"/>
<node TEXT="Require pour les données ne pouvant pas être nulle" ID="ID_1491906021" CREATED="1601222257045" MODIFIED="1601222270168"/>
</node>
<node TEXT="Une classe de la librairie Phaln facilite leur création." ID="ID_875348964" CREATED="1601556577459" MODIFIED="1601559267982" LINK="#ID_1262423533"/>
</node>
<node TEXT="/Exceptions" FOLDED="true" ID="ID_1759077205" CREATED="1568665499676" MODIFIED="1568665507346">
<node TEXT="Vos classes d&apos;exception" ID="ID_35717846" CREATED="1568665508471" MODIFIED="1568665516297"/>
<node TEXT="Se créer toutes une librairie de classes d&apos;exception permet d&apos;affiner la gestion des erreurs" ID="ID_1208204891" CREATED="1568665521390" MODIFIED="1568665554476"/>
</node>
<node TEXT="/Templates" FOLDED="true" ID="ID_842138037" CREATED="1568665558928" MODIFIED="1568665563411">
<node TEXT="Si vous utilisez des templates pour faciliter la générations des pages." ID="ID_1844765443" CREATED="1568665564661" MODIFIED="1568665587452"/>
<node TEXT="On les utilisera sans doute en MVC" ID="ID_244966944" CREATED="1568665587983" MODIFIED="1568665606948"/>
<node TEXT="En pratique, les templates sont  organisés avec 1 dossier par controlleur, ce dossier contenant 1 fichier par action du controlleur concerné..." ID="ID_94889748" CREATED="1601222293436" MODIFIED="1601556674745"/>
</node>
<node TEXT="Notez que ces dossier correspondent à un espace de nom au sens PHP" FOLDED="true" ID="ID_563381049" CREATED="1601222477313" MODIFIED="1601556685158">
<node TEXT="Pensez à ajouter l&apos;a déclaration d&apos;apartenance des classes à l&apos;espace de nom dans chacune d&apos;elle." ID="ID_1989100729" CREATED="1601556694216" MODIFIED="1601556730574"/>
<node TEXT="L&apos;autoload permet de charger automatiquement les classes si vous respectez les espaces de nom." ID="ID_191280603" CREATED="1601556731541" MODIFIED="1601556764983"/>
<node TEXT="L&apos;autoload est dans /config/globalConfig.php" ID="ID_338800004" CREATED="1601556765555" MODIFIED="1601556789931"/>
</node>
<node TEXT="Notez que vous pouvez avoir un niveau suplémentaire d&apos;espace de nom" FOLDED="true" ID="ID_693018411" CREATED="1601222503368" MODIFIED="1601222522682">
<node TEXT="Dans le skeleton fourni, il s&apos;agit de l&apos;espace de nom App" ID="ID_848963328" CREATED="1601556823549" MODIFIED="1601556847465"/>
<node TEXT="Dans le cas d&apos;une application avec un front-office (App) et un back-office, vous pouvez ajouter un espace de nom Back contenant chacun la structure précédente." ID="ID_1492930908" CREATED="1601222524615" MODIFIED="1601556890145"/>
<node TEXT="Si tout ou partie du modèle (les entités, repositories et validators) sont partagés entre le Front et le Back, créez un espace de nom dédié nommé Model pour les ranger." ID="ID_678955968" CREATED="1601222594991" MODIFIED="1601222669114"/>
</node>
</node>
<node TEXT="/vendor" FOLDED="true" ID="ID_676029909" CREATED="1568665614555" MODIFIED="1578667246730">
<node TEXT="Les librairies ajoutées avec Composer" ID="ID_403019358" CREATED="1568665620351" MODIFIED="1578667145419"/>
<node TEXT="Le fichier /composer.json permet de gérer ces dépendances." ID="ID_1916016956" CREATED="1568665660497" MODIFIED="1568807776686"/>
<node TEXT="Ce dossier n&apos;est pas pushé sur le dépôt Git car il est reconstruit avec Composer après avoir cloné le projet." ID="ID_642996416" CREATED="1568666327024" MODIFIED="1601222723377"/>
<node TEXT="Si vous utilisez la librairie Phaln, vous aurez un dossier /vendor/phan/Phaln dans lequel vous trouverez les classes abstraites." ID="ID_150139433" CREATED="1578667149483" MODIFIED="1578667192248"/>
</node>
</node>
<node TEXT="Librairie Phaln" FOLDED="true" POSITION="right" ID="ID_869236184" CREATED="1601222764725" MODIFIED="1601222772704">
<edge COLOR="#007c00"/>
<node TEXT="Librairie contenant un ensemble de classes aidant à la conception d&apos;une application web." ID="ID_1736597953" CREATED="1601223276754" MODIFIED="1601223309588"/>
<node TEXT="Attention!!" ID="ID_891100640" CREATED="1601223310139" MODIFIED="1601223319977">
<node TEXT="AUCUNE GARANTIE EN CAS D&apos;UTILISATION EN PRODUCTION" ID="ID_1975938354" CREATED="1601223375999" MODIFIED="1601223411250"/>
<node TEXT="Développé au départ dans un but pédagogique d&apos;apprentissage de la structure MVC" ID="ID_822892697" CREATED="1601223322693" MODIFIED="1601223351489"/>
<node TEXT="Elle s&apos;est enrichie avec le temps de différentes fonctionalités" ID="ID_184314703" CREATED="1601223351929" MODIFIED="1601223373426"/>
<node TEXT="Elle demeure cependant une approche pédagogique.." ID="ID_872455365" CREATED="1601557003422" MODIFIED="1601557034221"/>
</node>
<node TEXT="Installation" ID="ID_1370847044" CREATED="1601557047969" MODIFIED="1601557052128">
<node TEXT="Elle s&apos;installe dans le dossier /vendor/phaln/Phaln d&apos;une application si vous le faites à la main." ID="ID_1424151040" CREATED="1601223506214" MODIFIED="1601557061335"/>
<node TEXT="Le mieux est d&apos;utiliser composer" ID="ID_1106732877" CREATED="1601557056096" MODIFIED="1601557065035">
<node TEXT="Avec une console, allez dans le dossier de l&apos;application" ID="ID_51209816" CREATED="1601557347324" MODIFIED="1601557375920"/>
<node TEXT="composer install" ID="ID_1965374545" CREATED="1601557377210" MODIFIED="1601557385355"/>
</node>
</node>
<node TEXT="structure des dossiers et espaces de nom" ID="ID_1678919311" CREATED="1601223463075" MODIFIED="1601326615872">
<node TEXT="/config" FOLDED="true" ID="ID_470650517" CREATED="1601223493991" MODIFIED="1601223503646">
<node TEXT="/exemples" ID="ID_1452138560" CREATED="1601223563563" MODIFIED="1601223597113">
<node TEXT="Des exemples de fichiers de configuration pour votre application" ID="ID_687946755" CREATED="1601223598616" MODIFIED="1601223621369"/>
</node>
<node TEXT="phalnConfig.php" ID="ID_139417065" CREATED="1601223623470" MODIFIED="1601223631031">
<node TEXT="Le fichier de configuration de la librairie" ID="ID_1427451213" CREATED="1601223633808" MODIFIED="1601223648333"/>
<node TEXT="Normalement, le fichier globalConfig.php de votre application en fait l&apos;inclusion" ID="ID_413459182" CREATED="1601223648534" MODIFIED="1601223704283"/>
<node TEXT="Vous ne devriez pas avoir à le modifier..." ID="ID_385057724" CREATED="1601557444820" MODIFIED="1601557459385"/>
</node>
</node>
<node TEXT="/Exceptions" FOLDED="true" ID="ID_716680924" CREATED="1601223719684" MODIFIED="1601227436084">
<node TEXT="Un ensemble de classes d&apos;exception utilisée par la librairie, mais que vous pouvez aussi utiliser et surtout catcher dans votre application" ID="ID_1039761046" CREATED="1601223726392" MODIFIED="1601227436084"/>
</node>
<node TEXT="/Utility" FOLDED="true" ID="ID_1156608616" CREATED="1601223787839" MODIFIED="1601227438685">
<node TEXT="Pour l&apos;instant uniquement la classe FileLogger.php pour faire des logs personalisés dans un fichier de traçage" ID="ID_328583301" CREATED="1601223835452" MODIFIED="1601227438685"/>
</node>
<node TEXT="Les classes de l&apos;espace de nom Phaln" FOLDED="true" ID="ID_492880617" CREATED="1601223896078" MODIFIED="1601223934852">
<node TEXT="AbstractEntity" FOLDED="true" ID="ID_1460639466" CREATED="1601223979892" MODIFIED="1601224299787">
<icon BUILTIN="yes"/>
<node TEXT="Une des 3 classes les plus importantes de la librairie." ID="ID_182129299" CREATED="1601224032644" MODIFIED="1601224056852"/>
<node TEXT="Vous permet d&apos;écrire des entitées avec un minimum de code." ID="ID_110388407" CREATED="1601224057301" MODIFIED="1601224075013"/>
<node TEXT="ATTENTION: les attributs de vos entité qui correspondent aux champs de la table DOIVENT être protected.&#xa;Les attributs private ne sont pas gérés." ID="ID_1936233627" CREATED="1601224117119" MODIFIED="1601224178271"/>
<node TEXT="Prend en charge:" ID="ID_1032646598" CREATED="1601224075935" MODIFIED="1601224082163">
<node TEXT="constructeur" ID="ID_1089832552" CREATED="1601224083476" MODIFIED="1601224097012"/>
<node TEXT="hydratateur pour initialiser tous les attributs" ID="ID_299706959" CREATED="1601224097411" MODIFIED="1601224112187"/>
<node TEXT="setter et getter pour les attributs protected" ID="ID_1405701839" CREATED="1601224190651" MODIFIED="1601224215344"/>
<node TEXT="sérialization json" ID="ID_1684562005" CREATED="1601224196255" MODIFIED="1601224259203"/>
<node TEXT="toString" ID="ID_1842642409" CREATED="1601224253312" MODIFIED="1601224267271"/>
<node TEXT="mise sous forme de tableau associatif" ID="ID_1554450333" CREATED="1601224267817" MODIFIED="1601224287117"/>
</node>
</node>
<node TEXT="AbstractRepository" FOLDED="true" ID="ID_108875754" CREATED="1601224301610" MODIFIED="1601326563711">
<icon BUILTIN="yes"/>
<node TEXT="Prend en charge la manipulation de la base de données t des entités" ID="ID_351455882" CREATED="1601224315592" MODIFIED="1601224340676"/>
<node TEXT="Vos repositories doivent sur charger le constructeur pour initialiser 3 attributs" ID="ID_407578403" CREATED="1601224341114" MODIFIED="1601224441831">
<node TEXT="$this-&gt;table: le nom de la table" ID="ID_1095552141" CREATED="1601224443669" MODIFIED="1601224460484"/>
<node TEXT="$this-&gt;classMapped: le nom de la classe entité avec son chemin complet dans les espaces de nom" ID="ID_660186536" CREATED="1601224460846" MODIFIED="1601224499666"/>
<node TEXT="$this-&gt;idFieldName: le nom du champ de la table qui est clé primaire.&#xa;Si la table contient plusieurs clé primaire, cet attribut est un tableau contenant le nom des champs clés primaires.&#xa;Ne pas faire de tableau si 1 seule PK..." ID="ID_96109227" CREATED="1601224500653" MODIFIED="1601224605889"/>
</node>
<node TEXT="Prend en charge:" ID="ID_1466839791" CREATED="1601224619543" MODIFIED="1601224623572">
<node TEXT="getAll()" ID="ID_1273446838" CREATED="1601224624517" MODIFIED="1601224674578">
<node TEXT="Retourne tous les enregistrements de la table dans un tableau d&apos;entités" ID="ID_369527407" CREATED="1601224677674" MODIFIED="1601224704024"/>
</node>
<node TEXT="getById($id)" ID="ID_689154996" CREATED="1601224705967" MODIFIED="1601224733292">
<node TEXT="Récupère l&apos;enregistrement n° $id dans la table&#xa;$id peut être une valeur unique (clé primaire simple) ou un tableau en cas de clés primaires multiples." ID="ID_922662942" CREATED="1601224734680" MODIFIED="1601224762335"/>
</node>
<node TEXT="getBy(array $byTab)" ID="ID_377966197" CREATED="1601224774992" MODIFIED="1601224777363">
<node TEXT="Sélectionne les entités d&apos;une table selon les critères du tableau byTab.&#xa;Il est possible de sélectionner selon plusieurs champs (&apos;filedName&apos;) et d&apos;utiliser des opérateurs de comparaison (&apos;comp&apos;) comme &apos;=&apos;, &apos;LIKE&apos;, ...&#xa;La clé &apos;value&apos; est celle du champ. On peut y utiliser les jockers.&#xa;On peut décider d&apos;avoir plusieurs critère de sélection, la clé &apos;op&apos; permet de préciser commen sont liés les critères (&apos;AND&apos;, &apos;OR&apos;, ...)&#xa;$byTab Le tableau de critères pour composer la clause WHERE. Exemple:&#xa;[[&apos;fieldName&apos; =&gt; &apos;test&apos;, &apos;comp&apos;=&gt;&apos;=&apos;, &apos;value&apos;=&gt;&apos;a tester&apos;],&#xa;  [&apos;op&apos;=&gt;&apos;AND&apos;, &apos;fieldName&apos; =&gt; &apos;test2&apos;, &apos;comp&apos;=&gt;&apos;LIKE&apos;, &apos;value&apos;=&gt;&apos;rien&apos;]]" ID="ID_1080212278" CREATED="1601224778339" MODIFIED="1601224878096"/>
</node>
<node TEXT="deleteById($id)" ID="ID_1272913078" CREATED="1601227191415" MODIFIED="1601227193105">
<node TEXT="Efface l&apos;enregistrement n° $id dans la table" ID="ID_638371066" CREATED="1601227195498" MODIFIED="1601227225284"/>
</node>
<node TEXT="deleteEntity(AbstractEntity $entity)" ID="ID_1926520515" CREATED="1601227236646" MODIFIED="1601227238321">
<node TEXT="Efface l&apos;entité de la table" ID="ID_756927938" CREATED="1601227240427" MODIFIED="1601227252995"/>
</node>
<node TEXT="save(AbstractEntity $entity)" ID="ID_22895295" CREATED="1601227255153" MODIFIED="1601227284244">
<node TEXT="Enregistre (insert ou update) une entité dans la bdd" ID="ID_1500155244" CREATED="1601227292878" MODIFIED="1601227294816"/>
</node>
<node TEXT="exist(AbstractEntity $entity)" ID="ID_1584315139" CREATED="1601227303799" MODIFIED="1601227304999">
<node TEXT="Recherche si l&apos;enregistrement correspondant à $entity existe dans la bdd" ID="ID_1418211684" CREATED="1601227306039" MODIFIED="1601227314852"/>
</node>
</node>
</node>
<node TEXT="BDD" FOLDED="true" ID="ID_526734989" CREATED="1601227376533" MODIFIED="1601326572516">
<icon BUILTIN="yes"/>
<node TEXT="Classe encapsulant sous forme de singleton une connexion PDO à la base de données.&#xa;Elle ne peut pas être dérivée." ID="ID_1773097099" CREATED="1601325696979" MODIFIED="1601325703615"/>
<node TEXT="Utilisez un des lecteurs (statique ou d&apos;instance) sur la connexion PDO" ID="ID_1307365404" CREATED="1601325923773" MODIFIED="1601325957245"/>
</node>
<node TEXT="AbstractValidator" FOLDED="true" ID="ID_1262423533" CREATED="1601227357671" MODIFIED="1601227363590">
<node TEXT="Permet de définir des règles de validation basiques pour les entités" ID="ID_1257209503" CREATED="1601325450559" MODIFIED="1601325477185"/>
<node TEXT="Le constructeur de vos validator doit initialiser les 3 attributs $attributFilters, $attributSizes et $attributRequired" ID="ID_1306259782" CREATED="1601325538024" MODIFIED="1601325589591"/>
</node>
<node TEXT="Manager" FOLDED="true" ID="ID_180504012" CREATED="1601227386233" MODIFIED="1601227389055">
<node TEXT="Classe conservant les instances de repositories utilisées pour éviter les instanciations multiples." ID="ID_687254023" CREATED="1601325996393" MODIFIED="1601326012501"/>
<node TEXT="Utile pour parcourir une collection d&apos;entitées liées (jointure dans les tables) à d&apos;autres" ID="ID_464594380" CREATED="1601326013880" MODIFIED="1601326189273"/>
</node>
<node TEXT="GenericViewTwig" FOLDED="true" ID="ID_1606929423" CREATED="1601227403419" MODIFIED="1601227416280">
<node TEXT="Classe générique encapsulant le chargement et le rendu du template twig." ID="ID_1011890519" CREATED="1601326427060" MODIFIED="1601326429507"/>
<node TEXT="Hérite de la classe abstraite AbstractViewTwig encapsulant le chargement du template twig." ID="ID_46423247" CREATED="1601326461371" MODIFIED="1601326483015"/>
<node TEXT="Initialise le loader et le template à rendre&#xa;Ajoute l&apos;extension DebugExtension si la constante DEBUG est true." ID="ID_1582601193" CREATED="1601326484473" MODIFIED="1601326536678"/>
<node TEXT="Création des variables globales twig: &apos;debug&apos;, &apos;urlBase&apos;, &apos;publicDir&apos;, &apos;session&apos;, &apos;requestMethod&apos;" ID="ID_610926501" CREATED="1601326537466" MODIFIED="1601326538957"/>
</node>
<node TEXT="AbstractController" FOLDED="true" ID="ID_509439814" CREATED="1601223937510" MODIFIED="1601223943632">
<node TEXT="Les controller doivent contenir une action par défaut." ID="ID_784279382" CREATED="1601224001027" MODIFIED="1601224021384"/>
<node TEXT="Pour créer vos controller qui utiliserait le moteur de template inclu dans la librairie." ID="ID_1817771482" CREATED="1601223946221" MODIFIED="1601223978308"/>
<node TEXT="Prévilégiez l&apos;utilisation de l&apos;interface" ID="ID_547152737" CREATED="1601223985123" MODIFIED="1601223997579"/>
</node>
<node TEXT="Routeur" FOLDED="true" ID="ID_1518460351" CREATED="1601227392941" MODIFIED="1601227395881">
<node TEXT="Analyse l&apos;URL et gère les routes.&#xa;Les routes sont définies dans /config/routes.json" ID="ID_1433321194" CREATED="1601326210782" MODIFIED="1601326218562"/>
<node TEXT="L&apos;application utilise &quot;l&apos;url rewriting&quot; (avec /.htaccess) qui permet d&apos;avoir des url &quot;propre&quot; du style &quot;https://demophalntwig.phaln.info/personneShowAll&quot; plutôt que &quot;https://demophalntwig.phaln.info/public/index.php?ctrl=Personne&amp;action=showAll&quot;." ID="ID_203262814" CREATED="1601326221596" MODIFIED="1601326292738"/>
<node TEXT="Le fichier /index.php renvoit vers la route accueil.&#xa;Vous ferez attention à mettre à jour ce fichier /.htaccess (ligne RewriteBase /dev/demophalntwig/public/) en fonction de votre installation." ID="ID_1414766094" CREATED="1601326293896" MODIFIED="1601326305756"/>
<node TEXT="/public/index.php est la page principale de l&apos;application. C&apos;est elle qui est chargée d&apos;instancier le routeur qui, à partir de la route demandée dans l&apos;url (ici personneShowAll), vérifit si cette route est une route autorisée dans le fichier /config/routes.json." ID="ID_1497140065" CREATED="1601326306649" MODIFIED="1601326316719"/>
<node TEXT="Si la route figure dans le fichier, elle est décodée pour appeler la bonne méthode du bon controller (c&apos;est aussi précisé dans le fichier routes.json)." ID="ID_493138520" CREATED="1601326317201" MODIFIED="1601326319664"/>
</node>
<node TEXT="Template" FOLDED="true" ID="ID_1976480983" CREATED="1601227396435" MODIFIED="1601227399159">
<node TEXT="Micro-moteur de template HTML simpliste." ID="ID_1868378612" CREATED="1601326350226" MODIFIED="1601326370617"/>
<node TEXT="Dans le code HTML, les tags doivent être entre cochets et leur identifiant précédé d&apos;un @." ID="ID_92690738" CREATED="1601326371081" MODIFIED="1601326383704"/>
<node TEXT="Exemple du tag &apos;designation&apos; inséré dans une célulle d&apos;un tableau HTML: &lt;td&gt;[@designation]&lt;/td&gt;&#xa; Lors de l&apos;affichage du template, le moteur remplacera le tag &apos;designation&apos; par la valeur qui lui aura été affecté au préalable avec set(&apos;identifiant&apos;, &quot;Vive les IRIS&quot;); ici la chaine de caractères &quot;Vive les IRIS&quot;" ID="ID_459425938" CREATED="1601326384383" MODIFIED="1601326406371"/>
</node>
</node>
</node>
</node>
<node TEXT="Composer" FOLDED="true" POSITION="left" ID="ID_1533850960" CREATED="1578667835669" MODIFIED="1578667855730">
<edge COLOR="#7c0000"/>
<node TEXT="Téléchargez Composer depuis:&#xa;https://getcomposer.org/download/" ID="ID_414820649" CREATED="1578667567485" MODIFIED="1578667600242"/>
<node TEXT="!!! Faites attention au dossier dans lequel vous l&apos;installez !!!" ID="ID_247116705" CREATED="1578667604240" MODIFIED="1578667625257">
<node TEXT="Ajoutez ce dossier dans le path système pour pouvoir utiliser la commande composer dans un terminal depuis n&apos;importe quel dossier." ID="ID_104512710" CREATED="1578667629232" MODIFIED="1578667715302"/>
<node TEXT="Vérifiez en faisant :&#xa;composer -v" ID="ID_1847840152" CREATED="1578667720705" MODIFIED="1578667746427"/>
</node>
<node TEXT="Possibilité de rédiger un fichier composer.json (à la racine du projet) pour y décrire les modules, librairies, dépendances, ... nécessaires à l&apos;application." ID="ID_93293718" CREATED="1578667758567" MODIFIED="1578667814958"/>
<node TEXT="Pour utiliser avec composer un dépôt Git privé (sur Gitlab par exemple...), il faut ajouter un fichier nommé &quot;auth.json&quot; dans le dossier d&apos;installation de composer" ID="ID_738247015" CREATED="1568666603106" MODIFIED="1578667304739">
<node TEXT="{&#xa;    &quot;http-basic&quot;: {&#xa;        &quot;gitlab.com&quot;: {&#xa;            &quot;username&quot;: &quot;monIdentifiant&quot;,&#xa;            &quot;password&quot;: &quot;monMotDePasse&quot;&#xa;        }&#xa;    }&#xa;}" ID="ID_1785478635" CREATED="1568666667570" MODIFIED="1568666701655"/>
<node TEXT="Vous pouvez aussi installer une clé ssh.&#xa;Regardez la procédure sur GitLab" ID="ID_15288091" CREATED="1601219933171" MODIFIED="1601219957406"/>
</node>
<node TEXT="Quelques commandes Composer" ID="ID_297392668" CREATED="1568665868823" MODIFIED="1578667858864">
<node TEXT="composer install" ID="ID_1122012930" CREATED="1519656473212" MODIFIED="1578667428451">
<node TEXT="Installation des dépendances après avoir cloné un dépôt Git par exemple" ID="ID_1069109447" CREATED="1519656488964" MODIFIED="1519656535047"/>
<node TEXT="--dev précise qu&apos;on est sur une installation en mode dev.&#xa;C&apos;est la valeur par défaut, inutile de la préciser." ID="ID_173439395" CREATED="1568666001593" MODIFIED="1601554892998"/>
<node TEXT="&quot;exécute&quot; tout le fichier composer.json et crée le fichier composer.lock" ID="ID_1081761690" CREATED="1568666053878" MODIFIED="1568666082792"/>
</node>
<node TEXT="composer require --dev NomDuPackage &quot;^version&quot;" ID="ID_851761917" CREATED="1519656768648" MODIFIED="1519656803418">
<node TEXT="Installe, depuis packagist.org, un package dans l&apos;application, ici uniquement en dev" ID="ID_22895497" CREATED="1519656812622" MODIFIED="1548693963776"/>
<node TEXT="Pour installer depuis un dépot privé, utilisez le fichier composer.json" ID="ID_645985693" CREATED="1601220014688" MODIFIED="1601220038692"/>
</node>
<node TEXT="composer self-update" ID="ID_1449077079" CREATED="1546093709613" MODIFIED="1546093727531">
<node TEXT="Met composer à jour" ID="ID_804806695" CREATED="1546093729218" MODIFIED="1546093735903"/>
</node>
<node TEXT="composer -v" ID="ID_1446400357" CREATED="1546093745855" MODIFIED="1546093752915">
<node TEXT="Affiche la version de composer et les commandes" ID="ID_293699900" CREATED="1546093754946" MODIFIED="1546093766428"/>
</node>
<node TEXT="composer clearcache" ID="ID_207214441" CREATED="1568666123549" MODIFIED="1568666158559">
<node TEXT="Efface le cache de chargement des dépendances" ID="ID_317735846" CREATED="1568666160840" MODIFIED="1568666171185"/>
</node>
<node TEXT="composer update --dev" ID="ID_890774105" CREATED="1568666191946" MODIFIED="1568666201678">
<node TEXT="Met à jour les dépendances (après modif de composer.json par exemple), ici en dev" ID="ID_1947924859" CREATED="1568666203115" MODIFIED="1578667456748"/>
</node>
</node>
</node>
<node TEXT="Les fichiers utiles" FOLDED="true" POSITION="left" ID="ID_936760365" CREATED="1568665813257" MODIFIED="1568665827420">
<edge COLOR="#00ff00"/>
<node TEXT="/composer.json" FOLDED="true" ID="ID_32036662" CREATED="1568665829873" MODIFIED="1578668312464">
<node TEXT="Contient les dépendances requises pour la construction de l&apos;application" ID="ID_640815116" CREATED="1568665837996" MODIFIED="1578667902560"/>
<node TEXT="On l&apos;utilise pour ajouter la librairie Phaln au projet" ID="ID_586575348" CREATED="1578667924188" MODIFIED="1578667941850"/>
<node TEXT="Se place dans le dossier racine du projet" ID="ID_1281479600" CREATED="1578667968775" MODIFIED="1578667980270"/>
<node TEXT="Pour l&apos;utiliser afin d&apos;ajouter la librairie Phaln, il faut précisez les repositories utilisant un dépôt GitLab plutôt que Pakagist (qui est le dépôt officiel pour composer)" FOLDED="true" ID="ID_1805081848" CREATED="1568666729899" MODIFIED="1578668071581">
<node TEXT="{&#xa;    &quot;name&quot;: &quot;phaln/demophalntwig&quot;,&#xa;    &quot;description&quot;:&quot;Exemple d&apos;utilisation de la librairie PhAln&quot;,&#xa;    &quot;license&quot; : &quot;proprietary&quot;,&#xa;    &quot;repositories&quot;: [&#xa;         {&#xa;             &quot;type&quot;: &quot;package&quot;,&#xa;             &quot;package&quot;: {&#xa;                  &quot;name&quot;: &quot;phaln/Phaln&quot;,&#xa;                  &quot;version&quot;: &quot;2.0&quot;,&#xa;                  &quot;source&quot;: {&#xa;                      &quot;type&quot;: &quot;git&quot;,&#xa;                      &quot;url&quot;: &quot;git@gitlab.com:csi-ort_etudiants/csi_grpavance/phaln.git&quot;,&#xa;                      &quot;reference&quot;: &quot;v2.0.4&quot;&#xa;                  }&#xa;             }&#xa;         }&#xa;    ],&#xa;    &quot;minimum-stability&quot;: &quot;dev&quot;,&#xa;    &quot;require&quot;: {&#xa;         &quot;phaln/phaln&quot;: &quot;^2.0&quot;&#xa;    },&#xa;    &quot;require-dev&quot;: {&#xa;        &quot;symfony/var-dumper&quot;: &quot;^5.0&quot;&#xa;    },&#xa;    &quot;config&quot;: {&#xa;         &quot;gitlab.com&quot;: &quot;secret-account-access-token&quot;&#xa;    }&#xa;}" ID="ID_561511926" CREATED="1568666783777" MODIFIED="1601326809465"/>
<node TEXT="Si vous voulez utilisez d&apos;autres librairies (Twig par exemple), ajoutez-les dans la partie &quot;require&quot;" ID="ID_1244612096" CREATED="1601223001725" MODIFIED="1601223039712"/>
<node TEXT="Le module &quot;symfony/var-dumper&quot;: &quot;^5.0&quot; parmet d&apos;avoir une version de dump assez sympas (les tableaux/objets sont entier, repliables/dépliables...)" ID="ID_116455498" CREATED="1601223041888" MODIFIED="1601223097395"/>
</node>
</node>
<node TEXT="/.gitignore" FOLDED="true" ID="ID_563416163" CREATED="1568666265944" MODIFIED="1578668346018">
<node TEXT="Le fichier (caché) qui permet de configurer les fichiers à ne pas commiter dans le dépôt Git" ID="ID_347038815" CREATED="1568666297425" MODIFIED="1578668231893"/>
<node TEXT="Ajoutez-y le dossier nbproject (si vous travaillez avec Netbeans)" ID="ID_124882206" CREATED="1568666359832" MODIFIED="1578668346018"/>
<node TEXT="Le fichier /config/appConfig.php est à ajouter" ID="ID_1895402315" CREATED="1568666432527" MODIFIED="1568666449675"/>
<node TEXT="Les fichiers du dossier /log devraient y figurer." ID="ID_1667083144" CREATED="1578668125414" MODIFIED="1578668201467"/>
</node>
<node TEXT="/index.php" FOLDED="true" ID="ID_1142740406" CREATED="1568666498572" MODIFIED="1601223262361">
<node TEXT="Juste une redirection vers le fichier /public/pages/index.php ou /public/index.php si vous êtes en mvc" ID="ID_1914442348" CREATED="1568666504252" MODIFIED="1601223262361"/>
</node>
</node>
</node>
</map>
