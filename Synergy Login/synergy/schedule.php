<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">

    <h2 class="title">Schedule</h2>
    <div class="header-content">
        <div class="user-section">
            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?>
        </div>
        <div class="group-selection-section">
            <p>Group:</p>
            <select  id="group-selection">
                <option value="CP2405">CP2405</option>
                <option value="CP5801">CP5801</option>
                <option value="CC2511">CC2511</option>
                <option value="CP7852">CP7852</option>
            </select>
        </div>
    </div>
</div>
<div class="content">

    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>
    <div class="week-section">
    <div class="week">

    <h3>Add Week and Focus...</h3>

    </div>
    </div>
</div>

</body>
</html>