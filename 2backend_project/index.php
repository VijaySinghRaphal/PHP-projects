<?php 
$page_title = "Backend Technology";
$page_key ="index";
$image_url ="./images/first.jpg";
include 'header.php'
?>
<main class="container-fluid">
    <div class="container p-3">
        <h1>What is Backend?</h1>
        <p>
        The backend is the part of a website or app that you don’t see.
        It’s the part that works behind the scenes to make everything function.
        </p>
        <h3>It handles things like:</h3>
        <ul>
            <li>Storing and retrieving data (in databases)</li>
            <li>Checking user login and passwords</li>
            <li>Processing payments</li>
            <li>Saving your posts, comments, orders, etc.</li>
            <li>Running logic and rules for the application</li>
        </ul>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Step</th>
                <th>Frontend</th>
                <th>Backend</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>View products</td>
                <td>Website shows items (HTML, CSS)</td>
                <td>Backend fetches products from database</td>
                </tr>
                <tr>
                <td>Add to cart</td>
                <td>Button click animation</td>
                <td>Backend updates the user's cart info</td>
                </tr>
                <tr>
                <td>Payment</td>
                <td>Shows payment form</td>
                <td>Backend processes payment and saves order</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
<?php include 'footer.php'?>