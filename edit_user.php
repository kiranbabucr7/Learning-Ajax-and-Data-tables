<?php 
    /**
     * Edits the details of the user with the given id to the database
     */
    include 'connection.php';
    function set_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $id = $idErr = $new_username =  $new_number = $new_usernameErr = $new_numberErr = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST["id"])){
            http_response_code(400);
        }
        else{
            $id = set_data($_POST['id']);

            if(empty($_POST["new_username"]) || strlen($_POST["new_username"]) < 2){
                http_response_code(400);
            }
            else{
                $new_username = set_data($_POST['new_username']);
                if(empty($_POST["new_number"])){
                    http_response_code(400);
                }
                else{
                    $new_number = set_data($_POST['new_number']);
                    $sql_edit = $conn->prepare("UPDATE user_data SET username = ?, phnumber = ? WHERE id = ?");
                    $sql_edit->bind_param("sss",$new_username,$new_number,$id);
                    if($sql_edit->execute()){
                        http_response_code(200);
                    }
                    else{
                        http_response_code(400);
                    }
                }
            }
        }
    }
    
?>