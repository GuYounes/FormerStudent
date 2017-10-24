<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_1b1199f58ac22851523d7d896869f9adb8127ec9594da26b55c66adf26639d80 extends Twig_Template
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
        $__internal_671bb6f6d7b010aedf1fff2a15028490ce0afd6f155104cfcbf98507d344b668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671bb6f6d7b010aedf1fff2a15028490ce0afd6f155104cfcbf98507d344b668->enter($__internal_671bb6f6d7b010aedf1fff2a15028490ce0afd6f155104cfcbf98507d344b668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_2aa2a62f3f70664f819988222bab0ddd9b7b9093dc06ee652d591b3e7ea6313c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa2a62f3f70664f819988222bab0ddd9b7b9093dc06ee652d591b3e7ea6313c->enter($__internal_2aa2a62f3f70664f819988222bab0ddd9b7b9093dc06ee652d591b3e7ea6313c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_671bb6f6d7b010aedf1fff2a15028490ce0afd6f155104cfcbf98507d344b668->leave($__internal_671bb6f6d7b010aedf1fff2a15028490ce0afd6f155104cfcbf98507d344b668_prof);

        
        $__internal_2aa2a62f3f70664f819988222bab0ddd9b7b9093dc06ee652d591b3e7ea6313c->leave($__internal_2aa2a62f3f70664f819988222bab0ddd9b7b9093dc06ee652d591b3e7ea6313c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
