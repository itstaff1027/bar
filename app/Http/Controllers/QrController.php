<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
    public function generateQrCode()
    {
        // Data you want to encode in the QR code
        // $data = 'https://example.com';

        // // Generate the QR code as a PNG image
        // $qrCodeImage = QrCode::format('png')->size(300)->generate($data);

        // // Return the QR code image as a response
        // return Response::make($qrCodeImage, 200, [
        //     'Content-Type' => 'image/png',
        //     'Content-Disposition' => 'attachment; filename="qrcode.png"',
        // ]);
    }
}
