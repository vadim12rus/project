<?php /* Smarty version Smarty-3.1.7, created on 2016-07-01 05:41:42
         compiled from "template/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1952014724576aa25e02b833-41954248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edf5c389830776f50324212d76ef6f680f1e7d9b' => 
    array (
      0 => 'template/footer.html',
      1 => 1467337709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1952014724576aa25e02b833-41954248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_576aa25e02f5e',
  'variables' => 
  array (
    'VkAuthLink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576aa25e02f5e')) {function content_576aa25e02f5e($_smarty_tpl) {?>
  
<div id="boxes">  
  <div id="dialog" class="window"><p>Войти с помощью:</p>  
  
    <a href="<?php echo $_smarty_tpl->tpl_vars['VkAuthLink']->value;?>
" class="vk"> <img src="/img/vk_icon.png" width="80" class="vk_img">Вконтакте</a> 
  </div>
</div>

<!-- Маска, затемняющая фон -->
<div id="mask"></div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/modalWindow.js"></script>
<script type="text/javascript" src="/js/spoiler.js"></script>
<script type="text/javascript" src="/js/ajax_form.js"></script>
<script type="text/javascript" src="/js/getNameFile.js"></script>
<script type="text/javascript" src="/js/checkParams.js"></script>
</div> <!-- wrap -->
<div class="footer_cuddled footer">
  <p>© 2016. Все права защищены.</p>
</div>
</body>
</html><?php }} ?>