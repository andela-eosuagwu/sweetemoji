<?php

namespace spec\Emeka\SweetEmoji\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AuthControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Emeka\SweetEmoji\Controller\AuthController');
    }
}
