<?php

/* JustManBlogBundle:Post:index.html.twig */
class __TwigTemplate_4cb10203c09ab72d9547dbfe1eb7bc9667b370ae01062a45be1d2a4e13c14101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "JustManBlogBundle:Post:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 5
            echo "      <div class=\"blog-post\">
        <h2 class=\"blog-post-title\"> 
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> 
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "
            </a>
        </h2>
        <p class=\"blog-post-meta\">
            ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "created", array()), "d.m.Y"), "html", null, true);
            echo " 
            ";
            // line 13
            if ($this->getAttribute($context["entity"], "published", array())) {
                // line 14
                echo "                <span class=\"glyphicon glyphicon-ok\"></span>
            ";
            } else {
                // line 16
                echo "                <span class=\"glyphicon glyphicon-remove\"></span>
            ";
            }
            // line 18
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Update</a>
            <!-- by <a href=\"#\">Mark</a> --></p>

        <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</p>
      </div><!-- /.blog-post -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      <nav>
        <ul class=\"pager\">
          <li><a href=\"#\">Previous</a></li>
          <li><a href=\"#\">Next</a></li>
        </ul>
      </nav>
    ";
    }

    public function getTemplateName()
    {
        return "JustManBlogBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  71 => 21,  64 => 18,  60 => 16,  56 => 14,  54 => 13,  50 => 12,  43 => 8,  39 => 7,  35 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
