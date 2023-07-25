<?php
    // class Storage{
    //     public function add(string $key, $value ){
    //         if(! is_bool($value) && ! is_string($value)){
    //             error_log("Требуется тип string или bool");
    //             return false;
    //         }
    //     }
    // }

    //  or we can do it 
    class Storage{
        public function add(string $key, string|bool|null $value ){
            // body....
        }
    }
