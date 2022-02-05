<?php
    include "includes/header.php";
?>

    <div class="bg-light pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="bg-white p-md-4">
                        <p class="fa-2x text-secondary">
                            <span class="border-warning border-bottom">CONTACT </span> DETAILS
                        </p>
                        <ul class="nav flex-column">
                        <li class="nav-item text-secondary fa-1x d-flex align-items-center mt-3">
                            <i class="fa-lg fa fa-map-marker pr-2"></i> 3000 youngfield street, Wheat Ridge, CO 80215, USA
                        </li>

                        <li class="nav-item text-secondary fa-1x d-flex align-items-center mt-3">
                            <i class="fa-lg fa fa-phone-alt pr-2"></i> +1 (720) 735-9347
                            <i class="ml-2 fa-lg fab fa-whatsapp pr-2"></i>   +1 (720) 735-9347
                        </li>

                        <li class="nav-item text-secondary fa-1x d-flex align-items-center mt-3">
                            <i class="fa-lg far fa-envelope pr-2"></i>  org@transea.com
                        </li>

                        <li class="nav-item text-secondary fa-1x d-flex align-items-bottom mt-3 d-block">
                            <i class="fa-lg fa    fa-door-open pr-2"></i>   We are open Mn-Fr: 10 am - 8 pm
                        </li>
                    </ul>
                    </div>
                </div>

                <div class="col-md-7">
                    <p class="fa-2x text-secondary">
                        <span class="border-warning border-bottom">GET IN</span> TOUCH
                    </p>
                    <div class="form">
                        <form action="" class="form-group" id="form">
                            <span class="d-block mb-1 text-secondary">
                                Full Name
                            </span>
                            <input type="text" name="name[]" id="" class="form-control border-0 fa-xs p-3" placeholder="Full Name">

                            <span class="d-block mb-1 text-secondary mt-3">
                                E-mail 
                            </span>
                            <input type="text" name="email[]" id="" class="form-control border-0 fa-xs p-3" placeholder="E-mail Adderss">

                            <span class="d-block mb-1 text-secondary mt-3">
                                Full Name
                            </span>
                            <textarea name="text" id="" cols="30" class="form-control border-0 fa-xs p-3" rows="10" placeholder="Message"></textarea>

                            <button class="btn bg-warning-hover text-white pl-4 mt-3 pr-4" id="send">
                                SEND
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector("#send").addEventListener("click", function (e) {
            e.preventDefault();
            var form = new FormData(document.querySelector("#form"));
            var xml = new XMLhttpRequest();
            xml.onreadyStateChange = function () {
                if (xml.readyState == 4 xml.status == 200) {
                    alert("ola");
                }
            }
            xml.open("POST", "validate.php", true);
            xml.send(form);
        });
    </script>
<?php
    include "includes/footer.php";
?>