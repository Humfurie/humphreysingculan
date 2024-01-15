<?php

namespace Domain\Users\Enums;

enum UserStatusEnum:string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case SUSPENDED = 'suspended';
    case UNVERIFIED = 'unverified';
    case BANNED = 'banned';
}
