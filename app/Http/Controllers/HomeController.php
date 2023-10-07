<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\User;
use App\Models\BorrowBook;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    private $title = 'Home';
    public function __invoke(Request $request)
    {
        $data['title'] = str($this->title)->plural();
        $totalBooks = Book::count();
        $totalUsers = User::count();
        $totalBooksBorrowed = BorrowBook::count();
        return view('pages.home', compact('totalBooks', 'totalUsers', 'totalBooksBorrowed'))->with($data);
    }
}