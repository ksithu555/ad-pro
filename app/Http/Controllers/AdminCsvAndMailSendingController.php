<?php

namespace App\Http\Controllers;

use App\Jobs\SendCsvMailJob;
use App\Models\CsvMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Mail\SendAdvertisementToCsvEmail;

class AdminCsvAndMailSendingController extends Controller
{
    public function getCsvAndMailSendings(Request $request) {
        // $limit = 10;
        // $csvMails = CsvMail::paginate($limit);
        // $ttl = $csvMails->total();
        // $ttlpage = ceil($ttl / $limit);
        $search = $request->input('search');
        $csvMailsQuery = CsvMail::query();
        if ($search) {
            $csvMailsQuery->where(function($query) use ($search) {
                $query->where('company_name', 'like', "%{$search}%")
                      ->orWhere('industry', 'like', "%{$search}%");
            });
        }
        $csvMails = $csvMailsQuery->orderBy('created_at', 'desc')->get();
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
                    $encoding = mb_detect_encoding($field, ['UTF-8', 'SJIS', 'ISO-8859-1', 'EUC-JP', 'ISO-2022-JP'], true);
                    
                    if ($encoding !== 'UTF-8') {
                        return mb_convert_encoding($field, 'UTF-8', $encoding ?: 'SJIS');
                    }
                    return $field;
                }, $row);
    
                // Skip rows that don't have at least 2 fields (email must be present)
                if (count($row) < 2 || empty($row[10])) {
                    continue;
                }
    
                // Check if the email already exists and insert if it doesn't
                CsvMail::updateOrCreate(
                    ['email' => $row[10]], // Check if this email already exists
                    [
                        'company_name' => $row[0],
                        'postal_code' => $row[1],
                        'address' => $row[2],
                        'phone' => $row[3],
                        'fax' => $row[4],
                        'capital' => $row[5],
                        'number_of_employees' => $row[6],
                        'annual_turnover' => $row[7],
                        'listed' => $row[8],
                        'URL' => $row[9],
                        'established_date' => $row[11],
                        'industry' => $row[12],
                        'group' => CsvMail::where('email', $row[1])->exists() ? CsvMail::where('email', $row[1])->value('group') : 'まだ設定されていません'
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
        $selectedMails = CsvMail::whereIn('id', $checkedEmails)->orderBy('created_at', 'desc')->get();

        foreach ($selectedMails as $mail) {
            if (!filter_var($mail->email, FILTER_VALIDATE_EMAIL)) {
                Session::flash('error', '無効なメールアドレスがあります: ' . $mail->email); // Flash the error message in Japanese
                return redirect()->back(); // Redirect back if an invalid email is found
            }
        }

        return view('admins.csvmails.mail-sendings', compact('selectedMails'));
    }

    public function sendMailCsvMails(Request $request) {
        $selectedMailIds = explode(',', $request->selectedMails); // Convert the comma-separated string into an array
        $selectedEmails = CsvMail::whereIn('id', $selectedMailIds)->orderBy('created_at', 'desc')->get();
        
        foreach ($selectedEmails as $selectedEmail) {
            dispatch(new SendCsvMailJob(
                $selectedEmail,
                $request->selectTemplate,
                $request->subject,
                $request->title,
                $request->body
            ));
        }

        Session::flash('success', 'メールの送信に成功しました');
        return redirect()->route('admin.csv.and.mail.sendings');
    }

    public function resetMailsGroup(Request $request) {
        $selectedMailIds = explode(',', $request->checkedEmails); // Convert the comma-separated string into an array
        CsvMail::whereIn('id', $selectedMailIds)->update(['group' => 'まだ設定されていません']);

        Session::flash('success', 'グループのリセットに成功しました');
        return redirect()->route('admin.csv.and.mail.sendings');
    }

    public function deleteCsvMails(Request $request) {
        $selectedMailIds = explode(',', $request->checkedEmails); // Convert the comma-separated string into an array
        CsvMail::whereIn('id', $selectedMailIds)->delete();

        Session::flash('success', 'メールは正常に削除されました');
        return redirect()->route('admin.csv.and.mail.sendings');
    }

    public function showCsvMailDetail($id) {
        $csvMail = CsvMail::find($id);

        return view('admins.csvmails.csv-mail-detail', compact('csvMail'));
    }

    public function updateCsvMail(Request $request) {
        $updateData = [
            'company_name' => $request->companyName,
            'postal_code' => $request->postalCode,
            'address' => $request->address,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'capital' => $request->capital,
            'number_of_employees' => $request->numberOfEmployees,
            'annual_turnover' => $request->annualTurnover,
            'url' => $request->listed,
            'phone' => $request->url,
            'email' => $request->email,
            'established_date' => $request->establishedDate,
            'industry' => $request->industry,
            'group' => $request->group,
        ];


        CsvMail::where('id', $request->id)->update($updateData);
        Session::flash('success', 'CSV内容が正常に更新されました');
        return redirect()->route('admin.show.csv.mail.detail', $request->id);
    }
}
