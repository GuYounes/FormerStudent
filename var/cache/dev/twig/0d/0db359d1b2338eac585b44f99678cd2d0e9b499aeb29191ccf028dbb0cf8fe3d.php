<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_6818e9a4db204ff3a262331382363de718263fe566c97f117012f5a4d37049e2 extends Twig_Template
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
        $__internal_acf2cb0d37f9133f8a1ccdea63c87408390055cf6a5711bc90badb19325a488b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf2cb0d37f9133f8a1ccdea63c87408390055cf6a5711bc90badb19325a488b->enter($__internal_acf2cb0d37f9133f8a1ccdea63c87408390055cf6a5711bc90badb19325a488b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_c25c43840b400dabe5e63dae51ce2cf8c73c432215b35810becd6b8a23209c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25c43840b400dabe5e63dae51ce2cf8c73c432215b35810becd6b8a23209c39->enter($__internal_c25c43840b400dabe5e63dae51ce2cf8c73c432215b35810becd6b8a23209c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        $context["channel_is_defined"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 1, $this->getSourceContext()); })())), "channel", array(), "any", true, true);
        // line 2
        echo "
<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            ";
        // line 7
        if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new Twig_Error_Runtime('Variable "channel_is_defined" does not exist.', 7, $this->getSourceContext()); })())) {
            echo "<th>Channel</th>";
        }
        // line 8
        echo "            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 14
            echo "        <tr class=\"status-";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priority", array()) >= 400)) ? ("error") : ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priority", array()) >= 300)) ? ("warning") : ("normal"))));
            echo "\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priorityName", array()), "html", null, true);
            echo "</span>
                <span class=\"text-muted newline\">";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
            echo "</span>
            </td>
            ";
            // line 19
            if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new Twig_Error_Runtime('Variable "channel_is_defined" does not exist.', 19, $this->getSourceContext()); })())) {
                // line 20
                echo "                <td class=\"text-small text-bold nowrap\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "channel", array()), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 24
            echo "            <td>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage(twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "message", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "context", array()));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tbody>
</table>
";
        
        $__internal_acf2cb0d37f9133f8a1ccdea63c87408390055cf6a5711bc90badb19325a488b->leave($__internal_acf2cb0d37f9133f8a1ccdea63c87408390055cf6a5711bc90badb19325a488b_prof);

        
        $__internal_c25c43840b400dabe5e63dae51ce2cf8c73c432215b35810becd6b8a23209c39->leave($__internal_c25c43840b400dabe5e63dae51ce2cf8c73c432215b35810becd6b8a23209c39_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  75 => 24,  69 => 21,  66 => 20,  64 => 19,  59 => 17,  55 => 16,  49 => 14,  45 => 13,  38 => 8,  34 => 7,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set channel_is_defined = (logs|first).channel is defined %}

<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            {% if channel_is_defined %}<th>Channel</th>{% endif %}
            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    {% for log in logs %}
        <tr class=\"status-{{ log.priority >= 400 ? 'error' : log.priority >= 300 ? 'warning' : 'normal' }}\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
            </td>
            {% if channel_is_defined %}
                <td class=\"text-small text-bold nowrap\">
                    {{ log.channel }}
                </td>
            {% endif %}
            <td>{{ log.message|format_log_message(log.context) }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@Twig/Exception/logs.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\logs.html.twig");
    }
}
