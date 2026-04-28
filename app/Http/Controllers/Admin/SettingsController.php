<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings', [
            'activeAdminPage' => 'settings',
            'shopName' => Setting::get('shop_name', 'MS Repair'),
            'whatsapp' => Setting::get('whatsapp', '085728160180'),
            'tagline' => Setting::get('tagline', 'Mafia Service HP Semarang'),
            'address' => Setting::get('address', 'VC3F+V48 Gedanganak, Semarang Regency, Central Java'),
        ]);
    }

    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->update($validated);

        return redirect('/admin/settings')->with('success', 'Profil berhasil diperbarui!');
    }

    public function updateStore(Request $request)
    {
        $validated = $request->validate([
            'shop_name' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:20',
            'tagline' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:500',
        ]);

        Setting::set('shop_name', $validated['shop_name']);
        Setting::set('whatsapp', $validated['whatsapp']);
        Setting::set('tagline', $validated['tagline'] ?? '');
        Setting::set('address', $validated['address'] ?? '');

        return redirect('/admin/settings')->with('success', 'Informasi toko berhasil diperbarui!');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if (!Hash::check($validated['current_password'], Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini salah.']);
        }

        $user = Auth::user();
        $user->update(['password' => Hash::make($validated['password'])]);

        return redirect('/admin/settings')->with('success', 'Password berhasil diubah!');
    }
}
