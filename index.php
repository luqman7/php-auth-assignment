<?php
require_once 'includes.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->logout();
    die;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Secure Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css" integrity="sha512-5D0ofs3AsWoKsspH9kCWlY7qGxnHvdN/Yz2rTNwD9L271Mno85s+5ERo03qk9SUNtdgOZ4A9t8kRDexkvnWByA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="min-h-screen flex items-center justify-center bg-green-400">
        
        <div class="bg-green-100 p-8 rounded shadow-2xl w-1/2">
        <h2 class="text-4xl font-bold mb-4 text-gray-500">INI ADALAH SECURE PAGE</h2>
            <br>
            <?php
            if (!isset($_SESSION['is_auth'])) :
                echo '<p>SILA LOG MASUK. &nbsp; REDIRECTING...</p>';
                header("refresh:3; url=login.php");
                die;
            else:
                $r = '<p class="text-xl font-bold mb-4 text-gray-500 animate-bounce">' . 'Selamat Datang ' . $_SESSION['username'] . '</p>';
                $r .= '
            <form action='. $_SERVER['PHP_SELF'] .' method="POST">
                <input class="w-full rounded text-gray-200 font-bold bg-green-600 px-2 py-4 focus:outline-none" type="submit" value="LOG KELUAR">
            </form>';
                echo $r;
            endif;
            ?>
            <br>
        </div>
    </section>
</body>
</html>
