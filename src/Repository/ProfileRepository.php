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
    public function getProfile(string $id)
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
    public function getProfileSegments(string $id)
    {
        if (empty($id)) {
          return null;
        }

        $request = new ProfileSegmentsRequest($id);

        return $this->handleRawRequest($request);
    }

    /**
     * @param int $offset
     * @param int $limit
     *
     * @return ProfileSearchView[]
     * @throws Exception
     */
    public function listProfile(int $offset = 0, int $limit = 10)
    {
      $search = (object) [
        'text' => 'unomi',
        'offset' => $offset,
        'limit' => $limit,
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
     * @return object
     * @throws Exception
     */
    public function listProperties()
    {
        $request = new ProfilePropertiesRequest();

        return $this->handleRawRequest($request);
    }
}
