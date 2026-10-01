{*
 * CBurst CubeCart Template
 * ========================================
 * CBurst is a template developed by NiteFox 
 * also known as NiteTower Design.
 * ========================================
 * Web:        https://www.facebook.com/CubeCartThemes
 * Email:      nitetowerdesign@gmail.com
 * License:    http://nitefox.x10host.com/license.html
 * Disclaimer: http://nitefox.x10host.com/disclaimer.html
 *}

<!DOCTYPE html>

<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" dir="{$TEXT_DIRECTION}" lang="{$HTML_LANG}">

	<head>
		<title>{$META_TITLE}</title>
		{include file='templates/element.meta.php'}
		<link href="{$CANONICAL}" rel="canonical">
		<link href="{$ROOT_PATH}favicon.ico" rel="shortcut icon" type="image/x-icon">
		{include file='templates/element.css.php'}
		{include file='templates/content.recaptcha.head.php'}
		{include file='templates/element.google_analytics.php'}
		{include file='templates/element.js_head.php'}
	</head>
	
	<body class="checkout-page">
		
		{foreach from=$BODY_JS_TOP item=js}
			{$js}
		{/foreach}
		
		
		<div class="page-head">		
			<div class="page-header-sec">
			
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="main-logo-container">
								<a href="{$ROOT_PATH}" class="main-logo"><img src="{$STORE_LOGO}" class="main-logo-img" alt="{$CONFIG.store_name}"></a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 hidden-xs">
							<div class="main-search-container">
								{include file='templates/box.search.php'}
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
						</div>
					</div>					
				</div>
				
			</div>
			
			<div class="page-head-bar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="page-head-bar-links pull-left">
								{include file='templates/box.currency.php'}
								{include file='templates/box.language.php'}
							</div>
							<div class="pull-right">							
								{include file='templates/box.session.php'}
							</div>
							<div class="pull-right">
								<a href="javascript:" class="hidden-sm hidden-md hidden-lg parent-link" data-toggle="collapse" data-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">
									<i class="fas fa-search"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<div class="container page-wrapper">
			<div class="row">

				<div class="page-side col-xs-12 col-sm-12 col-md-3">
					<div class="hidden-sm hidden-md hidden-lg">
						<div class="collapse" id="collapseSearch">
							<div class="search-block">
								<div>
									{include file='templates/box.search_collapsed.php'}
								</div>
							
							<div class="clearfix adv-srch"><a href="{$STORE_URL}/search{$CONFIG.seo_ext}" class="pull-right"><i class="fas fa-search"></i> {$LANG.search.advanced}</a></div>
						</div></div>					
					</div>
				
					<div class="panel panel-default site-navigation-container">
						<div class="panel-heading"><i class="fas fa-bars"></i> {$LANG.navigation.title}</div>
						{include file='templates/box.navigation.php'}
					</div>

				</div>
			
				<div class="col-xs-12 col-sm-12 col-md-9">
					<div class="page-body {$SECTION_NAME}_wrapper">
						{include file='templates/box.progress.php'}
						{include file='templates/box.errors.php'}
						{$PAGE_CONTENT}
					</div>
				</div>
			</div>
			
			<a href="#"title="{$LANG.common.top}" class="back-to-top">
				<i class="fas fa-arrow-up"></i>
			</a>
		</div>
        
		<div class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						{include file='templates/box.documents.php'}
					</div>
					<div class="col-xs-12 col-sm-4">
						{include file='templates/box.newsletter.php'}
					</div>
					<div class="col-xs-12 col-sm-4">
						{$SOCIAL_LIST}
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-copyright text-center">
			{$COPYRIGHT} {if !empty($CONFIG.tax_number)}{$LANG.settings.tax_vat_number}: {$CONFIG.tax_number}{/if}
			{include file='templates/ccpower.php'}
		</div>
		
		{include file='templates/element.js_foot.php'}
		{$LIVE_HELP}
		{$DEBUG_INFO}
		{$SKIN_SELECT}

	</body>
	
	{include file='templates/element.markup.json-ld.php'}

</html>