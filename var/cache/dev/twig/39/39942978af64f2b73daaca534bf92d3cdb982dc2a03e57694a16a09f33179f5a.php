<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c3c89c8a0f9f298765b9bc44803c212fdcc9797b05215efc851a7e28423c7d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_b7b34a89dae4ebf42c695850ab2e4d79c8dd3931aeb0e958f433057f8683c5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b34a89dae4ebf42c695850ab2e4d79c8dd3931aeb0e958f433057f8683c5af->enter($__internal_b7b34a89dae4ebf42c695850ab2e4d79c8dd3931aeb0e958f433057f8683c5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d63ff55306b4ecf07927a21985beb489092d2467312f11c62551f523682bce9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63ff55306b4ecf07927a21985beb489092d2467312f11c62551f523682bce9a->enter($__internal_d63ff55306b4ecf07927a21985beb489092d2467312f11c62551f523682bce9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b34a89dae4ebf42c695850ab2e4d79c8dd3931aeb0e958f433057f8683c5af->leave($__internal_b7b34a89dae4ebf42c695850ab2e4d79c8dd3931aeb0e958f433057f8683c5af_prof);

        
        $__internal_d63ff55306b4ecf07927a21985beb489092d2467312f11c62551f523682bce9a->leave($__internal_d63ff55306b4ecf07927a21985beb489092d2467312f11c62551f523682bce9a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90c1ac5af0b6f14afecc4711b313fd48ec84600b98c68f0e45ba8103f7c1e695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c1ac5af0b6f14afecc4711b313fd48ec84600b98c68f0e45ba8103f7c1e695->enter($__internal_90c1ac5af0b6f14afecc4711b313fd48ec84600b98c68f0e45ba8103f7c1e695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b9af2aeaae94be1fc0f5296c355f0d4604f8ce266564e27721110c71e18d3135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9af2aeaae94be1fc0f5296c355f0d4604f8ce266564e27721110c71e18d3135->enter($__internal_b9af2aeaae94be1fc0f5296c355f0d4604f8ce266564e27721110c71e18d3135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b9af2aeaae94be1fc0f5296c355f0d4604f8ce266564e27721110c71e18d3135->leave($__internal_b9af2aeaae94be1fc0f5296c355f0d4604f8ce266564e27721110c71e18d3135_prof);

        
        $__internal_90c1ac5af0b6f14afecc4711b313fd48ec84600b98c68f0e45ba8103f7c1e695->leave($__internal_90c1ac5af0b6f14afecc4711b313fd48ec84600b98c68f0e45ba8103f7c1e695_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e3129065b49a8a6439e40ef59b9f0128e8f3943c91cb377ed9b58807c47403b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3129065b49a8a6439e40ef59b9f0128e8f3943c91cb377ed9b58807c47403b->enter($__internal_6e3129065b49a8a6439e40ef59b9f0128e8f3943c91cb377ed9b58807c47403b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_05bd53ca943da384e1c0848a245dabfcd3439c885973bec79432857095c65626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bd53ca943da384e1c0848a245dabfcd3439c885973bec79432857095c65626->enter($__internal_05bd53ca943da384e1c0848a245dabfcd3439c885973bec79432857095c65626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_05bd53ca943da384e1c0848a245dabfcd3439c885973bec79432857095c65626->leave($__internal_05bd53ca943da384e1c0848a245dabfcd3439c885973bec79432857095c65626_prof);

        
        $__internal_6e3129065b49a8a6439e40ef59b9f0128e8f3943c91cb377ed9b58807c47403b->leave($__internal_6e3129065b49a8a6439e40ef59b9f0128e8f3943c91cb377ed9b58807c47403b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e81b394642f8980981309c35a0a0fc857e4172322f44c8cd1615934cd2588958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81b394642f8980981309c35a0a0fc857e4172322f44c8cd1615934cd2588958->enter($__internal_e81b394642f8980981309c35a0a0fc857e4172322f44c8cd1615934cd2588958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de2953f547a899525965528c4e1ee42932b65c743b30f11d6cc3519a1f245064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2953f547a899525965528c4e1ee42932b65c743b30f11d6cc3519a1f245064->enter($__internal_de2953f547a899525965528c4e1ee42932b65c743b30f11d6cc3519a1f245064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_de2953f547a899525965528c4e1ee42932b65c743b30f11d6cc3519a1f245064->leave($__internal_de2953f547a899525965528c4e1ee42932b65c743b30f11d6cc3519a1f245064_prof);

        
        $__internal_e81b394642f8980981309c35a0a0fc857e4172322f44c8cd1615934cd2588958->leave($__internal_e81b394642f8980981309c35a0a0fc857e4172322f44c8cd1615934cd2588958_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
