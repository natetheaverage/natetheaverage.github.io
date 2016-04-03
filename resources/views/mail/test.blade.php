<html>
<head>
</head>
<body>
    <h3><?php echo $msg->to; ?></h3>
    <h3><?php echo $msg->from; ?></h3>
    <p>Thank you for your message, we will get back to you very soon.
    This is the message we recieved:</p>
    <br />
    <h3><?php echo $msg->subject; ?></h3>
    <p><?php echo $msg->message; ?></p>
</body>
</html>

