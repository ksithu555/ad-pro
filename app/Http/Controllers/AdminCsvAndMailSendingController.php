<?php

namespace App\Http\Controllers;

use App\Models\CsvMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Mail\SendAdvertisementToCsvEmail;

class AdminCsvAndMailSendingController extends Controller
{
    public function getCsvAndMailSendings() {
        // $limit = 10;
        // $csvMails = CsvMail::paginate($limit);
        // $ttl = $csvMails->total();
        // $ttlpage = ceil($ttl / $limit);
        $csvMails = CsvMail::all();
        $ttl = $csvMails->count();
        return view('admins.csv-and-mail-sendings', compact('csvMails', 'ttl'));
    }

    public function csvUpload() {
        return view('admins.csv-upload');
    }

    public function uploadCsv(Request $request) {
        $file = $request->file('csvFile');

        // Open the file for reading
        if (($handle = fopen($file->getPathname(), 'r')) !== false) {
            // Skip the first row if it's a header
            $header = fgetcsv($handle, 1000, ','); // Assuming the delimiter is a comma (,)

            // Loop through each row
            while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                // Save the data to the mail_lists table
                CsvMail::create([
                    'company_name' => $row[0],
                    'email' => $row[1],
                    'name' => $row[2],
                    'group' => 'まだ設定されていません'
                ]);
            }

            // Close the file
            fclose($handle);
        }

        Session::flash('success', 'CSV がアップロードされ、データが正常に保存されました');
        return redirect()->route('admin.csv.and.mail.sendings');
    }

    public function setMailsGroup(Request $request) {
        $selectedMails = $request->input('check');

        CsvMail::whereIn('id', $selectedMails)->update(['group' => $request->groupName]);

        Session::flash('success', 'グループの設定に成功しました');
        return redirect()->route('admin.csv.and.mail.sendings');
    }

    public function sendCsvMails(Request $request) {
        $checkedEmails = explode(',', $request->checkedEmails); // Convert the comma-separated string into an array
        $selectedMails = CsvMail::whereIn('id', $checkedEmails)->get();

        return view('admins.mail-sendings', compact('selectedMails'));
    }

    public function sendMailCsvMails(Request $request) {
        $selectedMails = explode(',', $request->selectedMails); // Convert the comma-separated string into an array
        $selectedEmails = CsvMail::whereIn('id', $selectedMails)->get();

        foreach ($selectedEmails as $selectedEmail) {
            Mail::to($selectedEmail->email)->send(new SendAdvertisementToCsvEmail($request->selectTemplate, $request->subject, $request->body));
        }

        Session::flash('success', 'メールの送信に成功しました');
        return redirect()->route('admin.csv.and.mail.sendings');
    }
}
