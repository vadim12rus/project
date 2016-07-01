<?php /* Smarty version Smarty-3.1.7, created on 2016-07-01 04:48:37
         compiled from "/home/c/co35515/co355/public_html/template/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:6536561157716326b70a29-61629748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf77756decbfc98a964d76fdaedf0340da47984e' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/footer.html',
      1 => 1467337709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6536561157716326b70a29-61629748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57716326b7487',
  'variables' => 
  array (
    'VkAuthLink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57716326b7487')) {function content_57716326b7487($_smarty_tpl) {?>
  
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