<?php
// abstract class DomainObject{}

// class User extends DomainObject{
//     public static function create():float{
//         return new User();
//     }
// }

// class Document extends DomainObject{
//     public static function create():float{
//         return new Document();
//     }
// }

//  вместо это можно сделать так 



// abstract class DomainObject
// {
//     public static function create(): DomainObject
//     {
//         return new static();
//     }
// }
// class Document extends DomainObject{}
// class User extends DomainObject{}

// print_r(Document::create());

abstract class DomainObject
{
    private string $group;
    public function __construct()
    {
        $this->group = static::getGroup();
    }
    public static function create(): DomainObject
    {
        return new static();
    }
    public static function getGroup(): string
    {
        return "default";
    }
}

class User extends DomainObject
{
}

class Document extends DomainObject
{
    public static function getGroupO(): string
    {
        return "document";
    }
}
print_r(Document::create());
