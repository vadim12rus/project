<?php
    $g_dbLink = null;
    
    function dbInitialConnect()
    {
        global $g_dbLink;
        $g_dbLink = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Не могу соединиться с MySQL.");
        mysqli_select_db($g_dbLink, DB_NAME) or die("Не могу подключиться к базе.");
        $error = mysqli_connect_error();
        if ($error) die('Unable to connect to DB');
    }
    
    function dbQuery($query)
    {
        global $g_dbLink;
        $result = mysqli_query($g_dbLink, $query);
        return ($result !== false);    
    }
    
    function dbQuote($value)
    {
        global $g_dbLink;
        return mysqli_real_escape_string($g_dbLink, $value);    
    }
    
    function dbGetLastInsertId()
    {
        global $g_dbLink;
        return mysqli_insert_id($g_dbLink);    
    }
    
    function dbQueryGetResult($query)
    {
        global $g_dbLink;
        $data = array();
        $result = mysqli_query($g_dbLink, $query);
        if ($result)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                array_push($data, $row);
            }
            mysqli_free_result($result);        
        }               
        return $data;    
    }
