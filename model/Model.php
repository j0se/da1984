<?php

include_once("lib/Mysql.class.php");

class Model
{
    protected string $_sql ;
    protected array $_vars_class;
    protected string $_table;
    protected string $_table_relacion;
    protected string $_campo_relacion;

    function __construct()
    {
        $this->_table = strtolower(get_class($this));
    }

    private function _execute()
    {

        $mysql = new MySQL('192.168.1.133', 'r00t', 'new_password', 'da1984');

        try{

            $data = $mysql->query($this->_sql, true);

            return $data;

        }catch(Exception $e){
            die('Caught exception: '. $e->getMessage());
        }
    }


    public function setRelacionTabla($table_relacion, $campo_relacion)
    {
        $this->_campo_relacion = $campo_relacion;
        $this->_table_relacion = $table_relacion;
    }

    public function getRelacionados()
    {
        $this->_sql = "SELECT secundaria.* FROM " .$this->_table ." primaria";
        $this->_sql .= " INNER JOIN " . $this->_table_relacion . " secundaria ";
        $this->_sql .="  ON primaria." . $this->_campo_relacion . "=secundaria." . $this->_table;

        return $this->_execute();
    }

    private function _getVarsClass(bool $get_class_vars)
    {

        $this->_vars_class = ($get_class_vars) ? get_class_vars(get_class($this)) : get_object_vars($this);

        foreach ($this->_vars_class as $var=>$key)
        {
            if (!array_key_exists($var, $this->table_type_fields)) {
                unset($this->_vars_class[$var]);
            }
        }

    }

    private function select()
    {

        $this->_getVarsClass(true);

        $this->_sql = "SELECT id, " . implode(",", array_keys($this->_vars_class) ) . " FROM ";

        $this->_sql .= $this->_table ;

        return $this->_sql ;
    }


    public function list()
    {

        $this->_sql = $this->select();

        return $this->_execute();

    }
    public function save()
    {
        $this->_getVarsClass(false);

        $this->_sql = "INSERT INTO " . $this->_table. " (";

        $this->_sql .= implode(",", array_keys($this->_vars_class) );

        $this->_sql .= ") VALUES (";

        $this->_sql .= "";

        foreach ($this->_vars_class as $nombre => $valor) {

            if ($this->table_type_fields[$nombre] == 'string') $this->_sql .= '"' . $valor . '",' ;

            if ($this->table_type_fields[$nombre] == 'date')$this->_sql .=  empty($valor) ? 'CURRENT_DATE()' : '"' . $valor . '",' ;

            if ($this->table_type_fields[$nombre] == 'boolean') $this->_sql .= '' . ($valor == 1) ? $valor : 0 . ',' ;
        }

        $this->_sql = rtrim($this->_sql, ",") ;

        $this->_sql .= ");";

        return $this->_execute();

    }
    public function show(int $id)
    {
        $this->_sql = $this->select();

        $this->_sql .= " WHERE id = " . $id;

        return $this->_execute();
    }

    public function delete(int $id)
    {

        $this->_sql = "DELETE FROM " . $this->_table. " ";

        $this->_sql .= " WHERE id = " . $id;

        return $this->_execute();
    }

    public function update(array $data)
    {
        $this->_sql = "UPDATE " . $this->_table. " SET ";

        foreach($data as $k=>$v)
        {
            if ($k != 'id') $this->_sql .=  $k . "='" . $v . "', ";
        }

        $this->_sql = substr_replace(trim($this->_sql) ,"", -1);

        $this->_sql .= " WHERE id = " . $data['id'];

        return $this->_execute();
    }


}