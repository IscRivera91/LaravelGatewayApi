<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Services\BookService;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponse;

    /**
     * The service to consume the book service
     * @var bookService
     */
    public $bookService;

    /**
     * The service to consume the author service
     * @var authorService
     */
    public $authorService;

    /**
     * Create a new controller instance
     * 
     * @return void
     */
    public function __construct(BookService $bookService, AuthorService $authorService)
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
    }

    /**
     * Return books list
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->bookService->obtainBooks());
    }

    /**
     * Create a instance of book
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorService->obtainAuthor($request->author_id);
        return $this->successResponse($this->bookService->createBook($request->all()),Response::HTTP_CREATED);
    }

    /**
     * Return an specific book
     * 
     * @param $book
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {
        return $this->successResponse($this->bookService->obtainBook($book));
    }

    /**
     * update the information of an existing book
     * 
     * @param Illuminate\Http\Request $request
     * @param $book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
        if (isset($request->author_id)) {
            $this->authorService->obtainAuthor($request->author_id);
        }
        return $this->successResponse($this->bookService->editBook($request->all(), $book));
    }

    /**
     * destroy an existing book
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {
        return $this->successResponse($this->bookService->deleteBook($book));
    }
}