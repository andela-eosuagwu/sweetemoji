<?php

namespace spec\Bendozy\NaijaEmoji\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Bendozy\NaijaEmoji\Model\User');
    }
}
