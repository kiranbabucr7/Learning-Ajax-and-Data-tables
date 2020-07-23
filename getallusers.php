<?php 
    /**
     * Fetches all the data of users from the database
     * and a response of all the userdata is send.
     */
    header("Content-type: application/json");
    include 'connection.php'; 
    $sql_select_table = "SELECT * FROM user_data";
    $table_data=[];
    //checks query ececution
    if($result = mysqli_query($conn, $sql_select_table)){
        http_response_code(200);
        //checks query result
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $jdata = ['id' => $row["id"],'username' => $row["username"], 'number' => $row["phnumber"]];  
                array_push($table_data,$jdata);
            }
        }
        else{
            array_push($table_data,NULL);
        }
    }
    else {
        http_response_code(404);
    }
    //checks status and sends response
    if(http_response_code()==200){
        mysqli_close($conn);
        $response = json_encode($table_data);
        echo $response;
    }
    
?>