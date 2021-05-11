<?php

namespace Dropsolid\UnomiSdkPhp\Repository;

use Dropsolid\UnomiSdkPhp\Model\Rules\RulesListView;
use Dropsolid\UnomiSdkPhp\Request\Rules\RulesListRequest;
use Http\Client\Exception;

/**
 * Class RulesRepository
 *
 * @package Dropsolid\UnomiSdkPhp\Repository
 */
class RulesRepository extends RepositoryBase
{
    /**
     *
     * @return RulesListView[]
     * @throws Exception
     */
    public function listRules()
    {
        $request = new RulesListRequest();

        return $this->handleRequest(
            $request,
            RulesListView::class . '[]'
        );
    }
}
