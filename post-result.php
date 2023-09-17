<?php
$pageTitle = "Post result";
include "view-header.php";
?>

<h1>Post result</h1>

<?php
if (isset($_POST['my-name'])) {
    echo "<p>The value sent is:</p>";
    echo $_POST['my-name'];
} else {
    echo "<p>Nothing posted to the page.</p>";
}

include "view-footer.php";
?>
