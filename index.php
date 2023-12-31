<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="First name">First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label for="Last name">Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                <div class="field input">
                    <label for="Email Address">Email Address</label>
                    <input type="text" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label for="Password">Password</label>
                    <input type="password" placeholder="Enter new password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="Image">Select Image</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="#">Login now</a></div>
        </section>
    </div>
    
    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>