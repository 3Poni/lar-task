<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Book::with('author:id,first_name,last_name')
            ->get()->setHidden(['author_id', 'created_at', 'updated_at']), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $books = Book::with('author:id,first_name,last_name')
            ->get()->setHidden(['author_id', 'created_at', 'updated_at'])->find($id);

        return $books ?
            response()->json($books, 200)
            :
            response()->json('Book is not Found', 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        if (Book::find($id)) {
            return Book::find($id)->update($request->all()) ?
                response()->json(Book::with('author:id,first_name,last_name')
                    ->get()->setHidden(['author_id', 'created_at', 'updated_at'])->find($id), 200)
                :
                response()->json(['response' => 'Bad Request'], 400);
        }
        return response()->json(['response' => 'Book is not found'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        return Book::destroy($id) ?
            response()->json([
                'response' => 'Book has been deleted'
            ], 200)
            :
            response()->json([
                'response' => 'Book is not found'
            ], 404);
    }

}
