
<?php
    if(!empty($_POST))
    if(isset($_POST['first_name']) && !empty($_POST['first_name']) &&
    isset($_POST['last_name']) && !empty($_POST['last_name']) &&
    isset($_POST['user_email']) && !empty($_POST['user_email']) && 
    isset($_POST['phone']) && !empty($_POST['phone']) &&
    isset($_POST['user_message']) && !empty($_POST['user_message'])) 
    {

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        die("Email incorrect !!!");
    }


    }else{
    die("The form is incomplete !!!");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form  action="thanks2.php" method="post">
    <div>
      <br>
     <label for="name">First Name:</label>
     <input type="text"  id="name"  name="first_name" placeholder="John" required>
    </div>
      <br>
    <div>
      <br>
      <label for="name">Last Name:</label>
      <input type="text"  id="name"  name="last_name" placeholder="Smith" required>
    </div>
    <br>
    <div>
      <label for="phone">Phone Number :</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="0000000000" required>
    </div>
    <br>
    <div>
      <label for="email">Email :</label>
      <input type="email"  id="email"  name="user_email" placeholder="email@email.com" required>
    </div>
    <br>
      <label for="txt">Suject :
        <select name="subject" size="1">
          <OPTION>Complaint
          <OPTION>Action
          <OPTION>Request
          <OPTION>Customer Service
        <OPTION>Question
        </select>
     </label>
     <br>
   </div>
   <br>
    <div>
      <label for="message">Message :</label>
      <textarea  type="text" id="message"  name="user_message" required></textarea>
    </div>
    <br>
    <div class="button">
      <button  type="submit">Send your message</button>
    </div>
  </form>
</body>
</html>