<?php

namespace Dropsolid\UnomiSdkPhp\Repository;

use Dropsolid\UnomiSdkPhp\Model\Rules\RulesListView;
use Dropsolid\UnomiSdkPhp\Model\Rules\RulesStatisticsView;
use Dropsolid\UnomiSdkPhp\Request\Rules\RulesListRequest;
use Dropsolid\UnomiSdkPhp\Request\Rules\RulesStatisticsRequest;
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

    /**
     *
     * @return RulesStatisticsView[]
     * @throws Exception
     */
    public function listRulesStatistics()
    {
        $request = new RulesStatisticsRequest();

        return $this->handleRequest(
            $request,
            RulesStatisticsView::class . '[]'
        );
    }
}
