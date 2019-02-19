<?php



?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="images/fevicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>witPost | Home</title>
    <meta charset = utf-8>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    type="text/javascript" charset="utf-8"></script>
    <meta name="author:insTap" content="insTap, &copy; 2019">
    
</head>
    
<body>
    
    <header>
        <div class="hb-t">
            <div id="ls">
                <img src="images/logo2.png" width="90%" height="auto">
            </div>
            <div id="s">
                <form method="get" action="">
                    <input type="text" spellcheck="false" placeholder="Search for questions">
                    <img src="images/voice_search.png" height="30px" width="auto">
                </form>
            </div>
            <div id="ml-rd">
                <a href="#"><img title="Write us" src="images/email_redirect.png" width="15%" height="auto"></a>
                <a href="#"><img title="Twitter" src="images/twitter_redirect.png" width="15%" height="auto"></a>
                <a href="#"><img title="Instagam" src="images/insta_redirect.png" width="15%" height="auto"></a>
                <a href="#"><img title="Facebook" src="images/facebook_redirect.png" width="15%" height="auto"></a>
                <a href="#"><img title="Telegram" src="images/telegram_redirect.png" width="15%" height="auto"></a>
                <a href="#"><img title="LinkedIn" src="images/linkedIn_redirect.png" width="15%" height="auto"></a>
            </div>
            
            
            <div id="u-acc">
                <div id="m-si-uc">
                    <div class="m-si-uc-dd">
                        <a href="#"><img src="images/user.png" height="33px" width="auto"></a>
                        <div class="m-si-uc-opt">
                            <a href="#" style="cursor:not-allowed">Welcome
                            <?php
                            session_start();
                            echo $_SESSION['username'];
                            ?></a>
                        </div>
                    </div>
                </div>
            </div> 
            <div id="m-u">
                <div id="m-si-uc">
                    <div class="m-si-uc-dd">
                        <a href="#"><img src="images/menu.png" height="25px" height="auto"></a>
                        <div class="m-si-uc-opt">
                            <a href="#">Log out</a>
                            <a href="#">My Account</a>
                            <a href="#">My Questions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <article>
        <div class="pst-cr-q">
            <div id="q-ask-el-1">
                <p>Ask a question</p>
                <div id="q-ask-inp">
                    <textarea type="text" placeholder="Write here..."></textarea>
                    <div id="img-li">
                        <ul>
                            <li><a href="#"><img src="images/create_img.png" title="Add photos" height="25px" width="auto" style="display:inline; margin-top:10px;"></a></li>
                            <li><a href="#"><img src="images/create_link.png" title="Add link(s)" height="25px" width="auto" style="display:inline; margin-top:10px;"></a></li>
                            <li><a href="#"><img src="images/create_location.png" title="Add Location" height="25px" width="auto" style="display:inline; margin-top:10px"></a></li>
                            <li><a href="#"><p>Request answer</p></a></li>
                        </ul>    
                    </div>
                </div>
            </div>    
        </div>
    </article>
    
    <footer>
        <ul><li><a href="http://saurz.github.io">About Developer</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="#">Privacy Policy</a></li></ul>
        <p>witPost &copy; 2019</p>
    </footer>
    
    <article>
        
        
        <div class="pst-a">
            <div id="q-ans-el-1">
                <p>What are "Tachyons"? Is it possible to detect them?</p>
                <div id="q-ans-in-1">
                    <textarea type="text" placeholder="Write your answer..."></textarea>
                    <div id="prev-ans">
                        <div id="u-info">
                            <img src="images/user.png" width="40px" height="auto" style="float:left; overflow:hidden; margin-left:4%; margin-top:10px; margin-right:0"><p style="font-size:20px; margin-top:0; border:none; margin-bottom:20px; padding-left:2%;">USER ABC</p><p style="border:none; margin-left:0; margin-top:-50px; font-size:17px; color:rgba(0, 0, 0, 0.5); padding-left:2%;">a witPost user &#8226; x mins. ago</p>
                        </div>    
                        <p>Technically.. it is a hypothetical particle based on Albert Einstein’s statement “ Nothing can accelerate to the speed of light”.. Tachyon is thought to be a particle with initial velocity greater than of light.. which does not need to accelerate to the speed of light .. therefore it does not disagree with the law of general relativity but cannot explain the phenomenon ‘casuality’<br>

                         P.S - Scientists have already conducted tests with - neutrino’s - one of the strangest well-known particles in physics — have now been observed smashing past this cosmic speed barrier of 186,282 miles per second (299,792 kilometer per seconds)<br>

                         CERN says a neutrino beam fired from a particle accelerator near Geneva to a lab 454 miles (730 kilometers) away in Italy traveled 60 nanoseconds faster than the speed of light. Scientists calculated the margin of error at just 10 nanoseconds, making the difference statistically significant. But given the enormity of the find, they still spent months checking and rechecking their results to make sure there was no flaws in the experiment.<br>

                         Edit: The Cern experiment was declared wrong due to some errors that occurred while Calculating distance between the two points.<br>

                         (They used GPS - a system that relies on relativity try and prove relativity was wrong)..<br>
                        <img style="margin:5% 1% 2% 2%; float:left;" src="images/upvote2.png" width="30px" height="auto" id="uTrns" onclick="uTrnsFun()">
                        <script>
                            function uTrnsFun() {
                                document.getElementById("uTrns").src = "images/upvote.png";
                            }
                        </script>    
                        <img style="margin:5% 1% 2% 2%; float:left;" src="images/downvote2.png" width="30px" height="auto" id="dTrns" onclick="dTrnsFun()">
                        <script>
                            function dTrnsFun() {
                                document.getElementById("dTrns").src = "images/downvote.png";
                            }
                        </script>
                        <textarea style="width:40%; float:left; margin:3% 1% 2% 5%; border-radius:10px;" type="text" placeholder="Comment..."></textarea></p>    
                    </div>
                </div>
            </div>
            <div id="q-ans-el-1">
                <p>How does Einstein's cosmological constant relate to dark energy?</p>
                <div id="q-ans-in-1">
                    <textarea type="text" placeholder="Write your answer..."></textarea>
                    <div id="prev-ans" style="margin-bottom:3%">
                        <div id="u-info">
                            <img src="images/user.png" width="40px" height="auto" style="float:left; overflow:hidden; margin-left:4%; margin-top:10px; margin-right:0"><p style="font-size:20px; margin-top:0; border:none; margin-bottom:20px; padding-left:2%;">USER ABC</p><p style="border:none; margin-left:0; margin-top:-50px; font-size:17px; color:rgba(0, 0, 0, 0.5); padding-left:2%;">a witPost user &#8226; x mins. ago</p>
                        </div>    
                        <p>Einstein had an awesome insight around 1914 ; that for the universe to stay expanded, it had to have an antigravity mechanism, or an opposing force against gravity to prevent a gravitation- mediated collapse of the universe. This was an intuition of sheer genius which no one had thought of before him, or even after him until cosmological data in late 90s compelled astrophysicists to think of the antigravity mechanism again. Though Einstein had cast this postulate for a static universe which was the theory during his time, it equally applied to an expanding universe. With Hubble’s discovery of an expanding universe, Einstein thought he had made a mistake, and that his concept of the ‘cosmological constant’ which was the antigravity mechanism he had postulated, had prevented him from predicting an expanding universe. This greatly frustrated him and he called his ‘cosmological constant’ the biggest blunder of his life ! The cosmological constant appears as the Greek letter lamda in his general relativity field equations. It turned out that he was prophetically correct all along regarding the ‘cosmological constant’ which is taken as a very accurate description of what is now known as ‘dark energy’. Even when he thought he was wrong, he turned out to be right nearly eighty years later !! How amazing is that ?? Kaiser T, MD<br>
                        <img style="margin:5% 1% 2% 2%; float:left;" src="images/upvote2.png" width="30px" height="auto"><img style="margin:5% 1% 2% 2%; float:left;" src="images/downvote2.png" width="30px" height="auto"><textarea style="width:40%; float:left; margin:3% 1% 2% 5%; border-radius:10px;" type="text" placeholder="Comment..."></textarea></p>    
                    </div>
                </div>
            </div>
            
        </div>    
    </article>
     
</body>
    
</html>