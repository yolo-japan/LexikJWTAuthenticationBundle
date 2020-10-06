<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Event;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * AuthenticationFailureEvent.
 *
 * @author Emmanuel Vella <vella.emmanuel@gmail.com>
 * @author Robin Chalas   <robin.chalas@gmail.com>
 */
class AuthenticationFailureEvent extends Event
{
    /**
     * @var AuthenticationException
     */
    protected $exception;

    /**
     * @var Response|null
     */
    protected $response;

    /**
     * @param AuthenticationException $exception
     * @param Response                $response
     */
    public function __construct(AuthenticationException $exception, Response $response)
    {
        $this->exception = $exception;
        $this->response  = $response;
    }

    /**
     * @return AuthenticationException
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * @return Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param Response|null $response
     */
    public function setResponse(Response $response = null)
    {
        $this->response = $response;
    }
}
