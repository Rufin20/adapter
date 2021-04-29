<?php

	// TITLE OF PAGE
	$title = "List of available adapter";
	
	// STYLING (light or dark)
	$color	= "light";
	
	// ADD SPECIFIC FILES YOU WANT TO IGNORE HERE
	$ignore_file_list = array( ".htaccess", "Thumbs.db", ".DS_Store", "index.php", "index.html" );
	
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
        <section id="teaser" class="teaser">
            <div class="container" style="margin: auto;">
                <div class="row">
                    <div class="col-lg col-md-6 align-items-stretch">
                        <div class="content">
                        <div class="text-center">
                            <h3><span>MH Guide Download Center</span></h3>
                        </div>
                            <p>
                                Here we need a good text :-)
                            </p>
                            <div class="text-center">
                              <!--  <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Heading Content Section -->
        <!-- ======= Download Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Downloads</h2>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <?php

                        function clean_title($title)
                        {
                            return ucwords( str_replace( array("-", "_"), " ", $title) );
                        }

                        function ext($filename) 
                        {
                            return substr( strrchr( $filename,'.' ),1 );
                        }

                        function display_size($bytes, $precision = 2) 
                        {
                            $units = array('B', 'KB', 'MB', 'GB', 'TB');
                            $bytes = max($bytes, 0); 
                            $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
                            $pow = min($pow, count($units) - 1); 
                            $bytes /= (1 << (10 * $pow)); 
                            return round($bytes, $precision) . '<span class="fs-0-8 bold">' . $units[$pow] . "</span>";
                        }

                        function count_dir_files( $dir)
                        {
                            $fi = new FilesystemIterator(__DIR__ . "/" . $dir, FilesystemIterator::SKIP_DOTS);
                            return iterator_count($fi);
                        }

                        function get_directory_size($path)
                        {
                            $bytestotal = 0;
                            $path = realpath($path);
                            if($path!==false && $path!='' && file_exists($path))
                            {
                                foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS)) as $object)
                                {
                                    $bytestotal += $object->getSize();
                                }
                            }
                            
                            return display_size($bytestotal);
                        }


                        // SHOW THE MEDIA BLOCK
                        function display_block( $file )
                        {
                            global $ignore_file_list, $ignore_ext_list, $force_download;
                            
                            $file_ext = ext($file);
                            if( !$file_ext AND is_dir($file)) $file_ext = "dir";
                            if(in_array($file, $ignore_file_list)) return;
                            if(in_array($file_ext, $ignore_ext_list)) return;
                            
                            $download_att = ($force_download AND $file_ext != "dir" ) ? " download='" . basename($file) . "'" : "";
                            $rtn = "<div class=\"block\">\n";
                            $rtn .= "<a href=\"$file\" class=\"$file_ext\"{$download_att}>\n";
                            $rtn .= "	<div class=\"img $file_ext\"></div>\n";
                            $rtn .= "	<div class=\"name\">\n";                           
                            if ($file_ext === "dir") 
                            {
                                $rtn .= "		<div class=\"file fs-1-2 bold\">" . basename($file) . "</div>\n";
                                $rtn .= "		<div class=\"data upper size fs-0-7\"><span class=\"bold\">" . count_dir_files($file) . "</span> files</div>\n";
                                $rtn .= "		<div class=\"data upper size fs-0-7\"><span class=\"bold\">Size:</span> " . get_directory_size($file) . "</div>\n";
                                
                            }
                            else
                            {
                                $rtn .= "		<div class=\"file fs-1-2 bold\">" . basename($file) . "</div>\n";
                                $rtn .= "		<div class=\"data upper size fs-0-7\"><span class=\"bold\">Size:</span> " . display_size(filesize($file)) . "</div>\n";
                                $rtn .= "		<div class=\"data upper modified fs-0-7\"><span class=\"bold\">Last modified:</span> " .  date("D. F jS, Y - h:ia", filemtime($file)) . "</div>\n";	
                            }

                            $rtn .= "	</div>\n";
                            $rtn .= "	</a>\n";
                            $rtn .= "</div> <!-- END BLOCK DIV -->\n";
                            return $rtn;
                        }


                        // RECURSIVE FUNCTION TO BUILD THE BLOCKS
                        function build_blocks( $items, $folder )
                        {
                            global $ignore_file_list, $ignore_ext_list, $sort_by, $toggle_sub_folders, $ignore_empty_folders;
                            
                            $objects = array();
                            $objects['directories'] = array();
                            $objects['files'] = array();
                            
                            foreach($items as $c => $item)
                            {
                                if( $item == ".." OR $item == ".") continue;
                            
                                // IGNORE FILE
                                if(in_array($item, $ignore_file_list)) { continue; }
                            
                                if( $folder && $item )
                                {
                                    $item = "$folder/$item";
                                }

                                $file_ext = ext($item);
                                
                                // IGNORE EXT
                                if(in_array($file_ext, $ignore_ext_list)) { continue; }
                                
                                // DIRECTORIES
                                if( is_dir($item) ) 
                                {
                                    $objects['directories'][] = $item; 
                                    continue;
                                }
                                
                                // FILE DATE
                                $file_time = date("U", filemtime($item));
                                
                                // FILES
                                if( $item )
                                {
                                    $objects['files'][$file_time . "-" . $item] = $item;
                                }
                            }
                            
                            foreach($objects['directories'] as $c => $file)
                            {
                                $sub_items = (array) scandir( $file );
                                
                                if( $ignore_empty_folders )
                                {
                                    $has_sub_items = false;
                                    foreach( $sub_items as $sub_item )
                                    {
                                        $sub_fileExt = ext( $sub_item );
                                        if( $sub_item == ".." OR $sub_item == ".") continue;
                                        if(in_array($sub_item, $ignore_file_list)) continue;
                                        if(in_array($sub_fileExt, $ignore_ext_list)) continue;
                                    
                                        $has_sub_items = true;
                                        break;	
                                    }
                                    
                                    if( $has_sub_items ) echo display_block( $file );
                                }
                                else
                                {
                                    echo display_block( $file );
                                }
                                
                                if( $toggle_sub_folders )
                                {
                                    if( $sub_items )
                                    {
                                        echo "<div class='sub' data-folder=\"$file\">";
                                        build_blocks( $sub_items, $file );
                                        echo "</div>";
                                    }
                                }
                            }
                            
                            // SORT BEFORE LOOP
                            if( $sort_by == "date_asc" ) { ksort($objects['files']); }
                            elseif( $sort_by == "date_desc" ) { krsort($objects['files']); }
                            elseif( $sort_by == "name_asc" ) { natsort($objects['files']); }
                            elseif( $sort_by == "name_desc" ) { arsort($objects['files']); }
                            
                            foreach($objects['files'] as $t => $file)
                            {
                                $fileExt = ext($file);
                                if(in_array($file, $ignore_file_list)) { continue; }
                                if(in_array($fileExt, $ignore_ext_list)) { continue; }
                                echo display_block( $file );
                            }
                        }

                        // GET THE BLOCKS STARTED, FALSE TO INDICATE MAIN FOLDER
                        $items = scandir($directory);
                        build_blocks( $items, false );
                        ?>

                        <?php if($toggle_sub_folders) { ?>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $("a.dir").click(function (e) {
                                    $(this).toggleClass('open');
                                    $('.sub[data-folder="' + $(this).attr('href') + '"]').slideToggle();
                                    e.preventDefault();
                                });
                            });
                        </script>
                        <?php } ?>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <?php
            if($display_footer_form == true)
            {
                echo "<div class=\"footer-top\">\n";
                echo "            <div class=\"container\">\n";
                echo "                <div class=\"row\">\n";
                echo "                    <div class=\"col-lg-4 col-md-6 footer-contact\">\n";
                echo "                        <p>\n";
                echo "                            <h3><span style=\"color: #ffffff;\"><strong>Let&#8217;s talk about how our technology can work\n";
                echo "                                        for you</strong></span></h3>\n";
                echo "                            <p><span style=\"color: #ffffff;\">To find out more, you can call our customer care team or\n";
                echo "                                    help desk or send us an e-mail.\n";
                echo "                                    We would be delighted to provide you with more information or answer your\n";
                echo "                                    questions.</span></p>\n";
                echo "                            <img src=\"https://www.molecularhealth.com/wp-content/uploads/2019/04/line.png\" alt=\"\"\n";
                echo "                                width=\"109\" height=\"11\">\n";
                echo "                            <br /><p><span style=\"color: #ffffff;\">EU: +49 6221 43851-150<br />E-Mail:\n";
                echo "                                CustomerCareEU@molecularhealth.com</span>\n";
                echo "                        </p>\n";
                echo "                    </div>\n";
                echo "                    <div class=\"col-lg-auto col-md-auto\">\n";
                echo "                        <p>&nbsp;</p>\n";
                echo "                    </div>\n";
                echo "                    <div class=\"col col-md-6\">\n";
                echo "                        <form method=\"post\" name=\"New Form\">\n";
                echo "                            <div class=\"form-group\">\n";
                echo "                                <input class=\"form-control\" type=\"text\" name=\"form-field-name\" id=\"form-field-name\"\n";
                echo "                                    placeholder=\"Name\">\n";
                echo "                            </div>\n";
                echo "                            <div class=\"form-group\">\n";
                echo "                                <input class=\"form-control\" type=\"text\" name=\"form-field-field-surname\"\n";
                echo "                                    id=\"form-field-field-surname\" placeholder=\"Surname\">\n";
                echo "                            </div>\n";
                echo "                            <div class=\"form-group\">\n";
                echo "                                <input class=\"form-control\" type=\"email\" name=\"form-field-email\" id=\"form-field-email\"\n";
                echo "                                    placeholder=\"E-mail\" required=\"required\" aria-required=\"true\">\n";
                echo "                            </div>\n";
                echo "                            <div class=\"form-group\">\n";
                echo "                                <textarea class=\"form-control\" name=\"form-field-message\" id=\"form-field-message\"\n";
                echo "                                    rows=\"6\" placeholder=\"Your Message\"></textarea>\n";
                echo "                            </div>\n";
                echo "                            <div class=\"form-group form-check\">\n";
                echo "                                <input class=\"form-check-input\" type=\"checkbox\"\n";
                echo "                                    value=\"I agree that my name, email address, and any other information I provide, can be transferred to Molecular Health GmbH and processed there for the purpose of answering my request. I have read the &lt;a href=&quot;https://www.molecularhealth.com/privacy-policy/&quot; style=&quot;color:#fff; text-decoration: underline;&quot;&gt;privacy policy&lt;/a&gt; and hereby agree that my personal data may be processed as described and stored for no longer than 90 days. I can revoke this agreement at any time.\"\n";
                echo "                                    id=\"form-field-field_2-0\" name=\"form_fields[field_2]\">\n";
                echo "                                <label for=\"form-field-field_2-0\"><span style=\"color:#fff;\">I agree that my name,\n";
                echo "                                        email address, and any other\n";
                echo "                                        information I provide, can be transferred\n";
                echo "                                        to Molecular Health GmbH and processed there for the purpose of answering my\n";
                echo "                                        request. I\n";
                echo "                                        have\n";
                echo "                                        read the <a target=\"_blank\"\n";
                echo "                                            href=\"https://www.molecularhealth.com/privacy-policy/\"\n";
                echo "                                            style=\"color:#fff; text-decoration: underline;\">privacy policy</a> and\n";
                echo "                                        hereby\n";
                echo "                                        agree\n";
                echo "                                        that\n";
                echo "                                        my personal data may be processed as described and stored for no longer than\n";
                echo "                                        90\n";
                echo "                                        days. I\n";
                echo "                                        can\n";
                echo "                                        revoke this agreement at any time.</span></label>\n";
                echo "                            </div>\n";
                echo "                            <button type=\"submit\" class=\"submit\">Send</button>\n";
                echo "                        </form>\n";
                echo "                    </div>\n";
                echo "                </div>\n";
                echo "            </div>\n";
                echo "        </div>\n";
                echo '<div class="container" style="margin: 0px 0px 0px 0px !important;background-color: #002639; max-width: 100% !important;">';
                } else
                {
                    echo '<div class="container" style="margin: 0px 0px 0px 0px !important;background-color: #002639; max-width: 100% !important; position: fixed; bottom: 0;">';
                }
        ?>
            <div class="row">
                <div class="mr-md-auto text-center text-md-left"
                    style="background-color: #002639; padding: 10px 10px 10px 10px;">
                    <div class="credits">
                        <img width="200" height="40"
                            src="https://www.molecularhealth.com/wp-content/uploads/2019/08/mh_logo_footer.png"
                            alt="Molecular Health Logo">
                        <div class="copyright">
                            <span style="color: #ffffff;">&copy; 2020 Molecular Health GmbH</span>
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

</body>

</html>