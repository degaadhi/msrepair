<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PriceList;
use Illuminate\Http\Request;

class PriceListController extends Controller
{
    public function index()
    {
        $services = PriceList::where('status', 'active')
            ->latest()
            ->paginate(10);

        $totalServices = PriceList::count();
        $avgPrice = PriceList::avg('price');
        $categories = PriceList::distinct('category')->count('category');

        return view('admin.pricelist', [
            'activeAdminPage' => 'pricelist',
            'services' => $services,
            'totalServices' => $totalServices,
            'avgPrice' => $avgPrice,
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.pricelist-create', [
            'activeAdminPage' => 'pricelist',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_name' => 'required|string|max:255',
            'device_model' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        PriceList::create($validated);

        return redirect('/admin/pricelist')->with('success', 'Layanan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $service = PriceList::findOrFail($id);
        return view('admin.pricelist-edit', [
            'activeAdminPage' => 'pricelist',
            'service' => $service,
        ]);
    }

    public function update(Request $request, $id)
    {
        $service = PriceList::findOrFail($id);

        $validated = $request->validate([
            'service_name' => 'required|string|max:255',
            'device_model' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $service->update($validated);

        return redirect('/admin/pricelist')->with('success', 'Layanan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $service = PriceList::findOrFail($id);
        $service->delete();
        return redirect('/admin/pricelist')->with('success', 'Layanan berhasil dihapus!');
    }
}
