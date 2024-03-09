<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Portfolio;
class PortfolioController extends Controller
{
    public function store(Request $request)
    {
    $request->validate([
        'judul' => 'required',
        'tahun' => 'required',
    ]);
    $portfolio = new Portfolio;

    $portfolio->judul = $request->judul;
    $portfolio->tahun = $request->tahun;

    $portfolio->save();

    return redirect('/#experience');
    }
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('index', compact('portfolio'));
    }

    // ----------------------------Untuk Edit-------------------------------------
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return response()->json($portfolio);
    }

    // ----------------------------Untuk update-------------------------------------
    public function update(Request $request, $id)
    {
    $request->validate([
        'judul' => 'required',
        'tahun' => 'required',
    ]);

    $portfolio = Portfolio::find($id);

    $portfolio->judul = $request->judul;
    $portfolio->tahun = $request->tahun;

    $portfolio->save();

    return redirect('/#experience');
    }


    // ------------------------------------UNTUK DELETE-------------------------------------
    public function destroy($id)
    {
        try {
            $portfolio = Portfolio::find($id);
            if ($portfolio) {
                $portfolio->delete();
                return response()->json(['message' => 'Data deleted successfully.']);
            } else {
                return response()->json(['message' => 'Data not found for ID: ' . $id], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error deleting data: ' . $e->getMessage()], 500);
        }
    }
}