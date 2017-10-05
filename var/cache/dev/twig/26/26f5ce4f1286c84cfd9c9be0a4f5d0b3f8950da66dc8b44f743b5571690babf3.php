<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e3167912f7055e62afe30df9677915754e8b4da92950620948dd2b7f2c859cf7 extends Twig_Template
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
        $__internal_ce1c9ae50dd854ed4cfbe8cc5b41c84c6e3d170c88c57e4848de9e927706e3a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1c9ae50dd854ed4cfbe8cc5b41c84c6e3d170c88c57e4848de9e927706e3a2->enter($__internal_ce1c9ae50dd854ed4cfbe8cc5b41c84c6e3d170c88c57e4848de9e927706e3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_09f3af1aada34d9be817a9795f64dcc87226566df1c728d90ec0bdd29b0b27e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f3af1aada34d9be817a9795f64dcc87226566df1c728d90ec0bdd29b0b27e1->enter($__internal_09f3af1aada34d9be817a9795f64dcc87226566df1c728d90ec0bdd29b0b27e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ce1c9ae50dd854ed4cfbe8cc5b41c84c6e3d170c88c57e4848de9e927706e3a2->leave($__internal_ce1c9ae50dd854ed4cfbe8cc5b41c84c6e3d170c88c57e4848de9e927706e3a2_prof);

        
        $__internal_09f3af1aada34d9be817a9795f64dcc87226566df1c728d90ec0bdd29b0b27e1->leave($__internal_09f3af1aada34d9be817a9795f64dcc87226566df1c728d90ec0bdd29b0b27e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
