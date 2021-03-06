<?php
/**
 * Created by PhpStorm.
 * User: fisk
 * Date: 03/06/17
 * Time: 00:39
 */

namespace Marketplace\Command\Partner;


use Marketplace\Command\CommandInterface;

class GetItemPrices implements CommandInterface {
    public function getRequestMethod(): string {
        return 'GET';
    }

    public function getInterface(): string {
        return 'Partner';
    }

    public function getMethod(): string {
        return 'GetItemPrices';
    }

    public function getVersion(): string {
        return 'v1';
    }

    public function getParams(): array {
        return [];
    }
}