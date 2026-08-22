namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;

class AdminController extends Controller
{
    public function dashboard()
    {
        $rooms = Room::count();
        $bookings = Booking::count();

        return view('admin.dashboard', compact('rooms','bookings'));
    }
}