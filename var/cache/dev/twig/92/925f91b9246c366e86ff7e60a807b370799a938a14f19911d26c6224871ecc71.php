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
        $__internal_579740fe481ec2514bb78cf79566e540e08333228445d59e34038e2189c33f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579740fe481ec2514bb78cf79566e540e08333228445d59e34038e2189c33f49->enter($__internal_579740fe481ec2514bb78cf79566e540e08333228445d59e34038e2189c33f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_b96b8da0b3ee11b3389f6a40e0052b5adb1710a3ee41ed8ebdbca9419319bd41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96b8da0b3ee11b3389f6a40e0052b5adb1710a3ee41ed8ebdbca9419319bd41->enter($__internal_b96b8da0b3ee11b3389f6a40e0052b5adb1710a3ee41ed8ebdbca9419319bd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_579740fe481ec2514bb78cf79566e540e08333228445d59e34038e2189c33f49->leave($__internal_579740fe481ec2514bb78cf79566e540e08333228445d59e34038e2189c33f49_prof);

        
        $__internal_b96b8da0b3ee11b3389f6a40e0052b5adb1710a3ee41ed8ebdbca9419319bd41->leave($__internal_b96b8da0b3ee11b3389f6a40e0052b5adb1710a3ee41ed8ebdbca9419319bd41_prof);

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
