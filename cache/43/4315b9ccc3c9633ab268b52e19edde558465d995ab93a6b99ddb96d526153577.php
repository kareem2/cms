<?php

/* base.html.twig */
class __TwigTemplate_76be53a585c8383b363b3d137f6a27193d76cabbd044b85a6257b6d038d6aec9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">

    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "    </head>

    <body>

        ";
        // line 34
        echo ($context["defaultStrategy"] ?? null);
        echo "

        <div class=\"content\">

            <!-- top header menu / better to do with native menu? -->
            <div class=\"custom-wrapper pure-g\" id=\"menu\">
                <div class=\"pure-u-1 pure-u-md-6-24\">
                    <div class=\"pure-menu\">

                        <a href=\"/\" class=\"pure-menu-heading custom-brand\">
                            FutureCMS";
        // line 45
        echo "                        </a>
                        <a href=\"#\" class=\"custom-toggle\" id=\"toggle\"><s class=\"bar\"></s><s class=\"bar\"></s></a>
                    </div>
                </div>
                <div class=\"pure-u-1 pure-u-md-18-24\">
                    <div class=\"pure-menu pure-menu-horizontal custom-can-transform\">
                        
                            <form class=\"pure-form\" action=\"/search\" method=\"POST\"><input name=\"search\" type=\"text\" class=\"pure-input-rounded\" placeholder=\"What are you looking for?\" onkeydown=\"if (event.keyCode == 13) myFunction(this.value)\"></form>
                        
                    </div>
                </div>
                ";
        // line 64
        echo "            </div>
       
        ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "
        </div>

        <div class=\"darkfooter\">
            <div class=\"content\">

                <div class=\"pure-g\">
                <div class=\"pure-u-1 pure-u-md-1-2\">
                   <b>Useful Links</b>
                    <ul>
                        <li><a href=\"/page/privacy-policy\">Privacy Policy</a></li>
                        ";
        // line 78
        if ((twig_length_filter($this->env, ($context["blog_links"] ?? null)) > 0)) {
            echo "<li><a href=\"/blog/\">Blog</a></li>";
        }
        // line 79
        echo "                        <li><a href=\"/contact\">Contact us</a></li>

                    </ul>
                </div>

                ";
        // line 84
        if ((twig_length_filter($this->env, ($context["blog_links"] ?? null)) > 0)) {
            // line 85
            echo "                <div class=\"pure-u-1 pure-u-md-1-2\">
                    <b>Blog</b>
                    ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blog_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 88
                echo "                        <li><a href=\"/blog/";
                echo twig_get_attribute($this->env, $this->source, $context["l"], "href", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["l"], "title", array());
                echo "</a> </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                </div>
                ";
        }
        // line 92
        echo "
                </div>

            </div>
        </div>

        ";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "    
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ReaderOcean. Review Your Favourite Reads";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-min.css\">
            
            <!--[if lte IE 8]>
                <link rel=\"stylesheet\" href=\"/css/grids-responsive-old-ie-min.css\">
            <![endif]-->
            <!--[if gt IE 8]><!-->
                <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/grids-responsive-min.css\">
            <!--<![endif]-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/styles.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tabs.css\">
            <link rel=\"stylesheet\" href=\"/css/fontawesome-all.min.css\">
            <link rel=\"stylesheet\" href=\"/floatbox/floatbox/floatbox.css\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-extend.css\">

            <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
            <script src=\"/js/jquery.nicescroll.js\"></script>
            <script src=\"/floatbox/floatbox/floatbox.js\"></script>
            <script src=\"//www.google.com/recaptcha/api.js\" async defer></script>

        ";
    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        // line 99
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 99,  183 => 98,  178 => 66,  155 => 10,  152 => 9,  146 => 5,  139 => 101,  137 => 98,  129 => 92,  125 => 90,  114 => 88,  110 => 87,  106 => 85,  104 => 84,  97 => 79,  93 => 78,  80 => 67,  78 => 66,  74 => 64,  61 => 45,  48 => 34,  42 => 30,  40 => 9,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/dmytro/dev/php/toster/src/views/base.html.twig");
    }
}
