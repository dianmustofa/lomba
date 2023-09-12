<!DOCTYPE html>
<html lang="en">

<body>
    <button type="button" class="btn btn-primary rounded-circle" id="btn-back-to-top">
        <i class="fas fa-angle-up"></i>
    </button>

    <script>
        let mybutton = document.getElementById("btn-back-to-top");

        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 600 ||
                document.documentElement.scrollTop > 600
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>