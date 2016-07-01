<?php
    session_start();
    require_once('include/common.inc.php'); 
    require_once 'lib/Smarty.class.php';
    dbInitialConnect();

    $post_id = intval($_GET['id']);
    $userTask= getUserTask($post_id);
    dataIsEmpty($userTask);

    $smarty = new Smarty();
    $smarty->template_dir = TEMPLATE_DIR;
    $smarty->compile_dir = COMPILE_DIR;


    $smarty->assign('title', $userTask[0]['task_text']);
    $smarty->assign('description', $userTask[0]['task_text']);
    $smarty->display('head.html');

    $smarty->display('header.html');
      
    $smarty->assign('post', $userTask[0]);
    $smarty->assign('date', substr($userTask[0]['date'], 0, 16));
    $smarty->display('post.html');

    $smarty->assign('post_id', $post_id);
    $smarty->display('form_add_answer.php'); 
      
    $rowAnswerTask = getUserAnswer($post_id);
    $smarty->assign('answer', $rowAnswerTask);    
    $smarty->display('answer.html');

    $recentUserTask = getRecentUserTask(AMOUNT_DATA_ON_RIGHT_BLOCK);
    $subjectDate = getSubjectDate();
    $smarty->assign('subject', $subjectDate);
    $smarty->assign('arrayLastTask', $recentUserTask);
    $smarty->display('right_block.html');
      
    $smarty->assign('VkAuthLink', getVkAuthLink());
    $smarty->display('footer.html'); 
   
?>
