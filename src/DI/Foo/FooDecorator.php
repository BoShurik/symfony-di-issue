<?php
/**
 * User: boshurik
 * Date: 27.08.18
 * Time: 16:12
 */

namespace App\DI\Foo;

class FooDecorator implements FooInterface
{
    /**
     * @var FooInterface
     */
    private $decorated;

    public function __construct(FooInterface $decorated)
    {
        $this->decorated = $decorated;
    }
}