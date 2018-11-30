<?php

/* blog_page.html.twig */
class __TwigTemplate_52d911b7e86b2aa3db92104c24765565b224f805477151a7b9de39524fe9a9ae extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog_page.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_capitalize_string_filter($this->env, ($context["title"] ?? null));
        echo " Page ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"pure-g blog\">
\t<div class=\"pure-u-1 pure-u-md-17-24 setborder margintop15 padding10\">
\t\t";
        // line 9
        echo ($context["content"] ?? null);
        echo "
\t</div>

\t";
        // line 12
        if ((twig_length_filter($this->env, ($context["links"] ?? null)) > 0)) {
            // line 13
            echo "\t<div class=\"pure-u-1 pure-u-md-7-24 margintop15 padding10\">
\t\t<h4> Recent articles </h4>
\t\t<ul>
\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 17
                echo "\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["l"], "href", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["l"], "title", array());
                echo "</a> </li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t</ul>
\t</div>
\t";
        }
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "blog_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  76 => 19,  65 => 17,  61 => 16,  56 => 13,  54 => 12,  48 => 9,  43 => 6,  40 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog_page.html.twig", "/home/dmytro/dev/php/toster/src/views/blog_page.html.twig");
    }
}
