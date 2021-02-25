<?php 

namespace App\Services;

use App\Traits\ConsumeExternalService;

class AuthorService
{
    use ConsumeExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('microservices.authors.base_uri');
    }

    
    public function obtainAuthors()
    {
        return $this->performRequest('GET','authors');
    }

    public function createAuthor($formParams)
    {
        return $this->performRequest('POST','authors',$formParams);
    }
}