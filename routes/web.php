<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/menu', [MenuItemController::class, 'index'])->name('menu');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

/*
|--------------------------------------------------------------------------
| Protected User Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {



    
    // Book a table
     Route::get('/book-table', [BookingController::class, 'create'])->name('book.create');

      Route::post('/book-table', [BookingController::class, 'store'])->name('book.store');

   

    // My Bookings
    Route::get('/my-bookings', [BookingController::class, 'myBookings'])->name('bookings.my');



    
    //contact us
   Route::get('/contact', function () {
    if (Auth::check() && Auth::user()->is_admin) {
        // لو المستخدم مسجل دخول وهو أدمن
        return redirect()->route('admin.contacts.index');
    }

    // لو مش أدمن أو مش مسجل دخول
    return redirect()->route('contact.form');
})->name('contact');

// دي صفحة الفورم العادية
Route::get('/contact/form', [ContactController::class, 'showForm'])->name('contact.form');

// لما اليوزر يبعد الرسالة
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// صفحة الأدمن اللي بيشوف فيها الرسائل
Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');



    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

/*
|--------------------------------------------------------------------------
| Admin Routes (كل الأدمن هنا)
|--------------------------------------------------------------------------
*/


Route::middleware(['auth'])->prefix('admin')->group(function () {
    

    // Admin Dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

 Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');


    // Users Management
    Route::get('/users', [AdminController::class, 'viewUsers'])->name('admin.users');

    // Bookings Management
    Route::get('/bookings', [AdminController::class, 'viewBookings'])->name('admin.bookings');
    Route::post('/bookings/{id}/accept', [AdminController::class, 'approveBooking'])->name('admin.bookings.accept');
    Route::post('/bookings/{id}/reject', [AdminController::class, 'rejectBooking'])->name('admin.bookings.reject');

    // Menu Management (view + crud)
     Route::get('/menu', [MenuItemController::class, 'adminIndex'])->name('admin.menu');
    Route::post('/menu', [MenuItemController::class, 'store'])->name('admin.menu.store');
    Route::put('/menu/{id}', [MenuItemController::class, 'update'])->name('admin.menu.update');
    Route::delete('/menu/{id}', [MenuItemController::class, 'destroy'])->name('admin.menu.destroy');
});

