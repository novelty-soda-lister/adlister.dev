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

}

?>