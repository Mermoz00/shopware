{extends file="parent:frontend/index/logo-container.tpl"}

{block name='frontend_index_logo'}
    <ul>
    {foreach $sCategories as $sCategory}
       <li>{$sCategory['id']}</li>
    {/foreach}
    </ul>
{/block}