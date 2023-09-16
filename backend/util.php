<?php
class Util
{
    //Method of sanitization
    public function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);

        return $data;
    }
    //MEthod to displaying message
    public function showMessage($type, $message)
    {
        return '<div class="message message-' . $type . '">
                    <div class="icon">
                        <i class="fa-solid fa-fire"></i>
                    </div>
                    <div class="text">' . $message . '</div>
                </div>';
    }
}
?>