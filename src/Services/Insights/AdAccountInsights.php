<?php

namespace Edbizarro\LaravelFacebookAds\Services\Insights;

use Edbizarro\LaravelFacebookAds\Services\BaseService;
use FacebookAds\Object\AdAccount;

/**
 * Class AdAccountInsights.
 */
class AdAccountInsights extends BaseService
{
    /**
     * @param mixed $objectId
     * @param array $params
     *
     * @return \Illuminate\Support\Collection
     */
    public function getInsights($objectId, $params = [])
    {
        $fields = $params['fields'];
        unset($params['fields']);
        $account = new AdAccount($objectId);
        $insights = $account->getInsights($fields, $params);

        return $this->response($insights);
    }
}
