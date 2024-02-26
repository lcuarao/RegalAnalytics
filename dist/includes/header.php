<!-- Header -->
<header <?php echo "class='hero bg-image " . $page_category . "'" ?>>

  <div id='navbar' class='navbar'>

    <img src='images/logo/logo_white_small.png' alt='RA Logo' class='logo'>

    <!-- Navigation -->
    <nav>
      <ul>

        <li <?php if ($page_category == 'main_info') {
              echo "class='current'";
            } ?>><a href='index.php'>Home</a></li>

        <li <?php if ($page_category == 'mathematics') {
              echo "class='current'";
            } ?>><a href='mathematics.php'>Mathematics</a>
          <ul class='submenu'>
            <li><a href='#'>Algebra</a></li>
            <li><a href='#'>Algebra II</a></li>
            <li><a href='#'>Geometry</a></li>
            <li><a href='#'>Pre-Calculus</a></li>
            <li><a href='#'>Calculus I</a></li>
            <li><a href='#'>Calculus II</a></li>
            <li><a href='#'>Calculus III</a></li>
            <li><a href='#'>Linear Algebra</a></li>
            <li><a href='#'>Differential Equations</a></li>
            <li><a href='#'>Analysis</a></li>
            <li><a href='#'>Combinatorics</a></li>
          </ul>
        </li>

        <li <?php if ($page_category == 'probability') {
              echo "class='current'";
            } ?>><a href='probability.php'>Probability</a>
          <ul class='submenu'>
            <li><a href='#'>Bernoulli</a></li>
            <li><a href='#'>Binomial</a></li>
            <li><a href='#'>Normal</a></li>
            <li><a href='#'>Uniform</a></li>
            <li><a href='#'>Poisson</a></li>
            <li><a href='#'>Exponential</a></li>
            <li><a href='#'>Multinomial</a></li>
            <li><a href='#'>Geometric</a></li>
            <li><a href='#'>Hypergeometric</a></li>
            <li><a href='#'>Negative Binomial</a></li>
            <li><a href='#'>Gamma</a></li>
            <li><a href='#'>Beta</a></li>
            <li><a href='#'>Pareto</a></li>
          </ul>
        </li>

        <li <?php if ($page_category == 'statistics') {
              echo "class='current'";
            } ?>><a href='statistics.php'>Statistics</a>
          <ul class='submenu'>
            <li><a href='#'>Mean (Averages)</a></li>
            <li><a href='#'>Variance (Spread)</a></li>
            <li><a href='#'>Covariance</a></li>
            <li><a href='#'>Graphs</a></li>
            <li><a href='#'>Correlation</a></li>
            <li><a href='#'>Sampling</a></li>
            <li><a href='#'>Hypothesis Testing</a></li>
            <li><a href='#'>t-test</a></li>
            <li><a href='#'>Chi-squared test</a></li>
            <li><a href='#'>F-test</a></li>
            <li><a href='#'>Analysis of Variance</a></li>
          </ul>
        </li>

        <li <?php if ($page_category == 'economics') {
              echo "class='current'";
            } ?>><a href='economics.php'>Economics</a>
          <ul class='submenu'>
            <li><a href='#'>Basics</a></li>
            <li><a href='#'>Consumer Theory</a></li>
            <li><a href='#'>Producer Theory</a></li>
            <li><a href='#'>Monopoly</a></li>
            <li><a href='#'>Duopoly</a></li>
            <li><a href='#'>Game Theory</a></li>
          </ul>
        </li>

        <li <?php if ($page_category == 'regression') {
              echo "class='current'";
            } ?>><a href='regression.php'>Regression</a>
          <ul class='submenu'>
            <li><a href='#'>Introduction</a></li>
            <li><a href='#'>Single Variable</a></li>
            <li><a href='#'>Multi-variable</a></li>
            <li><a href='#'>Robust Standard Errors</a></li>
            <li><a href='#'>Linear Probability</a></li>
            <li><a href='#'>Logit/Probit</a></li>
            <li><a href='#'>Random Effects</a></li>
            <li><a href='#'>Mixed Effects</a></li>
            <li><a href='#'>Multilevel</a></li>
            <li><a href='#'>Instrumental Variable</a></li>
            <li><a href='#'>Discontinuity Design</a></li>
            <li><a href='#'>Diff-in-Diff</a></li>
            <li><a href='#'>Stacked Diff-in-Diff</a></li>
            <li><a href='#'>Callaway Sant'anna</a></li>
            <li><a href='#'>Sythetic Control</a></li>
            <li><a href='#'>Matching Estimators</a></li>
          </ul>
        </li>

        <li <?php if ($page_category == 'software') {
              echo "class='current'";
            } ?>><a href='software.php'>Software</a>
          <ul class='submenu'>
            <li><a href='#'>R/R Studio</a></li>
            <li><a href='#'>STATA</a></li>
            <li><a href='#'>Excel</a></li>
            <li><a href='#'>Tableau</a></li>
          </ul>
        </li>

        <li <?php if ($page_category == 'programming') {
              echo "class='current'";
            } ?>><a href='programming.php'>Programming</a>
          <ul class='submenu'>
            <li><a href='#'>Visual Studio Code</a></li>
            <li><a href='#'>HTML/CSS</a></li>
            <li><a href='#'>JavaScript</a></li>
            <li><a href='#'>PHP</a></li>
            <li><a href='#'>Bootstrap</a></li>
            <li><a href='#'>Vue</a></li>
            <li><a href='#'>Laravel</a></li>
            <li><a href='#'>Jupyter</a></li>
            <li><a href='#'>Python</a></li>
            <li><a href='#'>Django</a></li>
            <li><a href='#'>Flask</a></li>
          </ul>
        </li>

      </ul>
    </nav>

  </div>

  <!-- Title Box -->
  <div class='container-2'>
    <div class='title-box'>
      <h1>
        <?php
        switch ($page_category) {
          case 'main_info':
            echo 'Enhance Your Skills';
            break;
          case 'mathematics':
            echo 'Mathematics';
            break;
          case 'probability':
            echo 'Probability';
            break;
          case 'statistics':
            echo 'Statistics';
            break;
          case 'economics':
            echo 'Economics';
            break;
          case 'regression':
            echo 'Regression';
            break;
          case 'software':
            echo 'Software';
            break;
          case 'programming':
            echo 'Programming';
            break;
        }
        ?>
      </h1>
      <p>
        <?php
        switch ($page_category) {
          case 'main_info':
            echo 'A resource for students and professionals to sharpen their understanding in Mathematics, Statistics, and Economics';
            break;
          case 'mathematics':
            echo 'The foundation for virtually all analytical techniques - from algebra to calculus, build a solid base for your pathway';
            break;
          case 'probability':
            echo 'Establish a concrete understanding of various probability distributions and make the most out of the data in your hand';
            break;
          case 'statistics':
            echo 'Data analysis stands on the concepts of statistics - understand the core fundamentals and apply them to your work';
            break;
          case 'economics':
            echo 'Gain a strategic advantage by learning how to model the behaviors that individuals and businesses make';
            break;
          case 'regression':
            echo 'Econometrics - where statistics and economics overlap - is one of the most useful subjects in rigorous analytical thinking';
            break;
          case 'software':
            echo 'Learn about the tools used to conduct and present analytical findings in both professional and academic settings';
            break;
          case 'programming':
            echo 'Dive into the language of technology to create your own tools for data analysis and data visualization';
            break;
        }
        ?>
      </p>
      <a href='#about' class='btn'>More</a>
    </div>
  </div>

</header>