use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Retrieve student id, action, and message from the form submission
        $studentId = $request->input('student_id');
        $action = $request->input('action');
        $message = $request->input('message');

        // Here you can write code to send a message to the applicant's dashboard
        // For example, you can update a field in the database indicating the action taken by the admin
        // For simplicity, I'll just print the message for now
        echo $message;

        // Redirect back to the applicant's dashboard
        return redirect('/applicant/dashboard')->with('message', 'Message sent successfully!');
    }
}
