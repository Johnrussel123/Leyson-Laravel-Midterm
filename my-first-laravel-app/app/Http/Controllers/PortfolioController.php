<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'MR.D CAFE',

            'title' => 'COFFEE WITH A HEART',

            'email' => 'mrf@gmail.com',

            'phone' => '+639975277822',

            'location' => 'PH, Manila',

            'bio' => 'Too much problem, not enough coffee...',

            'profile_image' => 'https://www.creativefabrica.com/wp-content/uploads/2020/11/12/Coffee-Logo-Graphics-6570010-1.jpg',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [], // Project data

            'experience' => [], // Experience data

            'education' => [], // Education data

            'social_links' => [] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}