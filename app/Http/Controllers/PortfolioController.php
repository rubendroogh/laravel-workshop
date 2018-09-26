<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
	// 
	// In de index functie wordt de view 'portfolio' laten zien.
	// Deze view staat in het mapje 'resources/views' onder de naam 'portfolio.blade.php'
	// 
    public function index(){
    	return view('portfolio');
    }
}
