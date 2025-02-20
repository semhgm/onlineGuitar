<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{

    public function services(){
        $services = Service::all();
    return view('admin.pages.services',compact('services'));
    }
    public function store(Request $request)
    {

        // Form validasyonu
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Yeni servis oluşturma
        $service = new Service();
        $service->title = $request->title;
        $service->content = $request->input('content');

        // Görsel yükleme işlemi
        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $filename);
            $service->image = $filename;
        }

        // Servisi kaydet
        $service->save();
        // Başarı mesajıyla geri dön
        return redirect()->back()->with('success', 'Servis başarıyla eklendi!');
    }
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.pages.services_edit', compact('service'));
    }
    public function update(Request $request, $id)
    {

        $service = Service::findOrFail($id);

        // Form Doğrulama
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Servis Güncelleme
        $service->title = $request->title;
        $service->content = $request->input('content');

        // Görsel Yükleme (Opsiyonel)
        if ($request->hasFile('image')) {
            // Eski görseli sil
            if ($service->image && file_exists(public_path('uploads/' . $service->image))) {
                unlink(public_path('uploads/' . $service->image));
            }

            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $filename);
            $service->image = $filename;
        }

        $service->save();

        return redirect()->route('admin.services')->with('success', 'Servis başarıyla güncellendi!');
    }
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Görsel dosyasını sil
        if (!empty($service->image) && file_exists(public_path('uploads/' . $service->image))) {
            unlink(public_path('uploads/' . $service->image));
        }


        $service->delete();

        return redirect()->route('admin.services')->with('success', 'Servis başarıyla silindi!');
    }










}
