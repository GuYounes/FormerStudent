<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_0ff31e265b000e6248a340ee0afd87d890b8b629ecc4d1083b7fecee4bdf8700 extends Twig_Template
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
        $__internal_148006f09c08ed71216b1dc7d2f2c279ed71c293a8952cf8741ccedd8cf727b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148006f09c08ed71216b1dc7d2f2c279ed71c293a8952cf8741ccedd8cf727b5->enter($__internal_148006f09c08ed71216b1dc7d2f2c279ed71c293a8952cf8741ccedd8cf727b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_2e1e0aaf9ec5e58ee517fa7447c3a6139268c59bf8864ad7a641df9080fa572f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1e0aaf9ec5e58ee517fa7447c3a6139268c59bf8864ad7a641df9080fa572f->enter($__internal_2e1e0aaf9ec5e58ee517fa7447c3a6139268c59bf8864ad7a641df9080fa572f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_148006f09c08ed71216b1dc7d2f2c279ed71c293a8952cf8741ccedd8cf727b5->leave($__internal_148006f09c08ed71216b1dc7d2f2c279ed71c293a8952cf8741ccedd8cf727b5_prof);

        
        $__internal_2e1e0aaf9ec5e58ee517fa7447c3a6139268c59bf8864ad7a641df9080fa572f->leave($__internal_2e1e0aaf9ec5e58ee517fa7447c3a6139268c59bf8864ad7a641df9080fa572f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
