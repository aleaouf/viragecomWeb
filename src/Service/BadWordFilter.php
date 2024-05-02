<?php
namespace App\Service;

use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class BadWordFilter
{
    private FlashyNotifier $flashy;
    private HttpClientInterface $httpClient;
    private string $apiKey;

    public function __construct(HttpClientInterface $httpClient, string $apiKey, FlashyNotifier $flashy)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
        $this->flashy = $flashy;
    }

    
    public function filterText(string $text): string
{
    $url = 'http://api1.webpurify.com/services/rest/';
    try {
        $response = $this->httpClient->request('GET', $url, [
            'query' => [
                'api_key' => $this->apiKey,
                'method' => 'webpurify.live.replace',
                'text' => $text,
                'replacesymbol' => '*', // Symbol to replace bad words
                'format' => 'json'
            ]
        ]);

        if ($response->getStatusCode() === 200) {
            $content = $response->toArray();
            if (isset($content['rsp']['found'])) {
                if ($content['rsp']['found']) {
                    if (isset($content['rsp']['text'])) {
                        $filteredText = $content['rsp']['text'];
                        $this->flashy->error('Bad words detected: ' . $filteredText, 'http://your-awesome-link.com');
                        return $filteredText;
                    } else {
                        throw new \Exception('Text key not found in API response');
                    }
                } else {
                    $this->flashy->success('No bad words detected', 'http://your-awesome-link.com');
                    return $text;
                }
            } else {
                throw new \Exception('Invalid response from WebPurify API');
            }
        } else {
            throw new \Exception('WebPurify API request failed');
        }
    } catch (\Exception $e) {
        $this->flashy->error('Error filtering text: ' . $e->getMessage(), 'http://your-awesome-link.com');
        return $text; // Return original text in case of an error
    }
}
}