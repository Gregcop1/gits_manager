<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ae3ff888a9fd4bc65bbdff6a496b1392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array("token" => ""), array());
        // line 38
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (($this->getContext($context, "about") == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 236,  258 => 235,  255 => 234,  38 => 8,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  177 => 85,  159 => 79,  144 => 72,  135 => 69,  122 => 59,  97 => 43,  51 => 38,  174 => 84,  168 => 60,  88 => 28,  75 => 18,  60 => 25,  54 => 39,  165 => 64,  162 => 80,  132 => 54,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  328 => 140,  325 => 139,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 105,  256 => 103,  252 => 101,  245 => 97,  238 => 219,  232 => 89,  229 => 88,  224 => 86,  219 => 83,  207 => 73,  205 => 76,  200 => 92,  191 => 68,  188 => 67,  186 => 87,  172 => 67,  167 => 82,  105 => 49,  95 => 23,  47 => 17,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 141,  323 => 138,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 100,  236 => 218,  226 => 87,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  180 => 86,  146 => 73,  138 => 42,  133 => 47,  126 => 45,  111 => 40,  108 => 50,  84 => 29,  67 => 20,  299 => 125,  293 => 121,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 248,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 96,  228 => 75,  220 => 73,  218 => 72,  213 => 79,  209 => 81,  202 => 71,  196 => 69,  183 => 68,  181 => 63,  175 => 59,  158 => 59,  107 => 41,  101 => 25,  80 => 19,  63 => 22,  36 => 5,  156 => 56,  148 => 55,  142 => 50,  140 => 71,  127 => 45,  123 => 44,  115 => 55,  110 => 42,  85 => 33,  65 => 12,  59 => 12,  45 => 15,  223 => 88,  214 => 90,  210 => 78,  203 => 93,  199 => 83,  194 => 69,  192 => 90,  189 => 70,  187 => 77,  184 => 76,  178 => 72,  170 => 64,  157 => 78,  152 => 75,  145 => 58,  130 => 47,  125 => 52,  119 => 45,  116 => 44,  112 => 43,  102 => 37,  98 => 36,  76 => 24,  73 => 23,  69 => 31,  32 => 5,  92 => 39,  86 => 39,  57 => 22,  89 => 28,  82 => 23,  42 => 11,  29 => 6,  103 => 24,  91 => 41,  77 => 23,  74 => 17,  70 => 22,  66 => 19,  56 => 14,  25 => 4,  19 => 2,  23 => 3,  26 => 6,  24 => 3,  22 => 2,  17 => 1,  68 => 13,  61 => 16,  44 => 34,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 57,  137 => 45,  129 => 46,  121 => 35,  118 => 50,  113 => 44,  104 => 35,  99 => 33,  94 => 35,  81 => 28,  78 => 32,  72 => 32,  64 => 28,  53 => 15,  50 => 18,  48 => 16,  41 => 7,  39 => 8,  35 => 6,  33 => 5,  30 => 4,  27 => 3,  182 => 70,  176 => 62,  169 => 83,  163 => 54,  160 => 53,  155 => 56,  151 => 62,  149 => 47,  141 => 56,  136 => 55,  134 => 50,  131 => 43,  128 => 53,  120 => 51,  117 => 45,  114 => 31,  109 => 38,  106 => 41,  100 => 34,  96 => 32,  93 => 30,  90 => 21,  87 => 29,  83 => 38,  79 => 24,  71 => 23,  62 => 11,  58 => 20,  55 => 19,  52 => 19,  49 => 37,  46 => 20,  43 => 14,  40 => 15,  37 => 9,  34 => 7,  31 => 6,  28 => 7,);
    }
}
