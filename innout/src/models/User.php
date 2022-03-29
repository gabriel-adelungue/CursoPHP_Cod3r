<?php

class User extends Model {
    protected static $tableName = 'users';
    protected static $columns = [
        'id',
        'name',
        'password',
        'email',
        'started_date',
        'end_date',
        'is_admin',
    ];
}