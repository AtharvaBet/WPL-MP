<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

    <?php if (isset($_POST['form_submitted'])): ?> 

        <h2>Thank You <?php echo $_POST['firstname']; ?> </h2>

        <p>You have been registered as
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
            <?php echo $_REQUEST['firstname'] . ' ' . $_REQUEST['lastname']; ?>

        </p>


        <?php else: ?>

         

      <?php endif; ?> 
</body> 
</html>