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
        $__internal_cee0f5abf61bb7bed6df2379ad383df32dba80343409e35b97fd67124d9580d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee0f5abf61bb7bed6df2379ad383df32dba80343409e35b97fd67124d9580d0->enter($__internal_cee0f5abf61bb7bed6df2379ad383df32dba80343409e35b97fd67124d9580d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_c101d409344df27d9f7b279ef98f7594624a8922b09e91fafd583d971420fb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c101d409344df27d9f7b279ef98f7594624a8922b09e91fafd583d971420fb8c->enter($__internal_c101d409344df27d9f7b279ef98f7594624a8922b09e91fafd583d971420fb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_cee0f5abf61bb7bed6df2379ad383df32dba80343409e35b97fd67124d9580d0->leave($__internal_cee0f5abf61bb7bed6df2379ad383df32dba80343409e35b97fd67124d9580d0_prof);

        
        $__internal_c101d409344df27d9f7b279ef98f7594624a8922b09e91fafd583d971420fb8c->leave($__internal_c101d409344df27d9f7b279ef98f7594624a8922b09e91fafd583d971420fb8c_prof);

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
