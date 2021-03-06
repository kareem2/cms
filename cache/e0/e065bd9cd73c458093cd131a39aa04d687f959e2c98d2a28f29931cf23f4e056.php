<?php

/* static_page.html.twig */
class __TwigTemplate_29ec85d4ab20d140f4da7e14e255ab860222c285970900f7d91ae4dd48d5fefb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "static_page.html.twig", 1);
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
<div class=\"pure-g\">
\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t";
        // line 9
        echo ($context["content"] ?? null);
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "static_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  43 => 6,  40 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "static_page.html.twig", "/home/dmytro/dev/php/toster/src/views/static_page.html.twig");
    }
}
