<?php

class DataBase{

   private static function conectare_db()
   {
$link = new mysqli("localhost","root","", "logare");

if($link->connect_error)
{
  die("Connection failed: ".$link->connect_error);
}
return $link;
   }


 public static function display_comm()
      {
        $connect= DataBase::conectare_db();
        $query = "SELECT * FROM detailscomm WHERE parent_comment_id = '0' ORDER BY comment_id DESC";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->get_result();
        $output = '';
        foreach($result as $row)
        {
     $output .= ' <div class="panel panel-default">
      <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
      <div class="panel-body">'.$row["comment"].'</div>
      <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
     </div> ';
     $output .= DataBase::get_reply_comment($connect, $row["comment_id"]);
       }
     echo $output;
      }



     private static function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
  {
    $output='';
$sql="SELECT * FROM detailscomm WHERE parent_comment_id ='".$parent_id."'";
$result= $connect->query($sql);

if($parent_id == 0)
   {
    $marginleft = 0;
   }
   else
   {
    $marginleft = $marginleft + 48;
   }
if($result->num_rows>0)
  {
    while($row= $result->fetch_assoc())
    {
     $output .= '
     <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
      <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
      <div class="panel-body">'.$row["comment"].'</div>
      <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
     </div>
     ';
     $output .= DataBase::get_reply_comment($connect, $row["comment_id"], $marginleft);
    }
  }
   return $output;
  }
}