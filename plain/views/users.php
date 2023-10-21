<!-- Navigation Links -->
<a href="/">Home</a><br/><br/>

<!-- Page Heading -->
<h1>Welcome</h1>

<!-- PHP Loop to Display User Information -->
<?php foreach ($users as $user): ?>
    <p>User ID: <?php echo $user->getId(); ?>, Name: <?php echo $user->getUsername(); ?></p>
    <?php if ($user->getImage() == "data:image/jpeg;base64,") { ?>
        <p>No Image</p>
        <br>
    <?php } else { ?>
        <p>Image:</p>
        <img src=<?php echo $user->getImage(); ?> alt="User Image" width="300" height="300">
    <?php } ?>
<?php endforeach; ?>
