<?php

/**
 * Copyright Elgentos BV. All rights reserved.
 * https://www.elgentos.nl/
 */

declare(strict_types=1);

namespace Elgentos\SmileDebugBarElasticsuite\Plugin;

use Elgentos\SmileDebugBarElasticsuite\Helper\Search as SearchHelper;
use Smile\ElasticsuiteCore\Client\Client;

class ElasticsuitePlugin
{
    public function __construct(
        protected readonly SearchHelper $searchHelper,
    ) {
    }

    public function beforeSearch(
        Client $subject,
        $params
    ) {
        $this->searchHelper->addToSearch('index', $params['index'], $params);
        return [$params];
    }
}
