<?php

declare(strict_types=1);

namespace Elgentos\SmileDebugBarElasticsuite\Block\Zone;

use Magento\Framework\View\Element\Template\Context;
use Smile\DebugToolbar\Block\Zone\AbstractZone;
use Smile\DebugToolbar\Formatter\FormatterFactory;
use Elgentos\SmileDebugBarElasticsuite\Helper\Search as SearchHelper;
use Smile\DebugToolbar\Helper\Data as DataHelper;

/**
 * Search section.
 */
class Search extends AbstractZone
{
    public function __construct(
        Context $context,
        DataHelper $dataHelper,
        FormatterFactory $formatterFactory,
        protected readonly SearchHelper $searchHelper,
        array $data = []
    ) {
        parent::__construct($context, $dataHelper, $formatterFactory, $data);
        $this->setTemplate('Elgentos_SmileDebugBarElasticsuite::zone/search.phtml');
    }

    /**
     * @inheritdoc
     */
    public function getCode(): string
    {
        return 'search';
    }

    /**
     * @inheritdoc
     */
    public function getTitle(): string
    {
        return 'Search';
    }

    /**
     * Get the search sections.
     */
    public function getSearchSections(): array
    {
        $sections = $this->searchHelper->getSearch();
        $searchSection = [];

        foreach ($sections as $sectionKey => $section) {
            foreach ($section as $key => $item) {
                $searchSection[$sectionKey][$key] = json_encode($item, JSON_PRETTY_PRINT);
            }
        }

        return $searchSection;
    }
}
