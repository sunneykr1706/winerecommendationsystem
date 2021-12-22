<?php 
 header("Access-Control-Allow-Origin: *");
  $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://6cb2bbc9414ed837d085f0c5ac809700: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@winesubscribe12.myshopify.com/admin/api/2021-10/products.json",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	//CURLOPT_POSTFIELDS => "shopName=%3Ewinesubscribe12%3E&accessToken=%3E6cb2bbc9414ed837d085f0c5ac809700%3E",
	CURLOPT_HTTPHEADER => [
		"content-type: application/x-www-form-urlencoded",
		"x-rapidapi-host: https://winesubscribe12.myshopify.com/admin/api/2021-10/products.json",
		"x-rapidapi-key: 6cb2bbc9414ed837d085f0c5ac809700"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo "fdf";
	//$json_data = file_get_contents($response);
	$txet=json_decode($response,true);
	//echo $txet['products'][0]['tags'];
	//$characters = json_decode($response); 
	//echo $response;
 
	echo $txet['products'][0]['tags'];
	$i=0;
  //$car[]=array(10);
	while($i<9)
	{
		 $car[$i]=$txet['products'][$i]['tags'];
		//echo "<br>";
		$i++;
	}
	 
	}
  $fek=$car;
?>
Simple Javascript Quiz Demo<!-- (A) LOAD QUIZ CSS + JS -->
<style type="text/css"><!--
/* (A) WRAPPER */
#quizWrap {
  max-width: 600px;
  margin: 0 auto;
  /* RECOMMENDED FIXED HEIGHT IF YOU HAVE CONTENT BELOW THE QUIZ */
  /* SO THAT PAGE LAYOUT DOES NOT "JUMP" */
  /* height: 250px; */
}

/* (B) QUESTION */
#quizQn {
  padding: 20px;
  background: #4c93ba;
  color: #fff;
  font-size: 24px;
  border-radius: 10px;
}

/* (C) ANSWERS */
#quizAns {
  margin: 10px 0;
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 10px;
}
#quizAns input[type=radio] { display: none; }
#quizAns label {
  background: #fafafa;
  border: 1px solid #eee;
  border-radius: 10px;
  padding: 10px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
}
#quizAns label.correct {
  background: #d8ffc4;
  border: 1px solid #60a03f;
}
#quizAns label.wrong {
  background: #ffe8e8;
  border: 1px solid #c78181;
}

/* (D) BODY... DOES NOT QUITE MATTER */
html, body {
  background: #74b6db;
  font-family: arial, sans-serif;
}
 --></style>
 <script type="text/javascript">
    var stringArray = new Array();
    var sar = new Array();
    //var kk=0;
	<?php
        echo "sar[0]='$fek[0]';";
        echo "sar[1]='$fek[1]';";
        echo "sar[2]='$fek[2]';";
        echo "sar[3]='$fek[3]';";
        echo "sar[4]='$fek[4]';";
        echo "sar[5]='$fek[5]';";
        echo "sar[6]='$fek[6]';";
        echo "sar[7]='$fek[7]';";
        echo "sar[8]='$fek[8]';";
	?>
	//console.log(sar[0]);
  //console.log(sar[1]);
  var quiz = {
  // (A) PROPERTIES
  // (A1) QUESTIONS & ANSWERS
  // Q = QUESTION, O = OPTIONS, A = CORRECT ANSWER
  data: [
  {
    q : "What is the standard distance between the target and archer in Olympics?",
    o : [
      "All white",
      "Mostly white",
      "A Mix of Red & White",
      "Mostly red",
      "All red"
    ],
    a : 1 // arrays start with 0, so answer is 70 meters
  },
  {
    q : "What kind of flavors do you like? Select the heart button if you enjoy, select the X button if you’re not a fan. - Tinder like answers (X, heart)",
    o : [
      "White Peach",
      "Lemon",
      "Baking Spice",
      "Black cherry",
      "Strawberry",
      "Pear",
      "Honey",
      "Raspberry",
      "Black currant",
      "Pomegranate"
    ],
    a : 3
  },
  {
    q : "Some lunatic mixed Skittles and M&M’s in the same bowl. Which do you pick out to eat? This lets us know if you prefer sweet or tart flavors, and also, if you're a little crazy.",
    o : [
      "All skittles",
      "Both. In my mouth. At the same time.",
      "All M&Ms"
    ],
    a : 2
  },
  {
    q : "What regions are you interested in trying wines from? We make wines from over 12 different countries, so we'll try to pair you with regions you enjoy.",
    o : [
      "Australia",
      "Portugal",
      "South Africa",
      "Spain",
      "France",
      "Argentina"
    ],
    a : 0
  },
  {
    q : "Like food? Tell us all your faves. For our foodie friends - this helps us recommend wines that pair well with your favorite eats.",
    o : [
      "Cheese",
      "Cured meat",
      "Shellfish",
      "Salad",
      "Pizza",
      "BBQ",
      "Thai",
      "Veggies",
      "Poultry",
      "Chocolate cake",
      "Fish",
      "Pasta with cream sauce",
      "Sushi",
      "Chinese",
      "Burgers",
      "Lamb",
      "Indian",
      "Stew",
      "Chili",
      "Red pasta",
      "Fries",
      "Fruit",
      "Mexican"
    ],
    a : 3
  }
  ],

  // (A2) HTML ELEMENTS
  hWrap: null, // HTML quiz container
  hQn: null, // HTML question wrapper
  hAns: null, // HTML answers wrapper

  // (A3) GAME FLAGS
  now: 0, // current question
  score: 0, // current score

  // (B) INIT QUIZ HTML
  init: function(){
    // (B1) WRAPPER
    quiz.hWrap = document.getElementById("quizWrap");
    console.log(quiz.hWrap);
    // (B2) QUESTIONS SECTION
    quiz.hQn = document.createElement("div");
    quiz.hQn.id = "quizQn";
    quiz.hWrap.appendChild(quiz.hQn);

    // (B3) ANSWERS SECTION
    quiz.hAns = document.createElement("div");
    quiz.hAns.id = "quizAns";
    quiz.hWrap.appendChild(quiz.hAns);
    console.log(quiz.hAns);
    // (B4) GO!
    quiz.draw();
  },

  // (C) DRAW QUESTION
  draw: function(){
    // (C1) QUESTION
    quiz.hQn.innerHTML = quiz.data[quiz.now].q;

    // (C2) OPTIONS
    quiz.hAns.innerHTML = "";
    for (let i in quiz.data[quiz.now].o) {
      let radio = document.createElement("input");
      radio.type = "radio";
      radio.name = "quiz";
      radio.id = "quizo" + i;
      quiz.hAns.appendChild(radio);
      let label = document.createElement("label");
      label.innerHTML = quiz.data[quiz.now].o[i];
      label.setAttribute("for", "quizo" + i);
      label.dataset.idx = i;
      label.addEventListener("click", quiz.select);
      quiz.hAns.appendChild(label);
    }
  },

  // (D) OPTION SELECTED
  
  select: function(){
    // (D1) DETACH ALL ONCLICK
    let all = quiz.hAns.getElementsByTagName("label");
    for (let label of all) {
      label.removeEventListener("click", quiz.select);
    }

    // (D2) CHECK IF CORRECT
    let correct = this.dataset.idx == quiz.data[quiz.now].a;
    let asd=quiz.data[quiz.now].o[this.dataset.idx];
    stringArray[quiz.now]=asd;
 ///quiz.data[quiz.now].o[this.dataset.idx]
   /// console.log(quiz.data.o.this.dataset.idx);
   // console.log(this.dataset.idx);
    if (correct) {
      quiz.score++;
      this.classList.add("correct");
    } else {
      this.classList.add("wrong");
    }

    // (D3) NEXT QUESTION OR END GAME
    quiz.now++;
    var ll=0;
    var kk= new Array();
    setTimeout(function(){
      if (quiz.now < quiz.data.length) { quiz.draw(); }
      else {
        for(let i=0;i<9;i++)
        {
          console.log("del");
            var sd=sar[i];
            console.log(sd);
            if(sd.indexOf(stringArray[4]) !== -1 )
            {
              console.log("delasd");
               kk[ll]=i;
               ll++;
            }
        }
        quiz.hQn.innerHTML = `Your recommended product is <a href="https://www.w3schools.com/Tags/tag_link.asp" > ${kk[0]+1} and ${kk[1]+1} and selected feilds are  ${stringArray[0]} , ${stringArray[1]}   ,  ${stringArray[2]} ,  ${stringArray[3]} ,${stringArray[4]} `;
        quiz.hAns.innerHTML = "";
      }
    }, 10);
    
     
  },

  // (E) RESTART QUIZ
  reset : function () {
    quiz.now = 0;
    quiz.score = 0;
    quiz.draw();
  }
};	 
window.addEventListener("load", quiz.init);
// ]]></script>