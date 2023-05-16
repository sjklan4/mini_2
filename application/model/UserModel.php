<?php

namespace application\model;
class UserModel extends Model{
    public function getUser($arrUserInfo, $pwFlg = true){  //2번째 파라미터가 있으면 그대로 진행 없으면 기본셋팅으로 실행
        $sql = " select * from user_info where u_id = :u_id ";

        //PW 추가할 경우
        if($pwFlg){
            $sql .= " and u_pw =:u_pw ";
        }


        $prepare = [
            ":u_id" => $arrUserInfo["u_id"]
        ];

        //PW 추가할 경우
        if($pwFlg){
            $prepare[":u_pw"] = $arrUserInfo["u_pw"];
        }


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

        return $result;
    }

    // Insert User (유저 DB에 추가)
    public function insertUser($arrUserInfo){
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
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
        } 
        catch (Exception $e) 
        {
            return false;
        }   
    }

    // public function getUserById($userId) {
    //     $sql = "SELECT * FROM users WHERE u_id = :u_id";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->bindParam(':u_id', $userId);
    //     $stmt->execute();
    //     return $stmt->fetch();
    // }
    
    //멤버 정보 가져오기
    public function mypage($arrUserInfo){
        " select * from user_info where u_id = :u_id ";
        $prepare = [
            ":u_id" => $arrUserInfo["u_id"]
        ];

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($prepare);
        $result = $stmt->fetchAll();
    }

}


?>