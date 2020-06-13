<?php

namespace Install;
defined('_HUBACCES') or header('Location: /index.php');
class Fopen{

    public static function createFile($path){
        if(file_exists($path)){
            return false;
        }else {
            $handle = fopen($path, 'x+');
            if(file_exists($path)){
                fclose($handle);
                return true;
            }
            else{
                fclose($handle);
                return false;
            }
        }
    }

    public static function writeFile($path, $text){
        if(file_exists($path)){
            if(is_writable($path)){
                $handle = fopen($path, 'r');
                    $oldtext = null;
                    while (($buffer = fgets($handle, 4096)) !== false) {
                         $oldtext .= $buffer;
                    }
                fclose($handle);
                $handle = fopen($path, 'w');
                if(is_array($text)){
                    $text = implode('', $text);
                }
                fwrite($handle,$oldtext . PHP_EOL . $text);
                fclose($handle);
                return true;
            }

        }
        return false;
    }

    public static function removeContentFile($path){
        if(file_exists($path)){
            if(is_writable($path)){
                $handle = fopen($path, 'w');
                fwrite($handle,'');
                fclose($handle);
                return true;
            }
        }
        return false;
    }

    private static function getContentFile($path){
        if(file_exists($path)){
            return file($path);
        }
        return false;
    }

    public static function removeString($path, $char, $replace){
        $content = self::getContentFile($path);
        $text = '';

        foreach ($content as $v){
            if(strpos($v, $char)){
                $text .= str_replace($char, $replace, $v);
            }else{
                $text .= $v;
            }
        }
        if(self::removeContentFile($path)){
            if(self::writeFile($path, $text)){
                return true;
            }
        }
        return false;
    }
}