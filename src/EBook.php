<?php
/*
namespace php_project;

class EBook extends Book{
    private $fileFormat;
    public function __construct($Id,$title, $author, $isbn, $status = "available", $fileFormat ){
        $this->fileFormat = $fileFormat;
        parent::__construct($Id,$title, $author, $isbn, $status);
    }
    public function SetFormat($fileFormat){
    $this->fileFormat = $fileFormat;    
    } 
    public function getFileFormat(){
    return $this->fileFormat;        
    }
}
*/

namespace php_project;

class EBook extends Book {
    private $fileFormat;

    public function __construct($Id, $title, $author, $isbn, $status = "available", $fileFormat) {
        parent::__construct($Id, $title, $author, $isbn, $status);
        $this->fileFormat = $fileFormat;
    }

    public function SetFormat($fileFormat) {
        $this->fileFormat = $fileFormat;
    }

    public function getFileFormat() {
        return $this->fileFormat;
    }
}


