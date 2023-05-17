<?php
namespace application\controller;

class ApiController extends Controller{
    public function userGet(){
        $arrGet = $_GET;
        $arrData = [ "flg" => "0"];
        // model 호출
        $this->model = $this->getModel("User"); //model을 지정해서 사용하는 구문(지금은 user모델)

        $result = $this->model->getUser($arrGet, false); // user모델을 getuser로 다시 지정해서 사용
        
        if(count($result) !== 0){
            $arrData["flg"] = "1";
            $arrData["msg"] = "이미 사용 중인 아이디입니다."; 
        } else {
            $arrData["flg"] = "0";
            $arrData["msg"] = "사용 가능한 아이디입니다."; 
        }

        // 배열을 JSON으로 변경
        $json = json_encode($arrData);
        header('Content-type: application/json');
        echo $json;
        exit();
    }

}

?>