<?php

require 'vendor/autoload.php'; // Include Composer's autoloader

use Mpdf\Mpdf;

$mpdf = new Mpdf([
    'mode' => 'utf-8', 
    'format' => 'A4',
    'margin_left' => 0,
    'margin_right' => 0,
    'margin_top' => 55.9,
    'margin_bottom' => 0,
    'margin_header' => 0,
    'margin_footer' => 0,
    'autoPageBreak' => true,
    'allow_html_table_breaks' => true,
    'setAutoBottomMargin' => 'stretch',
    'page_break_margin' => 0,
    'auto_page_break' => true,
    'defaultheaderline' => 0,
    'defaultfooterline' => 0,
]);
// $mpdf = new Mpdf();

// Add some HTML content with a table
$html = '<style>
    *{
        box-sizing: border-box;
    }
  </style>
<html>

<body style="margin: 0px; padding: 0px;">
      <table style="box-sizing: border-box; border-collapse: collapse;width: 100%; font-size: 18px; font-weight: 400; line-height: normal; font-family: Arial, Helvetica, sans-serif;" border="0">
        <tr>
            <td style="padding: 50px 0 50px 30px;">
                <table style="width: 100%;border-collapse: collapse;background-color: #FDF5F2;">
                    <tr>
                        <td style="padding: 0;"><img src="images/top-left-shape.jpg" height="35" alt="shape"></td>
                        <td style="padding: 0;"></td>
                        <td style="padding: 0;text-align: right;"><img src="images/top-right-shape.jpg" height="35" alt="shape"></td>
                    </tr>
                    <tr>
                        <td style="padding: 0 30px 24px 30px;font-weight: bold;">Prescribing Doctor</td>
                        <td style="padding: 0 0 24px;">:</td>
                        <td style="padding: 0 30px 24px 30px;">Dr. Test Doctor</td>
                    </tr>
                    <tr>
                        <td style="padding: 0 30px 24px 30px;font-weight: bold;">Registration number</td>
                        <td style="padding: 0 0 24px;">:</td>
                        <td style="padding: 0 30px 24px 30px;">1</td>
                    </tr>
                    <tr>
                        <td style="padding: 0 30px 24px 30px;font-weight: bold;">Doctor Country</td>
                        <td style="padding: 0 0 24px;">:</td>
                        <td style="padding: 0 30px 24px 30px;">Australia</td>
                    </tr>
                    <tr>
                        <td style="padding: 0 30px 0 30px;font-weight: bold;">Date</td>
                        <td style="padding: 0;">:</td>
                        <td style="padding: 0 30px 0 30px;">2024-09-09 </td>
                    </tr>
                    <tr>
                        <td style="padding: 0;"><img src="images/left-bottom-shape.jpg" height="35" alt="shape"></td>
                        <td style="padding: 0;"></td>
                        <td style="padding: 0;text-align: right;"><img src="images/right-bottom-shape.jpg" height="35" alt="shape"></td>
                    </tr>
                </table>
            </td>
            <td style="padding: 50px 30px ;width: 50%;">
                <table style="width: 100%;border-collapse: collapse;">
                    <tr>
                        <td style="color: #008000;padding-bottom: 20px;font-weight: bold;width: 70%;">Verify & Cancel Prescription</td>
                        <td style="padding-bottom: 20px;padding-left: 0px;padding-right: 10px;">:</td>
                        <td style="padding-bottom: 20px;"><a href="javascript:;" style="color: #F16232;">www.mobidoctor.eu/verify</a></td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 25px;font-weight: bold;width: 70%;">Prescription code</td>
                        <td style="padding-bottom: 25px;padding-left: 0px;padding-right: 10px;">:</td>
                        <td style="padding-bottom: 25px;">QOYVbaDT34Zp</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="padding-bottom: 20px; line-height: 25px;">Check the prescription’s authenticity,  validate the doctor, then mark it as dispensed</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table>
                                <tr>
                                    <td style="padding: 10px 0px; float:left; text-align:center;text-decoration: none; border-radius: 9px;background-color: #008000;color: #fff; box-shadow: none; border: none; font-size: 18px;">
                                        <a href="https://www.google.com/" style="text-decoration: none;color: #fff;">&nbsp;&nbsp;&nbsp;&nbsp; Press To Verify &nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    </td>
                                <tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="border-top: 2px solid #00AB84;padding-top: 35px;padding-bottom: 50px;">
                <table style="width: 100%;border-collapse: collapse;">
                    <tr>
                        <td style="padding: 0 10px 20px 30px;font-weight: bold;width: 180px;">Patient Name</td>
                        <td style="padding: 0 0 20px;width: 10px;">:</td>
                        <td style="padding: 0 30px 20px 20px;">Test Patient</td>
                    </tr>
                    <tr>
                        <td style="padding: 0 10px 20px 30px;font-weight: bold;width: 180px;">Address</td>
                        <td style="padding: 0 0 20px;width: 10px;">:</td>
                        <td style="padding: 0 30px 20px 20px;">ABC Broward Traffic School, Florida 7, Margate, FL, USA</td>
                    </tr>
                    <tr>
                        <td style="padding: 0 10px 0 30px;font-weight: bold;width: 180px;">Date of Birth</td>
                        <td style="padding: 0;width: 10px;">:</td>
                        <td style="padding: 0 30px 0 20px;">1930-12-25</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 0 0 20px 30px;">[Medicine 2,2024-09-07,1-0-1 Frequency, 1 Use]</td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 0 0 20px 30px;">[Medicine 1,2024-09-01,1-1-1 Frequency, 1-1 Use]</td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 0 0 20px 30px;">[Medicine 1,2024-09-01,1-1-1 Frequency, 1-1 Use]</td>
        </tr>
        <tr>
            <td colspan="2" style="border-top: 2px solid #00AB84;padding-top: 35px;padding-bottom: 50px;">
                <table style="width: 100%;border-collapse: collapse;">
                    <tr>
                        <td style="padding: 0 10px 20px 30px;font-weight: bold;width: 180px;">Patient Name</td>
                        <td style="padding: 0 0 20px;width: 10px;">:</td>
                        <td style="padding: 0 30px 20px 20px;">Test Patient</td>
                    </tr>
                    <tr>
                        <td style="padding: 0 10px 20px 30px;font-weight: bold;width: 180px;">Address</td>
                        <td style="padding: 0 0 20px;width: 10px;">:</td>
                        <td style="padding: 0 30px 20px 20px;">ABC Broward Traffic School, Florida 7, Margate, FL, USA</td>
                    </tr>
                    <tr>
                        <td style="padding: 0 10px 0 30px;font-weight: bold;width: 180px;">Date of Birth</td>
                        <td style="padding: 0;width: 10px;">:</td>
                        <td style="padding: 0 30px 0 20px;">1930-12-25</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 0 0 20px 30px;">[Medicine 2,2024-09-07,1-0-1 Frequency, 1 Use]</td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 0 0 20px 30px;">[Medicine 1,2024-09-01,1-1-1 Frequency, 1-1 Use]</td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 0 0 20px 30px;">[Medicine 1,2024-09-01,1-1-1 Frequency, 1-1 Use]</td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 0 0 20px 30px;">[Medicine 1,2024-09-01,1-1-1 Frequency, 1-1 Use]</td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 0 0 20px 30px;">[Medicine 1,2024-09-01,1-1-1 Frequency, 1-1 Use]</td>
        </tr>
      </table>
</body>
</html>';

// Define the footer  content
$footerHtml = '<table cellspacing="0" cellpadding="0" style="box-sizing: border-box; box-shadow: none;  border-spacing: 0px; border-collapse: collapse; width: 100%; font-size: 14px; font-weight: 400; line-height: normal; font-family: Arial, Helvetica, sans-serif; border: 0px;" border="0">
            <tbody>
            <tr>
                <td colspan="2" style="text-align: right;padding: 0px 26px 10px;border-bottom: 1px solid #00AB84;border-top: none;"><img src="images/sign.png" width="150" alt="sign"></td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0px 26px 20px;border-top: 1px solid #00AB84;">
                    <table style="width: 100%;border-collapse: collapse;">
                            <tr>
                                <td style="padding-top: 30px;font-weight: bold;">
                                    Legal Note :
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 20px;  line-height: 20px;">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; padding: 14px; background-color: #326FA8; color: #fff; font-size: 16px; line-height: 25px;">
                                    Mobidoctor, Tower Street, Tower Business Centre, Swatar, BKR 4013, Malta
                                    <br>
                                    00356 99761985, mailto:help@mobidoctor.eu
                                </td>
                            </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>';

// Define the header content based on the footer style
$headerHtml = '<table style="box-sizing: border-box;  border-spacing: 0px; border-collapse: collapse;width: 100%; font-size: 18px; font-weight: 400; line-height: normal; font-family: Arial, Helvetica, sans-serif;" border="0">
                <tbody>
                    <tr>
                        <td colspan="2" style="background-color: #E8F8ED;height: 30px;"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;padding-left: 0;" width="300"><img src="images/logo.jpg" width="270" alt="Mobidoctor" style="margin-top: -3px;"></td>
                        <td style="padding-right: 26px;padding-top: 15px;">
                            <table style="width: 100%;border-collapse: collapse;">
                                <tr>
                                    <td style="width: 80%;padding-right: 10px;">
                                        <table style="width: 100%;border-collapse: collapse;">
                                            <tr>
                                                <td style="padding: 0px 0px 10px 0px;text-align: right;">EU/EEA</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0px 0px 10px 0px;text-align: right;">Crossborder Healthcare</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0px 0px 10px 0px;text-align: right;">Private non-reimbursable prescription</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: right;">Legislation: <a href="#" style="color: #F16232;"><strong>View Detail</strong></a></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="text-align: right;width: 130px;"><img src="images/qr-code.png" width="130" height="130" alt="Mobidoctor"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border-bottom: 2px solid #00AB84;padding-top: 30px;padding-bottom: 0;">
                            <table style="width: 100%;border-collapse: collapse;" border="0">
                                <tr>
                                    <td style="width: 15%;text-align: right;border: none;padding: 0;"><img src="images/left-shape.jpg" height="55" alt="shape" style="margin-right: -15px;"></td>
                                    <td style="width: 70%;background-color: #F5F5F5;border: none;text-align: center;padding: 10px;">Single-use prescription, valid for maximum one month from the prescription date</td>
                                    <td style="width: 15%;border: none;padding: 0;"><img src="images/right-shape.jpg" height="55" alt="shape" style="margin-left: -15px;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>';

// Set the header
$mpdf->SetHTMLHeader($headerHtml);

// Set the footer
$mpdf->SetFooter($footerHtml);

// $html = "<h1>Hello World</h1>";
//  echo $html;
//  die;
// $mpdf = new Mpdf(['debug' => true]);

// Write HTML to the PDF
$mpdf->WriteHTML($html);

// Output the PDF directly to the browser
$mpdf->Output('example.pdf', 'I');
