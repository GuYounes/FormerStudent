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
        $__internal_f923fd1b0f2d90fc05398fa208f76b0dccf231f8f8339bac4b03d0c9282c1cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f923fd1b0f2d90fc05398fa208f76b0dccf231f8f8339bac4b03d0c9282c1cc7->enter($__internal_f923fd1b0f2d90fc05398fa208f76b0dccf231f8f8339bac4b03d0c9282c1cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_32c7a13179071b52969a402f45a92db189a7d20191ac49a7fb105bf350e6023d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c7a13179071b52969a402f45a92db189a7d20191ac49a7fb105bf350e6023d->enter($__internal_32c7a13179071b52969a402f45a92db189a7d20191ac49a7fb105bf350e6023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_f923fd1b0f2d90fc05398fa208f76b0dccf231f8f8339bac4b03d0c9282c1cc7->leave($__internal_f923fd1b0f2d90fc05398fa208f76b0dccf231f8f8339bac4b03d0c9282c1cc7_prof);

        
        $__internal_32c7a13179071b52969a402f45a92db189a7d20191ac49a7fb105bf350e6023d->leave($__internal_32c7a13179071b52969a402f45a92db189a7d20191ac49a7fb105bf350e6023d_prof);

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
