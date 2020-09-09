<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:15
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/benchmark/store/industry.js" */ ?>
<?php /*%%SmartyHeaderCode:13938712615f58835b2167f9-66359239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adf3ef06368fb397b3b428d87adb6f3e7e7693f2' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/benchmark/store/industry.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13938712615f58835b2167f9-66359239',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835b237b54_13136683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835b237b54_13136683')) {function content_5f58835b237b54_13136683($_smarty_tpl) {?>//
//
Ext.define('Shopware.apps.Benchmark.store.Industry', {
    extend : 'Ext.data.Store',
    autoLoad : false,

    fields: [
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string'}
    ],

    data: [
        { id: 0, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'none_selected','default'=>'None selected yet','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'none_selected','default'=>'None selected yet','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keine<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'none_selected','default'=>'None selected yet','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 1, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'animals_pet_supplies','default'=>'Animals & Pet Supplies','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'animals_pet_supplies','default'=>'Animals & Pet Supplies','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tiere & Tierbedarf<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'animals_pet_supplies','default'=>'Animals & Pet Supplies','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 2, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'apparel_Accessories','default'=>'Apparel & Accessories','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'apparel_Accessories','default'=>'Apparel & Accessories','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bekleidung & Accessoires<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'apparel_Accessories','default'=>'Apparel & Accessories','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 3, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'arts_entertainment','default'=>'Arts & Entertainment','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'arts_entertainment','default'=>'Arts & Entertainment','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunst & Unterhaltung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'arts_entertainment','default'=>'Arts & Entertainment','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 4, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'baby_toddler','default'=>'Baby & Toddler','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'baby_toddler','default'=>'Baby & Toddler','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Baby & Kleinkind<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'baby_toddler','default'=>'Baby & Toddler','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 5, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'business_industrial','default'=>'Business & Industrial','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'business_industrial','default'=>'Business & Industrial','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wirtschaft & Industrie<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'business_industrial','default'=>'Business & Industrial','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 6, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cameras_optics','default'=>'Cameras & Optics','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'cameras_optics','default'=>'Cameras & Optics','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kameras & Optik<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'cameras_optics','default'=>'Cameras & Optics','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 7, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'electronics','default'=>'Electronics','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'electronics','default'=>'Electronics','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Elektronik<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'electronics','default'=>'Electronics','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 8, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'food_beverages_tobacco','default'=>'Food, Beverages & Tobacco','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'food_beverages_tobacco','default'=>'Food, Beverages & Tobacco','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nahrungsmittel, Getränke & Tabak<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'food_beverages_tobacco','default'=>'Food, Beverages & Tobacco','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 9, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'furniture','default'=>'Furniture','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'furniture','default'=>'Furniture','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Möbel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'furniture','default'=>'Furniture','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 10, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'hardware','default'=>'Hardware','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'hardware','default'=>'Hardware','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Heimwerkerbedarf<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'hardware','default'=>'Hardware','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 11, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'health_beauty','default'=>'Health & Beauty','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'health_beauty','default'=>'Health & Beauty','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gesundheit & Schönheit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'health_beauty','default'=>'Health & Beauty','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 12, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'home_garden','default'=>'Home & Garden','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'home_garden','default'=>'Home & Garden','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Heim & Garten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'home_garden','default'=>'Home & Garden','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 13, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'luggage_bags','default'=>'Luggage & Bags','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'luggage_bags','default'=>'Luggage & Bags','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Taschen & Gepäck<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'luggage_bags','default'=>'Luggage & Bags','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 14, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'mature','default'=>'Mature','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'mature','default'=>'Mature','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Für Erwachsene<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'mature','default'=>'Mature','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 15, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'media','default'=>'Media','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'media','default'=>'Media','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Medien<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'media','default'=>'Media','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 16, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'office_supplies','default'=>'Office Supplies','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'office_supplies','default'=>'Office Supplies','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bürobedarf<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'office_supplies','default'=>'Office Supplies','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 17, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'religious_ceremonial','default'=>'Religious & Ceremonial','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'religious_ceremonial','default'=>'Religious & Ceremonial','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Religion & Feierlichkeiten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'religious_ceremonial','default'=>'Religious & Ceremonial','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 18, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'software','default'=>'Software','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'software','default'=>'Software','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Software<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'software','default'=>'Software','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 19, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'sporting_goods','default'=>'Sporting Goods','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'sporting_goods','default'=>'Sporting Goods','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sportartikel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'sporting_goods','default'=>'Sporting Goods','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 20, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'toys_games','default'=>'Toys & Games','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'toys_games','default'=>'Toys & Games','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Spielzeuge & Spiele<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'toys_games','default'=>'Toys & Games','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
        { id: 21, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'vehicles_parts','default'=>'Vehicles & Parts','namespace'=>'backend/benchmark/categories')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'vehicles_parts','default'=>'Vehicles & Parts','namespace'=>'backend/benchmark/categories'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fahrzeuge & Teile<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'vehicles_parts','default'=>'Vehicles & Parts','namespace'=>'backend/benchmark/categories'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'}
    ]
});
//
<?php }} ?>