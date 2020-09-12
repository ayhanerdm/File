<?php
namespace ayhanerdm\File
{
    class File
    {
        public static function read($file)
        {
            if($file)
            {
                if(file_exists($file))
                {
                    $open = fopen($file, 'r');
                    $read = fread($open, filesize($file));
                    fclose($open);
                    return $read;
                }
                else throw new \Exception('The given file doesn\'t exist.');
            }
            else throw new \Exception('You need to give a file name as an argument.');
        }
    }
}