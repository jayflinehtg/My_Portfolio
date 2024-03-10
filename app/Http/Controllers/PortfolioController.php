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
        
        Portfolio::create([
            'judul' => $request->judul,
            'tahun' => $request->tahun,
        ]);

        return redirect('/#experience');
    }

    public function index()
    {
        $portfolio = Portfolio::all();
        return view('guess', compact('portfolio'));
    }

    public function admin()
    {
        $portfolio = Portfolio::all();
        return view('index', compact('portfolio'));
    }

    public function edit($id)
    {
        try {
            $portfolio = Portfolio::find($id);
            if ($portfolio) {
                return response()->json($portfolio);
            } else {
                return response()->json(['message' => 'Data not found for ID: ' . $id], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error retrieving data: ' . $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
        ]);

        $portfolio = Portfolio::find($id);

        if ($portfolio) {
            $portfolio->update([
                'judul' => $request->judul,
                'tahun' => $request->tahun,
            ]);
            return redirect('/#experience');
        } else {
            return response()->json(['message' => 'Data not found for ID: ' . $id], 404);
        }
    }

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
