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
        return `   <div class="toast">
                     <div class="toast-content">
                        <i class="fas fa-solid fa-check check"></i>

                         <div class="message">
                            <span class="text text-1">'.$type.'</span>
                            <span class="text text-2">'.$message.'</span>
                         </div>
                        </div>
                    <i class="fa-solid fa-xmark close"></i>

                 <div class="progress"></div>
            </div>`;
    }
}
?>