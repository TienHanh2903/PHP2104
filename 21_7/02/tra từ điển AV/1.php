<?php 
        $engLish="english";
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