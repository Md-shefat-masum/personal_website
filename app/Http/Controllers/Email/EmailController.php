<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class EmailController extends Controller
{

    public $imap;
    public $total_email;

    public function __construct()
    {
        $this->imap = imap_open(
            '{mail.etek.com.bd:143/imap/notls}', //host
            'shefat@etek.com.bd', //username
            'SJR2LmNFaVuQ'
        );

        $this->total_email = imap_num_msg($this->imap);
    }

    public function total_email()
    {
        return $this->total_email;
    }

    public function list()
    {
        $page = request()->page;
        if (!$page) $page = 1;

        $per_page = 3;

        // $total_chunk = ceil($this->total_email / $per_page);

        $startPage = ($this->total_email - ($per_page * ($page - 1)));
        $startPage = $startPage - 2;
        $endPage = $startPage + 2;

        if ($startPage <= 0) $startPage = 1;
        if ($endPage <= 0) $endPage = 1;

        $range = $startPage . ":" . $endPage;

        // dd($range, $this->total_email);

        $emails = imap_fetch_overview($this->imap, $range, FT_UID);
        $emails = array_reverse($emails);

        $data = new LengthAwarePaginator($emails, $this->total_email, $per_page, $page, [
            "path" => url("/email/list"),
        ]);

        $pagination = $data->links()->render();
        return response()->json([
            "pagination" => $pagination,
            "data" => $data,
        ]);
    }

    public function read()
    {
        $id = request()->id;

        function getBody($uid, $imap)
        {
            $body = get_part($imap, $uid, "TEXT/HTML");
            // if HTML body is empty, try getting text body
            if ($body == "") {
                $body = get_part($imap, $uid, "TEXT/PLAIN");
            }
            return $body;
        }

        function get_part($imap, $uid, $mimetype, $structure = false, $partNumber = false)
        {
            if (!$structure) {
                $structure = imap_fetchstructure($imap, $uid, FT_UID);
            }
            if ($structure) {
                if ($mimetype == get_mime_type($structure)) {
                    if (!$partNumber) {
                        $partNumber = 1;
                    }
                    $text = imap_fetchbody($imap, $uid, $partNumber, FT_UID);
                    switch ($structure->encoding) {
                        case 3:
                            return imap_base64($text);
                        case 4:
                            return imap_qprint($text);
                        default:
                            return $text;
                    }
                }

                // multipart
                if ($structure->type == 1) {
                    foreach ($structure->parts as $index => $subStruct) {
                        $prefix = "";
                        if ($partNumber) {
                            $prefix = $partNumber . ".";
                        }
                        $data = get_part($imap, $uid, $mimetype, $subStruct, $prefix . ($index + 1));
                        if ($data) {
                            return $data;
                        }
                    }
                }
            }
            return false;
        }

        function get_mime_type($structure)
        {
            $primaryMimetype = ["TEXT", "MULTIPART", "MESSAGE", "APPLICATION", "AUDIO", "IMAGE", "VIDEO", "OTHER"];

            if ($structure->subtype) {
                return $primaryMimetype[(int)$structure->type] . "/" . $structure->subtype;
            }
            return "TEXT/PLAIN";
        }

        $content = getBody($id, $this->imap);
        return view('email.read',compact('content'));
    }

    public function email()
    {
        return view('email.all');
    }
}
