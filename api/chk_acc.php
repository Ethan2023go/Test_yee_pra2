
<?php include_once "db.php";
// 判斷帳號對比資料庫是否重複 

$res=$User->count(['acc'=>$_POST['acc']]);

if($res>0){
    echo 1 ;
    // 帳號重複
}else{
    echo 0;
}

?>