<?php

namespace application\model;
class UserModel extends Model{
    public function getUser($arrUserInfo){
        $sql = " select * from user_info where u_id = :id and u_pw =:pw ";
        $prepare = [
            ":id" => $arrUserInfo["id"]
            ,":pw" => $arrUserInfo["pw"]
        ];
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();

        } 
        catch (Exception $e) 
        {
            echo "UserModel->getUser Error : ".$e->getMessage();
            exit();
        }   
        finally
        {
            $this->closeConn();
        }
        return $result;
    }

    public function accountUser($arrUserInfo){
        $sql = " INSERT INTO user_info( "	
            ." u_id "	
            ." ,u_pw "
            ." ,member_name "
            ." ,phone_number "
            ." ,address "
            ." ) "
            ." VALUES( "
            ." :u_id "
            .", :u_pw "
            .", :member_name "
            .", :phone_number "
            .", :address "    
            ." ) " 
            ;
        $prepare = [
            ":u_id" => $arrUserInfo["u_id"]
            ,":u_pw" => $arrUserInfo["u_pw"]
            ,":member_name" => $arrUserInfo["member_name"]
            ,":phone_number" => $arrUserInfo["phone_number"]
            ,":address" => $arrUserInfo["address"]
        ];
        try {
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->rowCount();
            $this->conn->commit();
        } 
        catch (Exception $e) 
        {
            echo "UserModel->getUser Error : ".$e->getMessage();
            exit();
        }   
        finally
        {
            $this->closeConn();
        }
        return $result;
    }

    public function getUserById($userId) {
        $sql = "SELECT * FROM users WHERE u_id = :u_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':u_id', $userId);
        $stmt->execute();
        return $stmt->fetch();
    }

}


?>