<?php
/*
namespace php_project;

class Book{
    private $id;
    private $title;
    private $author;
    private $isbn;
    private $status;
    public function __construct($Id,$Btitle,$Bauthor,$Bisbn,$Bstatus = "available") {
        $this->SetAll($Id,$Btitle,$Bauthor,$Bisbn,$Bstatus = "available");
    }
    function SetAll($Id,$Btitle,$Bauthor,$Bisbn,$Bstatus){
        $this->SetTitle($Btitle);
        $this->SetAuthor($Bauthor);
        $this->SetIsbn($Bisbn);
        $this->SetStatus($Bstatus);
    }
    function SetId($Id){
        $this->id = $Id;
    }
    function SetTitle($Btitle){
        $this->title = $Btitle;
    }
    function SetAuthor($Bauthor){
        $this->author = $Bauthor;
    }
    function SetIsbn($Bisbn){
        $this->isbn = $Bisbn;
    }
    function SetStatus($Bstatus){
        $this->status = $Bstatus;
    }
    function GetId(){
        return $this ->id;
    }
    function GetTitle(){
        return $this->title;
    }
    function GetAuthor(){
        return $this->author;
    }
    function GetIsbn(){
        return $this->isbn;
    }
    function GetStatus(){
        return $this->status;
    }
}
*/

namespace php_project;

class Book {
    private $id;
    private $title;
    private $author;
    private $isbn;
    private $status;

    public function __construct($Id, $Btitle, $Bauthor, $Bisbn, $Bstatus = "available") {
        $this->SetAll($Id, $Btitle, $Bauthor, $Bisbn, $Bstatus);
    }

    function SetAll($Id, $Btitle, $Bauthor, $Bisbn, $Bstatus) {
        $this->SetTitle($Btitle);
        $this->SetAuthor($Bauthor);
        $this->SetIsbn($Bisbn);
        $this->SetStatus($Bstatus);
    }

    function SetId($Id) {
        $this->id = $Id;
    }

    function SetTitle($Btitle) {
        $this->title = $Btitle;
    }

    function SetAuthor($Bauthor) {
        $this->author = $Bauthor;
    }

    function SetIsbn($Bisbn) {
        $this->isbn = $Bisbn;
    }

    function SetStatus($Bstatus) {
        $this->status = $Bstatus;
    }

    function GetId() {
        return $this->id;
    }

    function GetTitle() {
        return $this->title;
    }

    function GetAuthor() {
        return $this->author;
    }

    function GetIsbn() {
        return $this->isbn;
    }

    function GetStatus() {
        return $this->status;
    }
}



