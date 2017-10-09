<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_585bffdfd2e68c7bc6b83321fa10fcd00fc1153d073b259227fe9f0246588d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_8825713e8abc78049bfe1e22c699d778081844b561853a8238cf116e14da786b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8825713e8abc78049bfe1e22c699d778081844b561853a8238cf116e14da786b->enter($__internal_8825713e8abc78049bfe1e22c699d778081844b561853a8238cf116e14da786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_0ad7e7d034fbab9df9791d79b7e40de2af23c03a562e3b535951d57266cebaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad7e7d034fbab9df9791d79b7e40de2af23c03a562e3b535951d57266cebaa2->enter($__internal_0ad7e7d034fbab9df9791d79b7e40de2af23c03a562e3b535951d57266cebaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8825713e8abc78049bfe1e22c699d778081844b561853a8238cf116e14da786b->leave($__internal_8825713e8abc78049bfe1e22c699d778081844b561853a8238cf116e14da786b_prof);

        
        $__internal_0ad7e7d034fbab9df9791d79b7e40de2af23c03a562e3b535951d57266cebaa2->leave($__internal_0ad7e7d034fbab9df9791d79b7e40de2af23c03a562e3b535951d57266cebaa2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c0fe2af5171207d963d5380a9364d27ece5a676093fae64e4c10c95de4582c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0fe2af5171207d963d5380a9364d27ece5a676093fae64e4c10c95de4582c9->enter($__internal_3c0fe2af5171207d963d5380a9364d27ece5a676093fae64e4c10c95de4582c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf8bd4e16cb1eb908c0acbaf68ba61ead36c987e69fd9a29f31998e1bdb921f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8bd4e16cb1eb908c0acbaf68ba61ead36c987e69fd9a29f31998e1bdb921f3->enter($__internal_bf8bd4e16cb1eb908c0acbaf68ba61ead36c987e69fd9a29f31998e1bdb921f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bf8bd4e16cb1eb908c0acbaf68ba61ead36c987e69fd9a29f31998e1bdb921f3->leave($__internal_bf8bd4e16cb1eb908c0acbaf68ba61ead36c987e69fd9a29f31998e1bdb921f3_prof);

        
        $__internal_3c0fe2af5171207d963d5380a9364d27ece5a676093fae64e4c10c95de4582c9->leave($__internal_3c0fe2af5171207d963d5380a9364d27ece5a676093fae64e4c10c95de4582c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
