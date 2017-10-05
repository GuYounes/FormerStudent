<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_ae3443aaf13eb867fef62259a04a6875bd9189a25b0d28d533e64c547c49962b extends Twig_Template
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
        $__internal_84aed3611134febd5727ba9715367ef538e79d88879160db3d43d4db8967378e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84aed3611134febd5727ba9715367ef538e79d88879160db3d43d4db8967378e->enter($__internal_84aed3611134febd5727ba9715367ef538e79d88879160db3d43d4db8967378e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_8ad52827d38070ba320c134a62cbd9408d3233a5a6047698cc7ecfb621519509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad52827d38070ba320c134a62cbd9408d3233a5a6047698cc7ecfb621519509->enter($__internal_8ad52827d38070ba320c134a62cbd9408d3233a5a6047698cc7ecfb621519509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_84aed3611134febd5727ba9715367ef538e79d88879160db3d43d4db8967378e->leave($__internal_84aed3611134febd5727ba9715367ef538e79d88879160db3d43d4db8967378e_prof);

        
        $__internal_8ad52827d38070ba320c134a62cbd9408d3233a5a6047698cc7ecfb621519509->leave($__internal_8ad52827d38070ba320c134a62cbd9408d3233a5a6047698cc7ecfb621519509_prof);

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
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
