<?php

namespace Dropsolid\UnomiSdkPhp\Repository;

use Dropsolid\UnomiSdkPhp\Http\ApiClient\ApiClientInterface;
use Dropsolid\UnomiSdkPhp\Request\RequestInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class RepositoryBase
 *
 * @package Dropsolid\UnomiSdkPhp\Repository
 */
abstract class RepositoryBase
{
    /**
     * @var ApiClientInterface
     */
    protected $apiClient;

    /**
     * @var SerializerInterface&NormalizerInterface
     */
    protected $serializer;

    /**
     * RepositoryBase constructor.
     *
     * @param ApiClientInterface $apiClient
     * @param SerializerInterface&NormalizerInterface $serializer
     */
    public function __construct(
        ApiClientInterface $apiClient,
        SerializerInterface $serializer
    ) {
        $this->apiClient = $apiClient;
        $this->serializer = $serializer;
    }

    /**
     * @param $data
     * @param $type
     *
     * @return mixed
     */
    protected function deserialize($data, $type)
    {
        return $this->serializer->deserialize($data, $type, 'json');
    }

    /**
     * @param $data
     * @param array $context
     *
     * @return string|array
     */
    protected function normalize($data, $context = array())
    {
        return $this->serializer->normalize($data, 'json', $context);
    }

    /**
     * @param RequestInterface $request
     * @param $responseClass
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    protected function handleRequest(RequestInterface $request, $responseClass)
    {
        $response = $this->apiClient->handle($request);
        $responseBody = $response->getBody()->getContents();
        return $this->deserialize($responseBody, $responseClass);
    }
}
