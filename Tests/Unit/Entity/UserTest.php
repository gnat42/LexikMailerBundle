<?php

namespace Lexik\Bundle\MailerBundle\Tests\Entity;

use Lexik\Bundle\MailerBundle\Model\EmailDestinationInterface;

class UserTest implements EmailDestinationInterface
{
    public function getName()
    {
        return 'User';
    }

    public function getEmail()
    {
        return 'user@example.net';
    }
}
