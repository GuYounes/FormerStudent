<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_7b0d6ff3a385cd2ae56387e24134b738bf85b89aa6f5200d6de62068566bbf12 extends Twig_Template
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
        $__internal_ae0e42c02315255961f1041f94cbc9b867d22c35be60ca254cbce4cb02d7d51c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0e42c02315255961f1041f94cbc9b867d22c35be60ca254cbce4cb02d7d51c->enter($__internal_ae0e42c02315255961f1041f94cbc9b867d22c35be60ca254cbce4cb02d7d51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_33a44de279b72b1c3b838f45e726cc087c054e0111a4b89498fb1697525cdf43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a44de279b72b1c3b838f45e726cc087c054e0111a4b89498fb1697525cdf43->enter($__internal_33a44de279b72b1c3b838f45e726cc087c054e0111a4b89498fb1697525cdf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_ae0e42c02315255961f1041f94cbc9b867d22c35be60ca254cbce4cb02d7d51c->leave($__internal_ae0e42c02315255961f1041f94cbc9b867d22c35be60ca254cbce4cb02d7d51c_prof);

        
        $__internal_33a44de279b72b1c3b838f45e726cc087c054e0111a4b89498fb1697525cdf43->leave($__internal_33a44de279b72b1c3b838f45e726cc087c054e0111a4b89498fb1697525cdf43_prof);

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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
