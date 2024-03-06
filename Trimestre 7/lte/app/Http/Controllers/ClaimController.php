<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Claim;

class ClaimController extends Controller
{
    public function showForm()
    {
        return view('claims.form');
    }

    public function submit(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            'telefono' => 'required|string',
            'identificacion' => 'required|string',
            'asunto' => 'required|string',
            'mensaje' => 'required|string',
            // Add more validation rules as needed
        ]);

        // Store the claim in the database
        $claim = new Claim();
        $claim->nombre = $validatedData['nombre'];
        $claim->email = $validatedData['email'];
        $claim->telefono = $validatedData['telefono'];
        $claim->identificacion = $validatedData['identificacion'];
        $claim->asunto = $validatedData['asunto'];
        $claim->mensaje = $validatedData['mensaje'];
        $claim->save();

        // Redirect back with a success message
        
        return redirect('/')->with('success', '¡Su mensaje ha sido enviado!');
    }

    public function index()
    {
        // Retrieve all claims from the database
        $claims = Claim::all();
        
        // Pass the claims data to the view
        return view('claims.claims', compact('claims'));
        
    }

    public function updateStatus(Claim $claim)
{
    $statuses = ['Incompleto', 'En progreso', 'Terminado'];
    $currentStatusIndex = array_search($claim->status, $statuses);
    $nextStatusIndex = ($currentStatusIndex + 1) % count($statuses);
    $claim->status = $statuses[$nextStatusIndex];
    $claim->save();

    return response()->json(['status' => $claim->status]);
}


}
