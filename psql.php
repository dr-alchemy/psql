<?php 

/**
* 
*/
class Psql
{
    public $dsn;
    public $strSQL;
    public $queryList;
    

    function __construct()
    {
        // set default dsn
        $this->setDsn('CLIENTE');

        // set query list
        $this->setQueryList(array());
    }

    public function psqlConnection()
    {
        return odbc_connect($this->getDsn(), "", "") or die(odbc_error());
    }

    public function executeQuery()
    {
        // $conn_LA = $this->psqlConnection();
        $conn_LA = odbc_connect($this->getDSN(), "", "") or die(odbc_error());

        $strSQL  = $this->getSQL();

        if($strSQL !== '') {

            $resultset = odbc_exec($conn_LA, $strSQL);

            $data = array();

            // Grabs all the rows, saves it in $data
            while( $row = odbc_fetch_array($resultset) ) {
                $data[] = $row;
            } 

            // free resources
            odbc_free_result($resultset);

            //close the connection
            odbc_close($conn_LA);

            // Returns the JSON
            return json_encode($data);

        } else {
            return json_encode(array());
        }

    }
    
    public function setQuery($queryKey, $queryParam)
    {
        $queryStr = $this->queryList[$queryKey];

        if(count($queryParam) > 0) {
            $this->setSQL(str_replace(array_keys($queryParam), array_values($queryParam), $queryStr));
        } else {
            $this->setSQL($queryStr);
        }

    }

    public function getDsn() 
    {
        return $this->dsn;
    }

    public function getQueryList() 
    {
        return $this->queryList;
    }

    public function getSQL() 
    {
        return $this->strSQL;
    }

    public function setDsn($val) 
    {
        $this->dsn = $val;
    }

    public function setQueryList($val) 
    {
        $this->queryList = $val;
    }

    public function setSQL($val) 
    {
        $this->strSQL = $val;
    }


}
 ?>