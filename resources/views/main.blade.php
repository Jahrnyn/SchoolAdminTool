<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <header class="header">
        <div class="header-left">
            <h1>Székelybertalanban Álltalános Iskola</h1>
        </div>
        <div class="header-right">
            <form class="login-form">
                <input type="email" name="email" placeholder="Email Address">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </div>
    </header>

    <main>
        <section>
            <h2>About</h2>
            <p>This is a simple school admin tool that helps manage student information.</p>
        </section>

        <section>
            <h2>Features</h2>
            <ul>
                <li>Manage student records</li>
                <li>Generate reports</li>
            </ul>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2023 Székelybertalan. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>