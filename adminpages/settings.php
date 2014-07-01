<?php
$options = get_option('')
?>
<div class="wrap">
    <h2>Settings:</h2>

    <p>Here is where you can input your settings</p>

    <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="post">
        <label for="name">Name:</label><br/>

        <input type="text" name="user-name" placeholder="your name"/><br/><br/>
        <input type="submit" value="Submit" class="button-primary"/>
    </form>
</div>