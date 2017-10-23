<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_5d1944b04c5fa1cbea1ef3d61a6c96768ceb70855f60c527ba197996d07f774d extends Twig_Template
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
        $__internal_e63169738ce8fb2f0c0048caccdae5b416977985f2bb1e691ffce0f76d1a4c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63169738ce8fb2f0c0048caccdae5b416977985f2bb1e691ffce0f76d1a4c3e->enter($__internal_e63169738ce8fb2f0c0048caccdae5b416977985f2bb1e691ffce0f76d1a4c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_920077c02d14083017813a36639cf08f41fe7efbf117bef55f45ee5d23bfd49b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920077c02d14083017813a36639cf08f41fe7efbf117bef55f45ee5d23bfd49b->enter($__internal_920077c02d14083017813a36639cf08f41fe7efbf117bef55f45ee5d23bfd49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_e63169738ce8fb2f0c0048caccdae5b416977985f2bb1e691ffce0f76d1a4c3e->leave($__internal_e63169738ce8fb2f0c0048caccdae5b416977985f2bb1e691ffce0f76d1a4c3e_prof);

        
        $__internal_920077c02d14083017813a36639cf08f41fe7efbf117bef55f45ee5d23bfd49b->leave($__internal_920077c02d14083017813a36639cf08f41fe7efbf117bef55f45ee5d23bfd49b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
