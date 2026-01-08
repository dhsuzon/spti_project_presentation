<!DOCTYPE html>
<html lang="en">

<?php   require_once "./config/db.php"; 


$dept_info = "SELECT id, dept_name FROM departments";
$dept_result = mysqli_query($conn,$dept_info);
?>

<head>
    <!-- SEO optimaize -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Sylhet Professional Technical Institute.A Best Private Polytechnic Institute In Sylhet">
    <meta name="keywords"
        content="Sylhet Professional Technical Institute.A Best Private Polytechnic Institute In Sylnet">
    <meta name="generator" content="Sylhet Professional Technical Institute, Sylhet." />
    <title>SPTI || Sylhet Professional Technical Institute | সিলেট প্রফেশনাল টেকনিক্যাল ইন্সটিটিউট</title>

    <!-- add title icon,font family  and  font awesome icon  -->
    <link rel="icon" href="./images/logo/spti_logo.png" type="image/png">
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Stylish">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- adding Custom  css and bootsrap 5.1.3 -->
    <link rel="stylesheet" href="./css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<!-- header part start -->

<body class="">

    <header class="overflow-hidden">
        <nav class="nav row top_header_nav h-auto g-0">
            <div class="col-sm-6 d-flex justify-content-center">
                <a class="nav-link text-white" href="./index.php">Institute code: 61081</a>
            </div>
            <div class="col-sm-6 d-flex justify-content-center">
                <a class="nav-link text-white" href="./index.php">EIIN: 136028</a>
            </div>
        </nav>


        <nav class="row g-0 align-items-center">
            <div class="col-md-6 col-sm-12 text-center">
                <a class="nav-link navbar-brand" href="./index.php">
                    <img src="./images/logo/spti_logo.png" alt="logo" class="img-fluid" width="100px">
                </a>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="spti_site_text_container text-center w-100 py-2">
                    <h1 class="spti_site_main_title"><strong>Sylhet Professional Technical Institute</strong></h1>
                    <h5 class="spti_sub_site_title"><strong>A Private Polytechnic Institute</strong></h5>
                </div>
            </div>
        </nav>
    </header>
    <nav class="sticky-top navbar navbar-expand-lg navbar-light toggle_navbar_container">

        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0 ">
                    <li class="nav-item nav_item_list ">
                        <a class="nav-link nav-text_color" aria-current="page" href="./index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown dropdown_conainer">
                        <a class="nav-link nav-text_color" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown_menu_style" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item nav-text_color" href="./committee.php">Managing Committee</a>
                            </li>
                            <li><a class="dropdown-item nav-text_color" href="./plan.php">Mission & Vision</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text_color" href="./admission.php">Admission</a>
                    </li>
                    <li class="nav-item nav_item_list">
                        <a class="nav-link nav-text_color" href="./faculty.php">Faculty</a>
                    </li>
                    <li class="nav-item dropdown dropdown_conainer">
                        <a class="nav-link nav-text_color" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Departments
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown_menu_style " aria-labelledby="navbarScrollingDropdown">
                            <?php while($row = mysqli_fetch_assoc($dept_result)):
                            ?>
                            <li>
                                <a class="dropdown-item nav-text_color"
                                    href="department_details.php?id=<?php echo $row['id']; ?>">
                                    <?php echo $row['dept_name']; ?>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </li>

                    <li class="nav-item dropdown dropdown_conainer ">
                        <a class="nav-link nav-text_color" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Academic
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown_menu_style" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item nav-text_color" href="./class_routine.php">Class Routine</a>
                            </li>
                            <li><a target="_blank" class="dropdown-item nav-text_color"
                                    href="http://www.bteb.gov.bd/site/page/14fc21a0-8a2d-400f-8e20-5fbd989a68f5/%E0%A6%8F%E0%A6%95%E0%A6%BE%E0%A6%A1%E0%A7%87%E0%A6%AE%E0%A6%BF%E0%A6%95-%E0%A6%95%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B2%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%A1%E0%A6%BE%E0%A6%B0">Calender</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown dropdown_conainer ">
                        <a class="nav-link nav-text_color" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Student Info
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown_menu_style" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item nav-text_color" href="#">No Data Found</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-text_color" href="./gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-text_color" href="./notice.php">Notice</a>
                    </li>

                    <a class="btn btn-outline-primary" href="./login.php" target="_blank">Admin Login</a>
                </ul>


            </div>

        </div>

    </nav>