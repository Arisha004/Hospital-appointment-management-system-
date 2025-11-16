<html>
<head>
<title>Book Appointment</title>
<link rel="stylesheet" href="style2.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 20px;
            padding: 40px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #6c63ff;
            color: white;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        #registerform {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            margin-left: 370px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: 0.3s;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #6c63ff;
            outline: none;
            box-shadow: 0 0 5px rgba(108, 99, 255, 0.5);
        }

        button {
            width: 100%;
            background-color: #6c63ff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        button:hover {
            background-color: #574fd6;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
    </style>
</head>
<body>
    <div id="registerform">
        <form>
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Your full name">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email">

            <label for="age">Age</label>
            <input type="number" id="age" name="age" placeholder="Your age">

            <label for="gender">Gender</label>
            <select id="gender" name="gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Your message"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
</head>
<body>
 <header class="navbar">
    <div class="logo">Hospital Appointment Management System</div>
    <nav>
      <ul>
        <li><a href="landingpage.html">Home</a></li>
          <li><a href="index.php">Book Appointment</a></li>
          
          <li><a href="signup.php">Logout</a></li>
      </ul>
    </nav>
  </header>

   
<div class="container1">
  <h2>Book Appointment</h2>
  <form  action="insertappointmentform.php" method="POST">

    <label>Full Name:<span>*</span></label>
    <input type="text" name="full_name" required pattern="^[A-Za-z]{3,}( [A-Za-z]+)?$"  minlength="3" 
       title="Name should contain only letters.">
  

    <label>Email:<span>*</span></label>
    <input type="email" 
   name="email" required title="enter a valid email address">

    <label>Phone (11 digits):<span>*</span></label>
    <input type="number" name="phone" required pattern="[0-9]{11}" title="Phone number must be exactly 11 digits." maxlength="11">

    <label>Service Type:<span>*</span></label>
    <select name="service_type" required>
      <option value=""> Select Service </option>
      <option value="Consultation">Consultation</option>
      <option value="Follow-up">Follow-up</option>
      <option value="Check-up">Check-up</option>
      <option value="Emergency">Emergency</option>
    </select>

    <label>Appointment Date:<span>*</span></label>
    <input type="date" name="appointment_date" required min="<?php echo date('Y-m-d'); ?>">

    <label>Appointment Time:<span>*</span></label>
    <input type="time" name="appointment_time" required>


    
      <label>Gender:</label>
      <input type="radio" id="male" name="gender" value="Male"> 
      <label for="male">Male</label>
      <input type="radio" id="female" name="gender" value="Female">
      <label for="female">Female</label>
      <br><br>
      <!-- <label>Gender:<span>*</span></label>
    <select name="gender" required>
      <option value=""> Select Gender </option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select> -->

    <label>Message (optional):</label>
    <textarea name="message"  rows="3"  placeholder="Add any additional notes..."></textarea>
   
    <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">

    <button type="submit" name="submit"> Book Appointment </button>
  </form>


<div style="margin-top:20px;">
    <form action="list.php" method="get">
    <button type="submit">View Data</button>
    </form>
</div>
</div>

    <footer>
    <p>© 2025 Appointment Management System , Made by Arisha Mumtaz(2312358)</p>
  </footer> 
</div>
</body>
</html>