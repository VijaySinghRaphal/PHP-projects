<?php 
$page_title = "Python";
$page_key ="python";
$image_url = "./images/programming-background-collage.jpg";
include 'header.php';
?>
<main class="container-fluid">
    <div class="container p-3">
        <h1>What is Python?</h1>
        <p>
            Python is a high-level, interpreted, compiled (internally), object-oriented, and procedural programming language that is easy to read and write, just like English.
            Python was developed by a man named Guido van Rossum in 1991.
        </p>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Feature</th>
                <th>Explanation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><strong>High-level</strong></td>
                <td>You don’t need to worry about low-level details like memory. You can write code in a simple, human-friendly way.</td>
                </tr>
                <tr>
                <td><strong>Interpreted</strong></td>
                <td>Python code runs <strong>line by line</strong>, making it easier to find and fix errors.</td>
                </tr>
                <tr>
                <td><strong>Compiled (internally)</strong></td>
                <td>Python first <strong>converts your code into bytecode</strong> before running it. This step is hidden from you.</td>
                </tr>
                <tr>
                <td><strong>Object-Oriented Programming (OOP)</strong></td>
                <td>You can create objects (like real-world things) using classes. This helps to organize code better.</td>
                </tr>
                <tr>
                <td><strong>Procedural Programming</strong></td>
                <td>You can also write code step-by-step using <strong>functions</strong>, just like giving instructions.</td>
                </tr>
            </tbody>
        </table>

    </div>
</main>
<?php include 'footer.php'?>