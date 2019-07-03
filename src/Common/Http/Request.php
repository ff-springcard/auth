<?php
/**
 * SocialConnect project
 * @author: Patsura Dmitry @ovr <talk@dmtry.me>
 */
declare(strict_types=1);

namespace SocialConnect\Common\Http;

class Request
{
    /**
     * @var string
     */
    protected $uri;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var array
     */
    protected $parameters;

    /**
     * @var array
     */
    protected $headers;

    /**
     * Request constructor.
     *
     * @param string $uri
     * @param array $parameters
     * @param string $method
     * @param array $headers
     */
    public function __construct($uri, array $parameters = array(), $method = 'GET', array $headers = [])
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->parameters = $parameters;
        $this->headers = $headers;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }
}