<?php
class Input
{
    public static function exists($type  = 'post')
    {
        # code...
        switch ($type) {
            case 'post':
                # code...
                return (!empty($_POST)) ? true : false;
                break;

                case 'get':
                    # code...
                    return (!empty($_GET)) ? true : false;
                    break; 

                default:
                    return false;
                break; 
        }
    }

    public static function check($item)
    {
        # code...
        if(isset($_POST[$item])){

            return true;

        }elseif(isset($_GET[$item])){

            return true;
        }
        return false;
    }

    public static function get($item)
    {
        # code...
        if(isset($_POST[$item])){

            return $_POST[$item];
            
        }elseif(isset($_GET[$item])){

            return $_GET[$item];
        }
        return '';
    }
}