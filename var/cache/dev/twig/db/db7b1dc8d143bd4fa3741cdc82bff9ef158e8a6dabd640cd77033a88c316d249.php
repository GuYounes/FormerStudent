<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_adb0c34337436df6cbb6241411cd2cd036b25c8cd981a7b1e92ab8296ea81388 extends Twig_Template
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
        $__internal_8a06f9613f3420be2476b4ada12dce693ab24065e5bf793d86b9b2f47fdef9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a06f9613f3420be2476b4ada12dce693ab24065e5bf793d86b9b2f47fdef9de->enter($__internal_8a06f9613f3420be2476b4ada12dce693ab24065e5bf793d86b9b2f47fdef9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a7b0e88828f99635f12a88b9348cdf985d210b5ec7c152b1ad80aa202049cdb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b0e88828f99635f12a88b9348cdf985d210b5ec7c152b1ad80aa202049cdb4->enter($__internal_a7b0e88828f99635f12a88b9348cdf985d210b5ec7c152b1ad80aa202049cdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_8a06f9613f3420be2476b4ada12dce693ab24065e5bf793d86b9b2f47fdef9de->leave($__internal_8a06f9613f3420be2476b4ada12dce693ab24065e5bf793d86b9b2f47fdef9de_prof);

        
        $__internal_a7b0e88828f99635f12a88b9348cdf985d210b5ec7c152b1ad80aa202049cdb4->leave($__internal_a7b0e88828f99635f12a88b9348cdf985d210b5ec7c152b1ad80aa202049cdb4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
