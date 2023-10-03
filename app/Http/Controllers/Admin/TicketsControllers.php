<?php

namespace App\Http\Controllers\Admin;
use App\Models\Tickets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketsControllers extends Controller
{
    public function tickets(){

        $ticketss= Tickets::select('id','name','lastreply') ->get();
        return view('admin.tickets.tickets',compact('ticketss'));
    
        }

    
        public function create(){

return view('admin.tickets.create');
        
}


public function store(){




    Tickets::create([
        
        'lastreply'=> $request -> lastreply ,
        'name' => $request -> name,
        

    ]);
    
    $ticketss= Tickets::select('id','name','lastreply') ->get();
    return view('admin.tickets.tickets',compact('ticketss'));





}

}
