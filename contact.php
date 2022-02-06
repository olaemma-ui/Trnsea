<?php
    include "includes/header.php";
?>

    <div class="bg-light pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-5">
                    <div class="bg-white p-md-4">
                        <p class="fa-2x text-secondary">
                            <span class="border-warning border-bottom">CONTACT </span> DETAILS
                        </p>
                        <ul class="nav flex-column">
                        <li class="nav-item text-secondary fa-xs d-flex align-items-center mt-3">
                            <i class="fa-lg fa fa-map-marked-alt pr-2"></i> 3000 youngfield street, Wheat Ridge, CO 80215, USA
                        </li>

                        <li class="nav-item text-secondary fa-xs d-flex flex-wrap align-items-center">
                            <span class="mt-3"><i class="fa-lg fa fa-phone-alt pr-2"></i> +1 (720) 735-9347 </span>
                            <span class="mt-3"><i class="ml-2 fa-lg fab fa-whatsapp pr-2"></i> +1 (720) 735-9347</span>
                        </li>

                        <li class="nav-item text-secondary fa-xs d-flex align-items-center mt-3">
                            <i class="fa-lg far fa-envelope pr-2"></i>  org@transea.com
                        </li>

                        <li class="nav-item text-secondary fa-xs d-flex align-items-bottom mt-3 d-block">
                            <i class="fa-lg fa fa-door-open pr-2"></i>   We are open Mn-Fr: 10 am - 8 pm
                        </li>
                    </ul>
                    </div>
                </div>

                <div class="col-md-7 mt-5">
                    <p class="fa-2x text-secondary">
                        <span class="border-warning border-bottom">GET IN</span> TOUCH
                    </p>
                    <div class="form">
                        <form action="" class="form-group" id="form">
                            <span class="d-block mb-1 text-secondary">
                                Full Name
                            </span>
                            <input type="text" name="name[]" id="" class="form-control border fa-xs p-3" placeholder="Full Name">

                            <span class="d-block mb-1 text-secondary mt-3">
                                E-mail
                            </span>
                            <input type="text" name="email[]" id="" class="form-control border fa-xs p-3" placeholder="E-mail Adderss">

                            <span class="d-block mb-1 text-secondary mt-3">
                                Message
                            </span>
                            <textarea name="text[]" id="" cols="30" class="form-control border fa-xs p-3" rows="10" placeholder="Message"></textarea>

                            <button class="btn bg-warning-hover text-white pl-4 mt-3 pr-4" id="send">
                                SEND
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="p" onclick="this.innerHTML = ''">

    </div>
    <script>
        document.querySelector("#send").addEventListener("click", function (e) {
            e.preventDefault();
            var form = new FormData(document.querySelector("#form"));
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == "SUCCESS") {
                        document.querySelector("#p").innerHTML = '<div class="popup p-3 d-flex align-items-center justify-content-center">'+
                        '<div class="popup-body p-3 bg-light text-center pt-5 rounded "> <i class="text-success far fa-4x fa-check-circle"></i> <p>Message Sent</p> </div> </div>';
                        document.querySelector("#form").reset()
                    }else{
                        document.querySelector("#p").innerHTML = '<div class="popup p-3 d-flex align-items-center justify-content-center">'+
                        '<div class="popup-body bg-light text-center rounded">'+
                            '<div class="p-3 text-light fa-md bg-danger text-center">'+
                                'Message Not Sent '+
                            '</div>'+
                        '<i class="text-danger mt-3 fa fa-4x fa-exclamation-triangle"></i> <p class="mt-2 fa-xs">Invalid/Incomplete details. This may occur due to Internet Connection or Invalid details </p> </div> </div>';
                    }

                }
            }
            xml.open("POST", "validate.php", true);
            xml.send(form);
        });
    </script>
<?php
    include "includes/footer.php";
?>