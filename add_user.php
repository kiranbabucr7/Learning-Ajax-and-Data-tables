<?php 
    /**
     * Adds the details of the user to the database
     */
    header("Content-type: application/json");
    include 'connection.php';
    /**
     * @param {string} data process string for validation
     */
    function set_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //validations are done and corresponding status code is generated
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["username"])){
            http_response_code(400);
        }
        else{  
            $username = set_data($_POST["username"]);
            if(empty($_POST["number"]) || strlen($_POST["number"]) < 2 ){
                http_response_code(400);
            }
            else{
                $number = set_data($_POST["number"]);
                $table_data=[];
                $sql_insert_user = $conn->prepare("INSERT INTO user_data (username,phnumber) VALUES(?,?)");
                $sql_insert_user->bind_param("ss",$username,$number);
                //checks query ececution and sends response
                if($sql_insert_user->execute()){
                    http_response_code(200);
                    $sql = 'SELECT * FROM user_data ORDER BY ID DESC LIMIT 1';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $user_data = ['id' => $row["id"],'username' => $row["username"], 'number' => $row["phnumber"]]; 
                        array_push($table_data,$user_data); 
                    }
                    else{
                        http_response_code(400);
                    }
                    mysqli_close($conn);
                    $response = json_encode($table_data);
                    echo $response;
                }
                else{
                    http_response_code(400);
                }
            }
        }
    }
    else{
        http_response_code(400); 
    }
?>

