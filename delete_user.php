<?php
    /**
     * Deletes the details of the user with the given id from the database
     */
    header("Content-type: application/json");
    //sql conn file
    include 'connection.php';
    $id = $_GET['id'];
    $sql_delete_user = $conn->prepare("DELETE FROM user_data WHERE id= ? ");
    $sql_delete_user->bind_param("s", $id);
    //checks query ececution and sends response
    if($sql_delete_user->execute()){
        http_response_code(200);
        $response = json_encode(['id' => $id]);
        echo($response);

    }
    else{
        http_response_code(400);
    }

?>