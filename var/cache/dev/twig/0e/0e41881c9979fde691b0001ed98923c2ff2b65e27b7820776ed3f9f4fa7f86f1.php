<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_5983ff1a1364f1d09ebe9412563f88e743caff42b71f876158200747a88a4276 extends Twig_Template
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
        $__internal_5861cdc15f9959afdc0ba85599a72821bacae3c446247aa4f7be8fc59fbaeacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5861cdc15f9959afdc0ba85599a72821bacae3c446247aa4f7be8fc59fbaeacd->enter($__internal_5861cdc15f9959afdc0ba85599a72821bacae3c446247aa4f7be8fc59fbaeacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_1c7929f7caf629396174c8da02c77c59f10dd77b251a29eccb82276c68b73fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7929f7caf629396174c8da02c77c59f10dd77b251a29eccb82276c68b73fe6->enter($__internal_1c7929f7caf629396174c8da02c77c59f10dd77b251a29eccb82276c68b73fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_5861cdc15f9959afdc0ba85599a72821bacae3c446247aa4f7be8fc59fbaeacd->leave($__internal_5861cdc15f9959afdc0ba85599a72821bacae3c446247aa4f7be8fc59fbaeacd_prof);

        
        $__internal_1c7929f7caf629396174c8da02c77c59f10dd77b251a29eccb82276c68b73fe6->leave($__internal_1c7929f7caf629396174c8da02c77c59f10dd77b251a29eccb82276c68b73fe6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
