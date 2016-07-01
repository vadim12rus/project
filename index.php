<?php 
    session_start();
    require_once('include/common.inc.php'); 
    require_once 'lib/Smarty.class.php';
    dbInitialConnect();
    $page = intval($_GET['page']); 
    checkTheGetRequestInIndex($page);

    $smarty = new Smarty();
    $smarty->template_dir = TEMPLATE_DIR;
    $smarty->compile_dir = COMPILE_DIR;

    $smarty->assign('title', 'Главная страница');
    $smarty->assign('description', 'Описание');
    $smarty->display('template/head.html');

    $smarty->display('header.html');


    $num = AMOUNT_DATA_ON_PAGE; // Переменная хранит число сообщений выводимых на станице   
    $posts =  getCountPosts(); // Определяем общее число постов в базе данных   
    $total = totalNumberOfPages($posts, $num); // Находим общее число страниц             
    $start = startPost(&$page, $total, $num);

    // Выбираем $num сообщений начиная с номера $start
    $postRow = getPost($start, $num);

    $smarty->assign('array', $postRow);
    $smarty->assign('page', $page);
    $smarty->assign('total', $total);
    $smarty->display('item.html');

    $recentUserTask = getRecentUserTask(AMOUNT_DATA_ON_RIGHT_BLOCK); 
    $subjectDate = getSubjectDate();
    $smarty->assign('subject', $subjectDate);
    $smarty->assign('arrayLastTask', $recentUserTask);
    $smarty->display('right_block.html');
    
    $smarty->assign('VkAuthLink', getVkAuthLink());
    $smarty->display('footer.html'); 

?>
