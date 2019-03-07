<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SCIS_Two
 */

?>

</div><!-- #content -->



<style>
.footer {
    position: absolute;
    width: 100%;
    /* height: 410px; */
    line-height: 25px;
    background-color: #F8C93E;
    color: black;
}

.footer .col {
    line-height: 25px;
}

.footer-1 {
    padding: 20px;
}

.footer-1 .container {
    width: 900px;
}

.footer ul {
    color: black;
    list-style: none;
}

.footer ul,
li {
    margin: 0 !important;
}

.footer ul .footer-header {
    font-weight: 900;
    font-size: 18px;
    color: #081E3F;
    font-family: "Bitter", Georgia, Times, "Times New Roman", serif !important;
}

.footer ul a {
    color: black;
}

.footer li a {
    color: black;
    text-decoration: underline !important;
    font-size: 16px;
}

.footer span {
    font-size: 16px;
}

.footer-2 {
    position: absolute;
    width: 100%;
    line-height: 25px;
    background-color: #081E3F;
    bottom: 0;
}

.footer-2-wrapper {
    width: fit-content;
    width: -moz-fit-content;
    height: -moz-fit-content;
    height: fit-content;
    margin: auto;
    padding-top: 30px;
}

.footer-2 a {
    color: #F8C93E;
}

.footer-2 img {
    height: 50px;
}

.footer-2 ul {
    width: 200px;
    left: 0;
    right: 0;
}

.footer-2 ul a {
    color: white;
}

.footer2-flex {
    display: flex;
}

.footer2-linkset1 {
    padding: 0 35px;
    text-decoration: underline;
    color: #F8C93E;
    font-size: 16px;
}

.footer2-linkset2 {
    padding: 15px 0 0 0;
    font-size: 15px;
}

.footer2-linkset1 a {
    margin: 0px 0px 0px 5px;
}


.footer2-linkset2 p {
    color: white;
}

@media only screen and (max-width:990px) {
    .footer {
        /* height: 460px; */
    }
}

@media only screen and (max-width:767px) {
    .footer2-linkset1 {
        font-size: 14px;
    }

    .footer2-linkset2 {
        font-size: 14px;
    }

    .footer {
        /* height: fit-content; */
        height: 1000px;
    }

    .footer-2 {
        height: 330px;
        bottom: 0;
    }

    .footer2-flex {
        display: block;
    }

    .footer-2 img {
        left: 0;
        right: 0;
        margin: auto;
        position: absolute;
    }

    .footer2-linkset1 {
        text-align: center;
        font-size: 16px;
        padding: 60px 0px 25px 0px;
    }

    .footer-2 ul {
        text-align: center;
        font-size: 20px;
        padding-left: 0px;
        margin: auto !important;
        line-height: 0px;
    }

    .footer2-linkset2 p {
        font-size: 17px;
        text-align: center;
        padding: 0 50px !important;
    }

    .third-row {
        padding-top: 20px;
    }

}

@media only screen and (max-width:640px) {
    .footer-1 .container {
        padding: 0 15px !important;
        width: fit-content;
    }
}

@media only screen and (max-width:320px) {
    .footer {
        /* height: 1120px; */
    }

    .footer-2 {
        height: 400px;
    }
}
</style>


<footer class="footer">
    <!-- <div class="footer-1">
        <div class="container">
            <div class="row">
                <div class="first-row col-sm-4 col-md-4 col-lg-4">
                    <ul>
                        <span class="footer-header">Resources</span>
                        <li>
                            <a href="https://www.cis.fiu.edu/academics/advising/">Advising</a>
                        </li>
                        <li>
                            <a href="https://onestop.fiu.edu/financial-aid/index.html">Financial Aid</a>
                        </li>
                        <li>
                            <a href="https://careerpath.cis.fiu.edu/">Jobs, Internships & Scholarships</a>
                        </li>
                        <li>
                            <a href="https://www.cis.fiu.edu/about/contact-information/">Map & Direction</a>
                        </li>
                        <li>
                            <a href="https://www.cis.fiu.edu/community/">Outreach</a>
                        </li>
                        <li>
                            <a href="https://www.cis.fiu.edu/students/tutoring/">Tutoring</a>
                        </li>
                    </ul>
                </div>
                <div class="second-row col-sm-4 col-md-4 col-lg-4">
                    <ul>
                        <span class="">
                            <br>
                        </span>
                        <li>
                            <a href="https://www.cis.fiu.edu/academics/degrees/">Degree Programs</a>
                        </li>
                        <li>
                            <a href="https://www.cis.fiu.edu/online/">Distance & Online Education</a>
                        </li>
                        <li>
                            <a href="https://www.cis.fiu.edu/faculty-staff/">Faculty & Staff Directory</a>
                        </li>
                        <li>
                            <a href="https://www.cis.fiu.edu/students/labs/">Labs</a>
                        </li>
                        <li>
                            <a href="https://mail.cs.fiu.edu/sqmail/src/login.php">SCIS Mail</a>
                        </li>
                        <li>
                            <a href="https://www.cis.fiu.edu/support/">Technical Support</a>
                        </li>
                    </ul>
                </div>
                <div class="third-row col-sm-4 col-md-4 col-lg-4">
                    <ul>
                        <span class="footer-header">School of Computing and
                            <br>Information Sciences</span>
                        <br>
                        <span>11200 SW 8th Street
                            <br>ECS 354
                            <br>Miami, FL 33199</span>
                        <br>
                        <br>
                        <span>Tel: 305-348-2744</span>
                        <br>
                        <span>Fax: 305-348-3549</span>
                    </ul>
                    <ul>
                        <a href="https://www.facebook.com/FiuScis" target="_blank">
                            <i class="fa fa-facebook "></i>
                        </a>
                        <a href="https://twitter.com/FIUSCIS" target="_blank">
                            <i class="fa fa-twitter "></i>
                        </a>
                        <a href="https://www.instagram.com/fiuscis/" target="_blank">
                            <i class="fa fa-instagram "></i>
                        </a>
                        <a href="https://www.linkedin.com/school/24599051/" target="_blank">
                            <i class="fa fa-linkedin "></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCHjBLffypWyAEPV3BIRHCvQ" target="_blank">
                            <i class="fa fa-youtube "></i>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <div class="footer-2">
        <div class="footer-2-wrapper">
            <div class="footer2-flex">
                <img src="https://eicdev.fiu.edu/divischool/wp-content/themes/Divi-child/img/fiu-white-logo.png" alt="">
                <div class="footer2-linkset1">
                    <a href="http://campusmaps.fiu.edu/index.html#/campus/MMC" target="_blank">Campus Maps</a>
                    <a href="https://calendar.fiu.edu/index.php/events/today/" target="_blank">Calendar</a>
                    <a href="http://phonebook.fiu.edu/" target="_blank">Phonebook</a>
                    <a href="https://social.fiu.edu/" target="_blank">Social Directory</a>
                    <br>
                    <a href="https://studentaffairs.fiu.edu/" target="_blank">Student Affairs</a>
                    <a href="https://www.fiu.edu/atoz/" target="_blank">A-Z Index</a>
                    <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">PantherMail</a>
                    <a href="https://my.fiu.edu/" target="_blank">MyFIU</a>
                </div>
                <ul>
                    <a href="https://www.facebook.com/floridainternational" target="_blank">
                        <i class="fa fa-facebook fa-lg"></i>
                    </a>
                    <a href="https://twitter.com/fiu" targe="_blank">
                        <i class="fa fa-twitter fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/fiuinstagram/" target="_blank">
                        <i class="fa fa-instagram fa-lg"></i>
                    </a>
                    <a href="https://www.youtube.com/user/FloridaInternational" target="_blank">
                        <i class="fa fa-youtube fa-lg"></i>
                    </a>
                    <a href="http://fiu.tumblr.com/" target="_blank">
                        <i class="fa fa-tumblr fa-lg"></i>
                    </a>
                    <a href="http://fiu.tumblr.com/" target="_blank">
                        <i class="fa fa-flickr fa-lg"></i>
                    </a>
                </ul>
            </div>
            <div class="footer2-linkset2">
                <p>©
                    <?php echo date('Y'); ?>
                    <a href="https://www.fiu.edu/">Florida International University</a> |
                    <a href="https://policies.fiu.edu/policy/755">Web/Accessibility Policy</a> |
                    <a href="https://webs.cs.fiu.edu/?_ga=2.113077442.730115205.1512578845-1528975684.1506546839"> SCIS
                        WebDev</a> |
                    <a href="https://www.cis.fiu.edu/website-feedback/">Website Feedback</a>
                </p>
            </div>
        </div>
</footer>


</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
/* Google Custom Search ID */
var gseID = "PUT_SITE_GSE_ID_HERE";
</script>
<script>
(function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&amp;l=' + l : '';
    j.async = true;
    j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-5GFMR34');
</script>

<script src="https://digicdn.fiu.edu/v1/_assets/js/jquery.min.js" type="text/javascript"></script>
<script src="https://digicdn.fiu.edu/v1/_assets/js/foundation.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://digicdn.fiu.edu/v1/_assets/js/core-scripts.js"></script>
</body>

</html>