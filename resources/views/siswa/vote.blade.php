@extends('template.template')
@section('content')
<?php
    $title = 'Vote Kandidat';
    $page = 'kandidat';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vote.css">
</head>
<body>
    <div class="content">
        <div class="col text-center">
            <h2>Voting Kandidat Pilihanmu dengan <b>BIJAK!</b></h2>
        </div>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <form id="regForm">
                        <h1 id="register" class="text-dark">Voting Form</h1>
                        <div class="tab">
                            <p>
                                <input placeholder="Masukkan NIS anda" oninput="this.className = ''" name="nis" class="border border-success mt-3"></p>
                            </p>
                            <div class="col align-items-center">
                                <button type="submit" class="btn btn-warning rounded-pill btn-md">Vote</button>
                                <a class="btn btn-danger rounded-pill btn-md" href="/kandidat" role="button">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    var currentTab = 0;
    document.addEventListener("DOMContentLoaded", function(event) {


        showTab(currentTab);

    });

    function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
        } else {
            document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
        }
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        var x = document.getElementsByClassName("tab");
        if (n == 1 && !validateForm()) return false;
        x[currentTab].style.display = "none";
        currentTab = currentTab + n;
        if (currentTab >= x.length) {

            document.getElementById("nextprevious").style.display = "none";
            document.getElementById("all-steps").style.display = "none";
            document.getElementById("register").style.display = "none";
            document.getElementById("text-message").style.display = "block";




        }
        showTab(currentTab);
    }

    function validateForm() {
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        for (i = 0; i < y.length; i++) {
            if (y[i].value == "") {
                y[i].className += " invalid";
                valid = false;
            }


        }
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid;
    }

    function fixStepIndicator(n) {
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        x[n].className += " active";
    }

</script>
@endsection
