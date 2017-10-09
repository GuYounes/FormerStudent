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
        $__internal_77be3cd1996406b55f8986775fb556feca3a652ad304512e8533bcc4246345f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77be3cd1996406b55f8986775fb556feca3a652ad304512e8533bcc4246345f7->enter($__internal_77be3cd1996406b55f8986775fb556feca3a652ad304512e8533bcc4246345f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_e07a14dc8b865c048b8251b7984ec014957db8f257bb3d249f414ac9a02dc9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07a14dc8b865c048b8251b7984ec014957db8f257bb3d249f414ac9a02dc9f6->enter($__internal_e07a14dc8b865c048b8251b7984ec014957db8f257bb3d249f414ac9a02dc9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_77be3cd1996406b55f8986775fb556feca3a652ad304512e8533bcc4246345f7->leave($__internal_77be3cd1996406b55f8986775fb556feca3a652ad304512e8533bcc4246345f7_prof);

        
        $__internal_e07a14dc8b865c048b8251b7984ec014957db8f257bb3d249f414ac9a02dc9f6->leave($__internal_e07a14dc8b865c048b8251b7984ec014957db8f257bb3d249f414ac9a02dc9f6_prof);

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
