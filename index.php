<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatbot</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <div class="container">
            <!-- chat box -->
            <div class="chat-box">
                <!-- client -->
                <div class="client">
                    <img src="logo.png" alt="logo" />
                    <div class="client-info">
                    <span><strong>Daya Dalvi </strong></span><span style="color:yellow"> online</span>                   </div>
                </div>

                <!-- main chat section -->
                <div class="chats">
                    <!-- <div class="client-chat">!</div> -->


                    <div class="client-chat" style="transition-timing-function: linear;">Hello there!<br>Do you need any help with following ?</div>
                    <div class="">
                        <input class="btn-opt" type="submit" onclick="visitedProj()" name="" value="Pricing & Planning" id="show">
                        <input class="btn-opt" type="submit" onclick="visitedProj()" name="" value="Amenities" id="">
                        <input class="btn-opt" type="submit" onclick="visitedProj()" name="" value="Book a Site Visit" id="">
                        <input class="btn-opt" type="submit" onclick="visitedProj()" name="" value="Online Presentation" id="">
                        <input class="btn-opt" type="submit" onclick="visitedProj()" name="" value="Get a Call Back" id="">
                    </div>
                    <div id="projv">

                    </div>
                    <div id="config">

                    </div>
                    <!-- <div class="my-chat">Watch complete video for your answer.</div> -->

                    <div id="phone">

                    </div>

                    <!-- input field section -->
                    <!-- <div class="chat-input">
                
                    <input id="data" type="text" placeholder="Type something here.." required> -->
                    <!-- <input type="text"placeholder="Enter Message" name="text"id="data">
                <input type="submit" class="send-btn" id="send-btn" placeholder="send">
                 
                </button> -->



                </div>
                <div class="typing-field">
                    <div id="ipphone"></div>
                </div>

                <!-- </div> -->
            </div>

            <!-- button -->
            <div class="chat-btn">
                <img src="Circle-icons-chat.svg.png" alt="chat box icon btn">
            </div>

        </div>
        <script>
            function visitedProj() {
                document.getElementById("projv").innerHTML = " <p class='client-chat' style='transition-timing-function: linear;''>Great, Have you ever visited our project before?</p><input class='btn-opt ' onclick='configProject()'type='submit' value='Yes'>&nbsp;<input class='btn-opt' onclick='configProject()'type='submit' value='No'>";

            }

            function configProject() {
                // var text = document.getElementById("config").value;
                document.getElementById("config").innerHTML = " <p class='client-chat'>Select configuration that you are looking for ?</p><input class='btn-opt' onclick='phoneNum()' type='submit' value='1 BHK'>&nbsp;&nbsp;<input class='btn-opt' onclick='phoneNum()' type='submit'  value='2 BHK' >&nbsp;&nbsp;<input class='btn-opt' type='submit' onclick='phoneNum()' value='3 BHK' >&nbsp;&nbsp;<input class='btn-opt' onclick='phoneNum()' type='submit'  value='4 BHK' >&nbsp;&nbsp;<input class='btn-opt' onclick='phoneNum()' type='submit' value='4+ BHK' > ";

            }

            function phoneNum() {
                document.getElementById("phone").innerHTML = " <p class='client-chat'>Please provide your phone number for details</p>";
                document.getElementById("ipphone").innerHTML = "<div class='input-data'><form action='message.php' method='POST'><input name='text' type='text' placeholder='Please enter your number...' required></from><button type='submit' id='send-btn' onclick='click()'>Send</button></div>";
            }
            // function ipNum() {
            //     document.getElementById("ipphone").innerHTML = " <div class='typing-field'><div class='input-data'><input id='data' type='text' placeholder='Type something here..' required><button id='send-btn' onclick='click()'>Send</button></div></div>";

            // }

            $(document).ready(() => {
    $(".chat-btn").click(() => {
        $(".chat-box").slideToggle("slow")
    })
})
        </script>
        <script src="jquery-3.4.1.min.js"></script>
        <script src="script.js"></script>
</body>

</html>