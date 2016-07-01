<?php
    session_start();
    require_once('include/common.inc.php'); 
    require_once 'lib/Smarty.class.php';
    dbInitialConnect();
    $getUserId = intval($_GET['id']);

    $userData = getUserData($getUserId);
    dataIsEmpty($userData);

    $smarty = new Smarty();

    $smarty->template_dir = TEMPLATE_DIR;
    $smarty->compile_dir = COMPILE_DIR;

    $smarty->assign('title', $userData[0]['name'].' '.$userData[0]['last_name']);
    $smarty->assign('description', 'Описание');
    $smarty->display('head.html');


    $smarty->display('header.html');

      
    $smarty->assign('user', $userData[0]);
    $smarty->display('user_profil.html');

    $addUserDate = getAnswersDataUser($getUserId);
    $smarty->assign('userAnswer', $addUserDate);
    $smarty->display('user_answer_profil.html');
      
    $smarty->assign('VkAuthLink', getVkAuthLink());
    $smarty->display('footer.html'); 
  
?>
