use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

Route::get('/', [RoomController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/book/{id}', [BookingController::class, 'create']);
    Route::post('/book', [BookingController::class, 'store']);
    Route::get('/my-bookings', [BookingController::class, 'myBookings']);
});

Route::get('/admin', [AdminController::class, 'dashboard']);