{extends file='parent:widgets/checkout/info.tpl'}

{* Notepad entry *}
{block name="frontend_index_checkout_actions_notepad" prepend}
    {if $theme.woofles_header_service_in_topbar != 1 and false}
        <li class="navigation--entry woofles--entry--service has--drop-down" role="menuitem" data-search="true" aria-haspopup="true" data-drop-down-menu="true">
            <a class="btn entry--link"  title="{"{s namespace='frontend/index/checkout_actions' name='IndexLinkService'}{/s}"|escape}">
                <i class="icon--service"></i>
            </a>

            {include file="widgets/index/menu.tpl" sGroup=left}
        </li>
    {/if}
{/block}

{* My account entry *}
{block name="frontend_index_checkout_actions_my_options"}
    <li class="navigation--entry entry--account{if {config name=useSltCookie} || $sOneTimeAccount} with-slt{/if}{if $theme.woofles_header_account_icon_only} woofles--icon-only{/if}"
        role="menuitem"
        data-offcanvas="true"
        data-offCanvasSelector=".account--dropdown-navigation">
        {block name="frontend_index_checkout_actions_account"}
            <a {if $theme.woofles_login_popup_enabled != 1}href="{url controller='account'}"{/if}
               title="{"{if $userInfo}{s name="AccountGreetingBefore" namespace="frontend/account/sidebar"}{/s}{$userInfo['firstname']}{s name="AccountGreetingAfter" namespace="frontend/account/sidebar"}{/s} - {/if}{s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}"|escape}"
               class="btn is--icon-left entry--link account--link{if $userInfo} account--user-loggedin{/if}">
                <i class="icon--account"></i>
                {if $userInfo}
                    <span class="account--display navigation--personalized">
                        <span class="account--display-greeting">
                            {s name="AccountGreetingBefore" namespace="frontend/account/sidebar"}{/s}
                            {$userInfo['firstname']}
                            {s name="AccountGreetingAfter" namespace="frontend/account/sidebar"}{/s}
                        </span>
                        {s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}
                    </span>
                {else}
                    <span class="account--display">
                        {s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}
                    </span>
                {/if}
            </a>
        {/block}

        {if {config name=useSltCookie} || $sOneTimeAccount}
            {block name="frontend_index_checkout_actions_account_navigation"}
                <div class="account--dropdown-navigation {if $sUserLoggedIn == false and $theme.woofles_login_popup_enabled == 1}woofles--login-popup-enabled woofles--popup-closed{/if} woofles--login-{$theme.woofles_login_popup_type}">

                    {if $sUserLoggedIn == true}

                        {block name="frontend_index_checkout_actions_account_navigation_smartphone"}
                            <div class="navigation--smartphone">
                                <div class="entry--close-off-canvas">
                                    <a href="#close-account-menu"
                                    class="account--close-off-canvas"
                                    title="{s namespace='frontend/index/menu_left' name="IndexActionCloseMenu"}{/s}">
                                        {s namespace='frontend/index/menu_left' name="IndexActionCloseMenu"}{/s} <i class="icon--arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        {/block}

                        {block name="frontend_index_checkout_actions_account_menu"}
                            {include file="frontend/account/sidebar.tpl" showSidebar=true inHeader=true}
                        {/block}

                    {/if}

                </div>
            {/block}
            
        {/if}


    </li>
{/block}