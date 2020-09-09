<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:02:31
         compiled from "/var/www/html/shopware_test/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/cache.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13783485805f588c17eb1885-83493509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ac50e0bf7cd4fdc96491fb27fba4299f3d2e145' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/cache.tpl',
      1 => 1599221006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13783485805f588c17eb1885-83493509',
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
  'unifunc' => 'content_5f588c17eb85d4_62534497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f588c17eb85d4_62534497')) {function content_5f588c17eb85d4_62534497($_smarty_tpl) {?><div class="sf-toolbar-block sf-toolbar-block-cache sf-toolbar-status-normal">
    <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'profiler', 'action' => 'detail', 'id' => $_smarty_tpl->tpl_vars['sProfilerID']->value, 'panel' => 'cache', ))); ?>">
        <div class="sf-toolbar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
	<path fill="#AAA" d="M2.26 6.09l9.06-4.67a1.49 1.49 0 0 1 1.37 0l9.06 4.67a1.49 1.49 0 0 1 0 2.65l-9.06 4.67a1.49 1.49 0 0 1-1.37 0L2.26 8.74a1.49 1.49 0 0 1 0-2.65zM20.55 11L12 15.39 3.45 11a1.36 1.36 0 0 0-1.25 2.42l9.17 4.73a1.36 1.36 0 0 0 1.25 0l9.17-4.73A1.36 1.36 0 0 0 20.55 11zm0 4.47L12 19.86l-8.55-4.41a1.36 1.36 0 0 0-1.25 2.42l9.17 4.73a1.36 1.36 0 0 0 1.25 0l9.17-4.73a1.36 1.36 0 0 0-1.25-2.42z"/>
</svg>


            <span class="sf-toolbar-value"><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['cache']['calls'];?>
</span>
            <span class="sf-toolbar-info-piece-additional-detail">
                <span class="sf-toolbar-label">in</span>
                <span class="sf-toolbar-value"><?php echo number_format($_smarty_tpl->tpl_vars['sProfiler']->value['cache']['time'],4);?>
</span>
                <span class="sf-toolbar-label">ms</span>
            </span>
        </div>
    </a>
    <div class="sf-toolbar-info">
        <div class="sf-toolbar-info-piece">
            <b>Cache Calls</b>
            <span><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['cache']['calls'];?>
</span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>Total time</b>
            <span><?php echo number_format($_smarty_tpl->tpl_vars['sProfiler']->value['cache']['time'],4);?>
 ms</span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>Cache hits</b>
            <span><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['cache']['hit'];?>
 / <?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['cache']['read'];?>
 (<?php echo number_format((($_smarty_tpl->tpl_vars['sProfiler']->value['cache']['hit']/$_smarty_tpl->tpl_vars['sProfiler']->value['cache']['read'])*100),0);?>
%)</span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>Cache writes</b>
            <span><?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['cache']['write'];?>
</span>
        </div>
    </div>
</div><?php }} ?>