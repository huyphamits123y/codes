<?php
    include_once '../lib/database.php';
    include_once '../helpers/format.php';
?>
<?php
    class Product
    {
        private $db;
        private $fm;
        public function _construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public  function insert_product($catName){
            $catName = $this->fm->validation($catName);
            $catName = mysqli_real_escape_string($this->db->link, $catName);
            if (empty($catName)){
                $alert = "<span class='error'>Category must be not empty </span>";
                return $alert;
            }
            // else
            // {
            //     $query = "INSERT INTO "
            // }
        }
    }
?>