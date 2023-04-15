<!DOCTYPE html>
    <html>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style01.css">
    <body>
      <hgroup>
        <article>
            <header>
              <h1>Syed Ali Raza</h1>
              <h3>Computer Science Student at Queen Mary University of London</h3>
            </header>
          </article>
        </hgroup>
        <nav><ul>
          <p><a href="Home.html">About Me</a>  |  <a href="Portfolio.html">Portfolio</a>  |  <a href="Contact.html">Contact</a>   |  <a href="Blog.html">Blog</a></p>
        </ul>  </nav>
        <section>
          <figure>
              <?php
              
                      /* Try to connect*/
                      $link1 = mysqli_connect('localhost', 'root', '', 'blogusers');
                              
                      // Check 
                      if($link1 === false){
                              die("ERROR: Could not connect. " . mysqli_connect_error());
                          }

                      error_reporting(E_ERROR | E_PARSE); // Do not show warning messages!

                      $inputEmail = $_POST["email"];
                      $inputpassword = $_POST["pwd"];
                      $validInput = True;

                      // Validation with SQL (Email)
                      $emailValidate = "SELECT * FROM `blogusers` WHERE `email` LIKE '$inputEmail'";
                      $searchEmail = mysqli_query($link1, $emailValidate);
                      $emailRow = mysqli_fetch_row($searchEmail);

                      if($emailRow[0] >= 1) {
                          } else {
                              $validInput = False;
                        }

                      // Validation with SQL (password)
                      $passwordValidate = "SELECT * FROM `blogusers` WHERE `password` LIKE '$inputpassword'";
                      $searchPassword = mysqli_query($link1, $passwordValidate);
                      $passwordRow = mysqli_fetch_row($searchPassword);

                      if($passwordRow[0] >= 1) {
                          } else {
                              $validInput = False;
                        }

                      if ($validInput){
                          session_start(); // Start  session upon login
                          header("Location: addPost.html");
                      }
                      else{
                          echo "<p2><br>Invalid username/password were entered. Please go back & try again.";
                      }

              ?>
              </section>
                    </figure>
       <footer> 
          <p><a href="Home.html">About Me</a>  -  <a href="Portfolio.html">Portfolio</a>  -  <a href="Contact.html">Contact</a>  -   <a href="Blog.html">Blog</a></p>
          <p5>Copyright (c) Syed Ali Raza 2022. All image rights belong to their original authors.</p5>
       </footer> 
    </html>