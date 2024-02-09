<!-- Header -->
<header id='header-home' <?php echo "class='bg-image-home " . $page_category . "'" ?> >
    <div class='container'>

      <!-- Navigation -->
      <nav id='menu'>
        <img src='images/logo/logo_dark_small.png' alt='RA Logo' class='logo'>
        <ul>
          <li <?php if ($page_category == 'main_info')  {echo "class='current'";} ?> ><a href='index.php'>Home</a></li>
          <li <?php if ($page_category == 'mathematics'){echo "class='current'";} ?> ><a href='mathematics.php'>Mathematics</a></li>
          <li <?php if ($page_category == 'statistics') {echo "class='current'";} ?> ><a href='statistics.php'>Statistics</a></li>
          <li <?php if ($page_category == 'economics')  {echo "class='current'";} ?> ><a href='economics.php'>Economics</a></li>
          <li <?php if ($page_category == 'regression') {echo "class='current'";} ?> ><a href='regression.php'>Regression</a></li>
          <li <?php if ($page_category == 'software')   {echo "class='current'";} ?> ><a href='software.php'>Software</a></li>
          <li <?php if ($page_category == 'programming'){echo "class='current'";} ?> ><a href='programming.php'>Programming</a></li>
        </ul>
      </nav>

      <!-- Title Box -->

      <div class='container-2'>
        <div class='title-box'>
          <h1>
            <?php 
              switch ($page_category) {
                case 'main_info':    echo 'Enhance Your Skills'; break;
                case 'mathematics':  echo 'Mathematics'        ; break;
                case 'statistics':   echo 'Statistics'         ; break;
                case 'economics':    echo 'Economics'          ; break;
                case 'regression':   echo 'Regression'         ; break;
                case 'software':     echo 'Software'           ; break;
                case 'programming':  echo 'Programming'        ; break;
              } 
            ?>
          </h1>
          <p>
            <?php 
                switch ($page_category) {
                  case 'main_info':    echo 'A resource for students and professionals to sharpen their understanding in Mathematics, Statistics, and Economics';         break;
                  case 'mathematics':  echo 'The foundation for virtually all analytical techniques - from algebra to calculus, build a solid base for your pathway';     break;
                  case 'statistics':   echo 'Data analysis stands on the concepts of statistics and probability - understand the core fundamentals and apply them';       break;
                  case 'economics':    echo 'Model behaviors to understand the decisions individuals and businesses make, theoretically and in real world settings';      break;
                  case 'regression':   echo 'Econometrics - where statistics and economics overlap, and one of the most useful subjects in rigorous analytical thinking'; break;
                  case 'software':     echo 'The tools needed in both professional and academic settings to apply your analytical techniques and present your findings';  break;
                  case 'programming':  echo 'Dive into the language of technology to create your own tools for data analysis and data visualization';                     break;
                } 
              ?>
          </p>
          <a href='#about' class='btn'>More</a>
        </div>
      </div>

      <script>
        $(window).resize(function() 
        {
          if ($(this).height() < 600) 
          {
            $('.container-2').hide();
          } 
          else 
          {
            $('.container-2').show();
          }
        });
      </script>
      
    </div>

  </header>