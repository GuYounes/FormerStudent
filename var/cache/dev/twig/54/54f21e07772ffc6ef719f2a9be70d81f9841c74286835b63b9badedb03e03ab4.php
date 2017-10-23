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
        $__internal_f85b5370f32f580eb880e4ad00ae0ab3ba6483fcdf647f26647174b751e46741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85b5370f32f580eb880e4ad00ae0ab3ba6483fcdf647f26647174b751e46741->enter($__internal_f85b5370f32f580eb880e4ad00ae0ab3ba6483fcdf647f26647174b751e46741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_b0af249c77c6e89f8fdd08b297917ba015bdb6e705275c0e5598ba5eae52606d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0af249c77c6e89f8fdd08b297917ba015bdb6e705275c0e5598ba5eae52606d->enter($__internal_b0af249c77c6e89f8fdd08b297917ba015bdb6e705275c0e5598ba5eae52606d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_f85b5370f32f580eb880e4ad00ae0ab3ba6483fcdf647f26647174b751e46741->leave($__internal_f85b5370f32f580eb880e4ad00ae0ab3ba6483fcdf647f26647174b751e46741_prof);

        
        $__internal_b0af249c77c6e89f8fdd08b297917ba015bdb6e705275c0e5598ba5eae52606d->leave($__internal_b0af249c77c6e89f8fdd08b297917ba015bdb6e705275c0e5598ba5eae52606d_prof);

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
