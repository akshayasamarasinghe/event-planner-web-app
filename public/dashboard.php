<?php

include '../includes/header.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<section class="dashboard-section">
    <h2>Welcome to Your Dashboard</h2>
    <div class="stats-container">
        <div class="stat-card">
            <h3>Total Events</h3>
            <p>15</p>
        </div>
        <div class="stat-card">
            <h3>Upcoming Events</h3>
            <p>5</p>
        </div>
        <div class="stat-card">
            <h3>Attendees Registered</h3>
            <p>120</p>
        </div>
        <div class="stat-card">
            <h3>Completed Events</h3>
            <p>10</p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

