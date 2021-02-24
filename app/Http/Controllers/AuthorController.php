<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponse;

    /**
     * The service to consume the author service
     * 
     * @var authorService
     */
    public $authorService;

    /**
     * Create a new controller instance
     * 
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * Return authors list
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Create a instance of author
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Return an specific author
     * 
     * @param $author
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {
        
    }

    /**
     * update the information of an existing author
     * 
     * @param Illuminate\Http\Request $request
     * @param $author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {
        

    }

    /**
     * destroy an existing author
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {
        
    }

}

