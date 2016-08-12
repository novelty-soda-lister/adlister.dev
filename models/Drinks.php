<?php

require_once __DIR__ . '/Model.php';

class Drinks extends Model 
{

    protected static $table = 'drinks';

    // checks if the attribute being saved is password and hashes it if so
    public function __set($name, $value)
    {
        parent::__set($name, $value);
    }
    public static function pagination()
    {
        self::dbConnect();
        $page = Input::get('page', 1);
        $limit = 5;
        $offset = ($page * $limit) - $limit;
        $sql= "SELECT * FROM drinks LIMIT :count OFFSET :shift";
        $stmt = self::$dbc->prepare($sql);
        $stmt->bindValue(':count', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':shift', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }
    public static function featured()
    {
        self::dbConnect();
        $page = Input::get('page', 1);
        $limit = 5;
        $offset = ($page * $limit) - $limit;
        $sql= "SELECT * FROM drinks WHERE id = 1 OR id = 2 OR id = 3 LIMIT :count OFFSET :shift";
        $stmt = self::$dbc->prepare($sql);
        $stmt->bindValue(':count', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':shift', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }
    
     public static function findDrinksByUserId($id)
    {

        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE user_id = :id'; //WHERE user_id = drinks:id

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if($results) {
            
                $instance = new static;
                $instance->attributes = $results;
        }
        

        return $instance;
    }



}

?>