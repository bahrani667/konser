<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/ion.rangeSlider.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


<!---- Seat Visualisasi  --->

<script>
    function onLoaderFunc() {
        $(".seatStructure *").prop("disabled", true);
        $(".displayerBoxes *").prop("disabled", true);
    }

    function takeData() {
        if (($("#Username").val().length == 0) || ($("#Numseats").val().length == 0)) {
            alert("Please Enter your Name and Number of Seats");
        } else {
            $(".inputForm *").prop("disabled", true);
            $(".seatStructure *").prop("disabled", false);
            document.getElementById("notification").innerHTML = "<b style='margin-bottom:0px;background:yellow;'>Please Select your Seats NOW!</b>";
        }
    }


    function updateTextArea() {

        if ($("input:checked").length == ($("#Numseats").val())) {
            $(".seatStructure *").prop("disabled", true);

            var allNameVals = [];
            var allNumberVals = [];
            var allSeatsVals = [];

            //Storing in Array
            allNameVals.push($("#Username").val());
            allNumberVals.push($("#Numseats").val());
            $('#seatsBlock :checked').each(function() {
                allSeatsVals.push($(this).val());
            });

            //Displaying 
            $('#nameDisplay').val(allNameVals);
            $('#NumberDisplay').val(allNumberVals);
            $('#seatsDisplay').val(allSeatsVals);
        } else {
            alert("Please select " + ($("#Numseats").val()) + " seats")
        }
    }


    function myFunction() {
        alert($("input:checked").length);
    }

    /*
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    */


    $(":checkbox").click(function() {
        if ($("input:checked").length == ($("#Numseats").val())) {
            $(":checkbox").prop('disabled', true);
            $(':checked').prop('disabled', false);
        } else {
            $(":checkbox").prop('disabled', false);
        }
    });
</script>

<!---- END Seat  --->