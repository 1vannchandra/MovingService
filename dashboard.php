<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "conn.php";
if (!isset($_SESSION['id'])) {
    die("Session ID not set. Please log in.");
}

$sql = 'SELECT * from pengguna where id = ' . $_SESSION['id'];
$result = $conn->query($sql);

$data = $result->fetch_assoc();

$sql_count_pengguna = "SELECT COUNT(*) AS total FROM pengguna";
$result_count_pengguna = $conn->query($sql_count_pengguna);
$row_count_pengguna = $result_count_pengguna->fetch_assoc();
$total_pengguna = $row_count_pengguna['total'];

$sql_count_layanan = "SELECT COUNT(*) AS total FROM layanan";
$result_count_layanan = $conn->query($sql_count_layanan);
$row_count_layanan = $result_count_layanan->fetch_assoc();
$total_layanan = $row_count_layanan['total'];

$sql_count_input_pelayanan = "SELECT COUNT(*) AS total FROM input_pelayanan";
$result_count_input_pelayanan = $conn->query($sql_count_input_pelayanan);
$row_count_input_pelayanan = $result_count_input_pelayanan->fetch_assoc();
$total_input_pelayanan = $row_count_input_pelayanan['total'];

if (isset($_SESSION['success'])) {
    echo '<script>alert("' . $_SESSION["success"] . '")</script>';
    unset($_SESSION['success']);
}

if (isset($_SESSION['error'])) {
    echo '<script>alert("' . $_SESSION["error"] . '")</script>';
    unset($_SESSION['error']);
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./css/fonts.css" />
    <link rel="stylesheet" href="./css/dashboard.style.css" />
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }

        .dashboard {
            margin-left: 200px;
            padding: 2rem;
        }

        .dashboard-header h1 {
            font-size: 2rem;
            color: #333;
        }

        .dashboard-content {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 600px;
            margin: auto;
        }

        .dashboard-top h1 {
            font-size: 1.5rem;
            color: #555;
            margin-bottom: 1.5rem;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        label {
            font-weight: 500;
            font-size: 0.9rem;
            color: #666;
        }

        input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            color: #333;
            background: #f9f9f9;
        }

        input:focus {
            outline: none;
            border-color: #007bff;
            background: #fff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        button {
            background: #007bff;
            color: #fff;
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 600;
        }

        button:hover {
            background: #0056b3;
        }

        @media (max-width: 768px) {
            .dashboard {
                margin-left: 0;
                padding: 1rem;
            }

            .dashboard-content {
                padding: 1.5rem;
            }
        }

        .widget {
            background-color: #f5f5f5;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .widget h3 {
            font-size: 20px;
            font-weight: bold;
        }

        .widget p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>

<body>
    <nav class="sidenav">
        <a href="">
            <img src="img/logo.png" alt="">
        </a>
        <a href="/dashboard.php">
            <div>
                <i class="fa-solid fa-house"></i>
                <p class="poppins-semibold">Dashboard</p>
            </div>
        </a>
        <a href="/dashboard-service.php">
            <div>
                <i class="fa-solid fa-plus"></i>
                <p class="poppins-semibold">Add Service</p>
            </div>
        </a>
        <a href="/dashboard-edit.php">
            <div>
                <i class="fa-solid fa-pen"></i>
                <p class="poppins-semibold">Edit Service</p>
            </div>
        </a>
        <a href="/dashboard-print.php">
            <div>
                <i class="fa-solid fa-print"></i>
                <p class="poppins-semibold">Print Service</p>
            </div>
        </a>
    </nav>
    <section class="dashboard">
        <div class="dashboard-header">
            <h1 class="poppins-semibold">Service</h1>
        </div>
        <div class="dashboard-content">
            <div class="dashboard-top">
                <h1 class="poppins-semibold">Selamat Datang di Dashboard!</h1>
            </div>

            <!-- Widget to show total data count for each table -->
            <div class="widget">
                <h3>Total Users</h3>
                <p><?php echo $total_pengguna; ?> Users</p>
            </div>
            <div class="widget">
                <h3>Total Services</h3>
                <p><?php echo $total_layanan; ?> Services</p>
            </div>
            <div class="widget">
                <h3>Total Service Entries</h3>
                <p><?php echo $total_input_pelayanan; ?> Entries</p>
            </div>

            <h1 class="poppins-semibold" style="font-size: 24px;">Perbarui Profil</h1>
            <form action="update-profile.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                <div>
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required>
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($data['email']); ?>" required>
                </div>

                <div>
                    <label for="no_telepon">Nomor Telepon</label>
                    <input type="text" name="no_telepon" id="no_telepon" value="<?php echo htmlspecialchars($data['no_telepon'] ?? ''); ?>" required>
                </div>

                <div>
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="<?php echo htmlspecialchars($data['alamat'] ?? ''); ?>" required>
                </div>

                <button type="submit">Update</button>
            </form>

        </div>
    </section>

</body>

</html>