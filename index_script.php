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

        

        // welcome_text_Data

        $sql = "SELECT * FROM welcome_text_table WHERE id =1101";
        $result = mysqli_query(OpenCon(),$sql);
        
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            //   echo "id: " . $row["id"]. " - des: " . $row["welcome_text"]. "<br>";

              $des = $row["welcome_text"];

              $en_des = json_encode($des);
              echo "<div id='get_me'  style ='display : none;'> ". $en_des ."</div>";


            }
          } else {
            echo "0 results";
          }



        // About_Data

        $sql = "SELECT * FROM about_table WHERE id =1201";
        $result = mysqli_query(OpenCon(),$sql);
          
          
        if (mysqli_num_rows($result) > 0) {
              // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              //   echo "id: " . $row["id"]. " - des: " . $row["welcome_text"]. "<br>";
            
            $title = $row["title"];
            $des = $row["description"];


            $en_title = json_encode($title);
            echo "<div id='get_me'  style ='display : none;'> ". $en_title ."</div>";
                
            $en_des = json_encode($des);
            echo "<div id='get_me'  style ='display : none;'> ". $en_des ."</div>";
  
  
              }
            } else {
              echo "0 results";
            }



            // Trending_Data


        $sql = "SELECT * FROM trending_table";
        $result = mysqli_query(OpenCon(),$sql);
        $images = [];
        $title = [];
        $des =[];
          
          
        if (mysqli_num_rows($result) > 0) {
              // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              //   echo "id: " . $row["id"]. " - des: " . $row["welcome_text"]. "<br>";
            
            $ig = $row["images"];
            
            array_push($images,$ig);


           
            $tle = $row["title"];
            array_push($title,$tle);
            
            $ds = $row["description"];
            array_push($des,$ds);
            
  
  
              }
            } else {
              echo "0 results";
            }

        

        $en_images = json_encode($images);
        echo "<div id='get_me'  style ='display : none;'> ". $en_images ."</div>";

        $en_title = json_encode($title);
        echo "<div id='get_me'  style ='display : none;'> ". $en_title ."</div>";
                
        $en_des = json_encode($des);
        echo "<div id='get_me'  style ='display : none;'> ". $en_des ."</div>";   
        
      




        // Our guide first 2


        $sql = "SELECT * FROM our_guide_table";
        $result = mysqli_query(OpenCon(),$sql);
        $images = [];
        $title = [];
        $des =[];
          
          
        if (mysqli_num_rows($result) > 0) {
              // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              //   echo "id: " . $row["id"]. " - des: " . $row["welcome_text"]. "<br>";
            
            $ig = $row["images"];
            
            array_push($images,$ig);


           
            $tle = $row["title"];
            array_push($title,$tle);
            
            $ds = $row["description"];
            array_push($des,$ds);
            
  
  
              }
            } 
            // else {
            //   echo "0 results";
            // }

        

        $en_images = json_encode($images);
        echo "<div id='get_me'  style ='display : none;'> ". $en_images ."</div>";

        $en_title = json_encode($title);
        echo "<div id='get_me'  style ='display : none;'> ". $en_title ."</div>";
                
        $en_des = json_encode($des);
        echo "<div id='get_me'  style ='display : none;'> ". $en_des ."</div>";




        // Our Guide cards





    }
    GetData();
   
?>

