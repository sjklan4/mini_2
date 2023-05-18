<?php
namespace application\util;

class UrlUtil{
    //$_GET["url"]를 분석해서 리턴

    
    public static function getUrl(){
        return isset($_GET["url"]) ? $_GET["url"] : "" ; //$_GET안에는 URESR/LOGIN이 담겨 있다. (삼항 연산자)

        // if(isset($_GET["url"])) {
        //     return $_GET["url"];
        // } else {
        //     return "";
        // }

        // $test; // 선언
        // $test = "1"; // 변수에 갑을 대입했다, 초기화 

        // $_GET = [
        //     "url" => "user/login"
        // ];

        // $_GET = array(
        //     "url" => "user/login"
        // );

        // echo $_GET["url"];
    }
    
    //URL을 "/"로 구분해서 배열을 만들고 리턴
    public static function getUrlArrPath(){
        $url = UrlUtil::getUrl();                       //static으로 선언시 미리 메모리에 할당을 한다. 
        return $url !== "" ? explode("/", $url) : "";  // ueser/login으로 값을 받은것을 /기준으로 짤라서 배열로 다시 만들어서 리턴시킨다. 
    }
    // "/"를 "\"로 치환해주는 메소드
    public static function replaceSlashToBackslash($str){
        return str_replace("/","\\",$str);  //이 값안에는 0번방에는 유저 / 1번방에는 로그인 이 있다. 이것을 배열로 해서 리턴
    }
}
// 아래 구문을 커트시켜서 위의 구문처럼 표현
// $path = isset($_GET["url"]) ? $_GET["url"] : "";
// $arr_path = $path !== "" ? explode("/", $path) : ""; 
?>
