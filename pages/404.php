<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | NeuraEduBot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
            overflow: hidden;
            position: relative;
        }

        /* Animated background */
        .bg-gradient {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(135deg, #3f66e6 0%, #129695 50%, #0ed3a2 100%);
            z-index: 0;
        }

        .bg-gradient::before {
            content: '';
            position: absolute;
            top: -50%; right: -30%;
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            border-radius: 50%;
            animation: float1 8s ease-in-out infinite;
        }

        .bg-gradient::after {
            content: '';
            position: absolute;
            bottom: -40%; left: -20%;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
            border-radius: 50%;
            animation: float2 10s ease-in-out infinite;
        }

        @keyframes float1 {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(-40px, 30px); }
        }

        @keyframes float2 {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(30px, -40px); }
        }

        /* Floating particles */
        .particles {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: 1;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 6px; height: 6px;
            background: rgba(255,255,255,0.15);
            border-radius: 50%;
            animation: drift linear infinite;
        }

        .particle:nth-child(1) { left: 10%; top: 20%; animation-duration: 12s; width: 8px; height: 8px; }
        .particle:nth-child(2) { left: 30%; top: 60%; animation-duration: 15s; animation-delay: -3s; }
        .particle:nth-child(3) { left: 50%; top: 30%; animation-duration: 10s; animation-delay: -5s; width: 10px; height: 10px; }
        .particle:nth-child(4) { left: 70%; top: 70%; animation-duration: 18s; animation-delay: -2s; }
        .particle:nth-child(5) { left: 85%; top: 15%; animation-duration: 14s; animation-delay: -7s; width: 5px; height: 5px; }
        .particle:nth-child(6) { left: 20%; top: 80%; animation-duration: 16s; animation-delay: -4s; }
        .particle:nth-child(7) { left: 60%; top: 50%; animation-duration: 11s; animation-delay: -6s; width: 7px; height: 7px; }
        .particle:nth-child(8) { left: 90%; top: 45%; animation-duration: 13s; animation-delay: -1s; }

        @keyframes drift {
            0% { transform: translateY(0) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
        }

        /* Main content */
        .container {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 40px;
            max-width: 600px;
        }

        /* 404 Number */
        .error-code {
            font-size: 160px;
            font-weight: 800;
            line-height: 1;
            color: rgba(255,255,255,0.15);
            letter-spacing: -8px;
            position: relative;
            margin-bottom: 10px;
            user-select: none;
        }

        .error-code span {
            display: inline-block;
            animation: bounce 2s ease-in-out infinite;
        }

        .error-code span:nth-child(1) { animation-delay: 0s; }
        .error-code span:nth-child(2) { animation-delay: 0.15s; }
        .error-code span:nth-child(3) { animation-delay: 0.3s; }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            30% { transform: translateY(-15px); }
            60% { transform: translateY(5px); }
        }

        /* Icon */
        .error-icon {
            width: 90px; height: 90px;
            border-radius: 50%;
            background: rgba(255,255,255,0.15);
            border: 3px solid rgba(255,255,255,0.3);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 28px;
            backdrop-filter: blur(8px);
        }

        .error-icon i {
            font-size: 38px;
            color: #fff;
        }

        /* Text */
        .error-title {
            font-size: 28px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 10px;
        }

        .error-desc {
            font-size: 15px;
            color: rgba(255,255,255,0.75);
            line-height: 1.7;
            margin-bottom: 36px;
            max-width: 420px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Buttons */
        .btn-group {
            display: flex;
            gap: 14px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 14px 32px;
            border-radius: 14px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: none;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #fff;
            color: #3f66e6;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.15);
            color: #fff;
            border: 2px solid rgba(255,255,255,0.3);
            backdrop-filter: blur(6px);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.25);
            border-color: rgba(255,255,255,0.5);
            transform: translateY(-3px);
        }

        /* Footer */
        .footer-text {
            margin-top: 48px;
            font-size: 13px;
            color: rgba(255,255,255,0.4);
        }

        .footer-text a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-weight: 500;
        }

        .footer-text a:hover {
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .error-code { font-size: 100px; letter-spacing: -4px; }
            .error-title { font-size: 22px; }
            .error-desc { font-size: 14px; }
            .btn { padding: 12px 24px; font-size: 14px; }
            .container { padding: 24px; }
            .error-icon { width: 70px; height: 70px; }
            .error-icon i { font-size: 30px; }
        }
    </style>
</head>
<body>

    <!-- Animated Background -->
    <div class="bg-gradient"></div>

    <!-- Floating Particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Content -->
    <div class="container">

        <div class="error-code">
            <span>4</span><span>0</span><span>4</span>
        </div>

        <div class="error-icon">
            <i class="fas fa-compass"></i>
        </div>

        <h1 class="error-title">Page Not Found</h1>
        <p class="error-desc">
            Oops! The page you're looking for doesn't exist or has been moved.
            Let's get you back on track.
        </p>

        <div class="footer-text">
            <a href="/neuraEdu/client/index.php">NeuraEduBot</a> &mdash; Student Learning Platform
        </div>

    </div>

</body>
</html>
