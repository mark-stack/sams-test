<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\Message;

Route::post('/listings/{uuid}', function(Request $request, $uuid){
    
    $validated = $request->validate([
        'message' => 'required',
    ],
    [
        'message.required' => 'You must provide a message body'
    ]);
  

    //Get listing
    $listing = Listing::where('uuid',$uuid)->first();
   
    //Create a message (through Relationship)
    $message = new Message;
    $message->body = $request->message;
    $listing->messages()->save($message);

    return $request->message;

});