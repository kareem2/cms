<?php

/* home.html.twig */
class __TwigTemplate_7f1ba24d021aa62cf6f11943416c907a7a72570427e8100b40d482cc78325cf0 extends Twig_Template
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
        // line 28
        echo "</head>

<body>

<div class=\"homepage bigheader\" id=\"bigheader\">
\t<form  action=\"/search\" method=\"POST\">
\t\t<div class=\"searchlinediv\">
\t\t\t<div class=\"searchlinediv\"> 
\t\t\t\t<input name=\"search\" placeholder=\" &nbsp; What are you looking for?\" onkeydown=\"if (event.keyCode == 13) myFunction(this.value)\" type=\"text\" />
\t\t\t</div>
\t\t</div>
\t</form>
</div>
 
<div class=\"content\">
\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "\t\t<div class=\"pure-g comments margintop15\">
\t\t\t<div class=\"pure-u-1\">
\t\t\t\t<div class=\"commentsheader\"><a href=\"/";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["item"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["item"], "title", array())), array(" " => "-", "." => "", "/" => "", "+" => "", "," => ""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "title", array());
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"feebacktext\">
\t\t\t\t\t";
            // line 49
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", array())) > 200)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", array()), 0, 200) . "...")) : (twig_get_attribute($this->env, $this->source, $context["item"], "text", array())));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</div>

<div class=\"darkfooter\">
\t<div class=\"content\">
\t\t<div class=\"pure-g darkfoote\">
\t\t\t<div class=\"pure-u-3-5 homefooter\">
\t\t\t\t<b>Recently added</b>
\t\t\t\t<div class=\"slickslider\">
\t\t\t\t\t";
        // line 62
        $context["cols"] = 3;
        // line 63
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["footer_links"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 64
            echo "\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["cols"] ?? null)) == 0)) {
                // line 65
                echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t";
            }
            // line 68
            echo "
\t\t\t\t\t\t<li ><a href=\"/";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["f"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["f"], "title", array())), array(" " => "-", "." => "", "/" => "", "+" => "", "," => ""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["f"], "title", array());
            echo "</a></li>

\t\t\t\t\t\t";
            // line 71
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["cols"] ?? null)) == (($context["cols"] ?? null) - 1)) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()))) {
                // line 72
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"pure-u-1-5\">
\t\t\t\t<b>Useful Links</b>
\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"/page/privacy-policy\">Privacy Policy</a></li>
\t\t\t\t\t\t";
        // line 82
        if ((twig_length_filter($this->env, ($context["blog_links"] ?? null)) > 0)) {
            echo "<li><a href=\"/blog/\">Blog</a></li>";
        }
        echo "\t
                        <li><a href=\"/contact\">Contact us</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        // line 86
        if ((twig_length_filter($this->env, ($context["blog_links"] ?? null)) > 0)) {
            // line 87
            echo "\t\t\t\t<div class=\"pure-u-1-5\">
\t\t\t\t\t<b>Blog</b>
\t\t\t\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blog_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 90
                echo "\t\t\t\t\t\t<li><a href=\"/blog/";
                echo twig_get_attribute($this->env, $this->source, $context["l"], "href", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["l"], "title", array());
                echo "</a> </li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 94
        echo "\t\t</div>
\t</div>
</div>
</body>

<script>
    \$(document).ready(function(){
\t  \$('.slickslider').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tautoplay: true,
\t\tautoplaySpeed: 2000,
\t\tdots: false,
\t    prevArrow: false,
\t    nextArrow: false
\t  });
\t});

\tdocument.getElementById(\"bigheader\").style.height = \"100vh\";
</script>


</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Home page title";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-extend.css\">
        <!--[if lte IE 8]>
            <link rel=\"stylesheet\" href=\"/css/grids-responsive-old-ie-min.css\">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/grids-responsive-min.css\">
        <!--<![endif]-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/styles.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tabs.css\">

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick-theme.css\"/>

\t\t<script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
\t\t<script src=\"/js/slick/slick.min.js\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 10,  232 => 9,  226 => 5,  199 => 94,  195 => 92,  184 => 90,  180 => 89,  176 => 87,  174 => 86,  165 => 82,  157 => 76,  143 => 75,  138 => 72,  136 => 71,  127 => 69,  124 => 68,  119 => 65,  116 => 64,  98 => 63,  96 => 62,  86 => 54,  75 => 49,  65 => 46,  61 => 44,  57 => 43,  40 => 28,  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/home/dmytro/dev/php/toster/src/views/home.html.twig");
    }
}
