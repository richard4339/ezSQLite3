<?php

/**
 * SQLite3 Class
 *
 * @author		Richard Lynskey <richard@mozor.net>
 * @link		https://github.com/richard4339/ezSQLite3
 * @version		0.1
 * @access		public
 * @param		string		file
 * @return		object
 */
class sql
{
    /**
     * DB
     * @var SQLite3 Object
     */
    public $db;

    /**
     * Constructor
     * @param string $file 
     */
    public function  __construct($file)
    {
        $this->db = new SQLite3($file);
    }

    /**
     * Returns results from a query
     * @param string $query
     * @return array
     */
    public function get_results($query)
    {
        $results = $this->db->query($query);
        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $out[] = (object) $row;
        }

        return $out;
    }
}

?>