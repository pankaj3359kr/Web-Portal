<?php
    session_start();
    if(isset($_COOKIE['user'])&&isset($_SESSION['user']))
    {
        include('dbconfig.php');
        $ss = $_SESSION['user'];
        $sql = 'select * from emp';
        $result = mysql_query($sql);
        echo '<html>';
        echo '<head>';
        echo '<link rel = stylesheet type = text/css href = style1.css media=screen>';
        echo '</head>';
        echo '<body>';
        echo "<h4 align=right>Welcome User : ".$ss."</h4>";
        echo '<h4 align = right><a href = logout.php style = text-decoration:none;color:gray;font-family:Calibri;font-size:14pt>Log Out</a></h4><br>';
        echo '<center><a href = insert.html style = text-decoration:none;color:gray;font-family:Calibri;font-size:14pt>Add New&nbsp;&nbsp;<img src = add.png></a></center><br>';
        echo '<center><form method= post action = search.php>';
        echo 'Search By';
        echo '<select name=skey>';
        echo '<option value=tid>Tid</option>';
        echo '<option value=name>Name</option>';
        echo '<option value=subject>Subject</option>';
        echo '<option value=department>Department</option>';
        echo '<select>';
        echo '<input type=text name=svalue> &nbsp;&nbsp;<input type=submit value=Submit>';
        echo '</form></center>';
        echo '<table id = tb1 align = center border = 0 width = 850>';
        echo '<tr>';
        echo '<td colspan = 11>';
        echo '<hr color = white>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>';
        echo 'tid';
        echo '</td>';
        echo '<td>';
        echo 'name';
        echo '</td>';
        echo '<td>';
        echo 'email';
        echo '</td>';
        echo '<td>';
        echo 'contact';
        echo '</td>';
        echo '<td>';
        echo 'subject';
        echo '</td>';
        echo '<td>';
        echo 'department';
        echo '</td>';
        echo '<td>';
        echo 'classes';
        echo '</td>';
        echo '<td>';
        echo 'Update';
        echo '</td>';
        echo '<td>';
        echo 'Delete';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td colspan = 11>';
        echo '<hr color = white>';
        echo '</td>';
        echo '</tr>';
        while($rec = mysql_fetch_array($result))
        {
            echo '<tr>';
            echo '<td>';
            echo $rec[0];
            echo '</td>';
            echo '<td>';
            echo $rec[1];
            echo '</td>';
            echo '<td>';
            echo $rec[2];
            echo '</td>';
            echo '<td>';
            echo $rec[3];
            echo '</td>';
            echo '<td>';
            echo $rec[4];
            echo '</td>';
            echo '<td>';
            echo $rec[5];
            echo '</td>';
            echo '<td>';
            echo $rec[6];
            echo '</td>';
            echo '<td>';
            echo '<a href = update.php?id='.$rec[0].'><img src = edit.png></a>';
            echo '</td>';
            echo '<td>';
            echo '<a href = delete.php?id='.$rec[0].'><img src = delete.png></a>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td colspan = 11>';
            echo '<hr color = skyblue>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</body>';
        echo '</html>';
    }
    else
    {
        header('location:index.html');
    }
?>