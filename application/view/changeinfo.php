<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/user/changeinfo" method = "post">
        <ul>
            <li><input type="text" name = "u_id" id="u_id" value ="<?php echo $this->userInfo["u_id"] ?>" readonly></li>
            <li><input type="password" placeholder = "비밀번호 입력" name ="u_pw" id = "u_pw"  value ="<?php echo $this->userInfo["u_pw"]?>"></li>
            <?php if(isset($this->arrError["u_pw"])){ ?>
                    <span><?php echo $this->arrError["u_pw"] ?></span>
            <?php } ?>
            <li><input type="password" placeholder = "비밀번호 확인" name ="u_pwchk" id ="u_pwchk" value ="<?php echo $this->userInfo["u_pw"]?>"></li>
            <?php if(isset($this->arrError["u_pwchk"])){ ?>
                    <span><?php echo $this->arrError["u_pwchk"] ?></span>
            <?php } ?>
            <li><input type="text" placeholder="이름" name="member_name" id="member_name" value="<?php echo $this->userInfo["member_name"]?>"></li>
            <?php if(isset($this->arrError["member_name"])){ ?>
                    <span><?php echo $this->arrError["member_name"] ?></span>
            <?php } ?>
            <li><input type="text" placeholder = "전화번호" name ="phone_number" id="phone_number" value ="<?php echo $this->userInfo["phone_number"]?>"></li>
            <li><input type="text" placeholder = "주소" name ="address" id="address" value ="<?php echo $this->userInfo["address"]?>"></li>
            <br>
            <button type = "submit">변경</button>
            </ul>
        </form>



</body>
</html>