<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(9);
        $totalItems = Portfolio::count();

        return view('admin.portfolio', [
            'activeAdminPage' => 'portfolio',
            'portfolios' => $portfolios,
            'totalItems' => $totalItems,
        ]);
    }

    public function create()
    {
        return view('admin.portfolio-create', [
            'activeAdminPage' => 'portfolio',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'caption' => 'nullable|string',
            'category' => 'required|string|max:255',
            'technician' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
            'status' => 'required|in:completed,in_progress',
            'visibility' => 'required|in:public,private',
            'image' => 'nullable|image|max:10240', // 10MB
        ]);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('portfolios', 'public');
        }

        unset($validated['image']);
        Portfolio::create($validated);

        return redirect('/admin/portfolio')->with('success', 'Portfolio berhasil diupload!');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio-edit', [
            'activeAdminPage' => 'portfolio',
            'portfolio' => $portfolio,
        ]);
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'caption' => 'nullable|string',
            'category' => 'required|string|max:255',
            'technician' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
            'status' => 'required|in:completed,in_progress',
            'visibility' => 'required|in:public,private',
            'image' => 'nullable|image|max:10240', // 10MB
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($portfolio->image_path) {
                Storage::disk('public')->delete($portfolio->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('portfolios', 'public');
        }

        unset($validated['image']);
        $portfolio->update($validated);

        return redirect('/admin/portfolio')->with('success', 'Portfolio berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        if ($portfolio->image_path) {
            Storage::disk('public')->delete($portfolio->image_path);
        }

        $portfolio->delete();
        return redirect('/admin/portfolio')->with('success', 'Portfolio berhasil dihapus!');
    }
}
