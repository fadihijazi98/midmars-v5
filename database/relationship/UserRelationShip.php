<?php

namespace relationship;
use Illuminate\Database\Schema\Blueprint;

class UserRelationShip
{
    public function __construct(Blueprint $table)
    {
        self::make_relation_with_user($table);
    }

    public static function make_relation_with_user(Blueprint $table) {
        //relation ident
        $table->unsignedBigInteger('user_id');
        //relationship build
        $table->foreign('user_id')->on('users')->references('id');
        return $table;
    }
}
