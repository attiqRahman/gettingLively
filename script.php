


<?php




    function OpenCon(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "getting_lively";
        
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        
        return $conn;
    }
    
    function CloseCon($conn){
        
    }

   

    function GetData(){

        

        $sql = "SELECT * FROM welcome_text_table";
        $result = mysqli_query(OpenCon(),$sql);
        
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            //   echo "id: " . $row["id"]. " - des: " . $row["welcome_text"]. "<br>";

              $id = $row["id"];
              $des = $row["welcome_text"];

              echo $id;
              echo $des;

              json_encode($id);


            }
          } else {
            echo "0 results";
          }
        
      





    }
    GetData();

    $test = "About";
    json_encode($test);
   
?>







<script>
// welcome text 

let welcome_text = "Welcome to getting lively";

// document.getElementById("welcome_text").innerHTML = welcome_text;

// welcome text ends





// about us section 

var about = <?php echo json_encode($id, JSON_HEX_TAG); ?>;
// console.log(about);
console.log("working");


// var about = "about";
console.log(about);

document.getElementById("about_text").innerHTML = about;

let about_text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."

document.getElementById("about_text_pg").innerHTML = about_text;

// about us section ends



// trending and bar image slider and imager slider texts 

let slider_header = "Trending"

document.getElementById("trending_text").innerHTML = slider_header;


var carousel_image = ["images/img1.jpg","images/img1.jpg","images/img1.jpg","images/img4.jpg"];
var carousel_title = ["Bar / club", "Bar / club", "Bar / club"];
var carousel_paragraph = ["Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo", "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo", "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo"];

for(i=0; i<carousel_image.length; i++){
    
    images = carousel_image[i];
    title = carousel_title[i]; 
    paragraph = carousel_paragraph[i];


    carousel_node = document.getElementById("carousel_items");

    carousel_div_images = document.createElement("div");
    carousel_div_images.setAttribute("class", "carousel-item");

    carousel_img = document.createElement("img");
    carousel_img.setAttribute("class", "d-block w-100");
    carousel_img.src = images;

    carousel_div_images.appendChild(carousel_img);

    carousel_div_caption = document.createElement("div");
    carousel_div_caption.setAttribute("class", "carousel-caption d-none d-md-block");

    carousel_caption_title = document.createElement("h5");
    carousel_caption_title.setAttribute("class", "lead");
    carousel_caption_title_text = document.createTextNode(title);
    carousel_caption_title.appendChild(carousel_caption_title_text);

    carousel_caption_paragraph = document.createElement("p");
    carousel_caption_paragraph.setAttribute("class", "lead");
    carousel_caption_paragraph_text = document.createTextNode(paragraph);
    carousel_caption_paragraph.appendChild(carousel_caption_paragraph_text);


    carousel_div_caption.appendChild(carousel_caption_title);
    carousel_div_caption.appendChild(carousel_caption_paragraph);
    carousel_div_images.appendChild(carousel_div_caption);
    carousel_node.appendChild(carousel_div_images);


}




// trending and bar image slider and imager slider texts ends





// User login form data 

const loginForm = document.getElementById("login_form");
loginForm.addEventListener("submit", (e) => {
    
    e.preventDefault();

    const email = document.querySelector('[id="login_email"]').value;
    
    const password = document.querySelector('[id="login_password"]').value;

    console.log(email);
    console.log(password);
    if ( email == "attic91221@gmail" && password == "456"){
        console.log("form submitted");
        window.location.href = "homepage.html";

    }else{
        console.log("wrong email and pass")
    }

    

});


// User login form data ends





// our guide items

// guide 1
guide_image1 = document.getElementById("guide_image1");
guide_title1 = document.getElementById("guide_title1");
guide_para1 = document.getElementById("guide_para1");

guide_image1.src = "images/The Circuit images 8.jpg";
guide_title1.innerHTML = "Bar / Club Name";
guide_para1.innerHTML = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip .";


// guide 2
guide_image2 = document.getElementById("guide_image2");
guide_title2 = document.getElementById("guide_title2");
guide_para2 = document.getElementById("guide_para2");

guide_image2.src = "images/The Circuit images 9.jpg";
guide_title2.innerHTML = "Bar / Club Name";
guide_para2.innerHTML = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ";


// our guide  ends 




// card starts


// card1
card1_image = document.getElementById("card_image1");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title1");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para1");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"

// card2
card1_image = document.getElementById("card_image2");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title2");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para2");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"

// card3
card1_image = document.getElementById("card_image3");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title3");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para3");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"

// card4
card1_image = document.getElementById("card_image4");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title4");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para4");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"

// card5
card1_image = document.getElementById("card_image5");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title5");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para5");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"

// card6
card1_image = document.getElementById("card_image6");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title6");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para6");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"


// card7
card1_image = document.getElementById("card_image7");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title7");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para7");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"


// card8
card1_image = document.getElementById("card_image8");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title8");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para8");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"


// card9
card1_image = document.getElementById("card_image9");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title9");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para9");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"

// card10
card1_image = document.getElementById("card_image10");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title10");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para10");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"

// card11
card1_image = document.getElementById("card_image11");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title11");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para11");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"

// card12
card1_image = document.getElementById("card_image12");
card1_image.src = "images/The Circuit images 17.jpg";
card1_title = document.getElementById("card_title12");
card1_title.innerHTML = "fuck you sam !"
card1_para = document.getElementById("card_para12");
card1_para.innerHTML = "alksdasdjashdjkasdjklasdkjasdjkaslkdj"


// card ends




// State card starts 

// State card ends


</script>