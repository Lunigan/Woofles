{extends file='parent:widgets/checkout/info.tpl'}

{* My account entry *}
{block name="frontend_index_checkout_actions_my_options"}
    <li class="navigation--entry entry--account{if {config name=useSltCookie} || $sOneTimeAccount} with-slt{/if}{if $theme.woofles_header_account_icon_only} woofles--icon-only{/if}"
        role="menuitem"
        data-offcanvas="true"
        data-offCanvasSelector=".account--dropdown-navigation">
        {block name="frontend_index_checkout_actions_account"}
            <a href="{url controller='account'}"
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
                <div class="account--dropdown-navigation {if $sUserLoggedIn == false and $theme.woofles_login_popup_enabled == 1}woofles--login-popup-enabled woofles--popup-closed{/if}">

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

                    {elseif $theme.woofles_login_popup_enabled == 1}

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

                    {/if}

                </div>
            {/block}
            
        {/if}


    </li>
{/block}