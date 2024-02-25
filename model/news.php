<?php
    function addNews($table,$staff_id,$title,$image_news,$content,$news_date,$view_news,$conn){
        $sql = "INSERT INTO $table VALUES (null,'$staff_id','$title','$image_news','$content','$news_date','$view_news')";
        return execute($conn,$sql);
    }

    function getDataNews($table,$id,$conn){
        $sql = "SELECT * FROM $table WHERE id = '$id'";
        $query = execute($conn,$sql);
        if(num_rows($query) == 0){
            $data = 0;
        }else{
           $data = getData($query);
        }
        return $data;
    }
    function getNews($table,$conn){
        $sql = "SELECT * FROM $table limit 0,4";
        $query = execute($conn,$sql);
        if(num_rows($query) == 0){
            $data = 0;
        }else{
            while($datas = getData($query)){
                $data[] =  $datas;
            }
        }
        return $data;
    }
    function updateNews($table,$staff_id,$title,$image_news,$content,$news_date,$id,$conn){
        $sql = "UPDATE $table SET `staff_id`='$staff_id',`title`='$title',`image_new`='$image_news',`content`='$content',`news_date`='$news_date' WHERE `id` = $id";
        return execute($conn,$sql);
    }
    function updateViewNews($table,$view,$id,$conn){
        $sql = "UPDATE $table SET view_news = '$view' WHERE id = '$id'";
        return execute($conn,$sql);
    }
?>
