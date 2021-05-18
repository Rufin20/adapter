<?php

// TITLE OF PAGE
$title = "List of available adapter";

// STYLING (light or dark)
$color	= "light";

// ADD SPECIFIC FILES YOU WANT TO IGNORE HERE
$ignore_file_list = array( ".htaccess", "Thumbs.db", ".DS_Store", "index.php", "index.html", ".git" );

// ADD SPECIFIC FILE EXTENSIONS YOU WANT TO IGNORE HERE, EXAMPLE: array('psd','jpg','jpeg')
$ignore_ext_list = array( );

// SORT BY
$sort_by = "name_asc"; // options: name_asc, name_desc, date_asc, date_desc

// ICON URL
$icon_url = "images/flat.png";

// TOGGLE SUB FOLDERS, SET TO false IF YOU WANT OFF
$toggle_sub_folders = true;

// FORCE DOWNLOAD ATTRIBUTE
$force_download = true;

// IGNORE EMPTY FOLDERS
$ignore_empty_folders = true;

// SET THE DOWNLOAD DIRECTORY
//$directory=dirname(__FILE__);
$directory='./';

//Enable Contact Form in the Footer
$display_footer_form = false;


// SET TITLE BASED ON FOLDER NAME, IF NOT SET ABOVE
if( !$title ) { $title = clean_title(basename(dirname(__FILE__))); }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="css/test.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Test</title>
    </head>
    <body>
        <section>
            <div id="information">
                <p id="p1"><i class="material-icons">&#xe2c8;</i> Adapter name </p>
                <p id="p2"><i class="material-icons">&#xe616;</i> Date </p>
                <p id="p3"><i class="material-icons">&#xe2c4;</i> Download </p>
            </div
        </section>
    <section>
<!--        <div id="termsandconditions">
            <div id="conditions">
                <div id="tit"><h1>Terms and Conditions <span class="close">&times;</span></h1></div>
                <p>Service The MH Adapter bundle contains several adapters to transform output files from the respective pipelines into single Molecular Health (MH) Guide/MH Guide Mendel/MH Guide BRCA VCF files. Consult the current version of the MH VCF Quick Guide for details about the MH VCF format. The MH VCF file is intended for transfer to MH Guide using the MH Order portal or the MH SFTP process, or a process that combines both MH Order portal and SFTP.</p>
                <div id="accept">
                    <button class="btn" onclick="download_file()">Accept and Download</button>
                    <button class="btn" id="cancel">Cancel</button>
                </div>
            </div>
        </div>-->
        <div class="container">
            <?php

                function display_block($items)
                {
                    foreach ($items as $item){

                        $file = file_get_contents('./files/'.$item);
                        $data = json_decode($file);
                        //echo isset($data['char_data']) ? count($data['char_data']) : 0;
                        $name = $data->name;
                        $version = $data->version;
                        $date = $data->date;
                        //$sad = explode('.', $item)[0];
                        //echo $sad;

                        echo '<div id="download">';
                        echo '<p id="left"><i class="material-icons">&#xe2c8;</i>'.$name.' '.$version.' <p>';
                        echo '<p id="middle">'.$date.' <p>';
                        //echo '<div style="display: none" id="name'.$item.'">'.$item.'</div> ';
                        echo '<p><button onclick="condition(\''.$item.'\')" class="btn" id="button"><i class="fa fa-download"></i>Download</button></p>';
                        echo '</div>';

                        echo '<div id="termsandconditions">';
                        echo '<div class="conditions" >';
                        //echo '<div id="'.$sad.'">'.$sad.'</div>';
                        echo '<div id="tit"><h1>Terms and Conditions <span class="close">&times;</span></h1></div>';
                        echo '<p>Service The MH Adapter bundle contains several adapters to transform output files from the respective pipelines into single Molecular Health (MH) Guide/MH Guide Mendel/MH Guide BRCA VCF files. Consult the current version of the MH VCF Quick Guide for details about the MH VCF format. The MH VCF file is intended for transfer to MH Guide using the MH Order portal or the MH SFTP process, or a process that combines both MH Order portal and SFTP.</p>';
                        echo '<div id="accept">
                              <a id="object" download><button class="btn" id="cancel1" >Accept and Download</button></a>
                              <button class="btn" id="cancel">Cancel</button>
                              </div>';
                        echo '</div>';
                        echo '</div>';

                    }
                }
 /*               function display_block($file, $item){

                    $data = json_decode($file);
                    //echo isset($data['char_data']) ? count($data['char_data']) : 0;
                    $name = $data->name;
                    $version = $data->version;
                    $date = $data->date;

                    $rtn =  "<div id=\"download\">\n";
                    $rtn .= "<p id=\"left\"><i class=\"material-icons\">&#xe2c8;</i>$name $version<p>\n";
                    $rtn .= "<p id=\"middle\"> $date<p>\n";
                    $rtn .= "<div id=\"item\" style='display: none'> $item </div> \n";
                    $rtn .= "<a href=\"files\"$item download><button onclick=\"condition()\" class=\"btn\" id=\"button\"><i class=\"fa fa-download\"></i>Download</button></a>\n";
                    $rtn .= "</div>";

                    $rtn .=  "<div id=\"termsandconditions\">\n";
                    $rtn .=  "<div id=\"conditions\">\n";
                    $rtn .=  "<div id=\"tit\"><h1>Terms and Conditions <span class=\"close\">&times;</span></h1></div>\n";
                    $rtn .= "<p>Service The MH Adapter bundle contains several adapters to transform output files from the respective pipelines into single Molecular Health (MH) Guide/MH Guide Mendel/MH Guide BRCA VCF files. Consult the current version of the MH VCF Quick Guide for details about the MH VCF format. The MH VCF file is intended for transfer to MH Guide using the MH Order portal or the MH SFTP process, or a process that combines both MH Order portal and SFTP.</p>";

                    $download_attr = " download='" . basename($item) . "'";
                    $rtn .= "<div id=\"accept\">
                              <a href=\"files\"$item class=\"files\"{$download_attr} ><button class=\"btn\" id=\"cancel1\">Accept and Download</button></a>
                              <button class=\"btn\" id=\"cancel\">Cancel</button>
                              </div>\n";
                    $rtn .= "</div>\n";
                    $rtn .= "</div>\n";

                    return  $rtn;

                };*/


/*                function build_block($items)
                {

                    foreach ($items as &$item) {

                        $file = file_get_contents('./files/' . $item);
                        echo display_block($file, $item);

                    };
                }*/

                $dir = "./files";
                $items = array_diff(scandir($dir), array('.', '..'));
                //build_block($items);
                echo display_block($items);
            ?>
        </div>
    </section>

    <script type="text/javascript">
        //Popup terms and conditions script
        const x = document.getElementById("termsandconditions");
        function condition(item)
        {
            x.style.display = "block";
            var obj = document.getElementById("object");
            obj.href = "./files/" + item;
        }
        const close = document.getElementsByClassName("close")[0];
        close.onclick = function () {
            x.style.display = "none";
        }
        const cancel = document.getElementById("cancel");
        cancel.onclick = function () {
            x.style.display = "none";
        }
        const cancel1 = document.getElementById("cancel1");
        cancel1.onclick = function () {
            x.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == x) {
                x.style.display = "none";
            }
        };

/*        function download_file(item){
            var url = "./files/" + item;
            var obj = document.getElementById('object');
            obj.href = './files/test.json';
            obj.download = '';
            //obj.setAttribute('href', './files/test.json');
            //obj.click();
        }*/
    </script>

    </body>
</html>
