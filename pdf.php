<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pdf test</title>
  </head>
  <body>

    <form class="" action="" method="post">
      <button type="submit" name="button">get pdf</button>
    </form>

    <?php
      if (isset($_POST['button'])) {
        //////////////////////////////////////////////////////////////////////////////////////////////////////

require_once('tcpdf/tcpdf.php');

ob_start();

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 006');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 5);

// add a page
$pdf->AddPage();

// create some HTML content
$html = '
';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


// output some RTL HTML content
$html = '
<?php
$dbhServername = "localhost";
$dbhUsername = "root";
$dbhPassword = "";
$dbhName = "sattit_agent";
$conn = mysqli_connect($dbhServername, $dbhUsername, $dbhPassword, $dbhName);

$id = 9;

$sql = "SELECT * FROM agent_list WHERE id=$id;";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
        if( $result_check > 0 ){
          while ($row = mysqli_fetch_assoc($result)) {
              $signature = $row["signature"];
              $house = $row["present_house"];
              $road = $row["present_road"];
              $village = $row["present_village"];
              $post = $row["present_post"];
              $up = $row["present_up"];
              $dis = $row["present_dist"];
              $code = $row["present_post_code"];
              $date = "July 31, 2019";
          }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Confirmation  Letter</title>
    <!--     css    -->
    <!--font-fontawesome-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
/*            font-size: 10px;*/
        }


        .letter {
            /*            margin-bottom: -115px;*/
        }

        .page {
            width: 28.7cm;
            min-height: 29cm;
            padding-left: 2cm;
            padding-top: 0cm;
            padding-right: 2cm;
            font-size: 25px;
        }

        @page {
            size: A4 portrait;
            margin-left: 0.5cm;
            margin-top: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        .backgroundimage {
            position: relative;
            top: 250px;
        }

        .para1 {
            position: relative;
            top: 210px;
            padding-left: 75px !important;
            margin-top: -170px
        }

        .para {
            position: relative;
            top: 200px;
              margin-top: -230px;
            padding-left: 60px !important;
        }
    </style>
</head>

<body style="background-image: url(image/Letterhead.jpg);background-size:100%; width:100%;overflow-x:  hidden;; background-repeat: no-repeat; background-position: top">

    <section class="headerW">
        <div class="container-fluid">
            <div class="row pl-4 text-justify">

                <div class="backgroundimage">
                    <div class="letter page">
                        <p class="letter_3 mt-1 font-weight-bold"> <?php echo $date; ?></p> <br>
                        <h4 style="font-size: 24px;font-family: verdana;text-transform: uppercase;"> <?php echo $signature; ?></h4>
                        <P>Building/Road No: <?php echo $road; ?>, Village: <?php echo $village; ?>, <br>
                            Police Station: <?php echo $up; ?>, District: <?php echo $dis; ?>, Postal Code: <?php echo $code; ?>
                        </P> <br>
                        <p style="font-weight:bold; font-size:26px;"> Sub: Letter of Agent Confrimation.</p><br>

                        <p class="p-0 m-0"> Dear Sir, </p>
                        <p>We have received your application and would like to confirm that, you have been selected as the agent of our IT company. Now your agent position is in the basic label. We are offering you for selling our software and services. As we promised, you will get the commission and other facilities as per sell. <br><br>

                            The appointment is with effect from <?php echo $date; ?> to December 31, 2019. After that, shall assist the performance and increase the time period further. The next confirmation latter shall be renewed by the company. Please be prepared to take your responsibility and work on it.
                            <br>
                            <br>

                            Thank You and we look forward to being in business with you.
                            <br>
                            <br>
                            Your Sincerely, <br>
                            <img class="pb-5" src="image/vai%20sign.jpg" width="110" alt=""><br>
                        </p>
                    </div>
                </div>
                <div class="col-6 px-5 para1">
                    <p> <span style="font-weight: bold; font-size:25px;">MD ABDUS SAMAD</span> <br>
                        <span style="font-size: 23px;font-family: verdana;">Chairman <br>
                        <span class="font-weight-bold"> SATT IT</span> </span>
                    </p>
                </div>
                <div class="col-6 px-5 para">
                    <img src="image/Sill.png" width="150" alt="">
                </div>
            </div>
        </div>
    </section>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

';

$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
      }
     ?>

  </body>
</html>
