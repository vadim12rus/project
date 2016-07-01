<?php
    require_once("common.inc.php");

    function getUserTask($post_id)
    {
        return dbQueryGetResult("SELECT question.*, us.name, us.avatar, us.user_id  
                                 FROM task question 
                                 INNER JOIN user us 
                                 ON (question.autor_id = us.user_id) 
                                 WHERE task_id = $post_id"
                               );
    }

    function getUserAnswer($post_id)
    {
        return dbQueryGetResult("SELECT answer.*, us.name, us.avatar, us.user_id 
                                 FROM answer  
                                 INNER JOIN user us 
                                 ON (answer.autor_id = us.user_id)  
                                 AND  (task_id = $post_id)
                                ");
    }

    function getRecentUserTask($limit)
    {
        return dbQueryGetResult("SELECT task_id, task_text, item, autor_name  
                                 FROM task 
                                 ORDER BY task_id 
                                 DESC limit $limit
                                ");
    }

    function getUserData($getUserId)
    {
        return dbQueryGetResult("SELECT * 
                                 FROM user 
                                 WHERE user_id = $getUserId
                                ");
    }

    function getAnswersDataUser($getUserId)
    {
        return dbQueryGetResult("SELECT answer.*, task.task_id, task.class, task.item 
                                 FROM answer 
                                 INNER JOIN task 
                                 ON answer.task_id = task.task_id 
                                 WHERE answer.autor_id = $getUserId
                               ");
    }

    function isUserInDatabase($vk_id)
    {
        return dbQueryGetResult("SELECT vk_id, user_id, avatar 
                                 FROM user
                                 WHERE vk_id = $vk_id
                               ");
    }
    function updateProfile($name, $lastname, $imageName, $userId)
    {
        return dbQuery("UPDATE user 
                        SET name = '$name', last_name = '$lastname', avatar = '$imageName'
                        WHERE user_id = '$userId'
                      ");
    }


    function getPost($start, $num)   
    {
        return dbQueryGetResult("SELECT questions.*, us.name, us.avatar, us.user_id, an.answer_id
                                 FROM task questions
                                 LEFT JOIN user us ON (questions.autor_id = us.user_id) 
                                 LEFT JOIN answer an ON (questions.task_id = an.task_id) 
                                 GROUP BY questions.task_id, an.task_id
                                 ORDER BY questions.task_id 
                                 DESC LIMIT $start, $num                     
                               ");
    }

    function getCountPostsInSubject($subject)
    {
        return count(dbQueryGetResult("SELECT task_id FROM task WHERE item = '$subject'"));  
        
    }

    function getCountPosts()
    {
         return count(dbQueryGetResult("SELECT task_id FROM task"));  
    }

    function getSubjectDate()
    {
        return dbQueryGetResult("SELECT
                                 DISTINCT item
                                 FROM task 
                                ");
    }

    function getPostsSubject($subject, $start, $num)
    {
        return dbQueryGetResult("SELECT questions.*, us.name, us.avatar, us.user_id 
                                 FROM task questions  
                                 INNER JOIN user us 
                                 ON (questions.autor_id = us.user_id) AND (questions.item = '$subject')
                                 ORDER BY task_id 
                                 DESC LIMIT $start, $num                             
                               ");
    }

    function addAnswerInDB($postid, $text, $autro_id, $imageName, $today)
    {
        return  dbQuery("insert into answer (task_id, answer_text, autor_id, image, date) values ('$postid', '$text', '$autro_id', '$imageName', '$today')");
    }

    function addNewUserInDB($user, $avatar)
    {
        $name = $user['first_name'];
        $floor = $user['sex'];   
        $vk_id = $user['uid']; 
        $last_name = $user['last_name'];   
        $bdate = $user['bdate'];
        return dbQuery("insert into user (name, last_name, vk_id, avatar, floor, bdate) values ('$name', '$last_name', '$vk_id', '$avatar', '$floor', '$bdate')"); 
    }

    function addQuestionInDB($class, $predmet, $text, $today, $imageName)
    {
        return dbQuery("insert into task (task_text, autor_id, date, item, class, autor_name, image) values ('$text', '".$_SESSION['user']['user_id']."', '$today', '$predmet', '$class', '".$_SESSION['user']['first_name']."', '$imageName')");
    }
           
