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
     * @return array
     * @throws Exception
     */
    public function listActions()
    {

        $request = new ActionsRequest();

        $response = $this->apiClient->handle($request);
        $responseBody = $response->getBody()->getContents();

        return json_decode($responseBody);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function listConditions()
    {

        $request = new ConditionsRequest();

        $response = $this->apiClient->handle($request);
        $responseBody = $response->getBody()->getContents();

        return json_decode($responseBody);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function listValues()
    {

        $request = new ValuesRequest();

        $response = $this->apiClient->handle($request);
        $responseBody = $response->getBody()->getContents();

        return json_decode($responseBody);
    }
}
