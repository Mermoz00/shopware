<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:02:31
         compiled from "/var/www/html/shopware_test/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/smarty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:957878955f588c17e9f541-72006852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0ee5e194e989874d8efe9df8b8d67f644a19401' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/smarty.tpl',
      1 => 1599221006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '957878955f588c17e9f541-72006852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sProfilerID' => 0,
    'sProfiler' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f588c17ea6a04_08470861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f588c17ea6a04_08470861')) {function content_5f588c17ea6a04_08470861($_smarty_tpl) {?><div class="sf-toolbar-block sf-toolbar-block-twig sf-toolbar-status-normal ">
    <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'profiler', 'action' => 'detail', 'id' => $_smarty_tpl->tpl_vars['sProfilerID']->value, 'panel' => 'template', ))); ?>">
        <div class="sf-toolbar-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path fill="#AAAAAA" d="M20.1,1H3.9C2.3,1,1,2.3,1,3.9v16.3C1,21.7,2.3,23,3.9,23h16.3c1.6,0,2.9-1.3,2.9-2.9V3.9
    C23,2.3,21.7,1,20.1,1z M21,20.1c0,0.5-0.4,0.9-0.9,0.9H3.9C3.4,21,3,20.6,3,20.1V3.9C3,3.4,3.4,3,3.9,3h16.3C20.6,3,21,3.4,21,3.9
    V20.1z M5,5h14v3H5V5z M5,10h3v9H5V10z M10,10h9v9h-9V10z"/>
</svg>

            <span class="sf-toolbar-value">Template</span>
        </div>
    </a>
    <div class="sf-toolbar-info">
        <div class="sf-toolbar-info-piece">
            <b>Template</b>
            <span>
                <?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sProfiler']->value['template']['template']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
                    <?php echo $_smarty_tpl->tpl_vars['template']->value;?>

                <?php } ?>
            </span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>Template folders</b>
            <span>
                <?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sProfiler']->value['template']['template_dir']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
                    <span class="block"><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</span>
                <?php } ?>
            </span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>Plugin folders</b>
            <span>
                <?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sProfiler']->value['template']['plugin_dir']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
                    <span class="block"><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</span>
                <?php } ?>
            </span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>Cache folder</b>
            <span>
                <?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['template']['cache_dir'];?>

            </span>
        </div>
        <div class="sf-toolbar-info-piece">
            <b>Compile folder</b>
            <span>
                <?php echo $_smarty_tpl->tpl_vars['sProfiler']->value['template']['compile_dir'];?>

            </span>
        </div>
    </div>
</div><?php }} ?>