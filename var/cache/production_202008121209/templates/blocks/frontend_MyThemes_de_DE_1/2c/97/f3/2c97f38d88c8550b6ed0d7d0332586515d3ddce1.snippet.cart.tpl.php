<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:02:31
         compiled from "/var/www/html/shopware_test/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21331854125f588c17ee92a4-18467433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c97f38d88c8550b6ed0d7d0332586515d3ddce1' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/FroshProfiler/Resources/views/@Toolbar/toolbar/cart.tpl',
      1 => 1599221006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21331854125f588c17ee92a4-18467433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sProfilerID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f588c17eeb958_56838705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f588c17eeb958_56838705')) {function content_5f588c17eeb958_56838705($_smarty_tpl) {?><div class="sf-toolbar-block sf-toolbar-block-cache sf-toolbar-status-normal">
    <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'profiler', 'action' => 'detail', 'id' => $_smarty_tpl->tpl_vars['sProfilerID']->value, 'panel' => 'cart', ))); ?>">
        <div class="sf-toolbar-icon">
            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="36px" viewBox="0 0 48 36" enable-background="new 0 0 48 36" xml:space="preserve">  <image id="image0" width="48" height="36" x="0" y="0"
    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAkCAQAAABlTHGBAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElN
RQfiCQYLGjFShTiEAAACY0lEQVRIx7VUMYgTQRR9f5JCUbjKQzAniI14rZwHVicqpj64xlxSnLeF
tSAKgo0IVtaLh7e5VClt0njXCR7We6AiBi42SSGIGI3Jfoud2czszsrG3fxmdt/+eW/+f3+WvCpc
rqDgIEYX3slnGyMxD3qAiS/wk+FrFuQdz0NAhVgXcKg3PwG+RerRe89XAECs1g/zEze3AxcA6JWI
sIHUPFPEyYPL4UrdSICkABYL6c2yZPUjgUAJFFIByQr4qKwg0Q8SLfKqcAE4jc5sWHvh5zkAwJ+l
T4kKSG+RyxWuwDUOlwH7rRr0YW2c8KAIk5XFOAKmU9S3eOBQj3pwjN0ZMI4sBiIPaMDhqgk0OliK
ny4TJgVYr+CEalEBY6pmiHxNYOMHDUOl9ul89O0FjmZI9yC6y79y2jxU5/+4NtY8AHiA8wCARXwx
t9hm/x+4dAA+YK3AMqi22U/F9RkyBEQ/VWCmmP4mYgLWuxyGbfbTcaMCzQN1E5IV2GY/Ddf/Q7EK
WLZI5GqROUOmyV+l0KU8AliRqy+PO/0i3tIIAHhl937z1P9ws2hd44fyeV9WoifsdnA71+mjoFH5
7J1v8RZB3KPvBQk8COljAptdfC6APcDz+gv1UtK/XNxmZ2a6RIinjUfTt7L+ibdkgZ2SA0xcrgIA
HTZW7VTeO76azOebeKzJGTvkHSw5tV6tV3JM1BIZ8gXmHKaAvBwTt1VpVSauiVoiQ77hAe2EPeXq
+FhH0/iz5BsXjan5hq/HSA7qN4jtAlnyjRYRixodmOmilkafLZ/im5j27vIWlgH4tLP5Mp0+W/5f
jkwGuA61HWkAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTgtMDktMDZUMTE6MjY6NDktMDc6MDABX+wO
AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE4LTA5LTA2VDExOjI2OjQ5LTA3OjAwcAJUsgAAAABJRU5E
rkJggg==" />
</svg>

            <span class="sf-toolbar-value">Cart</span>
        </div>
    </a>
</div><?php }} ?>