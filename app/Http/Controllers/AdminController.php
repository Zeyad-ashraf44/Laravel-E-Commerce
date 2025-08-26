<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\MenuItem;
use App\Notifications\BookingStatusNotification;

class AdminController extends Controller
{
    // عرض المستخدمين
    public function viewUsers()
    {
        $users = User::where('is_admin', false)->get();

        return view('admin.users.index', compact('users'));
    }

    // عرض كل الحجوزات
    public function viewBookings()
    {
        $bookings = Booking::with('user')->orderBy('created_at', 'desc')->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    // قبول حجز
    public function approveBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'accepted';
        $booking->save();

        // إرسال notification للمستخدم
        $booking->user->notify(new BookingStatusNotification('accepted'));

        return redirect()->back()->with('success', 'Booking approved.');
    }

    // رفض حجز
    public function rejectBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'rejected';
        $booking->save();

        // إرسال notification للمستخدم
        $booking->user->notify(new BookingStatusNotification('rejected'));

        return redirect()->back()->with('error', 'Booking rejected.');
    }

    // عرض صفحة المنيو فقط للإدارة
    public function viewMenu()
    {
        $menuItems = MenuItem::all();
        return view('admin.menu.index', compact('menuItems'));
    }

    // الصفحة الرئيسية للوحة تحكم الأدمن (لو عايز تضيف داشبورد رئيسية)
   public function dashboard()
{
    return view('admin.dashboard');
}

}
