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
        return view('admins.csvmails.csv-and-mail-sendings', compact('csvMails', 'ttl'));
    }

    public function csvUpload() {
        return view('admins.csvmails.csv-upload');
    }

    public function uploadCsv(Request $request) {
        $file = $request->file('csvFile');
    
        // Open the file for reading
        if (($handle = fopen($file->getPathname(), 'r')) !== false) {
            // Skip the first row if it's a header
            $header = fgetcsv($handle, 1000, ',');
    
            // Loop through each row
            while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                // Detect and convert encoding if necessary
                $row = array_map(function($field) {
                    // Detect encoding, fall back to Shift-JIS if detection fails
                    $encoding = mb_detect_encoding($field, ['UTF-8', 'SJIS', 'ISO-8859-1', 'EUC-JP'], true);
                    
                    if ($encoding !== 'UTF-8') {
                        return mb_convert_encoding($field, 'UTF-8', $encoding ?: 'SJIS');
                    }
                    return $field;
                }, $row);
    
                // Skip rows that don't have at least 2 fields (email must be present)
                if (count($row) < 2 || empty($row[1])) {
                    continue;
                }
    
                // Check if the email already exists and insert if it doesn't
                CsvMail::updateOrCreate(
                    ['email' => $row[1]], // Check if this email already exists
                    [
                        'company_name' => $row[0],
                        'name' => $row[2],
                        'group' => 'まだ設定されていません'
                    ]
                );
            }
    
            // Close the file
            fclose($handle);
        }
    
        Session::flash('success', 'CSV がインポートされ、データが正常に保存されました');
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

        return view('admins.csvmails.mail-sendings', compact('selectedMails'));
    }

    public function sendMailCsvMails(Request $request) {
        $selectedMails = explode(',', $request->selectedMails); // Convert the comma-separated string into an array
        $selectedEmails = CsvMail::whereIn('id', $selectedMails)->get();

        foreach ($selectedEmails as $selectedEmail) {
            Mail::to($selectedEmail->email)->send(new SendAdvertisementToCsvEmail($selectedEmail, $request->selectTemplate, $request->subject, $request->title, $request->body));
        }

        Session::flash('success', 'メールの送信に成功しました');
        return redirect()->route('admin.csv.and.mail.sendings');
    }
}
