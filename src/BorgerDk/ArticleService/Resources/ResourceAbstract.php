<?php

namespace BorgerDk\ArticleService\Resources;

use BorgerDk\ArticleService;
use BorgerDk\ArticleService\Client as Client;

/**
 * Abstract class for all service endpoints
 */
abstract class ResourceAbstract
{
    /**
     * Client Connection
     *
     * @var BorgerDk\ArticleService\Client
     */
    protected $client;

    /**
     * @var array
     */
    protected $params;

    /**
     * @var String
     */
    protected $resourceName;

    /**
     * @var String
     */
    protected $resourceResultName;

    /**
     * @var Object
     */
    protected $resourceResult;

    /**
     * @param BorgerDk\ArticleService\Client $client
     */
    public function __construct(Client $client, $params = array())
    {
        $this->client = $client->getClient();
        $this->params = $params;

        if (!isset($this->resourceName)) {
            $this->resourceName = $this->getResourceNameFromClass();
        }

        if (!isset($this->resourceResultName)) {
            $this->resourceResultName = $this->resourceName . 'Result';
        }

        $this->resourceResult = $this->client
            ->{$this->resourceName}($this->params)
            ->{$this->resourceResultName};
    }

    /**
     * Return the raw result from the service endpoint.
     *
     * @return object
     */
    public function getResultRaw()
    {
        return $this->resourceResult;
    }

    /***
     * Return the resource name using the name of the class (used as soap methods / endpoints)
     *
     * @param bool $parent
     *   If TRUE are we first trying with the parent class name to support classes extending
     *   the default resource endpoint classes.
     *
     * @return string
     */
    protected function getResourceNameFromClass($parent = TRUE)
    {
        $namespacedClassName = $parent ? get_parent_class($this) : get_class($this);
        $resourceName = join('', array_slice(explode('\\', $namespacedClassName), -1));

        $reflection = new \ReflectionClass($namespacedClassName);
        if ($reflection->isAbstract()) {
            return $this->getResourceNameFromClass(FALSE);
        }
        else {
            return $resourceName;
        }
    }
}
