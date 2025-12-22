<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + Docker</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 40px;
            max-width: 900px;
            width: 90%;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h1 {
            font-size: 2.8rem;
            margin-bottom: 10px;
        }

        h1 span {
            color: #ff2d20;
        }

        p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background: rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }

        .card img {
            width: 70px;
            height: 70px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .card h3 {
            margin: 0;
            font-size: 1.1rem;
        }

        footer {
            margin-top: 40px;
            font-size: 0.9rem;
            opacity: 0.7;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Welcome to <span>Laravel + Docker</span></h1>
        <p>
            Your application is successfully running inside a Docker container 🚀
            Clean. Isolated. Production-ready.
        </p>

        <div class="tech-grid">
            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Laravel">
                <h3>Laravel</h3>
            </div>

            <div class="card">
                <img src="https://www.docker.com/wp-content/uploads/2022/03/Moby-logo.png" alt="Docker">
                <h3>Docker</h3>
            </div>

            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Postgresql_elephant.svg" alt="Database">
                <h3>Database</h3>
            </div>

            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Git_icon.svg" alt="GitHub">
                <h3>GitHub Actions</h3>
            </div>
        </div>

        <footer>
            © {{ date('Y') }} | Laravel Docker Demo | CI/CD Ready
        </footer>
    </div>

</body>

</html>