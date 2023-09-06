<?php

namespace App\Http\Controllers;
use App\Models\Reportage;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reportages = Reportage::all();
        return view('reportages.index')->with('reportages', $reportages);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reportages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titel' => 'required',
            'auteur' => 'required',
            'body' => 'required',
            'image' => 'image | nullable',
        ]);

        $file = $request->file('image');
        if ($file) {
            $afbeelding = $file->getClientOriginalName();
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file->getClientOriginalName());
        } else {
            $afbeelding = "";
        }

        $reportage = new Reportage;
        $reportage->afbeelding = $afbeelding;
        $reportage->title = $request->input('titel');
        $reportage->auteur = $request->input('auteur');
        $reportage->body = $request->input('body');
        $reportage->save();
        return redirect('/reportages')->with("success",
            "Nieuwe reportage aangemaakt");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reportage = Reportage::find($id);
        return view('reportages.show')->with('reportage', $reportage);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reportage = Reportage::find($id);
        return view('reportages.edit')->with('reportage', $reportage);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['body' => 'required', ]);
        $reportage = Reportage::find($id);
        $reportage->body = $request->input('body');
        $reportage->save();
        return redirect('/reportages')->with("success", "Reportage is bewerkt");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reportage = Reportage::find($id);
        $reportage->delete();
        return redirect('/reportages')->with("success", "Reportage is verwijderd");
    }
}
