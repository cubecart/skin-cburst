{*
 * CBurst skin for CubeCart v6
 * ========================================
 * CubeCart is a registered trade mark of CubeCart Limited
 * Copyright CubeCart Limited 2026. All rights reserved.
 * UK Private Limited Company No. 5323904
 * ========================================
 * Originally created by NiteFox (NiteTower Design) and
 * transferred to CubeCart Limited in 2022.
 * ========================================
 * Web:   https://www.cubecart.com
 * Email:  hello@cubecart.com
 * License:  GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
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
   
	<body>
		
		{foreach from=$BODY_JS_TOP item=js}{$js}{/foreach}

		{if $STORE_OFFLINE}
			<div class="alert alert-danger" style="margin:0px;">
				<div class="container text-center">
					{$LANG.common.warning_offline}
				</div>
			</div>
		{/if}
		

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
							<div class="header-basket">
								{include file='templates/box.basket.php'}
							</div>
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
		
		<div class="container">
			<div class="row">
			{include file='templates/element.breadcrumb.php'} 
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
					
					<div class="hidden-xs hidden-sm">
						{include file='templates/box.featured.php'}
						{if $PRODUCTS && $CONFIG['catalogue_sale_mode']>0 && $POPULAR}
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-12">	
									{include file='templates/box.popular.php'}
								</div>
								<div class="col-xs-12 col-sm-6 col-md-12">
									{include file='templates/box.sale_items.php'}
								</div>
							</div>
						{else}
							{include file='templates/box.popular.php'}
							{include file='templates/box.sale_items.php'}
						{/if}
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-9">
					<div class="page-body {$SECTION_NAME}_wrapper">
						{include file='templates/box.progress.php'}
						{include file='templates/box.errors.php'}
						<div class="page-body-content">
							{$PAGE_CONTENT}
						</div>
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
		{$DEBUG_INFO}
		{$LIVE_HELP}
		{$SKIN_SELECT}

		{include file='templates/element.markup.json-ld.php'}
		{include file='templates/modal.exit.php'}
		{$ACP_WIDGET}
	</body>
		
</html>