<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    // الصفحة العامة للمستخدمين
    public function index()
    {
        $menuItems = MenuItem::all();
        return view('menu.index', compact('menuItems'));
    }

    // عرض المنيو في لوحة تحكم الأدمن
    public function adminIndex()
    {
        $menuItems = MenuItem::all();
        return view('admin.menu.index', compact('menuItems'));
    }

    // إضافة صنف جديد
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $menuItem = new MenuItem();
        $menuItem->name = $request->name;
        $menuItem->description = $request->description;
        $menuItem->price = $request->price;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('imges/menu'), $imageName);
            $menuItem->image = $imageName;
        }

        $menuItem->save();

        return redirect()->route('admin.menu')->with('success', 'Menu item added.');
    }

    
    public function update(Request $request, $id)
    {
        $menuItem = MenuItem::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $menuItem->name = $request->name;
        $menuItem->description = $request->description;
        $menuItem->price = $request->price;

        if ($request->hasFile('image')) {
            // حذف الصورة القديمة لو موجودة
            $oldImagePath = public_path('imges/menu/' . $menuItem->image);
            if ($menuItem->image && file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('imges/menu'), $imageName);
            $menuItem->image = $imageName;
        }

        $menuItem->save();

        return redirect()->route('admin.menu')->with('success', 'Menu item updated.');
    }

 
    public function destroy($id)
    {
        $menuItem = MenuItem::findOrFail($id);

        
        $imagePath = public_path('imges/menu/' . $menuItem->image);
        if ($menuItem->image && file_exists($imagePath)) {
            unlink($imagePath);
        }

        $menuItem->delete();

        return redirect()->route('admin.menu')->with('success', 'Menu item deleted.');
    }
}
