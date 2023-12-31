<?php

class post{
    //db staff
    private $conn;
    private $table = 'post';

    //post properties

    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $create_at;


    //constructor with db connection

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //getting posts from our database
    public function read(){
        //create query
        $query = 'SELECT 
            c.name as category_name,
            p.id,
            p.category_id,
            p.title,
            p.body,
            p.author,
            p.create_at
            FROM 
            '.$this->table.'p
            LEFT JOIN 
                    categories c ON p.category_id = c.id
                    ORDERED BY p.created DESC';
            //prepare statement
               $stmt = $this->conn->prepare($query);
            //execute query
                $stmt->execute();    
                return $stmt;     
         }



}



?>