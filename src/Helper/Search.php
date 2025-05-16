<?php

declare(strict_types=1);

namespace Elgentos\SmileDebugBarElasticsuite\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

/**
 * Search helper.
 */
class Search extends AbstractHelper
{
    protected $search = [];

    public function getSearch(): array
    {
        return $this->search;
    }

    /**
     * @inheritdoc
     */
    public function addToSearch(
        string $sectionName,
        string $key,
        mixed $value
    ): self {
        if (is_array($value) && array_key_exists('has_warning',
                $value) && $value['has_warning']) {
            $this->hasWarning();
        }

        $this->search[$sectionName][$key] = $value;

        return $this;
    }
}
