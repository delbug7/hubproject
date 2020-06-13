<?php

namespace Install;

class Message{

    public static function errorMessage($message){
        return '<div class="error-msg"><i class="fa fa-times-circle"></i> '.$message.'</div>';
    }

    public static function warningMessage($message){
        return '<div class="warning-msg"><i class="fa fa-warning"></i> '.$message.'</div>';
    }
}