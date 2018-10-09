{extends file='parent:frontend/index/index.tpl'}

{*
---This block manages classes assigned to "body" element
*}
{block name="frontend_index_body_classes"}
    {$smarty.block.parent} 
    {if $theme.woofles_sticky_header_is_enabled == 1}
        woofles--sticky-header-enabled 

        {if $theme.woofles_sticky_header_hide_navigation == 1} 
            woofles--hide-navigation-on-scroll
        {/if}

    {/if}    
{/block}

{* 
---"$theme" variable output
 *}
{block name='frontend_index_after_body'}
    <div id="ppc" style="display:none">
        {$theme|print_r}
    </div>
{/block}

{*
---STICKY-HEADER ON:
---In this block, header & navigation are encapsulated together
---and off-canvas cart is moved outside of header, so it could have higher "z-index" value than header itself.
---For sticky-header feature only
---
---STICKY-HEADER OFF:
---For now, same as "responsive" theme
---
*}
{block name='frontend_index_navigation'}

    {if $theme.woofles_sticky_header_is_enabled == 1}

        <div class="woofles--header-sticky-glue"></div>

        {* Off-canvas Cart *}
        <div class="container--ajax-cart" data-collapse-cart="true"{if $theme.offcanvasCart} data-displayMode="offcanvas"{/if}></div>

        <div class="woofles--header-wrapper">

            <header class="header-main">
                {* Include the top bar navigation *}
                {block name='frontend_index_top_bar_container'}
                    {include file="frontend/index/topbar-navigation.tpl"}
                {/block}

                {block name='frontend_index_header_navigation'}
                    <div class="container header--navigation">

                        {* Logo container *}
                        {block name='frontend_index_logo_container'}
                            {include file="frontend/index/logo-container.tpl"}
                        {/block}

                        {* Shop navigation *}
                        {block name='frontend_index_shop_navigation'}
                            {include file="frontend/index/shop-navigation.tpl"}
                        {/block}

                        {block name='frontend_index_container_ajax_cart'}
                            <!--<div class="container--ajax-cart" data-collapse-cart="true"{if $theme.offcanvasCart} data-displayMode="offcanvas"{/if}></div>-->
                        {/block}
                    </div>
                {/block}
            </header>

            {* Maincategories navigation top *}
            {block name='frontend_index_navigation_categories_top'}
                <nav class="navigation-main {if $theme.woofles_sticky_header_hide_navigation == 1}woofles--hide-navigation-on-scroll {/if}">
                    <div class="container" data-menu-scroller="true" data-listSelector=".navigation--list.container" data-viewPortSelector=".navigation--list-wrapper">
                        {block name="frontend_index_navigation_categories_top_include"}
                            {include file='frontend/index/main-navigation.tpl'}
                        {/block}
                    </div>
                </nav>
            {/block}

        </div>

    {else}
        {$smarty.block.parent}
    {/if}

{/block}

{*
---This block contains Fly-In basic structure in controlls conditions for it to be rendered
*}
{block name='frontend_index_body_inline' append}

    {if 
        (
            $theme.woofles_flyin_is_date_limited != 1
        )
        or
        (
            $theme.woofles_flyin_is_date_limited == 1
            and
            ($smarty.now|date_format:"%d/%m/%y" > $theme.woofles_flyin_date_start or $smarty.now|date_format:"%d/%m/%y" == $theme.woofles_flyin_date_start) 
            and 
            ($smarty.now|date_format:"%d/%m/%y" < $theme.woofles_flyin_date_end or $smarty.now|date_format:"%d/%m/%y" == $theme.woofles_flyin_date_end)
        )
    }

        {block name='woofles_flyin_banner'}

            {if $theme.woofles_flyin_is_enabled == 1}
                <div class="woofles--flyin-banner-wrapper woofles--flyin-position-{if $theme.woofles_flyin_position}{$theme.woofles_flyin_position}{/if} woofles--popup-closed">

                    <div class="woofles--flyin-banner-label-wrapper">
                        <div class="woofles--flyin-banner-label-content{if $theme.woofles_flyin_label_uppercase} woofles--text-uppercase{/if}">
                            {if $theme.woofles_flyin_label_content}
                                <span>{$theme.woofles_flyin_label_content}</span><i class="{if $theme.woofles_flyin_position == 'bottom_right' or $theme.woofles_flyin_position == 'bottom_left'}icon--arrow-up{else}icon--arrow-right{/if}"></i>
                            {/if}
                        </div>
                    </div>

                    {if $theme.woofles_flyin_link_href}
                        <a href="{$theme.woofles_flyin_link_href}" target="_blank">
                    {/if}

                    {if $theme.woofles_flyin_content_type == 'img'}

                        <div class="woofles--flyin-banner-img-content-wrapper">
                            {*{if $theme.woofles_flyin_img_content}
                                <img src="{$theme.woofles_flyin_img_content}"> 
                            {/if}*}
                        </div>
                        
                    {elseif $theme.woofles_flyin_content_type == 'dig_punishing'}

                        <div class="woofles--flyin-banner-digpub-content-wrapper">
                            {if $theme.woofles_flyin_dig_pub_content}
                                {action module=widgets controller=SwagDigitalPublishing bannerId={$theme.woofles_flyin_dig_pub_content}}
                            {/if}
                        </div>
                        
                    {elseif $theme.woofles_flyin_content_type == 'custom'}

                        <div class="woofles--flyin-banner-custom-content-wrapper">
                            {if $theme.woofles_flyin_custom_content}
                                {$theme.woofles_flyin_custom_content}
                            {/if}
                        </div>
                        
                    {/if}

                    {if $theme.woofles_flyin_link_href}
                        </a>
                    {/if}

                </div>
            {/if}
            
        {/block}

    {/if}

{/block}

{*
---This block contains Scroll-To-Top structure
*}
{block name='frontend_index_body_inline' append}
    <div class="woofles--scroll-to-top-btn">
        <a href="#top">
            <i class="icon--arrow-up"></i>
        </a>
    </div>
{/block}

{*
---This block contains login window structure
*}
{block name='frontend_index_body_inline' append}

    {if $theme.woofles_login_popup_enabled == 1}
    
        <div class="woofles--login-window woofles--login-{$theme.woofles_login_popup_type} woofles--popup-closed">
            <div class="woofles--login-popup-wrapper">
                <div class="woofles--login-popup-form">
                    <form name="sLogin" method="post" action="{url controller='account' action='login' sTarget='account' sTargetAction='index'}">
                        {if $sTarget}<input name="sTarget" type="hidden" value="{$sTarget|escape}" />{/if}
                        <fieldset>
                            <p>
                                <label for="email">{s name='LoginLabelMail' namespace="frontend/account/login"}{/s}</label>
                                <input name="email" type="email" autocomplete="email" tabindex="1" value="{$sFormData.email|escape}" id="email2" class="text {if $sErrorFlag.email}instyle_error{/if}" />
                            </p>
                            <p class="none">
                                <label for="passwort">{s name="LoginLabelPassword" namespace="frontend/account/login"}{/s}</label>
                                <input name="password" type="password" autocomplete="current-password" tabindex="2" id="passwort2" class="text {if $sErrorFlag.password}instyle_error{/if}" />
                            </p>
                        </fieldset>

                        <p class="password">
                            <a href="{url action=password}" title="{"{s name='LoginLinkLostPassword' namespace="frontend/account/login"}{/s}"|escape}">
                                {s name="LoginLinkLostPassword" namespace="frontend/account/login"}{/s}
                            </a>
                        </p>
                        <div class="action">
                            <button class="btn is--primary is--large is--icon-right" type="submit" name="Submit">
                                {s name='LoginLinkLogon' namespace="frontend/account/login"}{/s}
                                <i class="icon--arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    {/if}

{/block}

{*
---This block contains overlay skeleton
*}
{block name='frontend_index_body_inline' append}

    <div class="woofles--popup-overlay"></div>

{/block}