<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link1 = mysqli_connect("localhost", "root", "", "attendance_system");
$server_link = mysqli_connect("107.180.77.245", "ispeedbiz", "z5^-~(.M2a7N", "ispeedbi_attendance_system");
 
// Check connection
if($link1 === false){
    die("ERROR: Could not connect to local DB. " . mysqli_connect_error());
}
 if($server_link === false){
    die("ERROR: Could not connect to server DB. " . mysqli_connect_error());
}

	date_default_timezone_set("Asia/Calcutta");
    $today = date('d/m/Y');
    $select_query1 = "SELECT * FROM online_attendance WHERE attendance_date='".$today."' AND is_sent=1";
    $select_result1 = mysqli_query($link1, $select_query1);
    
    if (mysqli_num_rows($select_result1) > 0) 
    {
        while($res = mysqli_fetch_assoc($select_result1)) 
        {
            $online_attendance_id = $res['online_attendance_id'];
            $out_time = $res['out_time'];
            $total_time = $res['total_time'];

            $update_query1 = "UPDATE online_attendance SET out_time='".$out_time."', total_time='".$total_time."' WHERE online_attendance_id='".$online_attendance_id."'";
            $update_result1 = mysqli_query($server_link, $update_query1);
        }
    }
    
    $select_query2 = "SELECT * FROM online_attendance WHERE attendance_date='".$today."' AND is_sent=0";
    $select_result2 = mysqli_query($link1, $select_query2);
    
    if (mysqli_num_rows($select_result2) > 0) 
    {
        while($res = mysqli_fetch_assoc($select_result2)) 
        {
        	$online_attendance_id = $res['online_attendance_id'];
        	$employee_id_fk = $res['employee_id_fk'];
        	$attendance_month = $res['attendance_month'];
        	$attendance_date = $res['attendance_date'];
        	$in_time = $res['in_time'];
        	$out_time = $res['out_time'];
        	$total_time = $res['total_time'];

        	$insert_query = "INSERT INTO online_attendance (`employee_id_fk`, `attendance_month`, `attendance_date`, `in_time`, `out_time`, `total_time`) VALUES ('$employee_id_fk', '$attendance_month', '$attendance_date', '$in_time', '$out_time', '$total_time')";
    		$insert_result = mysqli_query($server_link, $insert_query);
    		if($insert_result)
        	{
        		$select_query3 = "SELECT * FROM online_attendance WHERE online_attendance_id='".$online_attendance_id."' AND is_sent=0";
    			$select_result3 = mysqli_query($link1, $select_query3);
    			if (mysqli_num_rows($select_result3) > 0) 
			    {
			        while($res = mysqli_fetch_assoc($select_result3)) 
			        {
			        	$update_query2 = "UPDATE online_attendance SET is_sent=1 WHERE online_attendance_id='".$online_attendance_id."'";
    					$update_result2 = mysqli_query($link1, $update_query2);
    					if($update_result2)
    						echo "inserted";
			        }
				}
        	}
            else
            {
                echo 'Data not inserted for employee:'.$employee_id_fk;
            }
        }
	}
    else
    {
        echo 'No data found';
    }
 
// Close connection
mysqli_close($link1);
mysqli_close($server_link);
//Testing commit
?>
