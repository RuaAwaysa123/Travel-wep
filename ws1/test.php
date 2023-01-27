<!DOCTYPE html>
<head>
    <title>Image Resize JS</title>
</head>
<body>
<div class="container" style="text-align: center; margin-top: 5em;">
    <!-- Image to be enlarged and onclick() function call-->
    <img
            src=
            "mem.jfif"
            onclick="enlargeImg()"
            id="img1"
    />
    <br /><br /><br />
    <!-- Button to reset the Image size -->
    <button onclick="resetImg()">Reset</button>
</div>

<!-- script to set display property -->
<script>
    // Get the img object using its Id
    img = document.getElementById("img1");
    // Function to increase image size
    function enlargeImg() {
        // Set image size to 1.5 times original
        img.style.transform = "scale(1.5)";
        // Animation effect
        img.style.transition = "transform 0.25s ease";
    }
    // Function to reset image size
    function resetImg() {
        // Set image size to original
        img.style.transform = "scale(1)";
        img.style.transition = "transform 0.25s ease";
    }
</script>
</body>
</html>
