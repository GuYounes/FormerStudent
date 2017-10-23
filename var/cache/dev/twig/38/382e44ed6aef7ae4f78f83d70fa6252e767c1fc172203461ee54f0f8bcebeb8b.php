<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7a49909cb9fe7302222f3f9a26ba51002012215a5ccb3db536dd82d2867ecd87 extends Twig_Template
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
        $__internal_6c441bc1455dac7b414e57451aa6b0d2976c3c23ffad0af9b728ba5f955267e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c441bc1455dac7b414e57451aa6b0d2976c3c23ffad0af9b728ba5f955267e2->enter($__internal_6c441bc1455dac7b414e57451aa6b0d2976c3c23ffad0af9b728ba5f955267e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_051c1e9ac61f7b8f720afee0dd03e0f1a26be1ed7561247a56aad543f591fa5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051c1e9ac61f7b8f720afee0dd03e0f1a26be1ed7561247a56aad543f591fa5a->enter($__internal_051c1e9ac61f7b8f720afee0dd03e0f1a26be1ed7561247a56aad543f591fa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_6c441bc1455dac7b414e57451aa6b0d2976c3c23ffad0af9b728ba5f955267e2->leave($__internal_6c441bc1455dac7b414e57451aa6b0d2976c3c23ffad0af9b728ba5f955267e2_prof);

        
        $__internal_051c1e9ac61f7b8f720afee0dd03e0f1a26be1ed7561247a56aad543f591fa5a->leave($__internal_051c1e9ac61f7b8f720afee0dd03e0f1a26be1ed7561247a56aad543f591fa5a_prof);

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
