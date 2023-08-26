<!DOCTYPE html>
<html>
<head>
    <title>Edit Existing Event Listing</title>
    <link rel="stylesheet" href="editExistingListing.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <header class="event-header">
        <h1>Edit Existing Event Listing</h1>
    </header>

    <section class="event-form">
        <form action="submit_event.php" method="POST">
            <div class="form-group">
                <label for="title">Event Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="date">Event Date:</label>
                <input type="date" id="date" name="date" required min="<?php echo date("Y-m-d"); ?>">
            </div>

            <div class="form-group">
                <label for="time">Event Time:</label>
                <input type="time" id="time" name="time" required min="<?php echo date("H:i"); ?>">
            </div>

            <div class="form-group">
                <label for="description">Event Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>

            <button class="submit-button" type="submit">Create Event</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Edusakha. All rights reserved.</p>
    </footer>
</body>
</html>
