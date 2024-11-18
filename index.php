<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Improved Design</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
    flex-direction: column;
}

.slide-nav {
    width: 100%;
    background-color: #0277bd;
    color: white;
}

.slide-nav ul {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
    margin: 0;
}

.slide-nav li {
    margin: 10px;
}

.slide-nav a {
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
}

.circle-layout {
    position: relative;
    width: 80vw;
    height: 80vw;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.center-logo {
    position: absolute;
    width: 20%;
    height: 20%;
    text-align: center;
}

.center-logo img {
    width: 100%;
    height: auto;
}

.center-logo p {
    font-size: 1.2rem;
    color: #333;
}

.segment {
    position: absolute;
    width: 25%;
    height: 25%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 50%;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    background: #e1f5fe;
    color: #0277bd;
    padding: 10px;
}

#section2 { /* Positioning specific segment */
    top: 10%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#section3 {
    top: 50%;
    right: 10%;
    transform: translate(50%, -50%);
}

#section4 {
    bottom: 10%;
    left: 50%;
    transform: translate(-50%, 50%);
}

#section1 {
    top: 50%;
    left: 10%;
    transform: translate(-50%, -50%);
}

/* Additional segments will need similar positioning and styling */

.card-holder {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 20px;
}

.card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin: 10px;
    padding: 20px;
    width: 200px;
    text-align: center;
}

.card h3 {
    margin-top: 0;
    font-size: 1.2rem;
}

.card p {
    font-size: 1rem;
    color: #666;
}

</style>
<body>
    <nav class="slide-nav">
        <ul>
            <li><a href="#section1">Masks Distributed</a></li>
            <li><a href="#section2">Village Lockdown</a></li>
            <li><a href="#section3">Health Checks</a></li>
            <li><a href="#section4">Admin Contact</a></li>
            <!-- Add more links as needed -->
        </ul>
    </nav>

    <div class="circle-layout">
        <div class="center-logo">
            <img src="logo.png" alt="Logo">
            <p>Mission Statement</p>
        </div>
        <div class="segment" id="section1">
            <h2>Masks Distributed</h2>
            <p>300,000</p>
        </div>
        <div class="segment" id="section2">
            <h2>Village Lockdown</h2>
            <p>75%</p>
        </div>
        <div class="segment" id="section3">
            <h2>Health Checks</h2>
            <p>50,000</p>
        </div>
        <div class="segment" id="section4">
            <h2>Admin Contact</h2>
            <p>admin@example.com</p>
        </div>
        <!-- Add more segments as needed -->
    </div>

    <div class="card-holder">
        <div class="card">
            <h3>Card Title 1</h3>
            <p>Some interesting content goes here.</p>
        </div>
        <div class="card">
            <h3>Card Title 2</h3>
            <p>Some more interesting content goes here.</p>
        </div>
        <!-- Add more cards as needed -->
    </div>
</body>
</html>
