<?php

namespace Dropsolid\UnomiSdkPhp\Repository;

use Dropsolid\UnomiSdkPhp\Model\Profile\ProfileSearchView;
use Dropsolid\UnomiSdkPhp\Request\Profile\ProfileSearchRequest;
use Http\Client\Exception;

/**
 * Class ProfileSearchRepository
 *
 * @package Dropsolid\UnomiSdkPhp\Repository
 */
class ProfileSearchRepository extends RepositoryBase
{
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
}
