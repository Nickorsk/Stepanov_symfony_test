<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f0c3bebe9e39bac61191e063dd8d7e46e6a1c3643006e032b1208a79e6ecb5ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*
";
        // line 2
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  72 => 16,  55 => 13,  41 => 9,  29 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 39,  91 => 31,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 3,  31 => 5,  21 => 2,  35 => 7,  26 => 3,  25 => 4,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 11,  44 => 10,  40 => 8,  32 => 9,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 15,  60 => 13,  57 => 14,  54 => 21,  51 => 12,  48 => 9,  45 => 8,  42 => 6,  39 => 16,  36 => 7,  33 => 6,  30 => 3,);
    }
}
