<?php
namespace application\util;

class UrlUtil{
    //$_GET["url"]를 분석해서 리턴

    
    public static function getUrl(){
        return isset($_GET["url"]) ? $_GET["url"] : "" ; //$_GET안에는 URESR/LOGIN이 담겨 있다.
    }
    
    //URL을 "/"로 구분해서 배열을 만들고 리턴
    public static function getUrlArrPath(){
        $url = UrlUtil::getUrl();                       //static으로 선언시 ::으로 사용 가능 static으로 선언시 함수가 메모리로 전달되어 있다.
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