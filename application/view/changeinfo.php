<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/application/view/css/memberinfo.css">
    <title>Document</title>
</head>
<body>
<?php require_once(_PATH_HEADER) ?>
<form action="/user/changeinfo" method = "post">
        <div class = "member_info">
                <ul class = "info_list">
                <li class = "info"><input type="text" name = "u_id" id="u_id" value ="<?php echo $this->userInfo["u_id"] ?>" readonly style="border:none"></li>
                <li class = "info"><input type="password" placeholder = "비밀번호 입력" name ="u_pw" id = "u_pw"  value ="<?php echo $this->userInfo["u_pw"]?>" style="border:none"></li>
                <?php if(isset($this->arrError["u_pw"])){ ?>
                        <span><?php echo $this->arrError["u_pw"] ?></span>
                <?php } ?>
                <li class = "info"><input type="password" placeholder = "비밀번호 확인" name ="u_pwchk" id ="u_pwchk" value ="<?php echo $this->userInfo["u_pw"]?>" style="border:none"></li>
                <?php if(isset($this->arrError["u_pwchk"])){ ?>
                        <span><?php echo $this->arrError["u_pwchk"] ?></span>
                <?php } ?>
                <li class = "info"><input type="text" placeholder="이름" name="member_name" id="member_name" value="<?php echo $this->userInfo["member_name"]?>" style="border:none"></li>
                <?php if(isset($this->arrError["member_name"])){ ?>
                        <span><?php echo $this->arrError["member_name"] ?></span>
                <?php } ?>
                <li class = "info"><input type="text" placeholder = "전화번호" name ="phone_number" id="phone_number" value ="<?php echo $this->userInfo["phone_number"]?>" style="border:none"></li>
                <li class = "info"><input type="text" placeholder = "주소" name ="address" id="address" value ="<?php echo $this->userInfo["address"]?>" style="border:none"></li>
                <br>
                <button type = "submit">변경</button>
                </ul>
        </div>
</form>


<?php require_once(_PATH_FOOTER) ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>