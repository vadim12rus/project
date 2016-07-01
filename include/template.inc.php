<?php
    require_once("common.inc.php");

    function outputAnswerAjax($text, $imageName)
    {
        $smarty = new Smarty();
        $smarty->template_dir = TEMPLATE_DIR;
        $smarty->compile_dir = COMPILE_DIR;
        $smarty->assign('text', $text);
        $smarty->assign('image', $imageName);
        return $smarty->fetch('echo_answer_ajax.html');  
    }
