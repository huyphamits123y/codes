<?php
    include_once '../lib/database.php';
    include_once '../helpers/format.php';
?>
<?php
    class Cart
    {
        private $db;
        private $fm;
        public function _construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        
    }
?>