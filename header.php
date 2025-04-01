<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            min-height: 100vh;
            font-family: 'Times New Roman', Times, serif;
            overflow-x: hidden;
            
        }
        .sitname{
            margin-left:2%;
        }
        footer {
            position: relative; /* Keeps it at the bottom */
            bottom: 0;
            width: 100%;
            margin: 0;
            padding: 0;
        }


        .header nav {
            background-color: #B7ACAC;
            display: flex;
            align-items: center;
            height: 70px;
            width: 100%;
            padding: 0 20px;
            flex-wrap: wrap;
            box-sizing: border-box;
      
        }

        .header .bar {
            display: flex;
            flex-direction: row;
            margin-left: auto;
            align-items: center;
        }

        .header .logo {
            height: 50px;
            border-radius: 50%;
        }

        .header .search-container {
            flex: 1;
            margin: 0 20px;
            display: flex;
            justify-content: center;
        }

        .header .search {
            width: 100%;
            max-width: 300px;
            height: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-height: 200px;
            border: none;
        }

        .search::placeholder {
            font-weight: 500;
            font-family: sans-serif;
        }

        .header .result-box {
            position: absolute;
            width: 100%;
            max-width: 285px;
            z-index: 10;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-height: 200px;
            overflow-y: auto;
            display: none;
        }

        .header .result-box ul {
            margin: 0;
            padding: 0;
        }

        .header .result-box li {
            list-style: none;
            padding: 8px 10px;
            cursor: pointer;
        }

        .header .result-box li:hover {
            background-color: #f0f0f0;
        }

        .header .right-items {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .header .btn {
            text-align: center;
            border: 1px solid black;
            background-color: rgb(90, 201, 103);
            height: 32px;
            width: 100px;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 20px;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-height: 200px;
        }

        .header .goog-te-combo {
            text-align: center;
            height: 35px;
            width: 170px;
            border-radius: 20px;
            border: none;
            outline: 0;
            padding: 5px 10px;
            white-space: nowrap;
            cursor: pointer;
            background-color: white;
        }

        .header2 .submenu ul {
            background-color: #A59797;
            display: flex;
            align-items: center;
            height: 50px;
            width: 100%;
            list-style: none;
            padding: 0 20px;
            flex-wrap: wrap;
            justify-content: space-between;
            box-sizing: border-box;
           
        }

        .header2 .submenu .sidebar {
            position: absolute;
            top: 0;
            height: auto;
            width: auto;
            margin-top: 107px;
            padding: 0 10px;
            z-index: 999;
            background-color: rgba(255, 255, 255, 0.11);
            backdrop-filter: blur(5px);
            box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .header2 .submenu .sidebar li {
            width: 100%;
        }

        .header2 .submenu .sidebar a {
            width: 100%;
        }

        .header2 .submenu .login {
            display: flex;
            flex-direction: row;
            margin-left: auto;
        }

        .menubtn {
            display: none;
        }

        .header2 .submenu li a {
            text-decoration: none;
            color: black;
            border: 1px solid #ccc;
            border-top: none;
            border-radius: 5px 5px 5px 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 30px;
            padding: 0 15px;
            background-color: rgb(221, 211, 211);
            white-space: nowrap;
            box-sizing: border-box;
            margin-left: 20px;
            transition: all 0.3s ease;
        }

        .header2 .submenu li a:hover {
            background-color: rgb(150, 120, 120);
            color: white;
            transform: scale(1.05);
        }

        .header2 .submenu .reg {
            margin-right: 20px;
        }
        
        
        .table1 {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 15%;
            margin-left: 40px;     
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .main-content {
            display: block;
        }

        /* Google Translate styles */
        .skiptranslate iframe {
            display: none !important;
        }
        .goog-te-banner-frame {
            display: none !important;
        }
        body {
            top: 0px !important;
        }
        .goog-te-combo {
            margin: 4px 0;
        }

        @media (max-width: 1024px) {
            .sitname{
            margin-left:2% !important;
        }
            .header nav {
                flex-direction: column;
                align-items: flex-start;
                height: auto;
                padding: 10px;
            }

            .header .search-container {
                width: 100%;
                margin: 10px 0;
            }

            .header .right-items {
                width: 100%;
                justify-content: center;
                margin-top: 10px;
            }

            .header2 .submenu ul {
                flex-direction: column;
                align-items: flex-start;
                height: auto;
                padding: 10px;
            }

            .header2 .submenu li a {
                width: 100%;
                margin: 5px 0;
                transition: all 0.3s ease;
            }

            .header2 .submenu li a:hover {
                background-color: rgb(150, 120, 120);
                color: white;
                transform: scale(1.05);
            }

            .header2.submenu.sidebar {
                display: none;
            }

            .header2 .submenu .menubtn {
                display: block;
            }

            .header2 .submenu .hideonmobile {
                display: none;
            }
        }

        @media(max-width: 400px) {
            .sitname{
            margin-left:2% !important;
        }
            .header2 .submenu .sidebar {
                width: 100%;
            }
            .goog-te-combo {
                width: 80px;
            }
        }
    </style>
</head>

<body>
    <div class="fluid-container">
        <form action="">
            <div class="header">
                <nav>
                    <img src="./assets/logo.jpg" class="logo"><h3 class="sitname">MedicInfo</h3>
                    
                    <div class="bar">
                        <div class="s">
                            <input type="text" placeholder="Search..." id="input-box" class="search" onfocus="showSuggestions()" onkeyup="handleKeyup(event)">
                            <div class="result-box">
                                <ul></ul>
                            </div>
                            <div id="table-container"></div>
                        </div>
                        <input type="button" value="Search" class="btn" style="background-color: rgb(90, 201, 103);" onclick="handleSearch()">
                        <!-- Google Translate Element
                        <div id="google_translate_element"></div> -->
                    </div>
                </nav>
            </div>

            <div class="header2">
                <nav class="submenu">
                    <ul class="sidebar">
                        <li onclick="closemenu()"><img src="./assets/close.svg" alt=""></li>
                        <li><a href="Index.php">Home</a></li>
                        <li><a href="./pages/InformationPage.php">Information</a></li>
                        <li><a href="./pages/Professional.php">Professional Directory</a></li>
                        <li><a href="./pages/About.php">About</a></li>
                        <li><a href="Register.php">Registration</a></li>
                        <li><a href="Login.php" style="background-color: rgb(90, 201, 103);">Log In</a></li>
                    </ul>
                    <ul>
                        <li class="hideonmobile"><a href="Index.php">Home</a></li>
                        <li class="hideonmobile"><a href="./pages/InformationPage.php">Information</a></li>
                        <li class="hideonmobile"><a href="./pages/Professional.php">Professional Directory</a></li>
                        <li class="hideonmobile"><a href="./pages/About.php">About</a></li>
                        <div class="login">
                            <li class="hideonmobile"><a href="Register.php" class="reg">Registration</a></li>
                            <li class="hideonmobile"><a href="Login.php" style="background-color: rgb(90, 201, 103);">Log In</a></li>
                        </div>
                        <li class="menubtn" onclick="showmenu()"><img src="./assets/menu.svg" alt=""></li>
                    </ul>
                </nav>
            </div>    
        </form>
    </div> 
    <!-- <script src="pincode.js"></script>    -->

    <!-- Google Translate Script -->
    <!-- <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,hi,mr,ml', // English, Hindi, Marathi
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
    
    
    <!-- <style>
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }
        body {
            top: 0px !important; 
        }
        .goog-tooltip {
            display: none !important;
        }
        .goog-tooltip:hover {
            display: none !important;
        }
        .goog-text-highlight {
            background-color: transparent !important;
            border: none !important; 
            box-shadow: none !important;
        }
    </style> -->
</body>

</html>