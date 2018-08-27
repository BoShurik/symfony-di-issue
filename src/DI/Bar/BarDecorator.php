<?php
/**
 * User: boshurik
 * Date: 27.08.18
 * Time: 16:12
 */

namespace App\DI\Bar;

class BarDecorator implements BarInterface
{
    /**
     * @var BarInterface
     */
    private $decorated;

    public function __construct(BarInterface $decorated)
    {
        $this->decorated = $decorated;
    }
}