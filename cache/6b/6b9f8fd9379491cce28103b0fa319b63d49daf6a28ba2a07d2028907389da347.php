<?php

/* item.html.twig */
class __TwigTemplate_dcd3d9118137b6a191b4bff6ad8943d7d58aa5fb0776b5119f83f46e38ff8d76 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "item.html.twig", 1);
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
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", array());
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"pure-g header\">
\t<div class=\"pure-u-1\">
\t\t
\t\t<h1>";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", array());
        echo "</h1>
\t\t
\t\t<span>Asked by ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "author", array());
        echo "</span>

\t\t<div class=\"crumps\">
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cats", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "\t\t\t\t<a href=\"/category/";
            echo (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cats_id", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array())] ?? null) : null);
            echo "\">";
            echo $context["category"];
            echo "</a>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t</div>
\t\t
\t</div>

\t<br>
\t
</div>

";
        // line 27
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", array())) > 0)) {
            // line 28
            echo "\t<div class=\"pure-g\">

\t\t<div class=\"pure-u-1 topborder\">
\t\t\t 
\t\t\t<p>
\t\t\t\t";
            // line 33
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", array()), array("&#39;" => "'"));
            echo "
\t\t\t</p>

\t\t\t";
            // line 36
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "comments", array())) > 0)) {
                // line 37
                echo "\t\t\t\t<div class=\"answercomments\">
\t\t\t\t";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "comments", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 39
                    echo "\t\t\t\t\t<div>";
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "text", array());
                    echo " - <i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "author", array());
                    echo " </i> </div> 
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 43
            echo "
\t\t</div>
\t</div>
";
        }
        // line 47
        echo "
";
        // line 48
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "answers", array())) > 0)) {
            // line 49
            echo "
\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<h4>Answers</h4>
\t\t</div>
\t</div>

\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "answers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 57
                echo "
\t\t<div class=\"pure-g comments\">
\t\t\t<div class=\"pure-u-1\">
\t\t\t\t<div class=\"username\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["a"], "author", array());
                echo "</div>
\t\t\t\t<div class=\"feebacktext\">
\t\t\t\t";
                // line 62
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["a"], "text", array()), array("\\u2019" => "'", "\\u201d" => "", "\\u201c" => "", "\\u2013" => " ", "\\n" => "<br>"));
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
                // line 67
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "comments", array())) > 0)) {
                    // line 68
                    echo "\t\t\t<div class=\"answercomments\">
\t\t\t";
                    // line 69
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["a"], "comments", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 70
                        echo "\t\t\t\t<div>
\t\t\t\t\t";
                        // line 71
                        echo twig_get_attribute($this->env, $this->source, $context["c"], "text", array());
                        echo " - <i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["c"], "author", array());
                        echo " </i>
\t\t\t\t</div>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "\t\t\t</div>
\t\t";
                }
                // line 76
                echo "
\t\t";
                // line 78
                echo "\t\t";
                if ((($context["a"] == (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "answers", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[2] ?? null) : null)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "neighbors", array())) > 0))) {
                    // line 79
                    echo "\t\t\t<div class=\"neighbors\">
\t\t\t";
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "neighbors", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["neighbor"]) {
                        // line 81
                        echo "\t\t\t\t<a href=\"/";
                        echo (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["neighbor"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["id"] ?? null) : null);
                        echo "/";
                        echo twig_replace_filter(twig_trim_filter((($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["neighbor"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["title"] ?? null) : null)), array(" " => "-", "." => "", "/" => "", "+" => "", "," => ""));
                        echo "\">";
                        echo (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["neighbor"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["title"] ?? null) : null);
                        echo "</a> ";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()) == false)) {
                            echo " :: ";
                        }
                        // line 82
                        echo "\t\t\t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['neighbor'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "\t\t\t</div>
\t\t";
                }
                // line 85
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "
";
        }
        // line 89
        echo "
";
        // line 91
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "a", array())) < 3)) {
            // line 92
            echo "\t<div class=\"neighbors margintop15\">
\t\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "neighbors", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["neighbor"]) {
                // line 94
                echo "
\t\t\t";
                // line 95
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "other_artists_comments", array())) > 0)) {
                    // line 96
                    echo "\t\t\t\t";
                    $context["foo"] = json_encode(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "other_artists_comments", array()));
                    // line 97
                    echo "\t\t\t";
                } else {
                    // line 98
                    echo "\t\t\t\t";
                    $context["foo"] = "";
                    // line 99
                    echo "\t\t\t";
                }
                // line 100
                echo "
\t\t\t";
                // line 101
                if (!twig_in_filter((($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["neighbor"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["title"] ?? null) : null), ($context["foo"] ?? null))) {
                    // line 102
                    echo "
\t\t\t\t<a href=\"/";
                    // line 103
                    echo (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["neighbor"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["id"] ?? null) : null);
                    echo "/";
                    echo twig_replace_filter(twig_trim_filter((($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["neighbor"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["title"] ?? null) : null)), array(" " => "-", "." => "", "/" => "", "+" => "", "," => ""));
                    echo "\">";
                    echo (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = $context["neighbor"]) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["title"] ?? null) : null);
                    echo "</a> ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()) == false)) {
                        echo " :: ";
                    }
                    // line 104
                    echo "
\t\t\t";
                }
                // line 105
                echo "\t\t

\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['neighbor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "\t</div>
";
        }
        // line 110
        echo "

";
        // line 113
        echo " 
<div class=\"pure-g\">
\t<div class=\"pure-u-1\">
\t\tLeave Repply for ";
        // line 116
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", array());
        echo " 
\t</div>
</div>

<div class=\"pure-g\">
\t<div class=\"pure-u-1 pure-u-md-1-2\">

\t\t<form class=\"pure-form\" action=\"/feedbackpost\" method=\"POST\">

\t\t    <fieldset class=\"pure-group\">
\t\t        <input autocomplete='name' name=\"feedback_name\" type=\"text\" class=\"pure-input-1\" placeholder=\"Your Name\">
\t\t        <input autocomplete='email' name=\"feedback_email\" type=\"email\" class=\"pure-input-1\" placeholder=\"Email\">
\t\t    </fieldset>

\t\t    <input name=\"id\" type=\"hidden\" value=\"";
        // line 130
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", array());
        echo "\">
\t\t    <input name=\"user_submit\" type=\"hidden\" value=\"1\">

\t\t    <fieldset class=\"pure-group\">
\t\t        <input name=\"feedback_title\" type=\"text\" class=\"pure-input-1\" placeholder=\"Title\">
\t\t        <textarea name=\"feedback_text\" class=\"pure-input-1\" placeholder=\"Your feedback\"></textarea>
\t\t    </fieldset>

\t\t    <div class=\"g-recaptcha\" data-sitekey=\"";
        // line 138
        echo ($context["recaptcha_site_key"] ?? null);
        echo "\"></div>

\t\t    <button type=\"submit\" class=\"pure-button pure-input-1 pure-button-primary\">Submit</button>
\t\t</form>

\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 138,  390 => 130,  373 => 116,  368 => 113,  364 => 110,  360 => 108,  344 => 105,  340 => 104,  330 => 103,  327 => 102,  325 => 101,  322 => 100,  319 => 99,  316 => 98,  313 => 97,  310 => 96,  308 => 95,  305 => 94,  288 => 93,  285 => 92,  283 => 91,  280 => 89,  276 => 87,  269 => 85,  265 => 83,  251 => 82,  240 => 81,  223 => 80,  220 => 79,  217 => 78,  214 => 76,  210 => 74,  199 => 71,  196 => 70,  192 => 69,  189 => 68,  187 => 67,  179 => 62,  174 => 60,  169 => 57,  165 => 56,  156 => 49,  154 => 48,  151 => 47,  145 => 43,  141 => 41,  130 => 39,  126 => 38,  123 => 37,  121 => 36,  115 => 33,  108 => 28,  106 => 27,  96 => 18,  77 => 16,  60 => 15,  54 => 12,  49 => 10,  43 => 6,  40 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "item.html.twig", "/home/dmytro/dev/php/toster/src/views/item.html.twig");
    }
}
