<? get_header();


if(get_post()->post_content == '')
{
	if(get_field('joke_start') == '' && get_field('joke_middle') == '' && get_field('joke_end') == '')
	{
		$jokes = array(
			array(
				'Why does Peter Pan always fly?',
				'Because he never lands.',
				'haha, that joke never gets old...'
			),
			array(
				'Somebody told me they do yoga Every Day',
				"like yeah okay That's a bit of a stretch...",
				'o.o'
			),
			array(
				'Have you heard of whiteboards?',
				'Dude those things are remarkable',
				'haha'
			),
			array(
				'How does one non-binary person kill another non-binary person?',
				'They Slash Them',
				'haha'
			),
			array(
				'Why did the coffee file a police report?',
				'It got mugged.',
				'Get it? haha MUGged'
			),
			array(
				'This fireplace has cracks in it.',
				"It's having a mantle breakdown...",
				'yup'
			),
			array(
				'If Mississippi gave Missouri her New Jersey, then what would Delaware',
				"I don't know but Alaska",
				''
			),
			array(
				'Did you guys hear about the circus fire?',
				'It was in tents',
				'everyone is Ok'
			),
			array(
				'this is',
				'a new',
				'array'
			)
		);
		
		$numberOfJokes = count($jokes);
		$whichJoke = rand(0,$numberOfJokes)-1;
		if($whichJoke<0)$whichJoke++;
	}
	else
	{
		$jokes = array(
			array(
				get_field('joke_start'),
				get_field('joke_middle'),
				get_field('joke_end')
			)
		);
		$whichJoke = 0;
	}

	$svgHero = array(
		'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,96L0,64L288,64L288,128L576,128L576,32L864,32L864,192L1152,192L1152,96L1440,96L1440,320L1152,320L1152,320L864,320L864,320L576,320L576,320L288,320L288,320L0,320L0,320Z"></path></svg>',

		'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,224L0,64L160,64L160,160L320,160L320,64L480,64L480,256L640,256L640,32L800,32L800,128L960,128L960,128L1120,128L1120,32L1280,32L1280,128L1440,128L1440,320L1280,320L1280,320L1120,320L1120,320L960,320L960,320L800,320L800,320L640,320L640,320L480,320L480,320L320,320L320,320L160,320L160,320L0,320L0,320Z"></path></svg>',

		'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,192L0,32L102.9,32L102.9,160L205.7,160L205.7,0L308.6,0L308.6,160L411.4,160L411.4,160L514.3,160L514.3,128L617.1,128L617.1,64L720,64L720,64L822.9,64L822.9,128L925.7,128L925.7,64L1028.6,64L1028.6,160L1131.4,160L1131.4,224L1234.3,224L1234.3,64L1337.1,64L1337.1,224L1440,224L1440,320L1337.1,320L1337.1,320L1234.3,320L1234.3,320L1131.4,320L1131.4,320L1028.6,320L1028.6,320L925.7,320L925.7,320L822.9,320L822.9,320L720,320L720,320L617.1,320L617.1,320L514.3,320L514.3,320L411.4,320L411.4,320L308.6,320L308.6,320L205.7,320L205.7,320L102.9,320L102.9,320L0,320L0,320Z"></path></svg>',

		'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,224L0,192L55.4,192L55.4,96L110.8,96L110.8,288L166.2,288L166.2,288L221.5,288L221.5,288L276.9,288L276.9,160L332.3,160L332.3,160L387.7,160L387.7,32L443.1,32L443.1,96L498.5,96L498.5,160L553.8,160L553.8,256L609.2,256L609.2,64L664.6,64L664.6,64L720,64L720,64L775.4,64L775.4,160L830.8,160L830.8,96L886.2,96L886.2,224L941.5,224L941.5,96L996.9,96L996.9,256L1052.3,256L1052.3,192L1107.7,192L1107.7,160L1163.1,160L1163.1,224L1218.5,224L1218.5,224L1273.8,224L1273.8,128L1329.2,128L1329.2,128L1384.6,128L1384.6,160L1440,160L1440,320L1384.6,320L1384.6,320L1329.2,320L1329.2,320L1273.8,320L1273.8,320L1218.5,320L1218.5,320L1163.1,320L1163.1,320L1107.7,320L1107.7,320L1052.3,320L1052.3,320L996.9,320L996.9,320L941.5,320L941.5,320L886.2,320L886.2,320L830.8,320L830.8,320L775.4,320L775.4,320L720,320L720,320L664.6,320L664.6,320L609.2,320L609.2,320L553.8,320L553.8,320L498.5,320L498.5,320L443.1,320L443.1,320L387.7,320L387.7,320L332.3,320L332.3,320L276.9,320L276.9,320L221.5,320L221.5,320L166.2,320L166.2,320L110.8,320L110.8,320L55.4,320L55.4,320L0,320L0,320Z"></path></svg>',

		'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,128L0,160L288,160L288,224L576,224L576,224L864,224L864,64L1152,64L1152,192L1440,192L1440,320L1152,320L1152,320L864,320L864,320L576,320L576,320L288,320L288,320L0,320L0,320Z"></path></svg>',

		'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,96L0,32L160,32L160,160L320,160L320,96L480,96L480,256L640,256L640,256L800,256L800,32L960,32L960,96L1120,96L1120,256L1280,256L1280,32L1440,32L1440,320L1280,320L1280,320L1120,320L1120,320L960,320L960,320L800,320L800,320L640,320L640,320L480,320L480,320L320,320L320,320L160,320L160,320L0,320L0,320Z"></path></svg>',

		'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,288L0,32L160,32L160,224L320,224L320,192L480,192L480,0L640,0L640,256L800,256L800,160L960,160L960,64L1120,64L1120,32L1280,32L1280,32L1440,32L1440,320L1280,320L1280,320L1120,320L1120,320L960,320L960,320L800,320L800,320L640,320L640,320L480,320L480,320L320,320L320,320L160,320L160,320L0,320L0,320Z"></path></svg>'
	);

	$svgCount = count($svgHero);
	$whichSvg = rand(0,$svgCount)-1;
	if($whichSvg<0)$whichSvg++;
	?>
	<!-- HERO IMAGE -->
	<div class="hero-cell">
		<h2><? echo $jokes[$whichJoke][0];?></h2>
		<? echo $svgHero[$whichSvg];?>
		<div>
			<h2 class="align-self-end"><? echo $jokes[$whichJoke][1];?></h2>
			<h2 class="align-self-end"><? echo $jokes[$whichJoke][2];?></h2>
		</div>
	</div>

	<?
	if(get_field('greetings_text') == '')$greetingsText = '
		<p>Welcome to my domain!</p>
		<p>Here you can learn more about me and my different projects.</p>
		<p>Or maybe you’re just here to inspect my website code</p>
	';
	else $greetingsText = '<p>'.get_field('greetings_text').'</p>';

	if(get_field('image_url') == '')$imageUrl = get_theme_file_uri('/images/hi-there.gif');
	else $imageUrl = get_field('image_url');
	?>
	
	<main class="main-content-cell align-items-center justify-space-between alignc-center">
		<div class="column">
			<? echo $greetingsText;?>
		</div>
		<div class="column">
			<img src="<? echo $imageUrl;?>" alt="hi there">
		</div>
	</main>
	<?
}
else
{
?>
	<div class="front-page-user">
	<?
		if(have_posts())
		{
			the_post();
			the_content();
		}
	?>
	</div>
<?
}
			

get_footer();?>