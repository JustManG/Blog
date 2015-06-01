<?php

/* ::base.html.twig */
class __TwigTemplate_0e4eda8368afe16a8f98258e3920535de3f2250d81b5e22490830a4854a64b15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">
    
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css\">
    
    <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/blog.css"), "html", null, true);
        echo ">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

    <div class=\"blog-masthead\">
      <div class=\"container\">
        <nav class=\"blog-nav\">
          <a class=\"blog-nav-item active\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("");
        echo "\">ДОМОЙ</a>
          <a class=\"blog-nav-item\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("_new");
        echo "\">Добавление</a>
          ";
        // line 38
        echo "        </nav>
      </div>
    </div>

    <div class=\"container\">

      <div class=\"blog-header\">
        <h1 class=\"blog-title\"> <a class=\"main\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("");
        echo "\">Мой блог</a> <a class=\"btn btn-primary\" href=\"";
        echo $this->env->getExtension('routing')->getPath("_new");
        echo "\">
                Create a new post
            </a></h1>
        <p class=\"lead blog-description\">Symfony2 blog project</p>
      </div>

      <div class=\"row\">

        <div class=\"col-sm-8 blog-main\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "
        </div><!-- /.blog-main -->

        <div class=\"col-sm-3 col-sm-offset-1 blog-sidebar\">
          ";
        // line 120
        echo "          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class=\"blog-footer\">
      <p>Symfony 2 blog <a href=\"http://getbootstrap.com\">Bootstrap</a> by <a href=\"https://twitter.com/mdo\">@mdo</a>.</p>
      <p>
        <a href=\"#\">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>

  </body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Бложе";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "          <div class=\"blog-post\">
            <h2 class=\"blog-post-title\">Sample blog post</h2>
            <p class=\"blog-post-meta\">January 1, 2014 by <a href=\"#\">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <h2>Heading</h2>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <pre><code>Example code block</code></pre>
            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            <ol>
              <li>Vestibulum id ligula porta felis euismod semper.</li>
              <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
              <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
            </ol>
            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
          </div><!-- /.blog-post -->
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 55,  131 => 54,  125 => 12,  99 => 120,  93 => 88,  91 => 54,  77 => 45,  68 => 38,  64 => 33,  60 => 32,  44 => 19,  34 => 12,  21 => 1,);
    }
}
