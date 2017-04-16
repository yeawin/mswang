<?php

class Application_Model_Users extends Zend_Db_Table_Abstract
{
    protected $_name = 'tb_users';
    
    protected $_primary = 'id';
    
    public function get_user($id)
    {
        $name = $this->_name;
        $select = $this->select();
        $select->from($name)->where("id = ?", $id);
        $result = $this->fetchRow($select);
        return $result;
    }
    
    public function insert_row($data)
    {
        return $this->insert($data);
    }
    
    public function update_row($data, $id)
    {
        $db = $this->getDefaultAdapter();
        $where = $db->quoteInto("id = ?", $id);
        return $this->update($data, $where);
    }

}

