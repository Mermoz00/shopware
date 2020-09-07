{extends file="parent:frontend/routing_demonstration/index.tpl"}

 {block name='frontend_index_content'}
   {$smarty.block.parent}
  <p> Hier kommt noch ein bisschen </p>
  <ul>
    {foreach $productNames as $productName}
      <li>{$productName}</li>
    {/foreach}
  </ul>
  {action module='widgets' controller='listing' action='topSeller'}
 {/block}