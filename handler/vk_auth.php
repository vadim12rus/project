<?php
    session_start();
    require_once("../include/common.inc.php");
    dbInitialConnect();
    
    if (isset($_GET['code'])) 
    {
        $token = getToken();
        if (isset($token['access_token'])) 
        {            
            $userInfo = getUserInfo($token);               
            $vk_id = $userInfo['uid'];      
            if (!($userInDatabase = isUserInDatabase($vk_id)))
            {  
                $avatarName = 'id'.$userInfo['uid'].'.jpg'; 
                uploadFileAvatar($avatarName, $userInfo['photo_big']);                  
                addNewUserInDB($userInfo, $avatarName);
                $userInfo['user_id'] = dbGetLastInsertId();
                $userInfo['photo_big'] = $avatarName;
            }
            else
            {
                $userInfo['user_id'] = $userInDatabase[0]['user_id']; 
                $userInfo['photo_big'] = $userInDatabase[0]['avatar'];
            }    
            $_SESSION['user'] =  $userInfo;                   
        }
    }
    header("Location: ". ROOT_PAGE);
?>