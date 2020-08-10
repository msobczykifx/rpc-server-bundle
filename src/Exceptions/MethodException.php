<?php

namespace Timiki\Bundle\RpcServerBundle\Exceptions;

class MethodException extends ErrorException
{
    /**
     * MethodException constructor.
     *
     * @param null|mixed      $data
     * @param null|int|string $id
     */
    public function __construct($data = null, $id = null)
    {
        parent::__construct('Method exception', -32002, $data, $id);
    }
}
