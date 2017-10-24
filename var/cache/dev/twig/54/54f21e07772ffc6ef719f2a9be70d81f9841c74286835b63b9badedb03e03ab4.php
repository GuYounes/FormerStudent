<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_410e41724140c9889ec1a616275e9ffd409180ba3a2013831ffe07ab0dbed1d0 extends Twig_Template
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
        $__internal_c06d5222a81ef02ab01c63daa3263cd9e324548b4bbaf8414fb57c6d70f381bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06d5222a81ef02ab01c63daa3263cd9e324548b4bbaf8414fb57c6d70f381bd->enter($__internal_c06d5222a81ef02ab01c63daa3263cd9e324548b4bbaf8414fb57c6d70f381bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_07d6d6d4be4552d7eb3ae3cd86d964e925b06ed772184d33e6d8918f6f658e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d6d6d4be4552d7eb3ae3cd86d964e925b06ed772184d33e6d8918f6f658e9c->enter($__internal_07d6d6d4be4552d7eb3ae3cd86d964e925b06ed772184d33e6d8918f6f658e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_c06d5222a81ef02ab01c63daa3263cd9e324548b4bbaf8414fb57c6d70f381bd->leave($__internal_c06d5222a81ef02ab01c63daa3263cd9e324548b4bbaf8414fb57c6d70f381bd_prof);

        
        $__internal_07d6d6d4be4552d7eb3ae3cd86d964e925b06ed772184d33e6d8918f6f658e9c->leave($__internal_07d6d6d4be4552d7eb3ae3cd86d964e925b06ed772184d33e6d8918f6f658e9c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
