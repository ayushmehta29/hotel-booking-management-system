namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create($id)
    {
        $room = Room::findOrFail($id);
        return view('bookings.create', compact('room'));
    }

    public function store(Request $request)
    {
        Booking::create([
            'user_id' => auth()->id(),
            'room_id' => $request->room_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out
        ]);

        return redirect('/my-bookings');
    }

    public function myBookings()
    {
        $bookings = Booking::where('user_id', auth()->id())->get();
        return view('bookings.my', compact('bookings'));
    }
}