<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BookController;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
  $books = Book::orderBy('updated_at', 'DESC')->paginate(10);
  return view('pages.home', compact('books'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {
  return view('pages.create');
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(StoreBookRequest $request)
 {
  $request->validate([
   'title' => 'required|max:100',
   'description' => 'required|max:5000',
   'url_img' => 'required|max:20000|mimes:png,jpg|image',
   'price' => 'required|numeric|min:0',
   'author' => 'required|max:30',
   'nombre_pages' => 'required|numeric|max:10000',

  ]);

  $validateImg = $request->file('url_img')->store('cover');
/**
 * cette fonction permet d'envoyer les données vers bdd
 */
  Book::create([
   'title' => $request->title,
   'description' => $request->description,
   'url_img' => $validateImg,
   'author' => $request->author,
   'price' => $request->price,
   'nombre_pages' => $request->nombre_pages,
   'created_at' => now(),
  ]);
  //redirect
  return redirect()->route('home')->with('status', 'Livre enregistré');
 }

 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function show(Book $book)
 {
  return view('pages.show', compact('book'));

 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function edit(Book $book)
 {
  return view('pages.edit', compact('book'));
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function update(UpdateBookRequest $request, Book $book)
 {
  //validate form
  $request->validate([

   'title' => 'required|max:100',
   'description' => 'required|max:5000',
   'url_img' => 'required|max:20000|mimes:png,jpg|image',
   'price' => 'required|numeric|min:0',
   'author' => 'required|max:30',
   'nombre_pages' => 'required|numeric|max:10000',
  ]);
  //if image
  if ($request->hasFile('url_img')) {
   // delete the images
   Storage::delete($book->url_image);
   //store new image in storage
   $book->url_img = $request->file('url_img')->store('cover');
  }
  // update and store to db
  $book->update([
   'title' => $request->title,
   'description' => $request->description,
   'url_img' => $validateImg,
   'author' => $request->author,
   'price' => $request->price,
   'nombre_pages' => $request->nombre_pages,
   'updated_at' => now(),
  ]);
  //redirect
  return redirect()->route('books.show', $book->id)->with('status', 'update ok');
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function destroy(Book $book)
 {
  $book->delete();
  return redirect('/')->with('status', 'Book deleted!');

 }
}
