<?php

namespace Dropsolid\UnomiSdkPhp\Repository;

use Dropsolid\UnomiSdkPhp\Model\Profile\ProfileSearchView;
use Dropsolid\UnomiSdkPhp\Request\Profile\ProfileSearchRequest;
use Dropsolid\UnomiSdkPhp\Request\Profile\ProfilePropertiesRequest;
use Dropsolid\UnomiSdkPhp\Request\Profile\ProfileInfoRequest;
use Dropsolid\UnomiSdkPhp\Request\Profile\ProfileSegmentsRequest;
use Http\Client\Exception;

/**
 * Class ProfileRepository
 *
 * @package Dropsolid\UnomiSdkPhp\Repository
 */
class ProfileRepository extends RepositoryBase
{

    /**
     * @param string $id
     *
     * @return array
     * @throws Exception
     */
    public function getProfile($id)
    {
        if (empty($id)) {
          return null;
        }

        $request = new ProfileInfoRequest($id);
        $response = $this->apiClient->handle($request);
        $responseBody = $response->getBody()->getContents();

        return json_decode($responseBody);
    }

    /**
     * @param string $id
     *
     * @return array
     * @throws Exception
     */
    public function getProfileSegments($id)
    {
        if (empty($id)) {
          return null;
        }

        $request = new ProfileSegmentsRequest($id);
        $response = $this->apiClient->handle($request);
        $responseBody = $response->getBody()->getContents();

        return json_decode($responseBody);
    }

    /**
     *
     * @return ProfileSearchView[]
     * @throws Exception
     */
    public function listProfile()
    {
      $search = (object) [
        'text' => 'unomi',
        'offset' => 0,
        'limit' => 10,
        'offset' => 0,
        'condition' => (object) [
          'type' => 'profilePropertyCondition',
          'parameterValues' => (object) [
            'propertyName' => 'itemType',
            'comparisonOperator' => 'equals',
            'propertyValue' => 'profile',
          ],
        ],
      ];

        $request = new ProfileSearchRequest($search);

        return $this->handleRequest(
            $request,
            ProfileSearchView::class
        );
    }

    /**
     *
     * @return array
     * @throws Exception
     */
    public function listProperties()
    {
        $request = new ProfilePropertiesRequest();

        $response = $this->apiClient->handle($request);
        $responseBody = $response->getBody()->getContents();

        return json_decode($responseBody);
    }
}
