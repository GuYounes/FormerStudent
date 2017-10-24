<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c5491b9d8e86b96802e3ea8195ba0bdd88904883b417f410c0773002e3597360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a1dad5feabaf7eeee625eb72630f5c741e6d79805661de8952c9eabe336a792c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1dad5feabaf7eeee625eb72630f5c741e6d79805661de8952c9eabe336a792c->enter($__internal_a1dad5feabaf7eeee625eb72630f5c741e6d79805661de8952c9eabe336a792c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_1679c56f75847e365fa3e78f289787a29c009d5115a9916c200959fcf96d1593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1679c56f75847e365fa3e78f289787a29c009d5115a9916c200959fcf96d1593->enter($__internal_1679c56f75847e365fa3e78f289787a29c009d5115a9916c200959fcf96d1593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1dad5feabaf7eeee625eb72630f5c741e6d79805661de8952c9eabe336a792c->leave($__internal_a1dad5feabaf7eeee625eb72630f5c741e6d79805661de8952c9eabe336a792c_prof);

        
        $__internal_1679c56f75847e365fa3e78f289787a29c009d5115a9916c200959fcf96d1593->leave($__internal_1679c56f75847e365fa3e78f289787a29c009d5115a9916c200959fcf96d1593_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aee4aa2c4e1521dd9c0b039a31d568608886e5b2ce840c37d2a9d417be477e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee4aa2c4e1521dd9c0b039a31d568608886e5b2ce840c37d2a9d417be477e71->enter($__internal_aee4aa2c4e1521dd9c0b039a31d568608886e5b2ce840c37d2a9d417be477e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_24e86f98b9887839e2675c20d4da757730ff8f38f19ce2cdcddf9542561622fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e86f98b9887839e2675c20d4da757730ff8f38f19ce2cdcddf9542561622fd->enter($__internal_24e86f98b9887839e2675c20d4da757730ff8f38f19ce2cdcddf9542561622fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24e86f98b9887839e2675c20d4da757730ff8f38f19ce2cdcddf9542561622fd->leave($__internal_24e86f98b9887839e2675c20d4da757730ff8f38f19ce2cdcddf9542561622fd_prof);

        
        $__internal_aee4aa2c4e1521dd9c0b039a31d568608886e5b2ce840c37d2a9d417be477e71->leave($__internal_aee4aa2c4e1521dd9c0b039a31d568608886e5b2ce840c37d2a9d417be477e71_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49d160ec7691a1d341029c544ebd61793ff416497ffc5ce292bd36e69aea5dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d160ec7691a1d341029c544ebd61793ff416497ffc5ce292bd36e69aea5dd5->enter($__internal_49d160ec7691a1d341029c544ebd61793ff416497ffc5ce292bd36e69aea5dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e7d0402747ae6e7d9121ef4f05901b38448c564295309139f41e18304e6a2480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d0402747ae6e7d9121ef4f05901b38448c564295309139f41e18304e6a2480->enter($__internal_e7d0402747ae6e7d9121ef4f05901b38448c564295309139f41e18304e6a2480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e7d0402747ae6e7d9121ef4f05901b38448c564295309139f41e18304e6a2480->leave($__internal_e7d0402747ae6e7d9121ef4f05901b38448c564295309139f41e18304e6a2480_prof);

        
        $__internal_49d160ec7691a1d341029c544ebd61793ff416497ffc5ce292bd36e69aea5dd5->leave($__internal_49d160ec7691a1d341029c544ebd61793ff416497ffc5ce292bd36e69aea5dd5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfa2cdf123fe8abcc2ce47ce611f5d2ed7f5c79cd8a369c8b8df2d4e41ec011b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa2cdf123fe8abcc2ce47ce611f5d2ed7f5c79cd8a369c8b8df2d4e41ec011b->enter($__internal_cfa2cdf123fe8abcc2ce47ce611f5d2ed7f5c79cd8a369c8b8df2d4e41ec011b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_090998de10142199571b964c44ab096e0cea1d324323c71d30b6c66162d06a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090998de10142199571b964c44ab096e0cea1d324323c71d30b6c66162d06a64->enter($__internal_090998de10142199571b964c44ab096e0cea1d324323c71d30b6c66162d06a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_090998de10142199571b964c44ab096e0cea1d324323c71d30b6c66162d06a64->leave($__internal_090998de10142199571b964c44ab096e0cea1d324323c71d30b6c66162d06a64_prof);

        
        $__internal_cfa2cdf123fe8abcc2ce47ce611f5d2ed7f5c79cd8a369c8b8df2d4e41ec011b->leave($__internal_cfa2cdf123fe8abcc2ce47ce611f5d2ed7f5c79cd8a369c8b8df2d4e41ec011b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
