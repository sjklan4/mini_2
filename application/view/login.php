<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="login.css"> -->
    <title>Document</title>

</head>
<body>
    <div class ="login_style" style = "border: 2px solid black; width: 400px; height: 400px;  ">
    <h1>Login</h1>
    <form action="/user/login" method="post">
        <label for="id">ID</label>
        <input type="text" name ="id" id ="id">
        <br>
        <label for="pw">PW</label>
        <input type="password" name = "pw" id = "pw">
        <button type ="submit">Login</button>
        <h3 style = "color: red;"><?php echo isset($this->errMsg) ? $this->errMsg : ""; ?></h3>
    </form>
    </div>
</body>
</html>