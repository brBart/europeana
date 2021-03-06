<?php

/*
 * This file is part of the Europeana API package.
 *
 * (c) Matthias Vandermaesen <matthias@colada.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Colada\Europeana\Payload;

use Colada\Europeana\Exception\EuropeanaException;

/**
 * @author Matthias Vandermaesen <matthias@colada.be>
 */
class ProvidersPayload extends AbstractPayload
{
    private $offset;

    private $pageSize;

    private $countryCode;

    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function setPageSize($pageSize)
    {
        try {
            if (!is_numeric($pageSize)) {
                throw new \InvalidArgumentException(sprintf(
                    'Expected argument to be of type "integer", got "%s"',
                    gettype($pageSize)
                ));
            }
            $this->pageSize = $pageSize;
        } catch (\InvalidArgumentException $e) {
            throw new EuropeanaException('Failed to prepare payload', null, $e);
        }
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'providers.json';
    }
}