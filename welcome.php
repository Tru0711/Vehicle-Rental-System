<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Vehicle Rental System</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Light background color */
        }

        .container {
            width: 80%;
            max-width: 900px; /* Limit the maximum width for better readability */
            margin: 50px auto; /* Center the container with top margin */
            text-align: left; /* Align text to the left for better readability */
            background-color: rgba(255, 255, 255, 0.95); /* White background with transparency */
            padding: 30px; /* Increased padding for better spacing */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        h2 {
            color: #d81b60; /* Baby pink color for headings */
            font-size: 2.5em; /* Larger font size for main heading */
            margin-bottom: 20px; /* Space below the heading */
            text-align: center; /* Center the main heading */
        }

        h3 {
            color: #f06292; /* Lighter pink color for subheadings */
            font-size: 1.8em; /* Slightly larger font size for subheadings */
            margin-top: 20px; /* Space above subheadings */
        }

        p {
            color: #555; /* Darker gray for paragraph text for better readability */
            font-size: 1.1em; /* Slightly larger font size for paragraphs */
            line-height: 1.6; /* Increase line height for better readability */
        }

        ul {
            list-style-type: disc; /* Use bullet points for lists */
            padding-left: 20px; /* Indent the list */
        }

        ul li {
            margin: 10px 0; /* Space between list items */
            font-size: 1.1em; /* Font size for list items */
        }

        a {
            text-decoration: none; /* Remove underline from links */
            color: #d81b60; /* Baby pink color */
            font-weight: bold; /* Bold links */
            transition: color 0.3s; /* Smooth transition for hover effect */
        }

        a:hover {
            color: #f06292; /* Change color on hover */
        }

        footer {
            margin-top: 20px; /* Space above footer */
            padding: 10px 0; /* Padding for footer */
            text-align: center; /* Center footer text */
            color: #777; /* Gray color for footer text */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to the Vehicle Rental System</h2>
        <p>Your one-stop solution for renting vehicles with ease and convenience.</p>
        
        <h3>About Us</h3>
        <p>At Vehicle Rental System, we provide a wide range of vehicles for rent, including cars, bikes, and vans. Our goal is to make vehicle rental simple and accessible for everyone.</p>

        <h3>Features</h3>
        <ul>
            <li>Easy Vehicle Booking: Browse our extensive fleet and book your vehicle in just a few clicks.</li>
            <li>Manage Bookings: View and manage your bookings from your user dashboard.</li>
            <li>Admin Panel: Admins can manage users, vehicles, and bookings efficiently.</li>
            <li>Secure Payments: Enjoy secure payment options for a hassle-free experience.</li>
        </ul>

        <h3>Getting Started</h3>
        <p>To get started, you can:</p>
        <ul>
            <li><a href="user/register.php">Register</a> for a new account if you are a new user.</li>
            <li><a href="user/login.php">Log in</a> to your account if you already have one.</li>
            <li>Explore our <a href="manage_vehicles.php">available vehicles</a> and make a booking.</li>
        </ul>

        <h3>Contact Us</h3>
        <p>If you have any questions or need assistance, feel free to <a href="contact.php">contact us</a>.</p>
    </div>
    <footer>
        <p>&copy; 2024 Vehicle Rental System. All rights reserved.</p>
    </footer>
</body>
</html>