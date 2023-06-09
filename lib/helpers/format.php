<?php
class Format{
    public function formatDate($date){ //format ngay thang nam
        return date('F j, Y, g:i a', strtotime($date));

    }
    public function textShorten($text, $limit = 400) // những đoạn text ngắn
    {
        $text = $text. " ";
        $text = substr($text, 0, $limit);
        $text =  substr($text, 0,strrpos($text, ' '));
        $text = $text.".....";
        return  $text;

    }
    public function  validation($data){ // kiểm tra form có trống hay không và có hợp lệ hay không
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function title(){ // kiểm tra tên server
        $path = $_SERVER['SCRIPT_FILENAME'];
        $title = basename($path, '.php');
        if ($title == 'index')
        {
            $title = 'home';
        }elseif ($title ==  'contact'){
            $title = 'contact';
        }
        return $title = ucfirst($title);
    }
}

?>