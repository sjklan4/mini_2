
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/memberinfo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php require_once(_PATH_HEADER) ?>
    <form action="/user/memberinfo" method = "post" id = "delbtn">
    <div class = "member_info">
            <ul class = "info_list">
                <li class = "info">
                    <span> 아이디 : <?php echo $this->u_id ?></span>
                </li>
                <li class = "info">
                    <span>PASSWORD : <?php echo str_repeat('*',mb_strlen($this->u_pw)) ?></span>
                </li>
                <li class = "info">
                    <span>회원이름 : <?php echo $this->member_name ?></span>
                </li>
                <li class = "info">
                    <span>전화번호 : <?php echo $this->phone_number ?></span>
                </li>
                <li class = "info">
                    <span>주소 : <?php echo $this->address ?></span>
                </li>
                <button type="button" class="btn btn-light"  onclick="location.href ='/user/changeinfo'">정보변경</button>
                <button type = "submit" class= "btn btn-light">회원탈퇴</button>
            </ul>   
            
    </div>
    </form>
    
    <?php require_once(_PATH_FOOTER) ?>
    <script src ="/application/view/js/tour.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>