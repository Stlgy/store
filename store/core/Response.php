<?php
    class Response
    {
        public function setSatusCode(int $code)
        {
            http_response_code($code);
        }
    }
?>
