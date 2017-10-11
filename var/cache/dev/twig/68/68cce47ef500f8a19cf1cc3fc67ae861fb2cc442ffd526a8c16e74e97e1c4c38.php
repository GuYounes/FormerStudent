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
        $__internal_5f5feb4cffe871e779f79800b37fe052da71d09d8711fc0c8bc5af5ca56a8fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5feb4cffe871e779f79800b37fe052da71d09d8711fc0c8bc5af5ca56a8fe3->enter($__internal_5f5feb4cffe871e779f79800b37fe052da71d09d8711fc0c8bc5af5ca56a8fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_20b8c80dcb3611802af509881c2d2ac9d0163ccb269e7c17587802f3d64c90ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b8c80dcb3611802af509881c2d2ac9d0163ccb269e7c17587802f3d64c90ae->enter($__internal_20b8c80dcb3611802af509881c2d2ac9d0163ccb269e7c17587802f3d64c90ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_5f5feb4cffe871e779f79800b37fe052da71d09d8711fc0c8bc5af5ca56a8fe3->leave($__internal_5f5feb4cffe871e779f79800b37fe052da71d09d8711fc0c8bc5af5ca56a8fe3_prof);

        
        $__internal_20b8c80dcb3611802af509881c2d2ac9d0163ccb269e7c17587802f3d64c90ae->leave($__internal_20b8c80dcb3611802af509881c2d2ac9d0163ccb269e7c17587802f3d64c90ae_prof);

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
