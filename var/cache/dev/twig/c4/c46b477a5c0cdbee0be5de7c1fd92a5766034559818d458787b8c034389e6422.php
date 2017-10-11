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
        $__internal_8aa09386b281e0cfb190e59c31b586b70fb3c7b5182dee80aeedca2c68c93596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa09386b281e0cfb190e59c31b586b70fb3c7b5182dee80aeedca2c68c93596->enter($__internal_8aa09386b281e0cfb190e59c31b586b70fb3c7b5182dee80aeedca2c68c93596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_7f24f8fd23cb80344a51e4f069ed3ea1edbe036f6a0e23db07f2b1575dbe034b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f24f8fd23cb80344a51e4f069ed3ea1edbe036f6a0e23db07f2b1575dbe034b->enter($__internal_7f24f8fd23cb80344a51e4f069ed3ea1edbe036f6a0e23db07f2b1575dbe034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_8aa09386b281e0cfb190e59c31b586b70fb3c7b5182dee80aeedca2c68c93596->leave($__internal_8aa09386b281e0cfb190e59c31b586b70fb3c7b5182dee80aeedca2c68c93596_prof);

        
        $__internal_7f24f8fd23cb80344a51e4f069ed3ea1edbe036f6a0e23db07f2b1575dbe034b->leave($__internal_7f24f8fd23cb80344a51e4f069ed3ea1edbe036f6a0e23db07f2b1575dbe034b_prof);

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
