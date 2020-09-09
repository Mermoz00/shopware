<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:02:31
         compiled from "/var/www/html/shopware_test/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/db.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7337554305f588c17ebbd22-07924113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd86c1ee13c1979e5842fc2d57323f80c77bb0f78' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/db.tpl',
      1 => 1599221006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7337554305f588c17ebbd22-07924113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sProfilerID' => 0,
    'sProfiler' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f588c17ec1654_15227676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f588c17ec1654_15227676')) {function content_5f588c17ec1654_15227676($_smarty_tpl) {?><div class="sf-toolbar-block sf-toolbar-block-db sf-toolbar-status-normal">
    <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'profiler', 'action' => 'detail', 'id' => $_smarty_tpl->tpl_vars['sProfilerID']->value, 'panel' => 'db', ))); ?>">
        <div class="sf-toolbar-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path fill="#AAAAAA" d="M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z"/>
</svg>
            <span class="sf-toolbar-value">Database</span>
        </div>
    </a>
    <div class="sf-toolbar-info">
        <div class="sf-toolbar-info-piece">
            <b>Database Queries</b>
            <span class="sf-toolbar-status"><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['db']['totalQueries'];?>
</span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>Query time</b>
            <span><?php echo number_format($_smarty_tpl->tpl_vars['sProfiler']->value['db']['queryTime'],4);?>
 s</span>
        </div>
    </div>
</div><?php }} ?>