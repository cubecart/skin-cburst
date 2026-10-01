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

{if $IS_USER}
	<div class="dropdown auth-menu">
		<a href="#" type="button" id="act_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="{$LANG.account.your_account}">{$LANG.account.your_account}</a>
		
		<ul class="dropdown-menu dropdown-menu-right auth-menu-list" aria-labelledby="act_dropdown">
			<li><a href="{$STORE_URL}/index.php?_a=account" title="{$LANG.account.your_account}">{$LANG.account.your_account}</a></li>
			<li><a href="{$STORE_URL}/index.php?_a=profile" title="{$LANG.account.your_details}">{$LANG.account.your_details}</a></li>
			<li><a href="{$STORE_URL}/index.php?_a=vieworder" title="{$LANG.account.your_orders}">{$LANG.account.your_orders}</a></li>
			<li><a href="{$STORE_URL}/index.php?_a=addressbook" title="{$LANG.account.your_addressbook}">{$LANG.account.your_addressbook}</a></li>
			<li><a href="{$STORE_URL}/index.php?_a=downloads" title="{$LANG.account.your_downloads}">{$LANG.account.your_downloads}</a></li>
			<li><a href="{$STORE_URL}/index.php?_a=newsletter" title="{$LANG.account.your_subscription}">{$LANG.account.your_subscription}</a></li>
			{foreach from=$SESSION_LIST_HOOKS item=list_item}
				<li><a href="{$list_item.href}" title="{$list_item.title}">{$list_item.title}</a></li>
			{/foreach}
			<li><a href="{$STORE_URL}/index.php?_a=logout" title="{$LANG.account.logout}">{$LANG.account.logout}</a></li>
		</ul>
		
		<a href="{$STORE_URL}/index.php?_a=logout" title="{$LANG.account.logout}" class="hidden-xs">{$LANG.account.logout}</a>

	</div>
{else}
	<div class="pre-auth-menu">
		<a href="{$STORE_URL}/login{$CONFIG.seo_ext}">{$LANG.account.login}</a> <a href="{$STORE_URL}/register{$CONFIG.seo_ext}">{$LANG.account.register}</a>
	</div>
{/if}