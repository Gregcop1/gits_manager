<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_199e6da43d6b47a740137f90d2acfa5a extends Twig_Template
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
        echo "        <traces>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, "trace")));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "        </traces>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  86 => 6,  57 => 22,  89 => 20,  82 => 19,  42 => 10,  29 => 5,  103 => 24,  91 => 20,  77 => 39,  74 => 16,  70 => 14,  66 => 12,  56 => 9,  25 => 4,  19 => 1,  23 => 3,  26 => 3,  24 => 3,  22 => 3,  17 => 1,  68 => 14,  61 => 9,  44 => 8,  20 => 2,  161 => 32,  153 => 50,  150 => 49,  147 => 48,  143 => 46,  137 => 45,  129 => 42,  121 => 41,  118 => 40,  113 => 39,  104 => 36,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 15,  53 => 13,  50 => 15,  48 => 8,  41 => 7,  39 => 9,  35 => 8,  33 => 7,  30 => 4,  27 => 4,  182 => 70,  176 => 66,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 53,  141 => 48,  136 => 45,  134 => 44,  131 => 43,  128 => 42,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 22,  93 => 28,  90 => 29,  87 => 19,  83 => 24,  79 => 40,  71 => 19,  62 => 19,  58 => 8,  55 => 14,  52 => 6,  49 => 12,  46 => 14,  43 => 8,  40 => 12,  37 => 8,  34 => 7,  31 => 5,  28 => 3,);
    }
}