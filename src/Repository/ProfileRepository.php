<?php

namespace Dropsolid\UnomiSdkPhp\Repository;

use Dropsolid\UnomiSdkPhp\Request\Profile\ProfileCurrentRequest;
use Http\Client\Exception;

/**
 * Class ProfileRepository
 *
 * @package Dropsolid\UnomiSdkPhp\Repository
 */
class ProfileRepository extends RepositoryBase
{
    /**
     * @param string $profileId
     *
     * @return object
     * @throws Exception
     */
    public function currentProfile(string $profileId = '')
    {
      $search = (object) [
        'source' =>  [
          'itemId' => 'pageView',
          'itemType' => 'pageView',
          'scope' => 'currentProfile'
        ],
        'requiredProfileProperties' => ['*'],
        'requiredSessionProperties' => ['*'],
        'requireSegments' => true,
      ];
      // $serach['cookie'] = $profileId;

      $request = new ProfileCurrentRequest($search);
      $request->setCookie($profileId);

      return $this->handleRawRequest($request);
    }
}
