<?php 
session_start();
include 'rating.php';
?>

<html>

        <head>
        <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
     <style amp-custom>

            body
            {
              background-image:url("p2.jpg");
              margin:0;
            }

            .center
             {
            display: block;
            margin-left: 350px;
            margin-top:20px;
            width: 100%;
            }

            .cen
            {
            display: block;
            margin-left: 400px;
            margin-top:20px;
            width: 100%; 
            }
    
            .dropbtn {
         background-color: black;
         color: white;
         padding: 38px;
         font-size: 16px;
          border: none;
         cursor: pointer;
         width:500px;
            }

         .dropdown {
            position: relative;
            display: inline-block;
         }

         .dropdown-content {  
         display: none;
         position: absolute;
         background-color: #f9f9f9;
         min-width: 500px;
         box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
         z-index: 1;
          }

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: grey}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: black;
}

s1
{
	text-align:left;
    margin-left: 0;
	font-family:verdana;
	font-size:20px;
	color:white;
}

p1
{
	text-align: left;
	font-family:verdana;
	font-size:20px;
	color:white;
}

.rating {
      --star-size: 1.5;  /* use CSS variables to calculate dependent dimensions later */
      padding: 0;  /* to prevent flicker when mousing over padding */
      border: none;  /* to prevent flicker when mousing over border */
      unicode-bidi: bidi-override; direction: rtl;  /* for CSS-only style change on hover */
      text-align: left;  /* revert the RTL direction */
      user-select: none;  /* disable mouse/touch selection */
      font-size: 3em;  /* fallback - IE doesn't support CSS variables */
      font-size: calc(var(--star-size) * 1em);  /* because `var(--star-size)em` would be too good to be true */
      cursor: pointer;
      /* disable touch feedback on cursor: pointer - http://stackoverflow.com/q/25704650/1269037 */
      -webkit-tap-highlight-color: rgba(0,0,0,0);
      -webkit-tap-highlight-color: transparent;
      margin-bottom: 1em;
        }
      /* the stars */
      .rating > label {
        display: inline-block;
        position: relative;
        width: 1.1em;  /* magic number to overlap the radio buttons on top of the stars */
        width: calc(var(--star-size) / 3 * 1.1em);
      }
      .rating > *:hover,
      .rating > *:hover ~ label,
      .rating:not(:hover) > input:checked ~ label {
        color: transparent;  /* reveal the contour/white star from the HTML markup */
        cursor: inherit;  /* avoid a cursor transition from arrow/pointer to text selection */
      }
      .rating > *:hover:before,
      .rating > *:hover ~ label:before,
      .rating:not(:hover) > input:checked ~ label:before {
        content: "★";
        position: absolute;
        left: 0;
        color: gold;
      }
      .rating > input {
        position: relative;
        transform: scale(3);  /* make the radio buttons big; they don't inherit font-size */
        transform: scale(var(--star-size));
        /* the magic numbers below correlate with the font-size */
        top: -0.5em;  /* margin-top doesn't work */
        top: calc(var(--star-size) / 6 * -1em);
        margin-left: -2.5em;  /* overlap the radio buttons exactly under the stars */
        margin-left: calc(var(--star-size) / 6 * -5em);
        z-index: 2;  /* bring the button above the stars so it captures touches/clicks */
        opacity: 0;  /* comment to see where the radio buttons are */
        font-size: initial; /* reset to default */
      }
      form.amp-form-submit-error [submit-error] {
        color: red;
      }

            table 
            { 

            position: relative;
            border:1;
            border-collapse: collapse;
            width: 60%;
            display:none;
            float:right;
            }
    
            th, td 
            {
            background-color: #f2f2f2;
            padding: 10px;
            /* text-align: center; */
            border-bottom: 1px solid #ddd;
            }
    
            tr:hover 
            {
                background-color:#f5f5f5;
            }

            .center1
            {
                position:relative;
                margin-left:35%;
                margin-top:30%;
                /* margin-bottom:2%; */
            }

        .block
		{
		position: absolute;
		background-color: black;
    	margin: auto;
    	width: 50%;
    	margin-top: 5%;
    	left: 25%;
    	border: 3px solid black;
    	padding: 50px;
        text-align:center;
		}

        .box
        {
            display:inline-block;
        }
        

        .que
        {
            float:left;
            width:50%;
            text-align:center;
            margin-right:-1500px;
            margin-bottom:1%;
        
        }

        .rates
        {
            width:50%;
            margin-top:4.7%;
            margin-bottom:1%;
            float:left;
            margin-left:11.8%;
        }

        /* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: black;
  width:100%;
  margin-top:0;
  font-size:24px;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 30px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: grey;
  color: black;
}

/* Style the footer */
.footer {
  background-color: black;
  padding: 40px;
  margin-top:0;
}


        </style>
        </head>
    
        <body>
        <div class="topnav">
		<a href="home.php">Home</a>
		<a href="adminlogin.php">Admin</a>
		<a href="hodlogin.php">HOD</a>
		<a href="student.php">Student</a>
	</div>

    <br>

            <form action="studentfeedback.php" method="POST">
            <s1>  Hello
            <?php
	
         $name[0] = $_SESSION['na'];
         echo $name[0];

		?>
		</s1>
<br><br>

<s1 class="center">Select from the Faculty members below to share feedback</s1>
<br>
<div class="dropdown cen">
<select class="dropbtn" name="drop" id="drop" onChange='javascript:myfunction();myfunction1();';>
   <option>
  <button class="dropbtn">Faculty Members</button>
  </option>
  
  <div class="dropdown-content">
    
    <?php
    for( $j = 0 ; $j<count($_SESSION['teach']) ; $j++)
    {
    $staff[$j] = $_SESSION['teach'][$j];
    // echo $_SESSION['t'][$j];
    }
    for($j = 0 ; $j<count($_SESSION['teach']) ; $j++)
    {
      ?>

   <option>
    <?php 
         echo $_SESSION['teach'][$j];?></a>
    <?php } ?>
</option>
  </div>
  </select>
</div>

<div class="que">

<table id="displaytable">
                    <tbody>
                  <tr bgcolor="white">
                <th text-align:center>Questions</th>
                  </tr>

                  <?php
                   include 'page4.php';
                  ?>
                  
                  <?php
                  for( $j = 0 ; $j<count($_SESSION['q']) ; $j++)
                  {
                   $question[$j] = $_SESSION['q'][$j];
                   }

                    for($j = 0 ; $j<count($_SESSION['q']) ; $j++)
                    {
        
                     ?>

                  <tr>
                         <td height="73"> <?php echo $_SESSION['q'][$j];?></td>
                      </tr>
    <?php }?>
                        </tbody>
                  </table>

                            </div>

                        <div class="rates">

                  <table id="displaytable1">
                  <tbody>
                    <tr bgcolor="white">
                        <th style="text-align:left">Ratings</th>
                    </tr>

                    <tr height="42">
                    <td height="30"> 
                        <fieldset class="rating">
                        <input name="rating1" type="radio" id="rating5" value="5" on="change:rating.submit" />
                        <label for="rating5" title="5 stars">☆</label>

                        <input name="rating1" type="radio" id="rating4" value="4" on="change:rating.submit" />
                        <label for="rating4" title="4 stars">☆</label>

                        <input name="rating1" type="radio" id="rating3" value="3" on="change:rating.submit" />
                        <label for="rating3" title="3 stars">☆</label>

                        <input name="rating1" type="radio" id="rating2" value="2" on="change:rating.submit"  />
                        <label for="rating2" title="2 stars">☆</label>

                        <input name="rating1" type="radio" id="rating1" value="1" on="change:rating.submit" />
                        <label for="rating1" title="1 stars">☆</label>
                        </fieldset>
                    </td>
                    </tr>
                        
                    <tr>
                    <td height="30"> 
                        <fieldset class="rating">
                        <input name="rating2" type="radio" id="rating5" value="5" on="change:rating.submit" />
                        <label for="rating5" title="5 stars">☆</label>

                        <input name="rating2" type="radio" id="rating4" value="4" on="change:rating.submit" />
                        <label for="rating4" title="4 stars">☆</label>

                        <input name="rating2" type="radio" id="rating3" value="3" on="change:rating.submit" />
                        <label for="rating3" title="3 stars">☆</label>

                        <input name="rating2" type="radio" id="rating2" value="2" on="change:rating.submit"  />
                        <label for="rating2" title="2 stars">☆</label>

                        <input name="rating2" type="radio" id="rating1" value="1" on="change:rating.submit" />
                        <label for="rating1" title="1 stars">☆</label>
                        </fieldset>         
                    </td>
                    </tr>

                    <tr>
                    <td height="30"> 
                        <fieldset class="rating">
                        <input name="rating3" type="radio" id="rating5" value="5" on="change:rating.submit" />
                        <label for="rating5" title="5 stars">☆</label>

                        <input name="rating3" type="radio" id="rating4" value="4" on="change:rating.submit" />
                        <label for="rating4" title="4 stars">☆</label>

                        <input name="rating3" type="radio" id="rating3" value="3" on="change:rating.submit" />
                        <label for="rating3" title="3 stars">☆</label>

                        <input name="rating3" type="radio" id="rating2" value="2" on="change:rating.submit"  />
                        <label for="rating2" title="2 stars">☆</label>

                        <input name="rating3" type="radio" id="rating1" value="1" on="change:rating.submit" />
                        <label for="rating1" title="1 stars">☆</label>
                        </fieldset>
                    </td>
                    </tr>

                    <tr>
                    <td height="30"> 
                        <fieldset class="rating">
                        <input name="rating4" type="radio" id="rating5" value="5" on="change:rating.submit" />
                        <label for="rating5" title="5 stars">☆</label>

                        <input name="rating4" type="radio" id="rating4" value="4" on="change:rating.submit" />
                        <label for="rating4" title="4 stars">☆</label>

                        <input name="rating4" type="radio" id="rating3" value="3" on="change:rating.submit" />
                        <label for="rating3" title="3 stars">☆</label>

                        <input name="rating4" type="radio" id="rating2" value="2" on="change:rating.submit"  />
                        <label for="rating2" title="2 stars">☆</label>

                        <input name="rating4" type="radio" id="rating1" value="1" on="change:rating.submit" />
                        <label for="rating1" title="1 stars">☆</label>
                        </fieldset>          
                    </td>
                    </tr>

                    <tr>
                    <td height="30"> 
                        <fieldset class="rating">
                        <input name="rating5" type="radio" id="rating5" value="5" on="change:rating.submit" />
                        <label for="rating5" title="5 stars">☆</label>

                        <input name="rating5" type="radio" id="rating4" value="4" on="change:rating.submit" />
                        <label for="rating4" title="4 stars">☆</label>

                        <input name="rating5" type="radio" id="rating3" value="3" on="change:rating.submit" />
                        <label for="rating3" title="3 stars">☆</label>

                        <input name="rating5" type="radio" id="rating2" value="2" on="change:rating.submit"  />
                        <label for="rating2" title="2 stars">☆</label>

                        <input name="rating5" type="radio" id="rating1" value="1" on="change:rating.submit" />
                        <label for="rating1" title="1 stars">☆</label>
                        </fieldset>         
                    </td>
                    </tr>
                     </tbody>       
                  </table>

                  </div>
                  
                

<div class="center1">
<input type="submit" name="submit" value="submit"/>
 </div>

 <script type="text/javascript">
function myfunction()    
        {    
         var element=document.getElementById("displaytable");
         element.style.display="block";  
        }

        function myfunction1()    
        {    
          var element1=document.getElementById("displaytable1");   
          element1.style.display="block";  
        }

        function removeOption() 
        {
          var dropDown = document.getElementById("drop");

          for(var i = 0; i <= dropDown.options.length; i++) 
          {
            if (dropDown.options[i].selected) 
            {
                dropDown.removeChild(dropDown.options[i]);
                break;
            }
        }
        }
</script>

</form>

<div class="footer">
  	  </div>

        </body>
        
    </html>
    
