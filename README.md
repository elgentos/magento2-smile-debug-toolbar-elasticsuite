# Elgentos Smile Debug Bar extension for Elasticsuite

This module provides a debug bar for Elasticsuite in Magento 2.

## Prerequisites

Before installing this extension you are required to install the [Smile Debug Toolbar](https://github.com/Smile-SA/magento2-module-debug-toolbar).

## Installation

To install this module, run the following command in your terminal:
```bash
composer require elgentos/magento2-smile-debug-toolbar-elasticsuite
```
Then, enable the module:
```bash
bin/magento module:enable Elgentos_SmileDebugToolbarElasticsuite
```
And finally, run the upgrade command:
```bash
bin/magento setup:upgrade
```
## Usage

This module will add a search tab to the Smile Debug Bar in your Magento 2 store. You can use this tab to inspect Elasticsuite queries and other relevant information.

## Contributing

Contributions are welcome. Please submit a pull request with your changes.
