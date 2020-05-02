<div class="topnav">
    <div class="search-container">
        <form>
            <input type="text" placeholder="Search for...">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="logo">
        <p>URP</p>
        <P>Universal Registration Platform</P>
    </div>
    <div class="menu">
        <a id="main" href="#">Main</a>
        <a id="events" href="#">Events</a>
        <a id="about" href="#t">About</a>
        <a id="about" href="#">Register Event</a>
    </div>
</div>
<div class="header">
    <div class="header_text">
        <h2>Unique Registration Platform</h2>
        <p>Is the awesome platform to find event for any situation and time. </p>
        <div class="slideshow-container">
        <div class="slideshow-container">
        <!slideshow>

        <div class="mySlides fade">
            <img src="img/image 1.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/image 2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/image 3.jpg" style="width:100%">
        </div>
        <div class="prev_icon">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
    </div>
        <br>

    <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>
        </div>
    </div>
    <div class="header_img">

    </div>
</div>
