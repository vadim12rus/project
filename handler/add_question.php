<?php
    session_start();
    require_once('../include/common.inc.php');
    dbInitialConnect(); //Соединение с бд	

    $class = $_POST['class'];
    $predmet = convertNumberInSelectText($_POST['predmet']);
    $text = dbQuote(removeTheTags($_POST['text'])); 
    $today = date("Y-m-d H:i"); 

    $imgPath = PATH_IMG_QUESTION;
    $image = $_FILES['image'];
    $imageName = dbQuote($image['name']);
    $TARGET_PATH = $imgPath.$imageName;

    if(!haveIsEmptyData($class, $predmet, $text))
    {   
        if ((empty($imageName)) || (is_valid_type($image)))
        {  
            
            if (!empty($imageName))
            {
                fileExists(&$TARGET_PATH, &$imageName, $imgPath);
                uploadImage($image['tmp_name'], $TARGET_PATH);            
            } 
 
            addQuestionInDB($class, $predmet, $text, $today, $imageName);
            header('Location: /task.php?id='.dbGetLastInsertId()); 
        } 
        else
        {
            echo '<h3 align="center">Недопустимый формат файла. Допускаются только файлы в формате jpg, jpeg, bmp, gif, png</h3>';   
        }       
    }
    else
    {
         echo '<h3 align="center">Обязательные поля КЛАСС, ПРЕДМЕТ, ВОПРОС!</h3>';
    }
