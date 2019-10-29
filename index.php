<?php
    $db_connection = pg_connect("host=ec2-174-129-253-47.compute-1.amazonaws.com dbname=dd9lraajhtiljc user=xeuhldijwddzdw password=3309ad02e81eebea23fdb7fbd8ce55cd78a9f6db4d6ea705678ba9c070192dcc");
    $result = pg_query($db_connection, "SELECT 'lastname'");
    echo $result;
?>