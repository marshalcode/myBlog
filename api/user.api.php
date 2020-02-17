<?php

class user{
    private $token;
    private $username;
    private $name;
    private $email;
    private $password;

    function setToken($token){
        $token = base64_decode($token);
        $token = hex2bin($token);
        $token = md5($token);
        $this->token = $token;
    }

    function setUsername($username){
        $this->username = $username;    
    }

    function setName($name){
        $this->name = $name;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function encPass($password){
        $password = base64_encode(md5($password));
        $this->password = $password;
    }

    function verifyToken() {
        if(isset($this->token)){
            $sql ="SELECT * FROM auth WHERE token = '$this->token'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($row['valid'] === 1){
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    function verifyUsername($username){
        $sql = "SELECT * FROM userDB WHERE username = '$username'";
        if ($result = $conn->query($sql)){
            if ($result->num_rows > 0) {
                return false;
            }
            else{
                retutn true;
            }
        }
        else{
            return false;
        }
    }

    function addUser($token, $username, $name, $email, $password){
        setToken($token);
        $tokenValidity = verifyToken();
        if($tokenValidity){
            encpass($password);
            $usernameAvailaibility = verifyUsername($username);
            if ($usernameAvailaibility) {
                if($name != null && $email != null){
                    $sql = "INSERT INTO userDB (username, is_admin, fullname, email, pass) VALUES('
                    $username', '1', '$name', '$email', '$this->password')";
                    $sql .= "UPDATE auth SET valid=0 WHERE token = '$this->token'";

                    if($conn->multi_query($sql)){
                        return "user added successfully";
                    }
                    else{
                        return "Error Occured while registering! : ". $conn->error;
                    }
                }
                else{
                    return "name or email not entered!";
                }
            }
            else{
                return "username already exists";
            }
        }
        else{
            return "token is not valid!";
        }

    }

    function deleteUser($username){
        $sql = "SELECT * FROM userDB WHERE username = '$username'";
        if($conn->query($sql)){
            $sql = "DELETE FROM userDB WHERE username = '$username'";
            if ($conn->query($sql)){
                return "user deleted successfully";
            }
            else{
                return "Error Occured while deleting the User! : " . $conn->error;
            }
        }
        else{
            return "This user doesn't exists!";
        }
    }

    function verifyUser($username, $password){
        encpass($password);
        $password = $this->password;
        $sql = "SELECT * FROM userDB WHERE (username='$username' OR email = '$username') AND pass='$password'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            return true;
            $row = $result->fetch_assoc();
            setUsername($row['useranme']);
            setName($row['fullname']);
            setEmail($row['email']);
        }
        else{
            return false;
        }
    }

    function authToken(){
        $binaryToken = randomBytes(128);
        $actualToken = md5($binaryToken);
        $sql = "INSERT INTO auth (token, valid) VALUES('$actualToken', '1')";
        $hexToken = base64_encode(bin2hex($binaryToken));
        return $hexToken;
    }

    function editUsername($username, $newUsername){
        $sql = "SELECT * FROM userDB WHERE username = '$username";
        if($result = $conn->query($sql)){
            if($result->num_rows > 0){
                $sql = "UPDATE userDB SET username='$newUsername' WHERE username = '$username'";
                if($conn->query($sql)){
                    return "username changed successfully!";
                }
                else{
                    return "Error Occured!".$conn->error;
                }
            }
            else{
                return "No user with this username found";
            }
        }
        else{
            return "Error Occured! ".$conn->error;
        }
    }
}

?>