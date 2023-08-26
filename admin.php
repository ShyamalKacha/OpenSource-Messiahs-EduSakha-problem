<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <title>University Admin Panel</title>
</head>
<body>
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.3.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.3.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyACc1GtuNG-kI0pK8axXE1Blttg3HoE7MY",
    authDomain: "edusaksha-video-events.firebaseapp.com",
    projectId: "edusaksha-video-events",
    storageBucket: "edusaksha-video-events.appspot.com",
    messagingSenderId: "335102121421",
    appId: "1:335102121421:web:733debd9b008def8e3e084",
    measurementId: "G-4LTFR25GEZ"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  
</script>
    <div class="admin-panel">
        <h1 class="admin-header">Welcome to the University Admin Panel</h1>
        
        <div class="admin-options">
            <a href="create_event.php">Create New Event Listing</a>
            <a href="view_events.php">View Existing Event Listings</a>
            <a href="edit_events.php">Edit Event Listings</a>
            <!-- Add more options as needed -->
        </div>
    </div>
</body>
</html>
