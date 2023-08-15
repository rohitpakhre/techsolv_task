<!DOCTYPE html>
<html>
<head>
<title>techsolvitservice</title>
<style>
/* Contact Form */

.contact-form {
  width: 300px;
  margin: 0 auto;
  padding: 40px;
  border: 1px solid #ccc;
  background-color: #f5f5f5;
}

.contact-form h1 {
  text-align: center;
  margin-bottom: 20px;
  font-size: 20px;
  font-weight: bold;
}

.contact-form input, .contact-form textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  font-size: 14px;
}

.contact-form input[type="submit"] {
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
}

.contact-form input[type="submit"]:hover {
  background-color: #0069d9;
}

/* Error Messages */

.contact-form .error {
  color: red;
  font-size: 12px;
}

/* Contact Form - Submit */

.contact-form input[type="submit"]:disabled {
  background-color: #ccc;
  color: #999;
  cursor: not-allowed;
}

.contact-form input[type="submit"]:disabled:hover {
  background-color: #bbb;
}

</style>

</head>
<body>
<h1 align='center'>Techsolve It Services</h1>
<form action="submit.php" method="post" class="contact-form">
  <input type="text" name="name" placeholder="Full Name" />
  <input type="text" name="phone" placeholder="Phone Number" />
  <input type="email" name="email" placeholder="Email" />
  <input type="text" name="subject" placeholder="Subject" />
  <textarea name="message" placeholder="Message"></textarea>
  <input type="submit" value="Submit" />
</form>
</body>
</html>
