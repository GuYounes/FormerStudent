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
        $__internal_fc4c7f46e8a4865b86920c753b1e9239401030bca59650a8becd25f4ac71bb95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4c7f46e8a4865b86920c753b1e9239401030bca59650a8becd25f4ac71bb95->enter($__internal_fc4c7f46e8a4865b86920c753b1e9239401030bca59650a8becd25f4ac71bb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_cc05134632b4c94ae1e0d52a9b2fa37e5537bb3ccd74b1dade02f1d784523544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc05134632b4c94ae1e0d52a9b2fa37e5537bb3ccd74b1dade02f1d784523544->enter($__internal_cc05134632b4c94ae1e0d52a9b2fa37e5537bb3ccd74b1dade02f1d784523544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_fc4c7f46e8a4865b86920c753b1e9239401030bca59650a8becd25f4ac71bb95->leave($__internal_fc4c7f46e8a4865b86920c753b1e9239401030bca59650a8becd25f4ac71bb95_prof);

        
        $__internal_cc05134632b4c94ae1e0d52a9b2fa37e5537bb3ccd74b1dade02f1d784523544->leave($__internal_cc05134632b4c94ae1e0d52a9b2fa37e5537bb3ccd74b1dade02f1d784523544_prof);

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
