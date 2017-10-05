<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_9dfa8744948449222712763444694fde34d8f0f5c0ce6637180a4718391c76e1 extends Twig_Template
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
        $__internal_d0fba887fb61e93ddee20c06c035d737cf479df6f5d5001681e54e1305eb01ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fba887fb61e93ddee20c06c035d737cf479df6f5d5001681e54e1305eb01ae->enter($__internal_d0fba887fb61e93ddee20c06c035d737cf479df6f5d5001681e54e1305eb01ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_53a137f2d6837e9e9eaaeeea9e0da3da0446bf60d3dec65b0d2f785ee2562940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a137f2d6837e9e9eaaeeea9e0da3da0446bf60d3dec65b0d2f785ee2562940->enter($__internal_53a137f2d6837e9e9eaaeeea9e0da3da0446bf60d3dec65b0d2f785ee2562940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d0fba887fb61e93ddee20c06c035d737cf479df6f5d5001681e54e1305eb01ae->leave($__internal_d0fba887fb61e93ddee20c06c035d737cf479df6f5d5001681e54e1305eb01ae_prof);

        
        $__internal_53a137f2d6837e9e9eaaeeea9e0da3da0446bf60d3dec65b0d2f785ee2562940->leave($__internal_53a137f2d6837e9e9eaaeeea9e0da3da0446bf60d3dec65b0d2f785ee2562940_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
