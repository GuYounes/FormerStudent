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
        $__internal_b10a80e972b582af0a0c3d58fb9293c870c3461ec390887acec08e619daaeb5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10a80e972b582af0a0c3d58fb9293c870c3461ec390887acec08e619daaeb5d->enter($__internal_b10a80e972b582af0a0c3d58fb9293c870c3461ec390887acec08e619daaeb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_0dced399041a93f53caf0c65c301be3bb55fa776d884881ff539526285b53935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dced399041a93f53caf0c65c301be3bb55fa776d884881ff539526285b53935->enter($__internal_0dced399041a93f53caf0c65c301be3bb55fa776d884881ff539526285b53935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_b10a80e972b582af0a0c3d58fb9293c870c3461ec390887acec08e619daaeb5d->leave($__internal_b10a80e972b582af0a0c3d58fb9293c870c3461ec390887acec08e619daaeb5d_prof);

        
        $__internal_0dced399041a93f53caf0c65c301be3bb55fa776d884881ff539526285b53935->leave($__internal_0dced399041a93f53caf0c65c301be3bb55fa776d884881ff539526285b53935_prof);

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
