<?php /* Smarty version Smarty-3.1.7, created on 2016-06-30 23:59:32
         compiled from "/home/c/co35515/co355/public_html/template/form_add_question.html" */ ?>
<?php /*%%SmartyHeaderCode:139556965457757ce719b524-32307010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3529a73232eb63d214d96f3d31d10a438f37eff2' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/form_add_question.html',
      1 => 1467317773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139556965457757ce719b524-32307010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57757ce71dd9e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57757ce71dd9e')) {function content_57757ce71dd9e($_smarty_tpl) {?><?php if (isset($_SESSION['user'])){?>
  <div style="margin-top: 60px;">
    <h1>Задать вопрос</h1>              
    <form method="post" action="/handler/add_question.php" enctype="multipart/form-data"  class="form_question" id="forma" name="questionForma">               
      <select name="class" class="select_form" onChange="checkParams()" id="class_select">                 
        <option value="">Выберите класс</option>                 
        <option value="1">1 класс</option>                 
        <option value="2">2 класс</option>                 
        <option value="3">3 класс</option>                  
        <option value="4">4 класс</option>                 
        <option value="5">5 класс</option>                 
        <option value="6">6 класс</option>                 
        <option value="7">7 класс</option>                 
        <option value="8">8 класс</option>                  
        <option value="9">9 класс</option>                  
        <option value="10">10 класс</option>                 
        <option value="11">11 класс</option>                
      </select>               
      <select name="predmet" class="select_form" id="predmet_select" onChange="checkParams()" >                 
        <option value="">Предмет</option>                  
        <option value="1">Математика</option>                  
        <option value="2">Алгебра</option>                  
        <option value="3">Геометрия</option>                  
        <option value="4">Физика</option>                  
        <option value="5">Русский язык</option>                  
        <option value="6">Информатика</option>                
      </select>                
      <textarea id="checkText" onkeyup="checkParams()"  name="text" rows="14" class="text_area_question" placeholder="Введите текст задания (вопроса)"></textarea>                 
      <input name="postid" type="hidden" value="">               
      <p>Добавить картинку:</p>               
      <div class="fileform">                  
        <div id="fileformlabel"></div>                  
        <div class="selectbutton">Обзор</div>                  
        <input id="image" type="file" name="image" onchange="getName(this.value);">                  
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">                
      </div>	                  	                              
      <input type="submit" value="Отправить" class="buttonOnClick" id="submitDisabled" disabled>              
    </form>            
</div>
<?php }else{ ?>
  <div style="margin-top: 228px;"> 
    <h1>Задать вопрос</h1>
    <p class="answerIsNo">Задать вопрос, могут только Авторизированные пользователи.</p>                     </div>
<?php }?><?php }} ?>