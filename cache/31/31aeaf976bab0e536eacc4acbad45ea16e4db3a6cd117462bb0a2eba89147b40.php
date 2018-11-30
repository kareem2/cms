<?php

/* contact_us_page.twig */
class __TwigTemplate_63def04bcdaeb803edd414c99d9f2a57e5f0eaae3de324c750d268541f52d53f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact_us_page.twig", 1);
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
        echo "Contact us ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"pure-g\">
\t<div class=\"pure-u-1\">
\t\tContact us
\t</div>
</div>

<div class=\"pure-g\">
\t<div class=\"pure-u-1 pure-u-md-1-2\">

\t\t<form id=\"commentform\" class=\"pure-form\" action=\"/contact\" method=\"POST\">

\t\t    <fieldset class=\"pure-group\">
\t\t        <input autocomplete='name' name=\"feedback_name\" type=\"text\" class=\"pure-input-1\" placeholder=\"Your Name\">
\t\t        <input autocomplete='email' name=\"feedback_email\" type=\"email\" class=\"pure-input-1\" placeholder=\"Email\">
\t\t    </fieldset>


\t\t    <fieldset class=\"pure-group\">
\t\t        <input name=\"feedback_title\" type=\"text\" class=\"pure-input-1\" placeholder=\"Title\">
\t\t        <textarea name=\"feedback_text\" class=\"pure-input-1\" placeholder=\"Your feedback\"></textarea>
\t\t    </fieldset>

\t\t    <div class=\"g-recaptcha\" data-sitekey=\"";
        // line 29
        echo ($context["recaptcha_site_key"] ?? null);
        echo "\"></div>

\t\t    <span id=\"captchacheck\">
\t\t    <button type=\"submit\" class=\"pure-button pure-input-1 pure-button-primary\" onclick=\"get_action('#commentform')\">Submit</button>
\t\t\t</span>
\t\t</form>

\t</div>
</div>

<script type=\"text/javascript\">
function get_action(form) {

\tvar v = grecaptcha.getResponse();
\tif(v.length == 0)
\t{
\t    document.getElementById('captchacheck').innerHTML=\"Captcha Error\" + '<button type=\"submit\" class=\"pure-button pure-input-1 pure-button-primary\" onclick=\"get_action(\\'#commentform\\')\">Submit</button>';
\t    return false;
\t}
}
</script>
 

";
    }

    public function getTemplateName()
    {
        return "contact_us_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 29,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact_us_page.twig", "/home/dmytro/dev/php/toster/src/views/contact_us_page.twig");
    }
}
