
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php echo $this->u_id ?>
    <br>
    <?php echo $this->u_pw ?>
    <br>
    <?php echo $this->member_name ?>
    <br>
    <?php echo $this->address ?>
    <button type="button" class="btn btn-light"  onclick="location.href ='/user/changeinfo'">정보변경</button>


</body>
</html>