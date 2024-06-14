<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        /* Base styles */
        body {
            overflow-x: hidden;
            font-family: Arial, sans-serif;
        }

        /* Sidebar styles */
        #sidebar-wrapper, .w3-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 25%;
            height: 100%;
            overflow-y: auto;
            z-index: 1;
            transition: left 0.5s;
            background: #F88379;
            padding: 20px;
        }

        .w3-bar-item {
            padding: 10px;
        }

        /* Content area styles */
        #page-content-wrapper, .w3-main {
            margin-left: 25%;
            padding: 20px;
        }

        /* Navbar styles */
        .navbar {
            margin-bottom: 20px;
        }

        /* Typography */
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
        }

        code {
            font-size: 14px;
            background-color: #f4f4f4;
            padding: 4px 6px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="w3-sidebar">
        <div class="w3-bar-block">
            <a href="#" class="w3-bar-item w3-button">Link 1</a><br/>
            <a href="#" class="w3-bar-item w3-button">Link 2</a><br />
            <a href="#" class="w3-bar-item w3-button">Link 3</a>
        </div>
    </div>

    <!-- Page content -->
    <div id="page-content-wrapper" class="w3-main">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
