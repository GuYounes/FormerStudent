<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3baa7dd8ef44c66368de3566c100e1a5f4e370d7b52cd43d9d26a1392f9504c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9202fdcb58d16ad8c05df7d3beaff348b26a5b651f9a35c6dfe919bf7c6b39bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9202fdcb58d16ad8c05df7d3beaff348b26a5b651f9a35c6dfe919bf7c6b39bf->enter($__internal_9202fdcb58d16ad8c05df7d3beaff348b26a5b651f9a35c6dfe919bf7c6b39bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_6c5ea805dd0199b0084d0e76371eafc7c8064f251e67fe8372b770986a553fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5ea805dd0199b0084d0e76371eafc7c8064f251e67fe8372b770986a553fbb->enter($__internal_6c5ea805dd0199b0084d0e76371eafc7c8064f251e67fe8372b770986a553fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9202fdcb58d16ad8c05df7d3beaff348b26a5b651f9a35c6dfe919bf7c6b39bf->leave($__internal_9202fdcb58d16ad8c05df7d3beaff348b26a5b651f9a35c6dfe919bf7c6b39bf_prof);

        
        $__internal_6c5ea805dd0199b0084d0e76371eafc7c8064f251e67fe8372b770986a553fbb->leave($__internal_6c5ea805dd0199b0084d0e76371eafc7c8064f251e67fe8372b770986a553fbb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_831f3aaca5f59c42a414a2338dc66b2f139a65d636896fe8cd71fb108c88a304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831f3aaca5f59c42a414a2338dc66b2f139a65d636896fe8cd71fb108c88a304->enter($__internal_831f3aaca5f59c42a414a2338dc66b2f139a65d636896fe8cd71fb108c88a304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2d593763c40c9a4cd7aced215619df7b76f0db374930de169dbd25e468f73820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d593763c40c9a4cd7aced215619df7b76f0db374930de169dbd25e468f73820->enter($__internal_2d593763c40c9a4cd7aced215619df7b76f0db374930de169dbd25e468f73820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2d593763c40c9a4cd7aced215619df7b76f0db374930de169dbd25e468f73820->leave($__internal_2d593763c40c9a4cd7aced215619df7b76f0db374930de169dbd25e468f73820_prof);

        
        $__internal_831f3aaca5f59c42a414a2338dc66b2f139a65d636896fe8cd71fb108c88a304->leave($__internal_831f3aaca5f59c42a414a2338dc66b2f139a65d636896fe8cd71fb108c88a304_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39b46ca2c3f0ebfb08978f71af7d99bfae1e3a7fc4388211534533683ff1f38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b46ca2c3f0ebfb08978f71af7d99bfae1e3a7fc4388211534533683ff1f38c->enter($__internal_39b46ca2c3f0ebfb08978f71af7d99bfae1e3a7fc4388211534533683ff1f38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7afaa70c1c0a8f12018f0963c5946366b6dc519ee4f0d6bc75b43a60cdeccc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afaa70c1c0a8f12018f0963c5946366b6dc519ee4f0d6bc75b43a60cdeccc61->enter($__internal_7afaa70c1c0a8f12018f0963c5946366b6dc519ee4f0d6bc75b43a60cdeccc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7afaa70c1c0a8f12018f0963c5946366b6dc519ee4f0d6bc75b43a60cdeccc61->leave($__internal_7afaa70c1c0a8f12018f0963c5946366b6dc519ee4f0d6bc75b43a60cdeccc61_prof);

        
        $__internal_39b46ca2c3f0ebfb08978f71af7d99bfae1e3a7fc4388211534533683ff1f38c->leave($__internal_39b46ca2c3f0ebfb08978f71af7d99bfae1e3a7fc4388211534533683ff1f38c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8ea601feccdb2e1dde70b71df50ab08f701f3686f5125c332c13999064dd52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ea601feccdb2e1dde70b71df50ab08f701f3686f5125c332c13999064dd52f->enter($__internal_e8ea601feccdb2e1dde70b71df50ab08f701f3686f5125c332c13999064dd52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7dd37d7991042698501741470aafb55c8a8743c2636322ecdfd426c08b9730a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7dd37d7991042698501741470aafb55c8a8743c2636322ecdfd426c08b9730a->enter($__internal_c7dd37d7991042698501741470aafb55c8a8743c2636322ecdfd426c08b9730a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_c7dd37d7991042698501741470aafb55c8a8743c2636322ecdfd426c08b9730a->leave($__internal_c7dd37d7991042698501741470aafb55c8a8743c2636322ecdfd426c08b9730a_prof);

        
        $__internal_e8ea601feccdb2e1dde70b71df50ab08f701f3686f5125c332c13999064dd52f->leave($__internal_e8ea601feccdb2e1dde70b71df50ab08f701f3686f5125c332c13999064dd52f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
