<? get_header('no-highlight');?>

	<main class="main-content-cell column alignc-center blog">
		<h1>&lt404-not-found&gt</h1>
		<p>But since you're here, here's a random YouTube video xP</p>

		<?
			$videos = array('7j8YktVCBmQ', 'T_Gzbg-ToyA','LnzuMJLZRdU','QZwneRb-zqA','TR1q9NkmmRM','nxM1cnphLpw','L1tx-wAI6Nw','mAn2weuytUA');
			$numberOfVideos = count($videos);
			$whichVideo = rand(0,$numberOfVideos)-1;
			if($whichVideo<0)$whichVideo++;
		?>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/<? echo $videos[$whichVideo];?>?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</main>
<? get_footer();?>