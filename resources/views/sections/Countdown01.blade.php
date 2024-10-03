<x-section-layout>
    <!--== Who We Are Start ==-->
    <section class="white-bg pt-50 pb-50">
        <div class="row">
            <div class="col-sm-8 section-heading">
                <h4 id="titleText" class="text-uppercase mt-0 font-700 roboto-font">The Big Sale</h4>
                <hr class="dark-bg center_line bold-line">
                <p id="contentText" class="mt-30 font-16px dark-color text-center roboto-font">In the next <span style="color: red;">10 days</span>, we will give you discount with <span style="color: red;">big sale event</span>.</p>
            </div>
        </div>
        <div class="row mt-50">
            <div class="col-md-12 text-center">
                <div class="countdown-container mt-0 mb-0">
                    <ul class="countdown">
                        <li>
                            <span class="days default-color font-80px font-400" id="days">0</span>
                            <p class="dark-color text-uppercase">days</p>
                        </li>
                        <li>
                            <span class="hours default-color font-80px font-400" id="hours">0</span>
                            <p class="dark-color text-uppercase">hours</p>
                        </li>
                        <li>
                            <span class="minutes default-color font-80px font-400" id="minutes">0</span>
                            <p class="dark-color text-uppercase">minutes</p>
                        </li>
                        <li>
                            <span class="seconds default-color font-80px font-400" id="seconds">0</span>
                            <p class="dark-color text-uppercase">seconds</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>   
    </section>   

    <script>
        // Set the date you're counting down to (2024/11/20)
        var countDownDate = new Date().getTime() + (10 * 24 * 60 * 60 * 1000) + (10 * 60 * 60 * 1000);
    
        // Update the countdown every 1 second
        var countdownFunction = setInterval(function() {
    
          // Get today's date and time
          var now = new Date().getTime();
    
          // Find the distance between now and the countdown date
          var distance = countDownDate - now;
    
          // Time calculations for days, hours, minutes, and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
          // Output the result in the elements with the corresponding IDs
          document.getElementById("days").innerHTML = days;
          document.getElementById("hours").innerHTML = hours;
          document.getElementById("minutes").innerHTML = minutes;
          document.getElementById("seconds").innerHTML = seconds;
    
          // If the countdown is finished, stop the timer and display a message
          if (distance < 0) {
            clearInterval(countdownFunction);
            document.getElementById("days").innerHTML = "0";
            document.getElementById("hours").innerHTML = "0";
            document.getElementById("minutes").innerHTML = "0";
            document.getElementById("seconds").innerHTML = "0";
          }
        }, 1000);
    </script>    
</x-section-layout>