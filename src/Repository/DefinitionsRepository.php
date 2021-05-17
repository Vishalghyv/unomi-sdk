<?php

namespace Dropsolid\UnomiSdkPhp\Repository;

use Dropsolid\UnomiSdkPhp\Request\Definitions\ActionsRequest;
use Dropsolid\UnomiSdkPhp\Request\Definitions\ConditionsRequest;
use Dropsolid\UnomiSdkPhp\Request\Definitions\ValuesRequest;
use Http\Client\Exception;

/**
 * Class DefinitionsRepository
 *
 * @package Dropsolid\UnomiSdkPhp\Repository
 */
class DefinitionsRepository extends RepositoryBase
{
    /**
     * @return object
     * @throws Exception
     */
    public function listActions()
    {

        $request = new ActionsRequest();

        return $this->handleRawRequest($request);
    }

    /**
     * @return object
     * @throws Exception
     */
    public function listConditions()
    {

        $request = new ConditionsRequest();

        return $this->handleRawRequest($request);
    }

    /**
     * @return object
     * @throws Exception
     */
    public function listValues()
    {

        $request = new ValuesRequest();

        return $this->handleRawRequest($request);
    }
}
