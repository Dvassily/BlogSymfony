<?php
/**
 * Class who manage Chuck norris facts
 */
class FactManagement {

    /**
     * PDO connection
     */
    private $connection = false;

    /**
     * Constructor
     */
    public function __construct() {
        require ROOT_PATH . '/db_config.php';

        // DB connection
        try {
            $connexion = new PDO($dbDriver . ':host=' . $dbHost . ';dbname=' . $dbName, $dbUser, $dbPwd);
        } catch(Exception $e) {
            var_dump($e);
        }
    }
 

    /**
     * Import fact from JSON
     */
    public function import() {
        foreach (self::getFactsFromJSON() as $fact) {
            $request = "INSERT INTO facts (fact, date, vote, points) VALUES (" . $fact['fact'] . ', ' . $fact['date'] . ', ' . $fact['vote'] . ', ' . $fact['points'] . ")";

            $counter = $connection->exec($request);
        }
    }
    
    
    /**
     * Get top of fact
     *
     * @param integer $limit Limit to get
     * @return array Array of facts
     */
     public function getTop($limit = 10) {
         $request = 'SELECT * FROM facts LIMIT ?';
         $results = $connection->exec($request);
         $results->execute(10);
                  
         return $results->fetchAll(PDO::FETCH_ASSOC);
    }

       
    /**
     * Get randum Chuck Norris fact from JSON file
     *
     * @param int $nb number of facts
     * @return array Array of string
     */
    private static function getFactsFromJSON() {
        $file = dirname(__FILE__) . '/chuck.json';
        
        return json_decode(file_get_contents($file));
    }

}
