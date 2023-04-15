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
                      /* Try to connect SQL database*/
                      $link1 = mysqli_connect('localhost', 'root', '', 'blogusers');
                              
                      // Check 
                      if($link1 === false){
                              die("ERROR: Could not connect. " . mysqli_connect_error());
                          }

                          $dataSQL = 'SELECT Title, Body, Date, Time FROM blogposts ORDER BY Date DESC, Time DESC';
                          $getUserBlogs = mysqli_query( $link1, $dataSQL );
                          
                          if(! $getUserBlogs ) {
                            die('Failure to get SQL data: ' . mysql_error());
                          }
                          
                          while($row = mysqli_fetch_array($getUserBlogs, MYSQLI_ASSOC)) {
                              echo "<p3>";
                              echo $row['Title'],"<br>";
                              echo "</p3>";
                              echo "<p2>";
                              echo  $row['Body'],"<br>";
                              echo "</p2>";
                              echo  "<br>";
                          }

              ?>
            </section>
          </figure>
        <footer> 
          <p><a href="Home.html">About Me</a>  -  <a href="Portfolio.html">Portfolio</a>  -  <a href="Contact.html">Contact</a>  -   <a href="Blog.html">Blog</a></p>
          <p5>Copyright (c) Syed Ali Raza 2022. All image rights belong to their original authors.</p5>
      </footer> 
    </html>