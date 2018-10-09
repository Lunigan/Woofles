{extends file="parent:frontend/index/shop-navigation.tpl"}

{block name='frontend_index_search'}

    {if $theme.woofles_header_service_in_topbar != 1}
        {* Services *}
        <li class="navigation--entry woofles--entry--service has--drop-down" role="menuitem" data-search="true" aria-haspopup="true" data-drop-down-menu="true">

            <a class="btn entry--link"  title="{"{s namespace='frontend/index/checkout_actions' name='IndexLinkService'}{/s}"|escape}">
                <i class="icon--service"></i>
            </a>

            {* Include of the widget *}
            {block name="frontend_index_checkout_actions_service_menu_include"}
                {if $sMenu['left']}
                    <ul class="service--list woofles--popup-closed is--rounded" role="menu">
                        {foreach $sMenu['left'] as $item}
                            <li class="service--entry" role="menuitem">
                                <a class="service--link" href="{if $item.link}{$item.link}{else}{url controller='custom' sCustom=$item.id title=$item.description}{/if}" title="{$item.description|escape}" {if $item.target}target="{$item.target}"{/if}>
                                    {$item.description}
                                </a>
                            </li>
                        {/foreach}
                    </ul>
                {/if}
            {/block}

        </li>
    {/if}
    
    <li class="navigation--entry entry--search" role="menuitem" data-search="true" aria-haspopup="true"{if $theme.focusSearch && {controllerName|lower} == 'index'} data-activeOnStart="true"{/if}>
        <a class="btn entry--link entry--trigger" href="#show-hide--search" title="{"{s namespace='frontend/index/search' name="IndexTitleSearchToggle"}{/s}"|escape}">
            <i class="icon--search"></i>

            {block name='frontend_index_search_display'}
                <span class="search--display">{s namespace='frontend/index/search' name="IndexSearchFieldSubmit"}{/s}</span>
            {/block}
        </a>

        {* Include of the search form *}
        {block name='frontend_index_search_include'}
            {include file="frontend/index/search.tpl"}
        {/block}
    </li>

{/block}