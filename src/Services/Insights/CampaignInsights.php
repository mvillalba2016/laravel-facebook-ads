<?php

namespace Edbizarro\LaravelFacebookAds\Services\Insights;

use Edbizarro\LaravelFacebookAds\Services\BaseService;
use FacebookAds\Object\Campaign;

/**
 * Class CampaignInsights.
 */
class CampaignInsights extends BaseService
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
        $campaign = new Campaign($objectId);
        $insights = $campaign->getInsights($fields, $params);

        return $this->response($insights);
    }
}
