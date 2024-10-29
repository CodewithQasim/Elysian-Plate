<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Elysian Plate</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-...hash..." crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  
@include('layouts.header')
<!-- Reservation Section -->
<div class="res">
    <h1>Reservation</h1>
    <p>
        To make a reservation, simply select the date and time that you would
        like to dine with us, and choose the number of guests in your party. If
        you have any special requests or dietary needs, please don't hesitate to
        let us know in the comments section.
    </p>
    <p>
        We look forward to hosting you at The Elysian Plate and providing you with
        a royal dining experience. Thank you for considering us for your next
        meal out!
    </p>

    <!-- Reservation Form -->
    <div class="form">
        <form action="#" method="post">

            <!-- Name Input -->
            <div class="elem-group">
                <label for="name">Your Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="visitor_name" 
                    placeholder="Qasim Ali" 
                    pattern="[A-Z\sa-z]{3,20}" 
                    required
                />
            </div>

            <!-- Email Input -->
            <div class="elem-group">
                <label for="email">Your E-mail</label>
                <input 
                    type="email" 
                    id="email" 
                    name="visitor_email" 
                    placeholder="Qasim.Ali@email.com" 
                    required 
                />
            </div>

            <!-- Phone Number Input -->
            <div class="elem-group">
                <label for="phone">Your Phone</label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="visitor_phone" 
                    placeholder="0300-0344522" 
                    required 
                />
            </div>

            <hr />

            <!-- Guest Number Input -->
            <div class="elem-group inlined">
                <label for="guest">Guest</label>
                <input 
                    type="number" 
                    id="guest" 
                    name="total_guest" 
                    placeholder="2" 
                    min="1" 
                    required 
                />
            </div>

            <!-- Date Input -->
            <div class="elem-group inlined">
                <label for="date">Date</label>
                <input 
                    type="date" 
                    id="date" 
                    name="date" 
                    required 
                />
            </div>

            <!-- Time Input -->
            <div class="elem-group inlined">
                <label for="time">Time</label>
                <input 
                    type="time" 
                    id="time" 
                    name="time" 
                    required 
                />
            </div>

            <hr />

            <!-- Additional Message Input -->
            <div class="elem-group">
                <label for="message">Anything Else?</label>
                <br>
                <textarea 
                    id="message" 
                    name="customer_message" 
                    placeholder="Tell us anything else that might be important."
                ></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit">Submit</button>

        </form>
    </div>
</div>
@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-...hash..." crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.js"></script>

</body>
</html>