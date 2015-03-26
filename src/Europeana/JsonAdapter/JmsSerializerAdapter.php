<?php

namespace Europeana\JsonAdapter;

use Europeana\JsonAdapter\JsonAdapterInterface;
use Europeana\Search\JmsItemHandler;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\DeserializationContext;

class JmsSerializerAdapter implements JsonAdapterInterface {

	public function __construct() {
		$builder = SerializerBuilder::create();

		$metaDir          = __DIR__ . '/../Resources/config/serializer';
		$builder->addMetadataDir($metaDir)->build();

    $builder
    ->configureHandlers(function(HandlerRegistry $registry) {
        $registry->registerSubscribingHandler(new JmsItemHandler());
    });

		$this->serializer = $builder->build();
	}

	public function deserialize($data, $type, $format) {
    $context = new DeserializationContext();
    $context->attributes->set('foobar', "blergh");

		$response = $this->serializer->deserialize($data, $type, $format, $context);
var_dump($response);
		return $response;
	}

}
