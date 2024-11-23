<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirPlan</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main class="main-section">
        <div class="main-container">
            <div class="main-text">
                <h1>Путешествовать с нами легко и дешево!</h1>
                <a href="../pages/tours.php" class="main-button">Подобрать тур</a>
            </div>
            <div class="main-image">
                <img src="../assets/img/main.png" alt="Персонаж">
            </div>
        </div>
    </main>
    <div class="quick-search-container">
    <form action="booking.php" method="GET">
        <div class="quick-search-fields">
            <input type="text" name="departureCity" placeholder="Откуда" required>
            <input type="text" name="tour" placeholder="Тур" required>
            <input type="text" name="hotel" placeholder="Отель" required>
            <input type="date" name="departureDate" required>
            <input type="date" name="returnDate" required>
        </div>
        <button type="submit" class="search-button">Найти тур</button>
    </form>
</div>

</body>
</html>
