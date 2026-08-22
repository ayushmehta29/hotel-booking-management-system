namespace App\Http\Controllers;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::where('available',1)->get();
        return view('rooms.index', compact('rooms'));
    }
}