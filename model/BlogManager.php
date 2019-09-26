<?php

namespace model;
use model\database\DBconnect;

class BlogManager
{
private $connect;
public function __construct()
{
    $db=new DBconnect();
    $this->connect=$db->connect();
}
public function getAll(){
    $sql="SELECT * FROM blogs";
    $stmt=$this->connect->query($sql);
    $result=$stmt->fetchAll();
    return $result;
}
public function convertToObject($arr){
    $array=[];
    foreach ($arr as $item){
        $blog=new Blog($item['title'],$item['teaser'],$item['content'],$item['createa']);
        $blog->setId($item['id']);
        array_push($array,$blog);
    }
    return $array;
}
public function insert($blog){
    $sql="INSERT INTO blogs(title,teaser,content,createa) VALUES (?,?,?,?)";
    $stmt=$this->connect->prepare($sql);
    $stmt->bindParam(1,$blog->getTitle());
    $stmt->bindParam(2,$blog->getTeaser());
    $stmt->bindParam(3,$blog->getContent());
    $stmt->bindParam(4,$blog->getCreatea());
    $stmt->execute();
}
}