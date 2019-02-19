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
        <p style="margin-bottom:69px;"></p>      
            <?php
           // retrieve all the questions from database
            class DBphp extends SQLite3 {function __construct(){$this->open('test.db');}}
            
            $db = new DBphp();
             $query1="SELECT * FROM Questions;";
             $result1 = $db->query($query1); // result returns False if credentials not found in database
              
             while ($row = $result1->fetchArray()){
                // now for every question there are answers
                 echo '<div class="pst-a"><div id="q-ans-el-1"><p>'.$row["question"].'</p><textarea id='.$row["question_id"].' type="text" placeholder="Write your answer..."></textarea><button style="background:#809fff; border:1px solid #ffffff; padding:10px; font-size:20px; border-radius:20px; color:#ffffff; margin:10px;" onclick="publish_answer(this,'.$row["question_id"].',\''.$_SESSION['username'].'\' )">Publish Answer</button>';
                 $query2 = "SELECT * FROM Answers where question_id = ".$row["question_id"].";";
                 //echo $query2;
                 $result2 = $db->query($query2); // result returns False if credentials not found in database
                 while ($row3 = $result2->fetchArray()){
                     //echo "ANswer = ".$row3["answer"]."  <br> by user = ".$row3["username"]." <br> Likes = ".$row3["likes"];
                   echo '
                   <div id="q-ans-in-1">
                   
                      <div id="prev-ans">
                                <div id="u-info">
                                    <img src="images/user.png" width="40px" height="auto" style="float:left; overflow:hidden; margin-left:4%; margin-top:15px; margin-right:0"><p style="font-size:20px; margin-top:0; border:none; margin-bottom:20px; padding-left:2%;">'.$row3["username"].'</p><p style="border:none; margin-left:0; margin-top:-45px; font-size:17px; color:rgba(0, 0, 0, 0.5); padding-left:2%;">A witPost user &#8226; x mins. ago</p>
                                </div>    
                        <p>'.$row3["answer"].
                       '<img style="margin:10% 1% 2% 2%; float:left;" src="images/upvote2.png" width="30px" height="auto" id="uTrans" onclick="uTrnsFun()">
                        <script>
                            function uTrnsFun() {
                                document.getElementById("uTrns").src = "images/upvote.png";
                            }
                        </script>    
                        <img style="margin:10% 1% 2% 2%; float:left" src="images/downvote2.png" width="30px" height="auto" id="dTrns" onclick="dTrnsFun()">
                        <script>
                            function dTrnsFun() {
                                document.getElementById("dTrns").src = "images/downvote.png";
                            }
                        </script>
                        <textarea style="width:40%; float:left; margin:5% 1% 2% 5%; border-radius:10px;" type="text" placeholder="Comment..."></textarea></p>    
                    </div>
                </div>';
                     
                 } // end second inner while loop
                 
                echo "</div></div>" ;
            }//end first while loop
        echo "</div>";
    
             ?>
            
            
            
        </div>    
    </article>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    
    function publish_answer(button_object, question_id, username){
        
    var textarea = document.getElementById(question_id);
    var answer = textarea.value;
    $.ajax({
                type: 'POST',
                url: 'publish_answer.php' ,
                data: { "answer": answer,"username": username,"question_id":question_id },
                success : function() { 

                    // here is the code that will run on client side after running clear.php on server

                    // function below reloads current page
                    location.reload();
                   // alert("Success in publishing answer");

                }
            })
        
    };
    
    

</script>
     
</body>
    
</html>