<?php

/*
 * This file is part of the Europeana API package.
 *
 * (c) Matthias Vandermaesen <matthias@colada.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Colada\Europeana\Tests\Payload;

use Colada\Europeana\Payload\PayloadResponseInterface;

class ProviderPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'items'         => [$this->createProvidersItem()],
            'itemsCount'    => 999,
            'totalResults'  => 112
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
    		$this->assertInstanceOf('Colada\Europeana\Payload\ProviderPayloadResponse', $payloadResponse);
        $this->assertNotEmpty($payloadResponse->getItems());
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $payloadResponse->getItems());
        $this->assertProvidersItem($responseData['items'][0], $payloadResponse->getItems()->get(0));

        $this->assertEquals($responseData['itemsCount'], $payloadResponse->getItemsCount());
        $this->assertEquals($responseData['totalResults'], $payloadResponse->getTotalResults());
    }
}
