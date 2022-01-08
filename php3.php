 <html>
 <body>
     <h2>
        Application name: AAST_BIS class registration
     </h2>
     
         <p>
             <font color=red>*Required field.</font>
         </P>

         <form action="<?php $_PHP_SELF ?>" method="GET">



             Name: <input type="text" name="name"  required />
             <font color=red>*</font>
             <br>

            E-mail: <input type="text" name="E_mail" Email is required />
             <font color=red>*</font>
             <br>
             Group #: <input type="text" name="Group" />
             <br>
             class details :<textarea rows="5" cols="30" name="class_details"></textarea>
             <br>

             Gender:<input type="radio" id="gender" name="gender" value="Female" />Female

             <input type="radio" id="gender" name="gender" value="Male"  required />Male <font color=red>*</font>
             <br>

             Select Courses:<select name="courses[]" multiple="multiple">
                 <option value="select disabled selected ">------select-------</option>
                 <option value="java script">Java Script </option>
                 <option value="PHP">PHP</option>
                 <option value="my sql">My Sql</option>
                 <option value="html">HTML</option>
             </select>
             <br>
             Agree: <input type="checkbox">
             <font color=red>*</font>
             <br>
             <input type="submit" />
     <h2>
         Your given values are as:
     </h2>
     </form>
 </body>
 </html>
 <?php
    

    if (!empty($_GET["name"]) && !empty($_GET["E_mail"])) {

        echo "<br>";
        echo "Name: " . $_GET['name'] . "<br />";
        echo "E_mail:" . $_GET['E_mail'];
        echo "<br>";
        echo "Group#:" . $_GET['Group'];
        echo "<br>";
        echo "class_details:" . $_GET['class_details'];
        echo "<br>";
        echo "Gender:" . $_GET['gender'];
        echo "<br>";
        if($_GET['courses']){
            echo "your courses are ";
            foreach($_GET['courses'] as $course){
                echo $course." ";
            }
        }
        
    }
    ?>