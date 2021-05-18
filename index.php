<?php

	/*// TITLE OF PAGE
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
	$icon_url = "icons/flat.png";
	
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
if( !$title ) { $title = clean_title(basename(dirname(__FILE__))); }*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Molecular Health GmbH : MH Guide Download Area</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="images/favicon.png" rel="icon">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/adapterStyle.css" rel="stylesheet">

    <!-- Vendor JS Files -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/venobox/venobox.min.js"></script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!-- <h1 class="logo mr-auto"><a href="index.html">Medilab</a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.php" class="logo mr-auto"><img src="images/logo.png" alt="" class="img-fluid"></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class="drop-down"><a target="_blank" href="https://www.molecularhealth.com/en/who-we-help/">Who
                            we help</a>
                        <ul>
                            <li><a target="_blank" href="https://www.molecularhealth.com/en/patients/">Patients</a></li>
                            <li><a target="_blank" href="https://www.molecularhealth.com/en/physicians/">Physicians</a>
                            </li>
                            <li><a target="_blank" href="https://www.molecularhealth.com/en/hospitals/">Hospitals</a>
                            </li>
                            <li><a target="_blank" href="https://www.molecularhealth.com/en/labs/">Labs</a></li>
                            <li><a target="_blank" href="https://www.molecularhealth.com/en/pharma-and-biotech/">Pharma
                                    & Biotech</a>
                            </li>
                            <li><a target="_blank" href="https://www.molecularhealth.com/en/cope-for-companies/">COPE
                                    for Companies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="drop-down"><a target="_blank"
                            href="https://www.molecularhealth.com/en/products/">Products</a>
                        <ul>
                            <li><a target="_blank" href="https://www.molecularhealth.com/en/mh-predict/">MH Predict</a>
                            </li>
                            <li><a target="_blank" href="https://www.molecularhealth.com/en/mh-guide/">MH Guide</a></li>
                            <li><a target="_blank" href="https://www.molecularhealth.com/en/mh-mendel/">MH Mendel</a>
                            </li>
                            <li><a target="_blank" href="https://www.molecularhealth.com/en/mh-brca/">MH BRCA</a></li>
                        </ul>
                    </li>
                    <li><a target="_blank" href="https://www.molecularhealth.com/en/technology/">Technology</a></li>
                    <li><a target="_blank" href="https://www.molecularhealth.com/en/quality-and-security/">Quality &
                            Security</a></li>
                    <li><a target="_blank" href="https://www.molecularhealth.com/en/about-us/">About us</a></li>
                    <li class="drop-down"><a target="_blank"
                            href="https://www.molecularhealth.com/en/contact-us/">Contact us</a>
                        <ul>
                            <li><a target="_blank" href="https://www.molecularhealth.com/de/impressum/">Impressum</a>
                            </li>
                            <li><a target="_blank" href="https://www.molecularhealth.com/de/datenschutz/">Data
                                    privacy</a></li>
                            <li><a target="_blank" href="https://www.molecularhealth.com/de/nutzungsbedingungen/">Terms
                                    of use</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

            <a target="_blank" href="https://eu.mh.guide/reporter/" class="appointment-btn scrollto">Client login</a>
            <a target="_blank" href="https://eu.mh.guide/orderportal/" class="appointment-btn scrollto">Order Portal</a>

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Heading Content ======= -->
        <section id="head_content" class="head_content">
            <div class="container" style="margin-top: 80px">
                <div class="content" >
                    <div class="text-center">
                        <h1><span>MH Guide Adapter Download</span></h1>
                    </div>
                    <h2>
                        Download adapters for converting VCF files from your genomic pipeline to MH VCF format
                    </h2>
                </div>
                <div id="information">
                    <p id="p1"><i class="material-icons">&#xe2c8;</i> Adapter name </p>
                    <p id="p2"><i class="material-icons">&#xe616;</i> Date </p>
                    <p id="p3"><i class="material-icons">&#xe2c4;</i> Download </p>
                </div>
            </div>
        </section><!-- End Heading Content Section -->
        <!-- ======= Download Section ======= -->
        <section id="services" class="services">
            <div class="container" >
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
                        echo '<p><button onclick="condition(\''.$item.'\', \''.$data->name.'\')" class="btn" id="button"><i class="fa fa-download"></i>Download</button></p>';
                        echo '</div>';

                        echo '<div id="termsandconditions">';
                        echo '<div class="conditions" >';
                        //echo '<div id="'.$sad.'">'.$sad.'</div>';
                        echo '<div id="tit"><h1>Terms and Conditions <span class="close">&times;</span></h1></div>';
                        echo '<p>Service The MH Adapter bundle contains several adapters to transform output files from the respective pipelines into single Molecular Health (MH) Guide/MH Guide Mendel/MH Guide BRCA VCF files. Consult the current version of the MH VCF Quick Guide for details about the MH VCF format. The MH VCF file is intended for transfer to MH Guide using the MH Order portal or the MH SFTP process, or a process that combines both MH Order portal and SFTP.</p>';
                        echo '<div id="accept">
                              <a id="object" ><button class="btn" id="cancel1" >Accept and Download</button></a>
                              <button class="btn" id="cancel">Cancel</button>
                              </div>';
                        echo '</div>';
                        echo '</div>';

                    }
                }
                $dir = "./files";
                $items = array_diff(scandir($dir), array('.', '..'));
                echo display_block($items);
                ?>
            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
            <div class="row" ">
                <div class="mr-md-auto text-center text-md-left"
                    style=" padding: 10px 10px 10px 10px;">
                    <div class="credits">
                        <img width="200" height="40"
                            src="https://www.molecularhealth.com/wp-content/uploads/2019/08/mh_logo_footer.png"
                            alt="Molecular Health Logo">
                        <div class="copyright">
                            <span style="color: #ffffff;">&copy; 2021 Molecular Health GmbH</span>
                        </div>
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0" style="padding: 10px 60px 10px 10px;">
                    <p>
                        <a class="facebook" href="https://de-de.facebook.com/MolecularHealth/" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="linkedin" href="https://www.linkedin.com/company/molecularhealth/" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a class="twitter" href="https://twitter.com/MolecularHealth" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="xing" href="https://www.xing.com/companies/molecularhealthgmbh" target="_blank">
                            <i class="fa fa-xing"></i>
                        </a>
                        <a class="youtube" href="https://www.youtube.com/channel/UCsFKoyv3pEnWBgC1O2Gp__w"
                            target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        //Popup terms and conditions script
        const x = document.getElementById("termsandconditions");
        function condition(item, name)
        {
            x.style.display = "block";
            var obj = document.getElementById("object");
            obj.href = "./files/" + item;
            obj.download = name;
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
    </script>

</body>

</html>