<!DOCTYPE html>
<html lang="mul" class="no-js">
<head>
	<meta charset="utf-8">
	<title>Wikipedia</title>
	<meta name="description" content="Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.">

	<?php $this->load->view('main/style'); ?>
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="">
</head>
<body>
	<h1 class="central-textlogo" style="font-size: 1em;">
	<img class="central-featured-logo" src="<?php echo base_url(); ?>assets/img/Wikipedia-logo.png" width="200" height="183" alt="Wikipedia">
	<div class="central-textlogo-wrapper">
	<div class="central-textlogo__image sprite svg-Wikipedia_wordmark">
	Wikipedia
	</div>
	<strong class="jsl10n localized-slogan" data-jsl10n="slogan">The Free Encyclopedia</strong>
	</div>
	</h1>
	<!-- container div for the central logo and the links to the most viewed language editions -->
	<div class="central-featured" data-el-section="primary links">
		
		<div class="central-featured-lang lang1" lang="en" dir="ltr">
			<a id="js-link-box-en" href="#" class="link-box">
				<strong>English</strong>
				<small><bdi dir="ltr">5&nbsp;837&nbsp;000+</bdi> <span>articles</span></small>
			</a>
		</div>

		<div class="central-featured-lang lang2" lang="es" dir="ltr">
			<a id="js-link-box-es" href="#" class="link-box">
				<strong>Español</strong>
				<small><bdi dir="ltr">1 515 000+</bdi> <span>artículos</span></small>
			</a>
		</div>

		<div class="central-featured-lang lang3" lang="ja" dir="ltr">
			<a id="js-link-box-ja" href="#" class="link-box">
				<strong>日本語</strong>
				<small><bdi dir="ltr">1 146 000+</bdi> <span>記事</span></small>
			</a>
		</div>

		<div class="central-featured-lang lang4" lang="de" dir="ltr">
			<a id="js-link-box-de" href="#" class="link-box">
				<strong>Deutsch</strong>
				<small><bdi dir="ltr">2 289 000+</bdi> <span>Artikel</span></small>
			</a>
		</div>

		<div class="central-featured-lang lang5" lang="ru" dir="ltr">
			<a id="js-link-box-ru" href="#" class="link-box">
				<strong>Русский</strong>
				<small><bdi dir="ltr">1 540 000+</bdi> <span>статей</span></small>
			</a>
		</div>

		<div class="central-featured-lang lang6" lang="fr" dir="ltr">
			<a id="js-link-box-fr" href="#" class="link-box">
				<strong>Français</strong>
				<small><bdi dir="ltr">2 096 000+</bdi> <span>articles</span></small>
			</a>
		</div>

		<div class="central-featured-lang lang7" lang="it" dir="ltr">
			<a id="js-link-box-it" href="#" class="link-box">
				<strong>Italiano</strong>
				<small><bdi dir="ltr">1 520 000+</bdi> <span>voci</span></small>
			</a>
		</div>

		<div class="central-featured-lang lang8" lang="zh" dir="ltr">
			<a id="js-link-box-zh" href="#" class="link-box" >
				<strong>中文</strong>
				<small><bdi dir="ltr">1 051 000+</bdi> <span>條目</span></small>
			</a>
		</div>

		<div class="central-featured-lang lang9" lang="pt" dir="ltr">
			<a id="js-link-box-pt" href="#" class="link-box">
				<strong>Português</strong>
				<small><bdi dir="ltr">1 002 000+</bdi> <span>artigos</span></small>
			</a>
		</div>

		<div class="central-featured-lang lang10" lang="pl" dir="ltr">
			<a id="js-link-box-pl" href="#" class="link-box">
				<strong>Polski</strong>
				<small><bdi dir="ltr">1 331 000+</bdi> <span>haseł</span></small>
			</a>
		</div>

	</div>

	<!-- Search form -->
	<div class="search-container">
		<form class="pure-form" id="search-form" action="#">
			<fieldset>
				<input type="hidden" name="family" value="wikipedia">
				<input type="hidden" id="hiddenLanguageInput" name="language" value="en">
				<div class="search-input" id="search-input">
					<label for="searchInput" class="screen-reader-text" data-jsl10n="search-input-label">Search Wikipedia</label>
					<input id="searchInput" name="search" type="search" size="20" autofocus="autofocus" accesskey="F" dir="auto" autocomplete="off" list="suggestions">
					<div class="styled-select no-js">
						<div class="hide-arrow">
							<select id="searchLanguage" name="language">
								<option value="id" lang="id">Bahasa Indonesia</option>
							</select>
							<div class="styled-select-active-helper"></div>
						</div>

						<i class="sprite svg-arrow-down"></i>
					</div>
				</div>
				<button class="pure-button pure-button-primary-progressive" type="submit">
				<i class="sprite svg-search-icon" data-jsl10n="search-input-button">Search</i>
				</button>
				<input type="hidden" value="Go" name="go">
			</fieldset>
		</form>
	</div>

	<div class="lang-list-button-wrapper">
		<button id="js-lang-list-button" class="lang-list-button">
			<span class="lang-list-button-text jsl10n">Read Wikipedia in your language </span>
		</button>
	</div>

	<div class="lang-list-border"></div> <!-- bikin garis -->


	<br>
	<br>
	<br>
	<hr> <!-- bikin garis lagi -->

	<?php $this->load->view('main/footer'); ?>

	<?php $this->load->view('main/private'); ?>
</body>
</html>
