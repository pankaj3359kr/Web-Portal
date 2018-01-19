<?php
    include('dbconfig.php');
    $tid = $_REQUEST['tid'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];
    $subject = $_REQUEST['subject'];
    $department = $_REQUEST['department'];
    $classes = $_REQUEST['classes'];
    
    if(isset($tid)&&isset($name)&&isset($email)&&isset($contact)&&isset($subject)&&isset($department)&&isset($classes))
    {
        $sql = 'select * from student';
        $result = mysql_query($sql);
        $count = 0;
        while($rec = mysql_fetch_array($result))
        {
            $count++;
        }
        $count = $count + 1;
        $sql = "insert into emp values(".$count.", ".$tid.", '".$name."', ".email.", ".$contact.", '".$subject."', '".$department."', '".$classes."')";
        if(mysql_query($sql))
        {
            header('location:displayadmin.php');
        }
        else
        {
            echo 'Some IO Exception !<br>';
            echo '<a href = displayadmin.php>goto main page....</a>';
        }
    }
    else
    {
        header('location:displayadmin.php');
    }
?>