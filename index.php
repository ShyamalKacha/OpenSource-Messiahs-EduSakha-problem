<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Edusakha</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="index.css">
    
    <script>
        // JavaScript function to scroll and show next events
        function scrollNextEvents(direction) {
            const eventsContainer = document.querySelector('.events-container');
            const scrollAmount = 1200; // Width of the events container

            if (direction === 'left') {
                eventsContainer.style.transform = `translateX(-${scrollAmount}px)`;
            } else {
                eventsContainer.style.transform = 'translateX(0)';
            }
        }
    </script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="hero">
        <h1>Welcome to Edusakha Events</h1>
        <p>Connecting universities and students through engaging virtual events.</p>
    </section>

    <section class="upcoming-events">
        <h2>Upcoming Events</h2>

        <div class="event-list">
            <div class="events-container">
                <!-- Event 1 -->
                <div class="event">
                    <h3>Webinar: Computer Science Programs</h3>
                    <p>Discover our latest computer science programs in this interactive webinar.</p>
                    <p>Date: August 25, 2023</p>
                    <p>Time: 10:00 AM</p>
                </div>

                <!-- Event 2 -->
                <div class="event">
                    <h3>Campus Tour: Engineering Facilities</h3>
                    <p>Explore our state-of-the-art engineering facilities and labs on this virtual tour.</p>
                    <p>Date: September 1, 2023</p>
                    <p>Time: 2:00 PM</p>
                </div>

                <!-- Event 3 -->
                <div class="event">
                    <h3>Panel Discussion: Careers in Healthcare</h3>
                    <p>Join experts in healthcare for an insightful panel discussion on career opportunities.</p>
                    <p>Date: September 5, 2023</p>
                    <p>Time: 4:30 PM</p>
                </div>

                <!-- Event 4 -->
                <div class="event">
                    <h3>Virtual Open House: Arts Programs</h3>
                    <p>Get a glimpse of our diverse arts programs through this virtual open house.</p>
                    <p>Date: September 10, 2023</p>
                    <p>Time: 11:00 AM</p>
                </div>

                <!-- Event 5 -->
                <div class="event">
                    <h3>Workshop: Entrepreneurship Basics</h3>
                    <p>Learn the essentials of entrepreneurship and startup strategies in this workshop.</p>
                    <p>Date: September 15, 2023</p>
                    <p>Time: 3:00 PM</p>
                </div>

                <!-- Event 6 -->
                <div class="event">
                    <h3>Webinar: Sustainable Architecture</h3>
                    <p>Explore sustainable architectural practices and designs with our experts.</p>
                    <p>Date: September 20, 2023</p>
                    <p>Time: 1:30 PM</p>
                </div>

                <!-- Event 7 -->
                <div class="event">
                    <h3>College Fair: STEM Programs</h3>
                    <p>Connect with representatives from various STEM programs in this online college fair.</p>
                    <p>Date: September 25, 2023</p>
                    <p>Time: 10:00 AM</p>
                </div>

                <!-- Event 8 -->
                <div class="event">
                    <h3>Virtual Seminar: Digital Marketing Trends</h3>
                    <p>Stay updated on the latest digital marketing trends and strategies.</p>
                    <p>Date: October 1, 2023</p>
                    <p>Time: 5:30 PM</p>
                </div>

                <!-- Continue adding more events in a similar structure -->
            </div>
        </div>

        <div class="scroll-buttons">
            <button class="scroll-button left-button" onclick="scrollNextEvents('right')">◄</button>
            <button class="scroll-button right-button" onclick="scrollNextEvents('left')">►</button>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Edusakha. All rights reserved.</p>
    </footer>
</body>
</html>
