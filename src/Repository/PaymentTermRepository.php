<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\PaymentTerm\PaymentTermListView;
use Nascom\TeamleaderApiClient\Request\Invoicing\PaymentTerms\PaymentTermsListRequest;

/**
 * Class PaymentTermRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class PaymentTermRepository extends RepositoryBase
{
    /**
     * @return PaymentTermListView
     * @throws \Http\Client\Exception
     */
    public function listPaymentTerms()
    {
        return $this->handleRequest
        (
            new PaymentTermsListRequest(),
            PaymentTermListView::class.'[]'
        );
    }
}
