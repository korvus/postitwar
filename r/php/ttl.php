<?php

$lang = array(
	'fr' => 'Français',
	'en' => 'English'
);

?>
<h1><a title="{tr id=GO_HOMEPAGE}revenir sur la HomePage{/tr}" href="index.php">{tr id=MAIN_TITLE}Post-it Générator !{/tr}</a></h1>
<div class="subttl">

	<h2>{tr id=MAIN_DESCRIPTION}Transformer n'importe quelle image en un festival de Post-It !{/tr}</h2>
	
	<div class="sn">
		<div style="float:right;">
			<?php
				foreach($lang as $iso => $text)
				{
					echo '<a href="r/changeLang.php?lang=' . $iso . '" class="lang_link ' . ( $lang == $iso ? ' lang_selected' : '' ) . '">' . $text . '</a> ';
				}
			?>
		</div>
		
		<g:plusone size="small"></g:plusone>
		<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://postitwar.me" data-count="none" data-lang="fr">Tweeter</a>
		<div id="fb-root"></div>
		<script src="http://connect.facebook.net/fr_FR/all.js#appId=235341769843857&amp;xfbml=1"></script>
		<fb:like href="" send="true" layout="button_count" width="350" show_faces="false" action="like" font=""></fb:like>
	</div>
	
</div>

<div>
	<script type="text/javascript"><!--
	google_ad_client = "ca-pub-8560042762072888";
	/* postitwar.me */
	google_ad_slot = "9908596741";
	google_ad_width = 728;
	google_ad_height = 15;
	//-->
	</script>
	<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
</div>


