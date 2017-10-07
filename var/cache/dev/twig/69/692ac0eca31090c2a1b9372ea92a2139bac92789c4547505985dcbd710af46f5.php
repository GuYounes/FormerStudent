<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_43d7b6f1865b649b358b3543c538776469d798ec3bf2cad3412fff31b7060f7d extends Twig_Template
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
        $__internal_ab0e9d7a2f42bb10b9de60087b08fa3a4dc468f3b312ba380e5f18bfadf774d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0e9d7a2f42bb10b9de60087b08fa3a4dc468f3b312ba380e5f18bfadf774d4->enter($__internal_ab0e9d7a2f42bb10b9de60087b08fa3a4dc468f3b312ba380e5f18bfadf774d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_f1664a749db67c80e2f51a7afa5a1842d9a3f4b7fd98bfe4a29f8fd9f773559d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1664a749db67c80e2f51a7afa5a1842d9a3f4b7fd98bfe4a29f8fd9f773559d->enter($__internal_f1664a749db67c80e2f51a7afa5a1842d9a3f4b7fd98bfe4a29f8fd9f773559d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ab0e9d7a2f42bb10b9de60087b08fa3a4dc468f3b312ba380e5f18bfadf774d4->leave($__internal_ab0e9d7a2f42bb10b9de60087b08fa3a4dc468f3b312ba380e5f18bfadf774d4_prof);

        
        $__internal_f1664a749db67c80e2f51a7afa5a1842d9a3f4b7fd98bfe4a29f8fd9f773559d->leave($__internal_f1664a749db67c80e2f51a7afa5a1842d9a3f4b7fd98bfe4a29f8fd9f773559d_prof);

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
