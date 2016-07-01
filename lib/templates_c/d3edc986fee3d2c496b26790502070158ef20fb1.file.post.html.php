<?php /* Smarty version Smarty-3.1.7, created on 2016-06-30 23:30:40
         compiled from "/home/c/co35515/co355/public_html/template/post.html" */ ?>
<?php /*%%SmartyHeaderCode:2034181011577164775f72d5-81704682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3edc986fee3d2c496b26790502070158ef20fb1' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/post.html',
      1 => 1467318318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2034181011577164775f72d5-81704682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_577164776404f',
  'variables' => 
  array (
    'post' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577164776404f')) {function content_577164776404f($_smarty_tpl) {?><div class="content">   
  <div class="left_block_content">
    <div>
      <img class="avatar img-avatar" src="/upload/avatar/<?php echo $_smarty_tpl->tpl_vars['post']->value['avatar'];?>
">
      <div class="text_task"> 
        <div>
          <a href="/id<?php echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
">
            <span class="autor"><?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</span>
          </a>
          <span class="date joint_item fl_right"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</span>
        </div>
        <i class="pointer"></i>
        <p><?php echo $_smarty_tpl->tpl_vars['post']->value['task_text'];?>
</p><br>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['image']){?>
        <a href="/upload/question/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="link_image"><img src="/upload/question/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="attach_image_task"></a><br>
        <?php }?>
        <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['post']->value['item'];?>
</span>
        <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['post']->value['class'];?>
 класс</span> 
      </div>
    </div>   
<?php }} ?>