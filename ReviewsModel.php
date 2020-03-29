<?php

//include 'DataBase.php';

class ReviewsModel{
private $comment_content="";
private $comment_name="";
private $parent_comment_id="";



	public function __construct($comment_content, $comment_name,$parent_comment_id)
	{$this->comment_content=$comment_content;
     $this->comment_name=$comment_name;
     $this->parent_comment_id=$parent_comment_id;
  
	}

     public function insert()
     {
   	$connect= new mysqli("localhost","root","", "logare");
     	$query = " INSERT INTO detailscomm  (parent_comment_id, comment, comment_sender_name)  VALUES (?, ?, ?) ";
        $statement = $connect->prepare($query);
        $statement->bind_param('iss',$this->parent_comment_id, $this->comment_content, $this->comment_name);
		$statement->execute();
		$error = '<label class="text-success">Comment Added</label>';
	 return $error;
      }

     
     }






























