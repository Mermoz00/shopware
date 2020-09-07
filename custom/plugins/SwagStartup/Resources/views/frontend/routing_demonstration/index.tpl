{extends file="parent:frontend/index/index.tpl"}
{block name='frontend_index_search_container'}{/block}
{block name='frontend_index_sidebar'}{/block}
{block name='frontend_index_content'}
    <h1> Ich bin der {$currentAction} </h1>
    <img srcset="http://shopware.localhost/media/image/37/e2/f3/tube_200x200.jpg, http://shopware.localhost/media/image/7b/3c/1b/tube_200x200@2x.jpg 2x" alt="Hauptartikel mit Grundpreisberechnung" data-extension="jpg" title="Hauptartikel mit Grundpreisberechnung">
  
    <a class="btn"><i class="icon--arrow-left6"></i></a><a class="btn"><i class="icon--arrow-right6"></i></a>
    <br/>
    <a href="{url controller='RoutingDemonstration' action=$nextAction}"> 
        {s name="GoToNextPage"}{/s}
    </a>
{/block}