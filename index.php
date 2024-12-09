<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neil's Portfolio</title>
    <link rel="icon" href="icon/sunny-hat.png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Base Styles */
        body {
            margin: 0;
            padding: 0;
            background-color: #000;
            color: #FFF;
            font-family: 'Arial', sans-serif;
            text-align: center;
            background-image: url('path-to-your-stars-image.png');
            background-size: cover;
            background-repeat: repeat;
        }

        .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 40px;
            gap: 20px;
        }

        .header img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #FFF;
        }

        .header h1 {
            font-size: 36px;
            font-weight: bold;
            color: #FFF;
        }

        .header p {
            font-size: 18px;
            max-width: 600px;
            color: #CCC;
            margin: 0;
            padding: 0 20px;
        }

        /* Button Styles */
        .projects {
            margin-top: 40px;
        }

        .projects h2 {
            font-size: 28px;
            font-weight: bold;
            color: #FFF;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            padding: 20px;
        }

        button {
            background-color: #333; 
            border: 1px solid #FFF; 
            color: #FFF;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s;
        }

        button:hover {
            background-color: #918e8e;
            transform: scale(1.05);
        }

        /* Footer Styles */
        .footer {
            margin-top: 50px;
            color: #CCC;
            font-size: 14px;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .header h1 { font-size: 28px; }
            .header p { font-size: 16px; }
            button { font-size: 14px; padding: 8px 16px; }
        }
    </style>
</head>
<body>

    
    <div class="header">
        <img src="icon/img/Vergara_Neil Jeferson.jpg">
        <h1>Hi! I'm Neil Jeferson A. Vergara</h1>
        <p>
            Hello! You can call me Neil, and I'm from Mayapa, Calamba, Laguna.
            I’m currently a student at PUP STB, pursuing a Bachelor of Science in Information Technology.
            This page showcases the projects I've created in Web Development. Welcome to my portfolio!
        </p>
    </div>

    
    <div class="projects">
        <h2>My Projects</h2>
        <div class="button-container">
            <a href="A08/index.php"><button>Project 1</button></a>
            <a href=""><button>Project 2</button></a>
            <a href=""><button>Project 3</button></a>
            <a href=""><button>Project 4</button></a>
            <a href=""><button>Project 5</button></a>
            <a href=""><button>Project 6</button></a>
 
        </div>
    </div>

    
    <div class="footer">
        © 2024 Neil Jeferson A. Vergara BSIT 3-1
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
