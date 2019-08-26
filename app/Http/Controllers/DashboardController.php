<?php

namespace fc\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //@todo parent is_admin is set to true be default we fix it later
    
    public function show()
    {
        
        return view('admin.dashboard', [ 'is_admin' => $this->is_admin ]);
    }
}
