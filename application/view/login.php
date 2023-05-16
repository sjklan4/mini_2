<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/login.css">
    <title>Login</title>

</head>
<body>
<div class="parent">
    <div class="div1"> 
    </div>
    <div class="div2"> 
    <div class ="login_style">
            <h1>Login</h1>
            <form action="/user/login" method="post">
                <label for="id"></label>
                <input type="text" name ="u_id" id ="id" placeholder = "아이디 입력">
                <br>
                <label for="pw"></label>
                <input type="password" name = "u_pw" id = "pw" placeholder = "비밀번호 입력"><br>
                <button type ="submit" class = "login_btn">Login</button>
                <h3 style = "color: red;"><?php echo isset($this->errMsg) ? $this->errMsg : ""; ?></h3>
                <script></script>
            </form>
            </div>
    </div>
    <div class="div3"> 

    </div>
    <div class="div4"> 

    </div>
    <div class="div5"> 

    </div>
    <div class="div6"> 

    </div>
</div>
                
</body>
</html>
