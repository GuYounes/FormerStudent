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
        $__internal_737168362d1833e27e08a5be8de3865e27eb06eeda8114a6e96bd7470dc7e17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737168362d1833e27e08a5be8de3865e27eb06eeda8114a6e96bd7470dc7e17e->enter($__internal_737168362d1833e27e08a5be8de3865e27eb06eeda8114a6e96bd7470dc7e17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_eccf8a784777cafc41d97ed2213204b7064df9f02e56619e895d3415391f30f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccf8a784777cafc41d97ed2213204b7064df9f02e56619e895d3415391f30f1->enter($__internal_eccf8a784777cafc41d97ed2213204b7064df9f02e56619e895d3415391f30f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737168362d1833e27e08a5be8de3865e27eb06eeda8114a6e96bd7470dc7e17e->leave($__internal_737168362d1833e27e08a5be8de3865e27eb06eeda8114a6e96bd7470dc7e17e_prof);

        
        $__internal_eccf8a784777cafc41d97ed2213204b7064df9f02e56619e895d3415391f30f1->leave($__internal_eccf8a784777cafc41d97ed2213204b7064df9f02e56619e895d3415391f30f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01dbb8c3473540151687c374505707342a4096fd80ed6afd72313deee6de2cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01dbb8c3473540151687c374505707342a4096fd80ed6afd72313deee6de2cfc->enter($__internal_01dbb8c3473540151687c374505707342a4096fd80ed6afd72313deee6de2cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c2718fa29efb372add4f564ae34e5eac3782ee206119c49e2388149f22b85f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2718fa29efb372add4f564ae34e5eac3782ee206119c49e2388149f22b85f6->enter($__internal_7c2718fa29efb372add4f564ae34e5eac3782ee206119c49e2388149f22b85f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7c2718fa29efb372add4f564ae34e5eac3782ee206119c49e2388149f22b85f6->leave($__internal_7c2718fa29efb372add4f564ae34e5eac3782ee206119c49e2388149f22b85f6_prof);

        
        $__internal_01dbb8c3473540151687c374505707342a4096fd80ed6afd72313deee6de2cfc->leave($__internal_01dbb8c3473540151687c374505707342a4096fd80ed6afd72313deee6de2cfc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0da876de46654a97f88468f220785d07b9dc9f1aa625878248530a8f7a6f287f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da876de46654a97f88468f220785d07b9dc9f1aa625878248530a8f7a6f287f->enter($__internal_0da876de46654a97f88468f220785d07b9dc9f1aa625878248530a8f7a6f287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_49ca91e8168524e31dbf9d9bf912388b3398a6ff9dc1d9497576337111d68a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ca91e8168524e31dbf9d9bf912388b3398a6ff9dc1d9497576337111d68a46->enter($__internal_49ca91e8168524e31dbf9d9bf912388b3398a6ff9dc1d9497576337111d68a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_49ca91e8168524e31dbf9d9bf912388b3398a6ff9dc1d9497576337111d68a46->leave($__internal_49ca91e8168524e31dbf9d9bf912388b3398a6ff9dc1d9497576337111d68a46_prof);

        
        $__internal_0da876de46654a97f88468f220785d07b9dc9f1aa625878248530a8f7a6f287f->leave($__internal_0da876de46654a97f88468f220785d07b9dc9f1aa625878248530a8f7a6f287f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae8f3f3a106baddfbf87fce73b6c1ed8720f48399a8ab8099386507a3fe5ea4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8f3f3a106baddfbf87fce73b6c1ed8720f48399a8ab8099386507a3fe5ea4a->enter($__internal_ae8f3f3a106baddfbf87fce73b6c1ed8720f48399a8ab8099386507a3fe5ea4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_960168589e0435ae351add06817da35e1f76ec2a04fece5bfe04b95e164cd3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960168589e0435ae351add06817da35e1f76ec2a04fece5bfe04b95e164cd3d2->enter($__internal_960168589e0435ae351add06817da35e1f76ec2a04fece5bfe04b95e164cd3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_960168589e0435ae351add06817da35e1f76ec2a04fece5bfe04b95e164cd3d2->leave($__internal_960168589e0435ae351add06817da35e1f76ec2a04fece5bfe04b95e164cd3d2_prof);

        
        $__internal_ae8f3f3a106baddfbf87fce73b6c1ed8720f48399a8ab8099386507a3fe5ea4a->leave($__internal_ae8f3f3a106baddfbf87fce73b6c1ed8720f48399a8ab8099386507a3fe5ea4a_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
