<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="1.php" method="POST">
        <label>Từ Tiếng Anh </label><!--nhập từ cần dịch-->
        <input type="text" name="engLish">
        <button>Dịch</button>
    </form>
    <div class="result">
    <?php 
        $engLish= $_POST("engLish");
           $vietNam = array("english"=>"tiếng anh","name"=>"tên","year"=>"năm","day"=>"tháng");
           if(!empty($vietNam)){
               foreach($vietNam as $key => $value){
                   if($key==$engLish){
                       $hienThi= $key ." : " . $value;
                   }
               }
               echo $hienThi;
           }
        ?>
    </div>
</body>
</html>