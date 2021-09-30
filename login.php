<?php
require_once 'includes.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->login();
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css" integrity="sha512-5D0ofs3AsWoKsspH9kCWlY7qGxnHvdN/Yz2rTNwD9L271Mno85s+5ERo03qk9SUNtdgOZ4A9t8kRDexkvnWByA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Assignment</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-green-400">
    
        <div class="bg-green-100 p-8 rounded shadow-2xl w-1/2">

            <h2 class="text-4xl font-bold mb-4 text-gray-500">Log Masuk</h2>

            <form class="space-y-6" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div>
                    <label for="" class="block mb-2 text-gray-500 font-semibold">Nama Pengguna</label>
                    <input required type="text" name="username" id="username" class="w-full rounded bg-gray-300 bg-opacity-50 px-2 py-4 focus:outline-none">
                </div>
                
                <div>
                    <label for="" class="block mb-2 text-gray-500 font-semibold">Kata Laluan</label>
                    <input required type="password" name="password" id="password" class="w-full rounded bg-gray-300 bg-opacity-50 px-2 py-4 focus:outline-none">
                </div>

                <div>
                    <input 
                        type="submit"
                        class="w-full rounded text-gray-200 font-bold bg-green-600 px-2 py-4 focus:outline-none" 
                        name="submit"
                        value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>