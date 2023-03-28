<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enquiry page">
    <meta name="keywords" content="HTML5/CSS">
    <meta name="author" content="Duy Khang Nguyen">
    <title>Enquiry page</title>
    <link href="styles/enquire.css" rel="stylesheet">
    <!-- <link href="styles/enquire_style.css" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <!--The header section starts-->
    <header>
        <a class="logo" href="#">CHRONO</a>
        <nav>
            <input id="check" type="checkbox">
            <label class="checkbtn" for="check">
                <span id="div-container">
                    <span class="menu-button"></span>
                    <span class="menu-button"></span>
                    <span class="menu-button"></span>
                </span>
            </label>

            <ul id="nav_bar">
                <li><a href="index.html">HOME</a></li>
                <li><a href="product.html">WATCHES</a></li>
                <li><a class="active" href="enquire.html">ENQUIRY</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="enhancements.html">ENHANCEMENTS</a></li>
            </ul>
        </nav>
    </header>
    <!--The header section ends-->

    <!--The form heading section starts-->
    <section id="enquire_intro">
        <h1>ENQUIRY PAGE</h1>
        <div id="enquiry_text">
            <p>Time is valuable. We strive to bring best quality pieces for you to tell time. We bring you the best
                value.
                We are more than happy to answer any questions you may have about our products.</p>
        </div>
        <div id="red_line"></div>
    </section>
    <!--The form heading section ends-->

    <!--The form section starts-->
    <form method="post" action="https://mercury.swin.edu.au/it000000/formtest.php">
        <fieldset>
            <legend>PERSONAL INFORMATION</legend>
            <div class="form_line">
                <div class="form_box">
                    <label for="title" class="main_label">TITLE</label>
                    <select required id="title" name="title">
                        <option value="">Mr.</option>
                        <option value="ms">Ms.</option>
                        <option value="mrs">Mrs.</option>
                    </select>
                </div>
            </div>

            <div class="form_line">
                <div class="form_box">
                    <label for="firstname" class="main_label">FIRST NAME</label>
                    <input required id="firstname" name="firstname" type="text" pattern="[A-Za-z]{1,25}"
                        title="maximum 25 alphabetical characters">
                </div>
                <div class="form_box">
                    <label for="lastname" class="main_label">LAST NAME</label>
                    <input required id="lastname" name="lastname" type="text" pattern="[A-Za-z]{1,25}"
                        title="maximum 25 alphabetical characters">
                </div>
            </div>

            <div class="form_line">
                <div class="form_box">
                    <label for="email" class="main_label">EMAIL ADDRESS</label>
                    <input required id="email" name="email" type="email">
                </div>
                <div class="form_box">
                    <label for="phonenumber" class="main_label">PHONE NUMBER</label>
                    <input required id="phonenumber" name="phonenumber" type="text" pattern="\d{1,10}]"
                        title="maximum 10 digits" placeholder="038 748 2345">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>ADDRESS INFORMATION</legend>
            <div class="form_line">
                <div class="form_box">
                    <label for="street" class="main_label">STREET ADDRESS</label>
                    <input required id="street" name="street" type="text" pattern=".{1,40}"
                        title="maximum 40 characters">
                </div>
                <div class="form_box">
                    <label for="town" class="main_label">SUBURB/ TOWN</label>
                    <input required id="town" name="town" type="text" pattern=".{1,20}" title="maximum 20 characters">
                </div>
            </div>

            <div class="form_line">
                <div class="form_box">
                    <label for="state" class="main_label">STATE</label>
                    <select required id="state" name="state">
                        <option value="" disabled selected>Please select</option>
                        <option value="vic">VIC</option>
                        <option value="nsw">NSW</option>
                        <option value="qld">QLD</option>
                        <option value="nt">NT</option>
                        <option value="wa">WA</option>
                        <option value="sa">SA</option>
                        <option value="tas">TAS</option>
                        <option value="act">ACT</option>
                    </select>
                </div>
                <div class="form_box">
                    <label for="postcode" class="main_label">POSTCODE</label>
                    <input required id="postcode" name="postcode" type="text" pattern="\d{4}" title="exactly 4 digits">
                </div>
            </div>

            <div class="form_line">
                <div class="form_box">
                    <label class="main_label">PREFERRED CONTACT</label>
                    <div id="radio_box">
                        <div>
                            <input required type="radio" id="prefercontact_email" name="prefercontact" value="email">
                            <label>Email</label>
                        </div>
                        <div>
                            <input type="radio" id="prefercontact_post" name="prefercontact" value="post">
                            <label>Post</label>
                        </div>
                        <div>
                            <input type="radio" id="prefercontact_phone" name="prefercontact" value="phone">
                            <label>Phone</label>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>ENQUIRY</legend>
            <div class="form_line">
                <div class="form_box">
                    <label for="product" class="main_label">PRODUCT</label>
                    <select required id="product" name="product">
                        <option value="" disabled selected>Please select</option>
                        <option value="">Novelties</option>
                        <option value="">Apex</option>
                        <option value="">Zenith</option>
                        <option value="">Radiance</option>
                        <option value="">Empyrean</option>
                        <option value="">Horizon</option>
                        <option value="">Luminary</option>
                        <option value="">Odyssey</option>
                    </select>
                </div>
            </div>

            <div class="form_line">
                <label class="main_label">PRODUCT FEATURES</label>
                <div id="checkbox_box">
                    <div>
                        <input checked="checked" type="checkbox" id="material" name="features[]" value="material">
                        <label>Material</label>
                    </div>
                    <div>
                        <input type="checkbox" id="water" name="features[]" value="water">
                        <label>Water resistance</label>
                    </div>
                    <div>
                        <input type="checkbox" id="strap" name="features[]" value="strap">
                        <label>Strap</label>
                    </div>
                    <div>
                        <input type="checkbox" id="movement" name="features[]" value="movement">
                        <label>Watch movement</label>
                    </div>
                </div>
            </div>

            <div class="form_line">
                <div class="form_box">
                    <label id="comment_label" for="comment">COMMENT</label>
                    <textarea id="comment" name="comment"
                        placeholder="Write description of your problem here..."></textarea>
                </div>
            </div>
        </fieldset>

        <div id="button_container">
            <button class="form_button" type="submit" value="book">SUBMIT</button>
            <button class="form_button" type="reset" value="reset">RESET</button>
        </div>
    </form>
    <!--The form section ends-->

    <!--The footer section starts-->
    <footer>
        <h4 class="contact">CONTACT</h4>
        <div class="footer_content">
            <p>Address: A35 Bach Dang St, Ho Chi Minh city</p>
            <p>Phone: (+84) 38-748-2345</p>
            <p>Hours: 8:00 - 22:00, Mon - Sun</p>
        </div>
        <p class="copyright">© 2023 CHRONO</p>
    </footer>
    <!--The footer section ends-->
</body>

</html>