<?php

declare(strict_types=1);

namespace App\Authentication\Domain\Event;

use App\Common\Domain\Event\DomainEvent;

final class ClientHasBeenLoggedIn extends DomainEvent
{
    public const EVENT_NAME = 'authentication.client_has_been_logged_in';

    public static function eventName(): string
    {
        return self::EVENT_NAME;
    }
}
