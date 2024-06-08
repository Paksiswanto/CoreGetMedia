<?php

namespace App\Enums;

enum AuthorEnum : string
{
    case REJECT = 'reject';
    case ACCEPTED = 'accepted';
    case PENDING = 'pending';
}
