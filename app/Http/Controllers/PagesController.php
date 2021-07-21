<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['nama' => 'Desrina Putri']);
    }

    public function oddeven()
    {
        return view('oddeven');
    }

    public function grade()
    {
        return view('grade');
    }

    public function palindrome()
    {
        return view('palindrome');
    }

    public function censored()
    {
        return view('censored');
    }

    public function pingpongtuing()
    {
        return view('pingpongtuing');
    }

    public function bubblesort()
    {
        return view('bubblesort');
    }
}
