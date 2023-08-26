<?php
$title = $date = $time = $description = '';
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize the Firebase Admin SDK
    require __DIR__ . 'C:\xampp\htdocs\vendor\autoload.php'; // Corrected path to autoload.php in your Firebase Admin SDK
    $serviceAccount = \Kreait\Firebase\ServiceAccount::fromJsonFile('C:\xampp\htdocs\edusaksha-video-events-firebase-adminsdk-j5o1t-656db2744c.json');
    $firebase = (new \Kreait\Firebase\Factory)
        ->withServiceAccount($serviceAccount)
        ->create();

    $database = $firebase->getDatabase();

    // Fetch form data
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    // Push event data to Firebase
    $eventsRef = $database->getReference('events');
    $newEventRef = $eventsRef->push([
        'title' => $title,
        'date' => $date,
        'time' => $time,
        'description' => $description
    ]);

    // Clear form fields after submission
    $title = '';
    $date = '';
    $time = '';
    $description = '';

    // Display success message
    $successMessage = 'Event listing created successfully!';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create New Event Listing</title>
    <link rel="stylesheet" href="newEventListing.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <header class="event-header">
        <h1>Create New Event Listing</h1>
    </header>

    <section class="event-form">
        <?php if ($successMessage): ?>
        <p><?php echo $successMessage; ?></p>
        <?php else: ?>
        <form method="POST">
            <div class="form-group">
                <label for="title">Event Title:</label>
                <input type="text" id="title" name="title" required value="<?php echo $title; ?>">
            </div>

            <div class="form-group">
                <label for="date">Event Date:</label>
                <input type="date" id="date" name="date" required min="<?php echo date("Y-m-d"); ?>" value="<?php echo $date; ?>">
            </div>

            <div class="form-group">
                <label for="time">Event Time:</label>
                <input type="time" id="time" name="time" required min="<?php echo date("H:i"); ?>" value="<?php echo $time; ?>">
            </div>

            <div class="form-group">
                <label for="description">Event Description:</label>
                <textarea id="description" name="description" rows="4" required><?php echo $description; ?></textarea>
            </div>

            <button class="submit-button" type="submit">Create Event</button>
        </form>
        <?php endif; ?>
    </section>

    <footer>
        <p>&copy; 2023 Edusakha. All rights reserved.</p>
    </footer>
</body>
</html>
