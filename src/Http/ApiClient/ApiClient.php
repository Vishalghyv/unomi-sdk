<?php

namespace Dropsolid\UnomiSdkPhp\Http\ApiClient;

use GuzzleHttp\Psr7\Request;
use Http\Client\HttpClient;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Sort\SortInterface;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Offset\OffsetInterface;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Size\SizeInterface;
use Dropsolid\UnomiSdkPhp\Request\RequestInterface;

/**
 * Class ApiClient
 *
 * @package Dropsolid\UnomiSdkPhp\Http
 */
class ApiClient implements ApiClientInterface
{
    /**
     * @var AbstractProvider
     */
    protected $provider;

    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * @var AccessToken
     */
    private $accessToken;

    /**
     * @var string
     */
    private $defaultMethod;

    /**
     * @var string Unomi Base URL to use
     */
    private $baseUri = 'https://unomi.poc.qa.dropsolid-sites.com/';

    /**
     * ApiClient constructor.
     *
     * @param AbstractProvider|null $provider
     * @param HttpClient $httpClient
     * @param AccessToken|null $accessToken
     * @param array $options
     *   An associative array of options. Supports the following values:
     *   - `default_method`: the default method to use when a requests supports
     *       multiple methods.
     */
    public function __construct(
        $provider,
        HttpClient $httpClient,
        $accessToken,
        array $options = []
    ) {
        $this->httpClient = $httpClient;
        $this->provider = $provider;
        $this->accessToken = $accessToken;
        $this->defaultMethod = isset($options['default_method'])
            ? $options['default_method']
            : 'GET';

        // Set endpoint uri
        $this->baseUri = isset($options['base_uri'])
            ? $options['base_uri']
            : $this->baseUri;

    }

    /**
     * @inheritdoc
     */
    public function handle(RequestInterface $request)
    {
        $options = [];
        $body = $request->getBody();

        if ($request instanceof SortInterface) {
            if (!empty($sort = $request->getSort())) {
                foreach ($sort as $field => $order) {
                    $body['sort'][] = [
                        'field' => $field,
                        'order' => $order,
                    ];
                }
            }
        }

        if ($request instanceof SizeInterface) {
            if (!empty($size = $request->getSize())) {
                $body['size'] = $size;
            }
        }

        if ($request instanceof OffsetInterface) {
            if (!empty($offset = $request->getOffset())) {
                $body['offset'] = $offset;
            }
        }

        if (!empty($body)) {
            $options['body'] = json_encode($body);
        }

        if ($this->provider) {
            $psrRequest = $this->provider->getAuthenticatedRequest(
                $request->getMethod() ?: $this->defaultMethod,
                $this->baseUrl . $request->getEndpoint(),
                $this->accessToken,
                $options
            );
        }
        else {

            $psrRequest = new Request(
                $request->getMethod() ?: $this->defaultMethod,
                $this->baseUri . $request->getEndpoint(),
                [],
                json_encode($body)
            );
        }

        return $this->httpClient->sendRequest($psrRequest);

    }
}
