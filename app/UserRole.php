<?php

namespace App;

enum UserRole:string
{
    case ADMIN = 'admin';
    case CUSTOMER = 'customer';
}

