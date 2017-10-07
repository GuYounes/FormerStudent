<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a8d29b2b357fd8f7eceb6443a2d43fa91e7e5e372acf97ad91004854a2fa7416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47ea09111c002bb46cfb424974d7541db91607dc980f66865c07457672f1d62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ea09111c002bb46cfb424974d7541db91607dc980f66865c07457672f1d62f->enter($__internal_47ea09111c002bb46cfb424974d7541db91607dc980f66865c07457672f1d62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3f12948710b3e598327236f2227b18a2e33c277e7ae6931c576db0b3a2923f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f12948710b3e598327236f2227b18a2e33c277e7ae6931c576db0b3a2923f0b->enter($__internal_3f12948710b3e598327236f2227b18a2e33c277e7ae6931c576db0b3a2923f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47ea09111c002bb46cfb424974d7541db91607dc980f66865c07457672f1d62f->leave($__internal_47ea09111c002bb46cfb424974d7541db91607dc980f66865c07457672f1d62f_prof);

        
        $__internal_3f12948710b3e598327236f2227b18a2e33c277e7ae6931c576db0b3a2923f0b->leave($__internal_3f12948710b3e598327236f2227b18a2e33c277e7ae6931c576db0b3a2923f0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72d528da14ad897ffe4008ee45f35395991052ac71aab48b7e897471e9a53b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d528da14ad897ffe4008ee45f35395991052ac71aab48b7e897471e9a53b40->enter($__internal_72d528da14ad897ffe4008ee45f35395991052ac71aab48b7e897471e9a53b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_99098e8fc84188ee5737a57a2515bcdf91731a892707677173de75d3eec2e536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99098e8fc84188ee5737a57a2515bcdf91731a892707677173de75d3eec2e536->enter($__internal_99098e8fc84188ee5737a57a2515bcdf91731a892707677173de75d3eec2e536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_99098e8fc84188ee5737a57a2515bcdf91731a892707677173de75d3eec2e536->leave($__internal_99098e8fc84188ee5737a57a2515bcdf91731a892707677173de75d3eec2e536_prof);

        
        $__internal_72d528da14ad897ffe4008ee45f35395991052ac71aab48b7e897471e9a53b40->leave($__internal_72d528da14ad897ffe4008ee45f35395991052ac71aab48b7e897471e9a53b40_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
