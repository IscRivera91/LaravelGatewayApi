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

    public function obtainAuthor($author)
    {
        return $this->performRequest('GET',"authors/{$author}");
    }

    public function editAuthor($formParams, $author)
    {
        return $this->performRequest('PUT',"authors/{$author}",$formParams);
    }

    public function deleteAuthor($author)
    {
        return $this->performRequest('DELETE',"authors/{$author}");
    }
}