<?php 

namespace App\Services;

use App\Traits\ConsumeExternalService;

class BookService
{
    use ConsumeExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('microservices.books.base_uri');
    }

    public function obtainBooks()
    {
        return $this->performRequest('GET','books');
    }

    public function createBook($formParams)
    {
        return $this->performRequest('POST','books',$formParams);
    }

    public function obtainBook($book)
    {
        return $this->performRequest('GET',"books/{$book}");
    }

    public function editBook($formParams, $book)
    {
        return $this->performRequest('PUT',"books/{$book}",$formParams);
    }

    public function deleteBook($book)
    {
        return $this->performRequest('DELETE',"books/{$book}");
    }
}